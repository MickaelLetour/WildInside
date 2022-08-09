<?php

namespace App\Controller;

use App\Services\Mail;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isSubmitted()){
            $this->addFlash('notice', 'Merci de m\'avoir contacté. Je vous répondrai dans les meilleurs délais.');

            //Mis en place de l'envoie d'email de contact
            $data = $form->getData();

            $content = $data['prenom']." ".$data['nom']."<br>";
            $content .= $data['email']."<br><br>";
            $content .= $data['content'];

            $mail = new Mail();
            $mail->send('mickael.letour@gmail.com' , 'Mickael' , 'Vous avez un mail de Wild Inside', $content);
        }
        return $this->render('contact/index.html.twig',[
            'form' => $form->createView()
        ]);
    }
}
