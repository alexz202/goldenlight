<?php
use Phalcon\Events\Event,
    Phalcon\Mvc\User\Plugin,
    Phalcon\Mvc\Dispatcher,
    Phalcon\Acl;

/**
 * Security
 *
 * This is the security plugin which controls that users only have access to the modules they're assigned to
 */
class Security extends Plugin
{

    public function __construct($dependencyInjector)
    {
        $this->_dependencyInjector = $dependencyInjector;
    }

    public function getAcl()
    {
        if (!isset($this->persistent->acl)) {


            $acl = new Phalcon\Acl\Adapter\Memory();

            $acl->setDefaultAction(Phalcon\Acl::DENY);

            //Register roles
            $roles = array(
                'Root' => new Phalcon\Acl\Role('Root'),
                'Admin' => new Phalcon\Acl\Role('Admin'),
                'Common' => new Phalcon\Acl\Role('Common'),
                'Guests' => new Phalcon\Acl\Role('Guests'),
                'Foreignset' => new Phalcon\Acl\Role('Foreignset'),
                'Foreignget' => new Phalcon\Acl\Role('Foreignget'),
            );
            foreach ($roles as $role) {
                $acl->addRole($role);
            }

            //Private area resources
            $privateResources = array(
                'user' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
                'logger' => array('index', 'search'),
                'index' => array('index'),
                'blacklist' => array('index', 'blmanage', 'ranksearch', 'loginsearch', 'hlogin'),
                'player' => array('index', 'search'),
                'item' => array('index', 'additems', 'adadditems','chgRoleMount','indexRoleMount'),
                'topup' => array('index', 'search'),
                'feepost' => array('getfee', 'setfee'),
                'sendmail'=>array('index','send'),
                'match'=>array('matchlist'),
                'rank'=>array('ranklist','index'),
            );
            //Grant resources to role users
            $privateACL = array(
                'Root' => array(
                    'user' => array('index', 'search', 'new', 'edit', 'save', 'create', 'delete'),
                    'logger' => array('index', 'search'),
                    'index' => array('index'),
                    'blacklist' => array('index', 'blmanage', 'ranksearch', 'loginsearch', 'hlogin'),
                    'player' => array('index', 'search'),
                    'item' => array('index', 'additems','chgRoleMount','indexRoleMount'),
                    'topup' => array('index', 'search'),
                    'feepost' => array('getfee', 'setfee'),
                    'sendmail'=>array('index','send'),
                    'match'=>array('matchlist'),
                    'rank'=>array('ranklist','index'),
                ),
                'Admin' => array(
                    'logger' => array('index', 'search'),
                    'index' => array('index'),
                    'blacklist' => array('index', 'blmanage', 'ranksearch', 'loginsearch'),
                    'player' => array('index', 'search'),
                    'item' => array('index', 'additems','chgRoleMount','indexRoleMount'),
                    'topup' => array('index', 'search'),
                    'sendmail'=>array('index','send'),
                    'match'=>array('matchlist'),
                    'rank'=>array('ranklist','index'),
                ),
                'Common' => array(
                    'index' => array('index'),
                    'player' => array('index', 'search'),
                    'topup' => array('index', 'search'),
                    'blacklist' => array('index', 'ranksearch', 'loginsearch'),

                ),
                'Foreignset' => array(
                    'feepost' => array('getfee', 'setfee'),
                ),
                'Foreignget' => array(
                    'feepost' => array('getfee'),
                ),
            );

            foreach ($privateResources as $resource => $actions) {
                $acl->addResource(new Phalcon\Acl\Resource($resource), $actions);
            }
            //Public area resources
            $publicResources = array(
                'session' => array('index', 'start', 'end', 'loginout'),
            );
            foreach ($publicResources as $resource => $actions) {
                $acl->addResource(new Phalcon\Acl\Resource($resource), $actions);
            }
            //Grant access to public areas to both users and guests
            foreach ($roles as $role) {
                foreach ($publicResources as $resource => $actions) {
                    $acl->allow($role->getName(), $resource, $actions);
                }
            }
            //Grant acess to private area to role Users
            foreach ($privateACL as $roleUser => $privateResources) {
                foreach ($privateResources as $resource => $actions) {
                    foreach ($actions as $action) {
                        $acl->allow($roleUser, $resource, $action);
                    }
                }
            }
            //The acl is stored in session, APC would be useful here too
            $this->persistent->acl = $acl;
        }
        return $this->persistent->acl;
    }

    /**
     * This action is executed before execute any action in the application
     */
    public function beforeDispatch(Event $event, Dispatcher $dispatcher)
    {
        $auth = $this->session->get('auth');

        if (!$auth) {
            $role = 'Guests';
        } else {
            $role = $auth['role'];
        }
       // die();
        $controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();
        $acl = $this->getAcl();
        $allowed = $acl->isAllowed($role, $controller, $action);
        //die();
        if ($allowed != Acl::ALLOW) {
            $this->flash->error("You don't have access to this module");
            $dispatcher->forward(
                array(
                    'controller' => 'session',
                    'action' => 'index'
                )
            );
            return false;
        }
    }

}
