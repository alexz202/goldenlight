<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

    public function __initStatic(){
          $this->assets->addCss('/js/uploadify/uploadify.css');

          $this->assets
              ->addJs('/js/jquery/jquery-2.1.4.min.js',false,false)
              ->addJs('/js/uploadify/jquery.uploadify.min.js',false,false);

    }

}
