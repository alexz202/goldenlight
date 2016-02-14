<?php
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
/**
 * 实物筹资
 * Class ProductRaiseController
 */
class RaiseProductController extends ControllerBase
{


    public function initialize (){
        parent::initialize();
    }

    public function indexAction()
    {
        $nowurl = $this->request->getURI();

        $type_list = $this->_getBusTypeList();
        $this->view->type_list = $type_list;
        $this->view->url = $nowurl;

        $project_type='';
        $project_grow_up='';
        $is_type_belongs=false;

        $numberPage = 1;
        if ($this->request->isGet()) {

            $query = Criteria::fromInput($this->di, "DtbProduct", $_GET);
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }


        $this->persistent->parameters = $query->getParams();
        $parameters = $this->persistent->parameters;

        if (!is_array($parameters)) {
            $parameters = array();
        }

        $parameters["order"] = "product_id";

        $dtb_product = DtbProduct::find($parameters);
        if (count($dtb_product) == 0) {
            $this->flash->notice("The search did not find any dtb_product");


        }

        $paginator = new Paginator(array(
            "data" => $dtb_product,
            "limit" => $this->config->application->page_size,
            "page" => $numberPage
        ));

        $page=$paginator->getPaginate();

        $page_split=$this->_split_page($page->current,$page->total_pages);

        $this->view->page_split=$page_split;
        //$this->view->disable();
        $this->view->page = $page;




    }
    public function pdShowAction($product_id){

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







}

