<?php
/**
 * Created by PhpStorm.
 * User: xevimaresma
 * Date: 22/08/14
 * Time: 08:47
 */

namespace Core;


class Response {
  private $data;

  public function get()
  {
    return $this->data;
  }

  public function add($key,$value)
  {
    $this->data[$key]=$value;
  }

}