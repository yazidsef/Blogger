<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FirstController extends AbstractController
{
    #[Route('/{name}/{prenom}', name: 'say.hello')]
    public function sayHello($name , $prenom , Request $request): Response
    {
        $message = $request->query->get('message'); 
     return $this->render('first/index.html.twig',['name'=>$name,'lastname'=>$prenom,'message'=>$message] );    
    }
   
}
