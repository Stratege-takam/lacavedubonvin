<?php

namespace Web\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/render")
 */
class RenderController extends Controller
{
    /**
     * @Route("/category", name="category_homepage", options={"expose"=true})
     */
    public function categoryAction()
    {
        return $this->render('MainBundle:Render:category.html.twig');
    }

    /**
     * @Route("/shop", name="shop_homepage", options={"expose"=true})
     */
    public function shopAction()
    {
        return $this->render('MainBundle:Render:shop.html.twig');
    }

    /**
     * @Route("/drink/first", name="drink_first_homepage", options={"expose"=true})
     */
    public function drinkFirstAction()
    {
        return $this->render('MainBundle:Render:drinkFirst.html.twig');
    }
}
