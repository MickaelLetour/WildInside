<?php

namespace App\Controller;

use App\Classes\Mail;
use App\Entity\ResetPassword;
use App\Entity\User;
use App\Form\ResetPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ResetPasswordController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    /**
     * ResetPasswordController constructor.
     * @param $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/mot-de-passe-oublie", name="resetPassword")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        if($this->getUser()) {
            return $this->redirectToRoute('home');
        }

        if ($request->get('email')){
            $user = $this->entityManager->getRepository(User::class)->findOneByEmail($request->get('email'));

            if ($user) {
                // 1 : enregistrer en base la demande de reset password avec user, token, createdAt.
                $resetPassword = $user;
                $resetPassword->setToken(uniqid());
                $resetPassword->setCreatedAt(new \DateTime());
                $this->entityManager->persist($resetPassword);
                $this->entityManager->flush();

                // 2 : Envoyer un email à l'utilisateur avec un lien lui permettant de mettre à jour son mot de passe.
                $url = $this->generateUrl('updatePassword', [
                    'token' => $resetPassword->getToken()
                ]);

                $content = "Bonjour ".$user->getFullName()."<br>Vous avez demandé à réinitialiser votre mot de passe sur Wild Inside.<br><br>";
                $content .= 'Merci de bien vouloir cliquer sur le lien suivant pour <a href="wild-inside.fr'.$url.'">mettre à jour votre mot de passe</a>.';

                $mail = new Mail();
                $mail->send($user->getEmail(), $user->getFullName(),'Réinitialiser votre de mot de passe sur wild-inside.fr', $content);

                $this->addFlash('notice', 'Vous allez recevoir très prochainement un mail avec la procédure pour réinitialiser votre mot de passe.');
            } else {
                $this->addFlash('notice', 'Cette adresse email est inconnue.');
            }
        }

        return $this->render('resetPassword/index.html.twig');
    }

    /**
     * @Route("/modifier-mon-mot-de-passe/{token}", name="updatePassword")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @param $token
     * @return Response
     */
    public function update(Request $request, UserPasswordEncoderInterface $encoder, $token):Response
    {
        $resetPassword = $this->entityManager->getRepository(User::class)->findOneByToken($token);

        if (!$resetPassword) {
            return $this->redirectToRoute('resetPassword');
        }

        // Vérifier si le createdAt = now - 30min
        $now = new \DateTime();
        if ($now > $resetPassword->getCreatedAt()->modify('+ 30 min')){
            $this->addFlash('notice', 'Votre demande de mot passe a expiré, merci de la renouveller.');
            return $this->redirectToRoute('resetPassword');
        }

        // Rendre une vue avec mot de passe et confirmez votre mot de passe
        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $new_pwd = $form->get('new_password')->getData();

            // Encodage des mots de passes
            $password = $encoder->encodePassword($resetPassword, $new_pwd);
            $resetPassword->setPassword($password);

            // Flush en base de données
            $this->entityManager->flush();

            // Redirection de l'utilisateur vers la page de connexion
            $this->addFlash('notice', 'Votre mot de passe a bien été mis a jour.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('resetPassword/update.html.twig', [
            'form' => $form->createView()
        ]);

    }
}
