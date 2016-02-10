<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class UserRaiseTeamCertificateController extends ControllerBase
{

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for dtb_raise_project_team_certificate
     */
    public function searchAction()
    {

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "DtbRaiseProjectTeamCertificate", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }
        $parameters["order"] = "id";

        $dtb_raise_project_team_certificate = DtbRaiseProjectTeamCertificate::find($parameters);
        if (count($dtb_raise_project_team_certificate) == 0) {
            $this->flash->notice("The search did not find any dtb_raise_project_team_certificate");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_certificate",
                "action" => "index"
            ));
        }

        $paginator = new Paginator(array(
            "data" => $dtb_raise_project_team_certificate,
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
     * Edits a dtb_raise_project_team_certificate
     *
     * @param string $id
     */
    public function editAction($id)
    {

        if (!$this->request->isPost()) {

            $dtb_raise_project_team_certificate = DtbRaiseProjectTeamCertificate::findFirstByid($id);
            if (!$dtb_raise_project_team_certificate) {
                $this->flash->error("dtb_raise_project_team_certificate was not found");

                return $this->dispatcher->forward(array(
                    "controller" => "dtb_raise_project_team_certificate",
                    "action" => "index"
                ));
            }

            $this->view->id = $dtb_raise_project_team_certificate->id;

            $this->tag->setDefault("id", $dtb_raise_project_team_certificate->getId());
            $this->tag->setDefault("tmmember_id", $dtb_raise_project_team_certificate->getTmmemberId());
            $this->tag->setDefault("organization", $dtb_raise_project_team_certificate->getOrganization());
            $this->tag->setDefault("certificate_name", $dtb_raise_project_team_certificate->getCertificateName());
            $this->tag->setDefault("reward_ts", $dtb_raise_project_team_certificate->getRewardTs());
            
        }
    }

    /**
     * Creates a new dtb_raise_project_team_certificate
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_certificate",
                "action" => "index"
            ));
        }

        $dtb_raise_project_team_certificate = new DtbRaiseProjectTeamCertificate();

        $dtb_raise_project_team_certificate->setTmmemberId($this->request->getPost("tmmember_id"));
        $dtb_raise_project_team_certificate->setOrganization($this->request->getPost("organization"));
        $dtb_raise_project_team_certificate->setCertificateName($this->request->getPost("certificate_name"));
        $dtb_raise_project_team_certificate->setRewardTs($this->request->getPost("reward_ts"));
        

        if (!$dtb_raise_project_team_certificate->save()) {
            foreach ($dtb_raise_project_team_certificate->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_certificate",
                "action" => "new"
            ));
        }

        $this->flash->success("dtb_raise_project_team_certificate was created successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_team_certificate",
            "action" => "index"
        ));

    }

    /**
     * Saves a dtb_raise_project_team_certificate edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_certificate",
                "action" => "index"
            ));
        }

        $id = $this->request->getPost("id");

        $dtb_raise_project_team_certificate = DtbRaiseProjectTeamCertificate::findFirstByid($id);
        if (!$dtb_raise_project_team_certificate) {
            $this->flash->error("dtb_raise_project_team_certificate does not exist " . $id);

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_certificate",
                "action" => "index"
            ));
        }

        $dtb_raise_project_team_certificate->setTmmemberId($this->request->getPost("tmmember_id"));
        $dtb_raise_project_team_certificate->setOrganization($this->request->getPost("organization"));
        $dtb_raise_project_team_certificate->setCertificateName($this->request->getPost("certificate_name"));
        $dtb_raise_project_team_certificate->setRewardTs($this->request->getPost("reward_ts"));
        

        if (!$dtb_raise_project_team_certificate->save()) {

            foreach ($dtb_raise_project_team_certificate->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_certificate",
                "action" => "edit",
                "params" => array($dtb_raise_project_team_certificate->id)
            ));
        }

        $this->flash->success("dtb_raise_project_team_certificate was updated successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_team_certificate",
            "action" => "index"
        ));

    }

    /**
     * Deletes a dtb_raise_project_team_certificate
     *
     * @param string $id
     */
    public function deleteAction($id)
    {

        $dtb_raise_project_team_certificate = DtbRaiseProjectTeamCertificate::findFirstByid($id);
        if (!$dtb_raise_project_team_certificate) {
            $this->flash->error("dtb_raise_project_team_certificate was not found");

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_certificate",
                "action" => "index"
            ));
        }

        if (!$dtb_raise_project_team_certificate->delete()) {

            foreach ($dtb_raise_project_team_certificate->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(array(
                "controller" => "dtb_raise_project_team_certificate",
                "action" => "search"
            ));
        }

        $this->flash->success("dtb_raise_project_team_certificate was deleted successfully");

        return $this->dispatcher->forward(array(
            "controller" => "dtb_raise_project_team_certificate",
            "action" => "index"
        ));
    }

}
