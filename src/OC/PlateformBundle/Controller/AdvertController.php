<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlateformBundle\Controller;

use OC\PlateformBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use OC\PlateformBundle\Entity\Advert;


class AdvertController extends Controller
{
    public function indexAction($page)
    {
        if ($page < 1) {
            throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
        }
        // Notre liste d'annonce en dur
        $listAdverts = array(
            array(
                'title'   => 'Recherche développpeur Symfony2',
                'id'      => 1,
                'author'  => 'Alexandre',
                'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
                'date'    => new \Datetime()),
            array(
                'title'   => 'Mission de webmaster',
                'id'      => 2,
                'author'  => 'Hugo',
                'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
                'date'    => new \Datetime()),
            array(
                'title'   => 'Offre de stage webdesigner',
                'id'      => 3,
                'author'  => 'Mathieu',
                'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
                'date'    => new \Datetime())
        );

        // Et modifiez le 2nd argument pour injecter notre liste
        return $this->render('OCPlateformBundle:Advert:index.html.twig', array(
            'listAdverts' => $listAdverts
        ));

    }

    public function viewAction($id)
    {
        // On récupère le repository
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('OCPlateformBundle:Advert')
        ;

        // On récupère l'entité correspondante à l'id $id
        $advert = $repository->find($id);

        // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
        // ou null si l'id $id  n'existe pas, d'où ce if :
        if (null === $advert) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('OCPlateformBundle:Advert:view.html.twig', array(
            'advert' => $advert
        ));
    }


    public function addAction(Request $request)
    {

        $advert = new Advert();
        $advert->setTitle('Recherche developpeur Symfony2.');
        $advert->setAuthor('Alexandre');
        $advert->setContent("Nous recherchons un developpeur Symfony2 debutant sur Lyon. Blabla…");

        $image = new Image();
        $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
        $image->setAlt('Job de rêve');

        $advert->setImage($image);
        $em = $this->getDoctrine()->getManager();

        $em->persist($advert);

        $em->flush();
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
            return $this->redirectToRoute('oc_platform_view', array('id' => 5));
        }

        $antispam = $this->container->get('oc_platform.antispam');
        $text = '....';
        if($antispam->isSpam($text)){
            throw new \Exception('Votre message à été détecté comme spam');
        }

        return $this->render('OCPlateformBundle:Advert:add.html.twig');
    }

    public function edditAction($id, Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

            return $this->redirectToRoute('oc_platform_view', array('id' => 5));
        }

       $advert = array(
        'title'   => 'Recherche développpeur Symfony2',
        'id'      => $id,
        'author'  => 'Alexandre',
        'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
        'date'    => new \Datetime()
    );

        return $this->render('OCPlateformBundle:Advert:edit.html.twig', array(
            'advert' => $advert
        ));
    }

    public function deleteAction($id)
    {
        return $this->render('OCPlateformBundle:Advert:delete.html.twig');
    }

    public function menuAction()
    {

        $listAdverts = array(
            array('id' => 2, 'title' => 'Recherche développeur Symfony2'),
            array('id' => 5, 'title' => 'Mission de webmaster'),
            array('id' => 9, 'title' => 'Offre de stage webdesigner')
        );

        return $this->render('OCPlateformBundle:Advert:menu.html.twig', array(
            'listAdverts' => $listAdverts
        ));
    }
}