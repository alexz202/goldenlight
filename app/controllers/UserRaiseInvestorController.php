<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class UserRaiseInvestorController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $dtb_raise_project_basic=$this-> getUserProjectInvestor();
        //var_dump($dtb_raise_project_basic);
        //die();
        $this->view->dtb_raise_project_basic=$dtb_raise_project_basic;

        $this->view->is_user_nav=3;


    }

    public function detailAction($raise_id,$user_id){

        $dtb_raise_project_investor=DtbRaiseProjectInvestor::findFirst(
            array(
                "conditions" => "raise_id = :raise_id: and user_id=:user_id: ",
                "bind"       => array("raise_id" => $raise_id,'user_id'=>$user_id),
                "order"=>'update_ts desc'
            ));

         $order_info=DtbProjectInvestOrder::find(
             array(
                 "conditions" => "raise_id = :raise_id: and user_id=:user_id: ",
                 "bind"       => array("raise_id" => $raise_id,'user_id'=>$user_id),
                 "order"=>'order_id desc'
             )
         );
       // die();
        $this->view->setVar('dtb_raise_project_investor',$dtb_raise_project_investor);
        $this->view->setVar('dtb_project_invest_order',$order_info);
        $this->view->is_user_nav=3;


    }

    private function getUserProjectInvestor(){
        $user_project_info=$this->getUserProject();
        if($user_project_info){
          $raise_id=$user_project_info->getRaiseId();
        }
        return $user_project_info;
    }

    /**
     * Searches for dtb_raise_project_investor
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectInvestor", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "raise_id";

        $dtb_raise_project_investor = DtbRaiseProjectInvestor::find($parameters);
        if (count($dtb_raise_project_investor) == 0) {
            $this->flash->notice("The search did not find any dtb_raise_project_investor");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_investor",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $dtb_raise_project_investor,
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
     * Edits a dtb_raise_project_investor
     *
     * @param string $raise_id
     */
    public function editAction($raise_id)
    {

        if (!$this->request->isPost()) {

            $dtb_raise_project_investor = DtbRaiseProjectInvestor::findFirstByraise_id($raise_id);
            if (!$dtb_raise_project_investor) {
                $this->flash->error("dtb_raise_project_investor was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "dtb_raise_project_investor",
                    "action" => "index"
                ));
            }

            $this->view->raise_id = $dtb_raise_project_investor->raise_id;

            $this->tag->setDefault("raise_id", $dtb_raise_project_investor->getRaiseId());
            $this->tag->setDefault("user_id", $dtb_raise_project_investor->getUserId());
            $this->tag->setDefault("invest_money", $dtb_raise_project_investor->getInvestMoney());
            $this->tag->setDefault("update_ts", $dtb_raise_project_investor->getUpdateTs());
            $this->tag->setDefault("is_show", $dtb_raise_project_investor->getIsShow());
            
        }
    }

    /**
     * Creates a new dtb_raise_project_investor
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_investor",
                "action" => "index"
            ));
        }

        $dtb_raise_project_investor = new DtbRaiseProjectInvestor();

        $dtb_raise_project_investor->setRaiseId($this->request->getPost("raise_id"));
        $dtb_raise_project_investor->setUserId($this->request->getPost("user_id"));
        $dtb_raise_project_investor->setInvestMoney($this->request->getPost("invest_money"));
        $dtb_raise_project_investor->setUpdateTs($this->request->getPost("update_ts"));
        $dtb_raise_project_investor->setIsShow($this->request->getPost("is_show"));
        

        if (!$dtb_raise_project_investor->save()) {
            foreach ($dtb_raise_project_investor->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_investor",
                "action" => "new"
            ));
        }

        $this->flash->success("dtb_raise_project_investor was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_investor",
            "action" => "index"
        ));

    }

    /**
     * Saves a dtb_raise_project_investor edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_investor",
                "action" => "index"
            ));
        }

        $raise_id = $this->request->getPost("raise_id");

        $dtb_raise_project_investor = DtbRaiseProjectInvestor::findFirstByraise_id($raise_id);
        if (!$dtb_raise_project_investor) {
            $this->flash->error("dtb_raise_project_investor does not exist " . $raise_id);

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_investor",
                "action" => "index"
            ));
        }

        $dtb_raise_project_investor->setRaiseId($this->request->getPost("raise_id"));
        $dtb_raise_project_investor->setUserId($this->request->getPost("user_id"));
        $dtb_raise_project_investor->setInvestMoney($this->request->getPost("invest_money"));
        $dtb_raise_project_investor->setUpdateTs($this->request->getPost("update_ts"));
        $dtb_raise_project_investor->setIsShow($this->request->getPost("is_show"));
        

        if (!$dtb_raise_project_investor->save()) {

            foreach ($dtb_raise_project_investor->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_investor",
                "action" => "edit",
                "params" => array($dtb_raise_project_investor->raise_id)
            ));
        }

        $this->flash->success("dtb_raise_project_investor was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_investor",
            "action" => "index"
        ));

    }

    /**
     * Deletes a dtb_raise_project_investor
     *
     * @param string $raise_id
     */
    public function deleteAction($raise_id)
    {

        $dtb_raise_project_investor = DtbRaiseProjectInvestor::findFirstByraise_id($raise_id);
        if (!$dtb_raise_project_investor) {
            $this->flash->error("dtb_raise_project_investor was not found");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_investor",
                "action" => "index"
            ));
        }

        if (!$dtb_raise_project_investor->delete()) {

            foreach ($dtb_raise_project_investor->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_investor",
                "action" => "search"
            ));
        }

        $this->flash->success("dtb_raise_project_investor was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_investor",
            "action" => "index"
        ));
    }

}
