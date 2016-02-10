<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class UserRaiseMarketController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for dtb_raise_project_market
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectMarket", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "raise_id";

        $dtb_raise_project_market = DtbRaiseProjectMarket::find($parameters);
        if (count($dtb_raise_project_market) == 0) {
            $this->flash->notice("The search did not find any dtb_raise_project_market");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_market",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $dtb_raise_project_market,
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
     * Edits a dtb_raise_project_market
     *
     * @param string $raise_id
     */
    public function editAction($raise_id)
    {

        if (!$this->request->isPost()) {

            $dtb_raise_project_market = DtbRaiseProjectMarket::findFirstByraise_id($raise_id);
            if (!$dtb_raise_project_market) {
                $this->flash->error("dtb_raise_project_market was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "dtb_raise_project_market",
                    "action" => "index"
                ));
            }

            $this->view->raise_id = $dtb_raise_project_market->raise_id;

            $this->tag->setDefault("raise_id", $dtb_raise_project_market->getRaiseId());
            $this->tag->setDefault("aim_market", $dtb_raise_project_market->getAimMarket());
            $this->tag->setDefault("aim_market_feaure", $dtb_raise_project_market->getAimMarketFeaure());
            $this->tag->setDefault("competitive_strategy", $dtb_raise_project_market->getCompetitiveStrategy());
            $this->tag->setDefault("update_ts", $dtb_raise_project_market->getUpdateTs());
            
        }
    }

    /**
     * Creates a new dtb_raise_project_market
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_market",
                "action" => "index"
            ));
        }

        $dtb_raise_project_market = new DtbRaiseProjectMarket();

        $dtb_raise_project_market->setRaiseId($this->request->getPost("raise_id"));
        $dtb_raise_project_market->setAimMarket($this->request->getPost("aim_market"));
        $dtb_raise_project_market->setAimMarketFeaure($this->request->getPost("aim_market_feaure"));
        $dtb_raise_project_market->setCompetitiveStrategy($this->request->getPost("competitive_strategy"));
        $dtb_raise_project_market->setUpdateTs($this->request->getPost("update_ts"));
        

        if (!$dtb_raise_project_market->save()) {
            foreach ($dtb_raise_project_market->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_market",
                "action" => "new"
            ));
        }

        $this->flash->success("dtb_raise_project_market was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_market",
            "action" => "index"
        ));

    }

    /**
     * Saves a dtb_raise_project_market edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_market",
                "action" => "index"
            ));
        }

        $raise_id = $this->request->getPost("raise_id");

        $dtb_raise_project_market = DtbRaiseProjectMarket::findFirstByraise_id($raise_id);
        if (!$dtb_raise_project_market) {
            $this->flash->error("dtb_raise_project_market does not exist " . $raise_id);

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_market",
                "action" => "index"
            ));
        }

        $dtb_raise_project_market->setRaiseId($this->request->getPost("raise_id"));
        $dtb_raise_project_market->setAimMarket($this->request->getPost("aim_market"));
        $dtb_raise_project_market->setAimMarketFeaure($this->request->getPost("aim_market_feaure"));
        $dtb_raise_project_market->setCompetitiveStrategy($this->request->getPost("competitive_strategy"));
        $dtb_raise_project_market->setUpdateTs($this->request->getPost("update_ts"));
        

        if (!$dtb_raise_project_market->save()) {

            foreach ($dtb_raise_project_market->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_market",
                "action" => "edit",
                "params" => array($dtb_raise_project_market->raise_id)
            ));
        }

        $this->flash->success("dtb_raise_project_market was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_market",
            "action" => "index"
        ));

    }

    /**
     * Deletes a dtb_raise_project_market
     *
     * @param string $raise_id
     */
    public function deleteAction($raise_id)
    {

        $dtb_raise_project_market = DtbRaiseProjectMarket::findFirstByraise_id($raise_id);
        if (!$dtb_raise_project_market) {
            $this->flash->error("dtb_raise_project_market was not found");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_market",
                "action" => "index"
            ));
        }

        if (!$dtb_raise_project_market->delete()) {

            foreach ($dtb_raise_project_market->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_market",
                "action" => "search"
            ));
        }

        $this->flash->success("dtb_raise_project_market was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_market",
            "action" => "index"
        ));
    }

}
