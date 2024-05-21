<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SessionController extends AbstractController
{
    #[Route('/session', name: 'app_session')]
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        if($session->has('nbClick')){
            $nbVisite = $session->get('nbClick') + 1 ;
        }else{
            $nbVisite = 1;
        }
        $session->set('nbClick',$nbVisite);
        return $this->render('session/index.html.twig', [
            'controller_name' => $nbVisite,
        ]);
    }
}
