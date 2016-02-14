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
                'Common' => new Phalcon\Acl\Role('Common'),//普通用户
                'Person' => new Phalcon\Acl\Role('Person'),//个人用户
                'Company' => new Phalcon\Acl\Role('Company'),//公司用户
                'Guests' => new Phalcon\Acl\Role('Guests'),//游客
            );
            foreach ($roles as $role) {
                $acl->addRole($role);
            }

            //Private area resources
            $privateResources = array(
                'user' => array('center','changeAvatar','changePassword','applyInvest','applyPerson','applyCompany','applyTest'),

            );
            //Grant resources to role users
            $privateACL = array(
                'Common' => array(
                    'user' => array('center','changeAvatar','changePassword','applyInvest','applyPerson','applyCompany','applyTest'),
                ),
                'Person' => array(
                    'user' => array('center','changeAvatar','changePassword'),
                ),
                'Company' => array(
                    'user' => array('center','changeAvatar','changePassword'),
                ),

            );

            foreach ($privateResources as $resource => $actions) {
                $acl->addResource(new Phalcon\Acl\Resource($resource), $actions);
            }
            //Public area resources
            $publicResources = array(
                'user' => array('index', 'register', 'login','loginSubmit','registerSubmit','loginout','applyInvest','applyPerson','applyPersonSubmit','applyCompany','applyCompanySubmit','applyTest'),
                'index' => array('index'),
                'file'=>array('upload'),
                'invest'=>array('index','pjCenter'),
                'Invest'=>array('index','pjCenter'),
                'raiseFunds'=>array('index'),
                'RaiseFunds'=>array('index'),
                'RaiseProduct'=>array('index','pdShow'),
                'raiseProduct'=>array('index','pdShow'),
                'UserRaiseBasic'=>array('index','search','new','edit','create','save','delete'),

//                'Index' => array('index'),
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

        if($this->config->application->user_login_form_cookies){
            //use cookies
            $auth=$this->_getCookie('auth');
            if (!$auth) {
                $role = 'Guests';
            } else {
                $role = $this->_getCookie('role');
                // $role='Common';
            }

        }else{
            $auth = $this->session->get('auth');
            $auth=$this->_getCookie('auth');
            if (!$auth) {
                $role = 'Guests';
            } else {
                $role =$auth['role'];
                // $role='Common';
            }
        }



        $controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();
        $acl = $this->getAcl();
        $allowed = $acl->isAllowed($role, $controller, $action);

        if ($allowed != Acl::ALLOW) {
            $this->flash->error("You don't have access to this module");
            $dispatcher->forward(
                array(
                    'controller' => 'user',
                    'action' => 'login'
                )
            );
            return false;
        }
    }

    private function _getCookie($key){
        if($this->cookies->has($key)){
            // 获取cookie
            $rememberMe = $this->cookies->get($key);

            // 获取cookie的值
            return   $value = $rememberMe->getValue();
        }
        else
            return false;
    }
}
