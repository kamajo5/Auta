<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    /**
     * @Route("/Ford_Mustang.html", name="Ford_Mustang")
     */
    public function Ford_MustangAction()
    {
        return $this->render('default/Ford_Mustang.html.twig');
    }
    /**
     * @Route("/Shelby_GT500.html", name="Shelby_GT500")
     */
    public function Shelby_GT500Action()
    {
        return $this->render('default/Shelby_GT500.html.twig');
    }
    /**
     * @Route("/Polonez.html", name="Polonez")
     */
    public function PolonezAction()
    {
        return $this->render('default/Polonez.html.twig');
    }
    /**
     * @Route("/Hyundai.html", name="Hyundai")
     */
    public function HyundaiAction()
    {
        return $this->render('default/Hyundai.html.twig');
    }

}
