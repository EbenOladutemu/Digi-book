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
     * @Route("/upload", name="upload")
     */
    public function uploadFile(){
        return $this-> render('something/upload.html.twig');
    }
    /**
      * @return Response
     * @Route("/purchase", name="purchase")
     */
    public function purchaseStamp(){
        return $this-> render('https://paystack.com/pay/purchase-stamp');
    }
}
?>