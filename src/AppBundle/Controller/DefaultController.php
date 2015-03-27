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
    * @Route("/Golf3.html", name="Golf3")
    */
    public function Golf3Action()
    {
       return $this->render('default/Golf3.html.twig');
    }

}
