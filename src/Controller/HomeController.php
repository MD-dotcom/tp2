<?php

namespace App\Controller;
//use App\Entity\EcoleDoctorale;
//use App\Entity\Theses;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            
            'controller_name' => 'HomeController',
            'infothese' =>  [

                
                ['titre'=>' Auto-assemblage de nanoparticules plasmoniques sous confinement et leurs applications à la détection','contact'=>'malika@gmail.com', 'Description' => 'Objectif est Auto-assemblage de nanoparticules plasmoniques sous confinement'],
           
                ['titre'=>' ANALYSES DE DONNÉES POUR LA MISSION TESS: PRÉPARATION À PLATO ','contact'=>'malika@gmail.com', 'Description' => 'objectif ANALYSES DE DONNÉES POUR LA MISSION TESS '],
            
              
            ]
        ]);
    }
}
