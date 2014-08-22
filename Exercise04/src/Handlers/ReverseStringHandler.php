<?php
/**
 * Created by PhpStorm.
 * User: xevimaresma
 * Date: 22/08/14
 * Time: 09:01
 */

namespace Handlers;


use Core\Handler;
use Core\Response;

class ReverseStringHandler extends Handler{

  public function execute()
  {
    $response = new Response();
    $response->add('result',strrev($this->params['name']));
    $response->add('name',$this->params['name']);
    return $response;
  }

  public function setParams($params)
  {
    $this->params = $params;
  }
} 