<?php

namespace MakeupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $product_repos = $em->getRepository("MakeupBundle:Product");
        #$products = $product_repos->findAll();

        $products = "SELECT e FROM MakeupBundle:Product e";

        $query = $em->createQuery($products);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 2
        );

        return $this->render(
                        'MakeupBundle:Default:index.html.twig', [
                    'pagination' => $pagination
        ]);
    }

    public function CommentsAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $comment_repos = $em->getRepository("MakeupBundle:Comment");
        //$comments = $comment_repos->findAll();

//        foreach ($comments as $comment) {
//            echo $comment->getComment() . "<br>";
//            echo $comment->getUser()->getName() . "<br>";
//
//            $products = $comment->getCommentProduct();
//            foreach ($products as $product) {
//                echo $product->getName() . "<br>";
//            }
//
//            echo "<hr>";
//        }
        $comments = "SELECT e FROM MakeupBundle:Comment e";

        $query = $em->createQuery($comments);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 2
        );

        return $this->render(
                        'MakeupBundle:Comments:index.html.twig', [
                    'pagination' => $pagination
        ]);
    }

    public function treatmentsAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $treatment_repos = $em->getRepository("MakeupBundle:Treatment");
//        $treatments = $treatment_repos->findAll();
//
//        foreach ($treatments as $treatment) {
//            echo $treatment->getName() . "<br>";
//            echo $treatment->getDescription() . "<br>";
//
//            $treatmentProductTreatments = $treatment->getTreatmentProductTreatment();
//            foreach ($treatmentProductTreatments as $treatmentProductTreatment) {
//                echo $treatmentProductTreatment->getProduct()->getName() . "<br>";
//            }
//
//            echo "<hr>";
//        }
//        die();
        //return $this->render('MakeupBundle:Default:index.html.twig');
        $treatments = "SELECT e FROM MakeupBundle:Treatment e";

        $query = $em->createQuery($treatments);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 2
        );

        return $this->render(
                        'MakeupBundle:Treatments:index.html.twig', [
                    'pagination' => $pagination
        ]);
    }

    public function langAction(Request $request) {

        return $this->redirectToRoute("makeup_homepage");
    }

}
