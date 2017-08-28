<?php

namespace Web\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/drink")
 */
class DrinkController extends Controller
{
    /**
     * @Route("/", name="main_drink", options={"expose"=true})
     */
    public function indexAction()
    {
        return $this->render('MainBundle:Drink:index.html.twig');
    }
}
