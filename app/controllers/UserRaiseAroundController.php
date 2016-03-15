<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class UserRaiseAroundController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for user_raise_around
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectAround", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "raise_id";

        $dtb_raise_project_around = DtbRaiseProjectAround::find($parameters);
        if (count($dtb_raise_project_around) == 0) {
            $this->flash->notice("The search did not find any user_raise_around");

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_around",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $dtb_raise_project_around,
            "limit"=> 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction($raise_id,$type)
    {


        $user_id=$this->_getCookie('user_id');
        $this->view->setVar('raise_id',$raise_id);
        //tag default
        $this->tag->setDefault('project_grow_up',$type);

        $dtb_raise_project_around = DtbRaiseProjectAround::findFirstByraise_id($raise_id);

        if ($dtb_raise_project_around){
            $this->tag->setDefault("raise_id", $dtb_raise_project_around->raise_id);
            $this->tag->setDefault("bj_person", $dtb_raise_project_around->bj_person);
            $this->tag->setDefault("invest_leader", $dtb_raise_project_around->invest_leader);
            $this->tag->setDefault("monitor_system", $dtb_raise_project_around->monitor_system);
            $this->tag->setDefault("friend_link", $dtb_raise_project_around->friend_link);
            $this->tag->setDefault("update_ts", $dtb_raise_project_around->update_ts);
        }


        //tag setting
        $this->view->iscreate=1;
        $this->view->project_type=$type;
        $this->view->is_current=6;
    }

    /**
     * Edits a user_raise_around
     *
     * @param string $raise_id
     */
    public function editAction($raise_id)
    {

        if (!$this->request->isPost()) {

            $dtb_raise_project_around = DtbRaiseProjectAround::findFirstByraise_id($raise_id);
            if (!$dtb_raise_project_around) {
                $this->flash->error("user_raise_around was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "user_raise_around",
                    "action" => "index"
                ));
            }

            $this->view->raise_id = $dtb_raise_project_around->raise_id;

            $this->tag->setDefault("raise_id", $dtb_raise_project_around->getRaiseId());
            $this->tag->setDefault("bj_person", $dtb_raise_project_around->getBjPerson());
            $this->tag->setDefault("invest_leader", $dtb_raise_project_around->getInvestLeader());
            $this->tag->setDefault("monitor_system", $dtb_raise_project_around->getMonitorSystem());
            $this->tag->setDefault("friend_link", $dtb_raise_project_around->getFriendLink());

            $this->view->iscreate=0;
            $this->view->isusercenter=1;
            $this->view->is_current=6;
        }

    }

    /**
     * Creates a new user_raise_around
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "user_raise_around",
                "action" => "index"
            ));
        }

        $dtb_raise_project_around = new DtbRaiseProjectAround();


        $dtb_raise_project_around->setRaiseId($this->request->getPost("raise_id"));
      //  var_dump($this->request->getPost("bj_person"));

       $dtb_raise_project_around->setBjPerson($this->request->getPost("bj_person"));
      //  var_dump($this->request->getPost("invest_leader"));
       $dtb_raise_project_around->setInvestLeader($this->request->getPost("invest_leader"));
        $dtb_raise_project_around->setMonitorSystem($this->request->getPost("monitor_system"));
        $dtb_raise_project_around->setFriendLink($this->request->getPost("friend_link"));

      //  var_dump($this->request->getPost("friend_link"));

        if (!$dtb_raise_project_around->save()) {
            foreach ($dtb_raise_project_around->getMessages() as $message) {
                $this->flash->error($message);
            }


            return $this->dispatcher->forward(array(
                "controller" => "user_raise_around",
                "action" => "new",
                "params" => array($dtb_raise_project_around->raise_id)
            ));
        }

        $this->flash->success("user_raise_around was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "user_raise_basic",
            "action" => "index"
        ));

    }

    /**
     * Saves a user_raise_around edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "user_raise_around",
                "action" => "index"
            ));
        }

        $raise_id = $this->request->getPost("raise_id");

        $dtb_raise_project_around = DtbRaiseProjectAround::findFirstByraise_id($raise_id);
        if (!$dtb_raise_project_around) {
            $this->flash->error("user_raise_around does not exist " . $raise_id);

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_around",
                "action" => "index"
            ));
        }

        $dtb_raise_project_around->setRaiseId($this->request->getPost("raise_id"));
        $dtb_raise_project_around->setBjPerson($this->request->getPost("bj_person"));
        $dtb_raise_project_around->setInvestLeader($this->request->getPost("invest_leader"));
        $dtb_raise_project_around->setMonitorSystem($this->request->getPost("monitor_system"));
        $dtb_raise_project_around->setFriendLink($this->request->getPost("friend_link"));
        

        if (!$dtb_raise_project_around->save()) {

            foreach ($dtb_raise_project_around->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_around",
                "action" => "edit",
                "params" => array($dtb_raise_project_around->raise_id)
            ));
        }

        $this->flash->success("user_raise_around was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "user_raise_around",
            "action" => "index"
        ));

    }

    /**
     * Deletes a user_raise_around
     *
     * @param string $raise_id
     */
    public function deleteAction($raise_id)
    {

        $dtb_raise_project_around = DtbRaiseProjectAround::findFirstByraise_id($raise_id);
        if (!$dtb_raise_project_around) {
            $this->flash->error("user_raise_around was not found");

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_around",
                "action" => "index"
            ));
        }

        if (!$dtb_raise_project_around->delete()) {

            foreach ($dtb_raise_project_around->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_around",
                "action" => "search"
            ));
        }

        $this->flash->success("user_raise_around was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "user_raise_around",
            "action" => "index"
        ));
    }

}
