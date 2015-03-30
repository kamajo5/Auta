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
    
    /* R1 */
    /**
     * @Route("/Mazda.html", name="Mazda")
     */
    public function MazdaAction()
    {
        return $this->render('default/Mazda.html.twig');
    }
    
    /* R2 */
     /**
     * @Route("/Ferrari.html", name="Ferrari")
     */
    public function FerrariAction()
    {
        return $this->render('default/Ferrari.html.twig');
    }
    
    
    /* M1 */
    
    
    /* M2 */
    
    
    /* T1 */
    
    
    /* T2 */
    
    

}
