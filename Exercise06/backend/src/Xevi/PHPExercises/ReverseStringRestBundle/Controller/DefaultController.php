<?php

namespace Xevi\PHPExercises\ReverseStringRestBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends FOSRestController
{
    public function getReverseAction($name)
    {
        return new JsonResponse(array('name' => strrev($name)));
    }
}
