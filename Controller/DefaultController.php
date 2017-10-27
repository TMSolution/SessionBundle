<?php

namespace TMSolution\SessionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TMSolutionSessionBundle:Default:index.html.twig');
    }
}
