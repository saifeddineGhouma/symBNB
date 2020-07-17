<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class HomeController  extends Controller{
    /**
     * @Route("/",name="home_page")
     */

    public function home(){

        $title= "this title ";
        $skills= ['laravel'=>'amaricen','symfony'=>'frances','angular'=>'google', 'react'=>'facebook'];
        
        return $this->render(
            'home.html.twig',
            [
                'title'=>$title,
                'age'=>31,
                'skills'=> $skills
                ]
        ) ;
        //return new Response('Bonjour ');

       
    }
     /**
         * @Route("/show/{name}",name="show_page")
         */
    public function show($name=false){

        return new Response('this show          '.$name);
    }

}