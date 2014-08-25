<?php

namespace Xevi\PHPExercises\ReverseStringBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

      $result = null;

      $form = $this->createFormBuilder()
        ->add('name', 'text')
        ->add('send','submit')
        ->getForm();

      $form->handleRequest($request);

      if ($form->isValid()) {
        $result = strrev($form->get('name')->getData());
      }

      return $this->render('XeviPHPExercisesReverseStringBundle:Default:index.html.twig', array('form' => $form->createView(),'result' => $result));
    }
}
