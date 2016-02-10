<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class UserProductController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for dtb_product
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "DtbProduct", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "product_id";

        $dtb_product = DtbProduct::find($parameters);
        if (count($dtb_product) == 0) {
            $this->flash->notice("The search did not find any dtb_product");

            return $this->dispatcher->forward(array(
                "controller" => "user_product",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $dtb_product,
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
     * Edits a dtb_product
     *
     * @param string $product_id
     */
    public function editAction($product_id)
    {

        if (!$this->request->isPost()) {

            $dtb_product = DtbProduct::findFirstByproduct_id($product_id);
            if (!$dtb_product) {
                $this->flash->error("dtb_product was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "user_product",
                    "action" => "index"
                ));
            }

            $this->view->product_id = $dtb_product->product_id;

            $this->tag->setDefault("product_id", $dtb_product->getProductId());
            $this->tag->setDefault("user_Id", $dtb_product->getUserId());
            $this->tag->setDefault("project_name", $dtb_product->getProjectName());
            $this->tag->setDefault("product_name", $dtb_product->getProductName());
            $this->tag->setDefault("price", $dtb_product->getPrice());
            $this->tag->setDefault("product_img", $dtb_product->getProductImg());
            $this->tag->setDefault("exist_num", $dtb_product->getExistNum());
            
        }
    }

    /**
     * Creates a new dtb_product
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "user_product",
                "action" => "index"
            ));
        }

        $dtb_product = new DtbProduct();

        $dtb_product->setUserId($this->request->getPost("user_Id"));
        $dtb_product->setProjectName($this->request->getPost("project_name"));
        $dtb_product->setProductName($this->request->getPost("product_name"));
        $dtb_product->setPrice($this->request->getPost("price"));
        $dtb_product->setProductImg($this->request->getPost("product_img"));
        $dtb_product->setExistNum($this->request->getPost("exist_num"));
        

        if (!$dtb_product->save()) {
            foreach ($dtb_product->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "user_product",
                "action" => "new"
            ));
        }

        $this->flash->success("dtb_product was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "user_product",
            "action" => "index"
        ));

    }

    /**
     * Saves a dtb_product edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "user_product",
                "action" => "index"
            ));
        }

        $product_id = $this->request->getPost("product_id");

        $dtb_product = DtbProduct::findFirstByproduct_id($product_id);
        if (!$dtb_product) {
            $this->flash->error("dtb_product does not exist " . $product_id);

            return $this->dispatcher->forward(array(
                "controller" => "user_product",
                "action" => "index"
            ));
        }

        $dtb_product->setUserId($this->request->getPost("user_Id"));
        $dtb_product->setProjectName($this->request->getPost("project_name"));
        $dtb_product->setProductName($this->request->getPost("product_name"));
        $dtb_product->setPrice($this->request->getPost("price"));
        $dtb_product->setProductImg($this->request->getPost("product_img"));
        $dtb_product->setExistNum($this->request->getPost("exist_num"));
        

        if (!$dtb_product->save()) {

            foreach ($dtb_product->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "user_product",
                "action" => "edit",
                "params" => array($dtb_product->product_id)
            ));
        }

        $this->flash->success("dtb_product was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "user_product",
            "action" => "index"
        ));

    }

    /**
     * Deletes a dtb_product
     *
     * @param string $product_id
     */
    public function deleteAction($product_id)
    {

        $dtb_product = DtbProduct::findFirstByproduct_id($product_id);
        if (!$dtb_product) {
            $this->flash->error("dtb_product was not found");

            return $this->dispatcher->forward(array(
                "controller" => "user_product",
                "action" => "index"
            ));
        }

        if (!$dtb_product->delete()) {

            foreach ($dtb_product->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_product",
                "action" => "search"
            ));
        }

        $this->flash->success("dtb_product was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "user_product",
            "action" => "index"
        ));
    }

}
