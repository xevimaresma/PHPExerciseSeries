<?php
/**
 * Created by PhpStorm.
 * User: xevimaresma
 * Date: 22/08/14
 * Time: 08:47
 */

namespace Core;


class Request {
  private $get;
  private $post;

  public static function initFromGlobals()
  {
    $request = new Request();
    $request->registerGet($_GET);
    $request->registerPost($_POST);

    return $request;

  }

  public function registerPost($post)
  {
    $this->post = $post;
  }

  public function registerGet($get)
  {
    $this->get = $get;
  }

  public function clearGlobalVariables()
  {
    $_POST = null;
    $_GET = null;
  }

  public function get()
  {
    return $this->get;
  }

  public function post()
  {
    return $this->post;
  }

}