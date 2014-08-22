<?php
include '../../config/autoload.php';

class ReverseStringHandlerTest extends PHPUnit_Framework_TestCase {

  public function testReverseString()
  {
    $handler = new \Handlers\ReverseStringHandler(\Core\Request::initFromGlobals());
    $handler->setParams(array('name' => 'xevi'));
    $response = $handler->execute();
    $this->assertEquals($response->get(),array('name' => 'xevi', 'result' => 'ivex'));
  }
}
 