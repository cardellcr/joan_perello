<?php

namespace Web\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Web\WebBundle\Entity\Message;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
class DefaultController extends Controller
{    

    /**
    * @Route("/index/{language}")
    * @Template()
    */
    public function indexAction()
    {   
        return $this->render('WebWebBundle:Default:index.html.twig');
    }

    public function qui_somAction()
    {   
        return $this->render('WebWebBundle:Default:qui_som.html.twig');
    }

    public function feinesAction()
    {
        return $this->render('WebWebBundle:Default:feines.html.twig');
    }

    public function new_messageAction(Request $request)
    {
        $message = new Message();

        $form = $this->createFormBuilder($message)
            ->add('name', 'text')
            ->add('mail', 'text')
            ->add('telefon', 'text')
            ->add('description', 'textarea')
            ->add('date', 'date')
            ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($message);
                $em->flush();

                return $this->redirect($this->generateUrl('index'));
            }
        }
    }

    public function presupostAction(Request $request)
    {
        $message = new Message();

        $form = $this->createFormBuilder($message)
            ->add('name', 'text')
            ->add('mail', 'text')
            ->add('telefon', 'text')
            ->add('description', 'textarea')
            ->getForm();
	
        return $this->render('WebWebBundle:Default:presupost.html.twig', array(
            'form' => $form->createView(),
    	));

    }

}
