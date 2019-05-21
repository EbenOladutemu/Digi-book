<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class SomeController extends AbstractController{
    /**
     * @Route("/")
     */
    public function home(){
        return $this-> render('something/index.html.twig');
    }

     /**
     * @Route("/home")
     */
    public function home2(){
        return $this-> render('something/index.html.twig');
    }
}
?>