<?php

namespace Web\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/test")
 */
class TestController extends Controller
{
    /**
     * @Route("/", name="test_homepage", options={"expose"=true})
     */
    public function indexAction()
    {
        return $this->render('MainBundle:Default:index.html.twig');
    }
}
