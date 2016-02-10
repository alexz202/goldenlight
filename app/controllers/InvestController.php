<?php
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

/**
 * 投资
 * Class InvestController
 */
class InvestController extends ControllerBase
{


    public function initialize()
    {
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

            if (isset($_GET['project_type'])) {
                $project_type = $_GET['project_type'];
                if (isset($type_list[$_GET['project_type']])) {
                    foreach ($type_list[$_GET['project_type']]['children'] as $value) {
                        $type_ids[] = intval($value['type_id']);
                    }
                    unset($_GET['project_type']);
                    $is_type_belongs=true;

                }
            }

            if (isset($_GET['project_grow_up'])) {
                $project_grow_up = $_GET['project_grow_up'];
            }
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectBasic", $_GET);
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        if($is_type_belongs){
            $query->inWhere('project_type',$type_ids);
        }


        $this->persistent->parameters = $query->getParams();
        $parameters = $this->persistent->parameters;

        if (!is_array($parameters)) {
            $parameters = array();
        }

        $this->view->project_type = $project_type;
        $this->view->project_grow_up =$project_grow_up;

        $parameters["order"] = "raise_id";

        $dtb_raise_project_basic = DtbRaiseProjectBasic::find($parameters);
        if (count($dtb_raise_project_basic) == 0) {
            $this->flash->notice("The search did not find any dtb_raise_project_basic");

        }

        $paginator = new Paginator(array(
            "data" => $dtb_raise_project_basic,
            "limit" => $this->config->application->page_size,
            "page" => $numberPage
        ));

        $page=$paginator->getPaginate();

        $page_split=$this->_split_page($page->current,$page->total_pages);

        $this->view->page_split=$page_split;
        //$this->view->disable();
        $this->view->page = $page;



    }



    public function pjCenterAction()
    {
        if($this->request->isGet()){
            $raise_id=$this->request->getQuery('raise_id');
            if(empty($raise_id)){
                die('invaild project');
            }
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectBasic", $_GET);
            $this->persistent->parameters = $query->getParams();
            $parameters=$this->persistent->parameters;
            $dtb_raise_project_basic=DtbRaiseProjectBasic::findFirst($parameters);
            $this->view->dtb_raise_project_basic=$dtb_raise_project_basic;



        }
        else{
            die('invaild error');
        }


    }


}

