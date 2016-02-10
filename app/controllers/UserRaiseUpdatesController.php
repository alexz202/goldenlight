<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class UserRaiseUpdatesController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for dtb_raise_project_updates
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectUpdates", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $dtb_raise_project_updates = DtbRaiseProjectUpdates::find($parameters);
        if (count($dtb_raise_project_updates) == 0) {
            $this->flash->notice("The search did not find any dtb_raise_project_updates");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_updates",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $dtb_raise_project_updates,
            "limit"=> 10,
            "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a dtb_raise_project_update
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $dtb_raise_project_update = DtbRaiseProjectUpdates::findFirstByid($id);
            if (!$dtb_raise_project_update) {
                $this->flash->error("dtb_raise_project_update was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "dtb_raise_project_updates",
                    "action" => "index"
                ));
            }

            $this->view->id = $dtb_raise_project_update->id;

            $this->tag->setDefault("id", $dtb_raise_project_update->getId());
            $this->tag->setDefault("raise_id", $dtb_raise_project_update->getRaiseId());
            $this->tag->setDefault("title", $dtb_raise_project_update->getTitle());
            $this->tag->setDefault("content", $dtb_raise_project_update->getContent());
            $this->tag->setDefault("create_ts", $dtb_raise_project_update->getCreateTs());
            
        }
    }

    /**
     * Creates a new dtb_raise_project_update
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_updates",
                "action" => "index"
            ));
        }

        $dtb_raise_project_update = new DtbRaiseProjectUpdates();

        $dtb_raise_project_update->setRaiseId($this->request->getPost("raise_id"));
        $dtb_raise_project_update->setTitle($this->request->getPost("title"));
        $dtb_raise_project_update->setContent($this->request->getPost("content"));
        $dtb_raise_project_update->setCreateTs($this->request->getPost("create_ts"));
        

        if (!$dtb_raise_project_update->save()) {
            foreach ($dtb_raise_project_update->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_updates",
                "action" => "new"
            ));
        }

        $this->flash->success("dtb_raise_project_update was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_updates",
            "action" => "index"
        ));

    }

    /**
     * Saves a dtb_raise_project_update edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_updates",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $dtb_raise_project_update = DtbRaiseProjectUpdates::findFirstByid($id);
        if (!$dtb_raise_project_update) {
            $this->flash->error("dtb_raise_project_update does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_updates",
                "action" => "index"
            ));
        }

        $dtb_raise_project_update->setRaiseId($this->request->getPost("raise_id"));
        $dtb_raise_project_update->setTitle($this->request->getPost("title"));
        $dtb_raise_project_update->setContent($this->request->getPost("content"));
        $dtb_raise_project_update->setCreateTs($this->request->getPost("create_ts"));
        

        if (!$dtb_raise_project_update->save()) {

            foreach ($dtb_raise_project_update->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_updates",
                "action" => "edit",
                "params" => array($dtb_raise_project_update->id)
            ));
        }

        $this->flash->success("dtb_raise_project_update was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_updates",
            "action" => "index"
        ));

    }

    /**
     * Deletes a dtb_raise_project_update
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $dtb_raise_project_update = DtbRaiseProjectUpdates::findFirstByid($id);
        if (!$dtb_raise_project_update) {
            $this->flash->error("dtb_raise_project_update was not found");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_updates",
                "action" => "index"
            ));
        }

        if (!$dtb_raise_project_update->delete()) {

            foreach ($dtb_raise_project_update->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_updates",
                "action" => "search"
            ));
        }

        $this->flash->success("dtb_raise_project_update was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_updates",
            "action" => "index"
        ));
    }

}
