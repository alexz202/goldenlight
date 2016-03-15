<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class UserRaiseIdeaController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for dtb_raise_project_idea
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectIdea", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "raise_id";

        $dtb_raise_project_idea = DtbRaiseProjectIdea::find($parameters);
        if (count($dtb_raise_project_idea) == 0) {
            $this->flash->notice("The search did not find any dtb_raise_project_idea");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_idea",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $dtb_raise_project_idea,
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
        $this->tag->setDefault('currency',1);

        $dtb_raise_project_idea = DtbRaiseProjectIdea::findFirstByraise_id($raise_id);
        if ($dtb_raise_project_idea){
            $this->tag->setDefault("raise_id", $dtb_raise_project_idea->raise_id);
            $this->tag->setDefault("idea_info", $dtb_raise_project_idea->idea_info);
            $this->tag->setDefault("purpose", $dtb_raise_project_idea->purpose);
            $this->tag->setDefault("livestock", $dtb_raise_project_idea->livestock);
            $this->tag->setDefault("useform", $dtb_raise_project_idea->useform);
            $this->tag->setDefault("technical", $dtb_raise_project_idea->technical);
            $this->tag->setDefault("update_ts", $dtb_raise_project_idea->update_ts);
        }


        //tag setting
        $this->view->iscreate=1;
        $this->view->project_type=$type;
        $this->view->is_current=3;

    }

    /**
     * Edits a dtb_raise_project_idea
     *
     * @param string $raise_id
     */
    public function editAction($raise_id)
    {

        if (!$this->request->isPost()) {

            $dtb_raise_project_idea = DtbRaiseProjectIdea::findFirstByraise_id($raise_id);
            if (!$dtb_raise_project_idea) {
                $this->flash->error("dtb_raise_project_idea was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "dtb_raise_project_idea",
                    "action" => "index"
                ));
            }

            $this->view->raise_id = $dtb_raise_project_idea->raise_id;

            $this->tag->setDefault("raise_id", $dtb_raise_project_idea->raise_id);
            $this->tag->setDefault("idea_info", $dtb_raise_project_idea->idea_info);
            $this->tag->setDefault("purpose", $dtb_raise_project_idea->purpose);
            $this->tag->setDefault("livestock", $dtb_raise_project_idea->livestock);
            $this->tag->setDefault("useform", $dtb_raise_project_idea->useform);
            $this->tag->setDefault("technical", $dtb_raise_project_idea->technical);
            $this->tag->setDefault("update_ts", $dtb_raise_project_idea->update_ts);
          //  $this->tag->setDefault("market_info", $dtb_raise_project_idea->market_info);
            
        }
        //tag setting
        $this->view->iscreate=0;
        $this->view->isu=0;
        $this->view->isusercenter=1;
        $this->view->is_current=3;
    }

    /**
     * Creates a new dtb_raise_project_idea
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_idea",
                "action" => "index"
            ));
        }

        $dtb_raise_project_idea = new DtbRaiseProjectIdea();






        $dtb_raise_project_idea->raise_id = $this->request->getPost("raise_id");
        $dtb_raise_project_idea->idea_info = $this->request->getPost("idea_info");
        $dtb_raise_project_idea->purpose = $this->request->getPost("purpose");

        $project_type=$this->request->getPost("project_type");
        if($project_type>0)
            $dtb_raise_project_idea->livestock = $this->request->getPost("livestock");
        $dtb_raise_project_idea->useform = $this->request->getPost("useform");
        $dtb_raise_project_idea->technical = $this->request->getPost("technical");
        $dtb_raise_project_idea->update_ts = time();
       // $dtb_raise_project_idea->market_info = $this->request->getPost("market_info");
        

        if (!$dtb_raise_project_idea->save()) {
            foreach ($dtb_raise_project_idea->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_idea",
                "action" => "new",
                "params" => array($dtb_raise_project_idea->raise_id,$project_type)
            ));
        }

        $this->flash->success("dtb_raise_project_idea was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "user_raise_market",
            "action" => "new",
            "params" => array($dtb_raise_project_idea->raise_id,$project_type)
        ));

    }

    /**
     * Saves a dtb_raise_project_idea edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_idea",
                "action" => "index"
            ));
        }

        $raise_id = $this->request->getPost("raise_id");

        $dtb_raise_project_idea = DtbRaiseProjectIdea::findFirstByraise_id($raise_id);
        if (!$dtb_raise_project_idea) {
            $this->flash->error("dtb_raise_project_idea does not exist " . $raise_id);

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_idea",
                "action" => "index"
            ));
        }

        $dtb_raise_project_idea->raise_id = $this->request->getPost("raise_id");
        $dtb_raise_project_idea->idea_info = $this->request->getPost("idea_info");
        $dtb_raise_project_idea->purpose = $this->request->getPost("purpose");
        $dtb_raise_project_idea->livestock = $this->request->getPost("livestock");
        $dtb_raise_project_idea->useform = $this->request->getPost("useform");
        $dtb_raise_project_idea->technical = $this->request->getPost("technical");
        $dtb_raise_project_idea->update_ts = $this->request->getPost("update_ts");
        $dtb_raise_project_idea->market_info = $this->request->getPost("market_info");
        

        if (!$dtb_raise_project_idea->save()) {

            foreach ($dtb_raise_project_idea->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "user_raise_idea",
                "action" => "edit",
                "params" => array($dtb_raise_project_idea->raise_id)
            ));
        }

        $this->flash->success("dtb_raise_project_idea was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "user_raise_idea",
            "action" => "edit"
        ));

    }

    /**
     * Deletes a dtb_raise_project_idea
     *
     * @param string $raise_id
     */
    public function deleteAction($raise_id)
    {

        $dtb_raise_project_idea = DtbRaiseProjectIdea::findFirstByraise_id($raise_id);
        if (!$dtb_raise_project_idea) {
            $this->flash->error("dtb_raise_project_idea was not found");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_idea",
                "action" => "index"
            ));
        }

        if (!$dtb_raise_project_idea->delete()) {

            foreach ($dtb_raise_project_idea->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_idea",
                "action" => "search"
            ));
        }

        $this->flash->success("dtb_raise_project_idea was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_idea",
            "action" => "index"
        ));
    }

}
