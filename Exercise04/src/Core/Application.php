<?php
/**
 * Created by PhpStorm.
 * User: xevimaresma
 * Date: 22/08/14
 * Time: 08:47
 */

namespace Core;


class Application {

  public function run(Handler $handler)
  {
    return $handler->execute();
  }

  public function printHtml(Response $response, $template)
  {
    $file ='../templates/'.$template.'.php';
    extract($response->get(),EXTR_OVERWRITE);
    ob_start();
    include($file);
    $output = ob_get_clean();
    echo $output;
  }
} 