<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class SomeController extends AbstractController{
    /**
     * @return Response
     * @Route("/", name="home")
     */
    public function home(){
        return $this-> render('something/index.html.twig');
    }

     /**
      * @return Response
     * @Route("/home")
     */
    public function home2(){
        return $this-> render('something/index.html.twig');
    }
    
     /**
      * @return Response
     * @Route("/purchase", name="purchase")
     */
    public function purchase(){
        return $this-> render('something/purchase.html.twig');
    }
    /**
      * @return Response
     * @Route("/affix", name="affix")
     */
    public function affixStamp(){
        return $this-> render('something/affix.html.twig');
    }
}
?>