<?php
/**
 * Created by PhpStorm.
 * User: alexzhu
 * Date: 14-9-4
 * Time: 下午3:55
 */

use Phalcon\Translate\Adapter;
use Phalcon\Translate\AdapterInterface;

class Gettext extends Phalcon\Translate\Adapter implements Phalcon\Translate\AdapterInterface
{

    public function  __construct($options)
    {
        putenv("LC_ALL=" . $options['locale']);
        setlocale(LC_ALL, $options['locale']);
        bindtextdomain($options['file'], $options['directory']);
        textdomain($options['file']);
    }

    public function _($translateKey, $array = null)
    {
        return $this->query($translateKey,$array);
    }

    public function query($index, $array = null)
    {
         $translatestr = gettext($index);
        if(is_array($array)){
            foreach($array as $key=>$value){
                $translatestr=str_replace('%'.$key.'%',$value,$translatestr);
            }
        }
        return $translatestr;
    }

    public function exists($index)
    {
        return gettext($index) !== '';
    }


}


