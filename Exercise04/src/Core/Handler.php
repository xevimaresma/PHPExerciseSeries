<?php
/**
 * Created by PhpStorm.
 * User: xevimaresma
 * Date: 22/08/14
 * Time: 08:57
 */

namespace Core;


abstract class Handler {
  protected $request;
  protected $params;
  public function __construct($request)
  {
    $this->request = $request;

    //Parse post parameters
    $this->params = $request->post();

  }
  public abstract function execute();
}