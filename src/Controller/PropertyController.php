<?php
/**
 * Created by PhpStorm.
 * User: lecocq
 * Date: 21/12/2018
 * Time: 14:04
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    /**
     * @Route ( "/bien", name="property.index")
     * @return Response
     */
    public function index():Response
    {
            return $this->render('property/index.html.twig',[
                'current_menu'=> 'properties'

                ]);
    }
}