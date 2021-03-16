<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use App\Classe\Mail;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
if ($form->isSubmitted()&& $form->isValid()) {
    $this->addFlash('notice','Merci de nous avoir contacté. Notre équipe va vous répondre dans les meilleurs délais.');
    $mail = new Mail();
    $mail->send('vjgold972@gmail.com','Good Morning', 'Vous avez reçu une nouvelle demande contact','Veuillez consulter votre administrateur Good Morning') ;

       
} 

        return $this->render('contact/index.html.twig',[
            'form' => $form->createView()
        ]);

    }
}
