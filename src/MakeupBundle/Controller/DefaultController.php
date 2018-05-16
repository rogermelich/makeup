<?php

namespace MakeupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('MakeupBundle:Default:index.html.twig');
    }

    public function productsAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $product_repos = $em->getRepository("MakeupBundle:Product");
        $products = $product_repos->findAll();

        foreach ($products as $product) {
            echo $product->getName() . "<br>";
            echo $product->getDescription() . "<br>";
            //echo $product->getComment()->getName() . "<br>";

            $treatments = $product->getProductTreatment();
            foreach ($treatments as $treatment) {
                echo $treatment->getTreatment()->getName() . "<br>";
            }

            echo "<hr>";
        }
        die();

        //return $this->render('MakeupBundle:Default:index.html.twig');
    }

    public function CommentsAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $comment_repos = $em->getRepository("MakeupBundle:Comment");
        $comments = $comment_repos->findAll();

        foreach ($comments as $comment) {
            echo $comment->getComment() . "<br>";
            echo $comment->getUser()->getName() . "<br>";

            $products = $comment->getCommentProduct();
            foreach ($products as $product) {
                echo $product->getName() . "<br>";
            }

            echo "<hr>";
        }
        die();
        //return $this->render('MakeupBundle:Default:index.html.twig');
    }

    public function treatmentsAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $treatment_repos = $em->getRepository("MakeupBundle:Treatment");
        $treatments = $treatment_repos->findAll();

        foreach ($treatments as $treatment) {
            echo $treatment->getName() . "<br>";
            echo $treatment->getDescription() . "<br>";

            $treatmentProductTreatments = $treatment->getTreatmentProductTreatment();
            foreach ($treatmentProductTreatments as $treatmentProductTreatment) {
                echo $treatmentProductTreatment->getProduct()->getName() . "<br>";
            }

            echo "<hr>";
        }
        die();
        //return $this->render('MakeupBundle:Default:index.html.twig');
    }

}
