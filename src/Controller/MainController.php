<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="main_")
 */
class MainController extends AbstractController
{
    /**
     * @Route("",name="home")
     */
    public function home()
    {
        die("Coucou ! ");
    }


    /**
     * @Route("test/",name="test")
     */
    public function test()
    {
        die("ici c'est le test! ");
    }

}