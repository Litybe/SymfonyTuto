<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlateformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
       $content = $this->get('templating')->render('OCPlateformBundle:Advert:index.html.twig',array('nom'=>'Litybe'));
        return new Response($content);
    }

    public function viewAction($id)
    {
        $url = $this->get('router')->generate(
            'oc_platform_view', // 1er argument : le nom de la route
            array('id' => $id)    // 2e argument : les valeurs des paramètres
        );

        return new Response("Affichage de l'annonce d'id : ".$url);
    }

    public function viewSlugAction($slug, $year, $_format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$_format."."
        );
    }

}