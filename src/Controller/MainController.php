<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'say.hello')]
    public function sayHello(Request $request): Response
    {
        $session = $request->getSession();
        if($session->has('nbVisite')){
            
        $nbVisite = $session->get('nbVisite') + 1 ; 
        $session->set('nbVisite', $nbVisite);

        }else{
            $nbVisite = 1;
        }
        $session->set('nbVisite', $nbVisite);
        $click= $session->get('nbClick');
        return $this->render('first/index.html.twig');    
    }

   
}
