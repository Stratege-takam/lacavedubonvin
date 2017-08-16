<?php
/**
 * Created by PhpStorm.
 * User: Danick Takam
 * Date: 16/08/2017
 * Time: 16:01
 */

namespace Web\MainBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\UserBundle\Controller\SecurityController as BaseSecurityController;

class SecurityController extends BaseSecurityController
{
    /**
     * Renders the login template with the given parameters. Overwrite this function in
     * an extended controller to provide additional data for the login template.
     *
     * @param array $data
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function renderLogin(array $data)
    {
        return $this->container->get('templating')->renderResponse('MainBundle:Security:login.html.twig', $data);
    }
}