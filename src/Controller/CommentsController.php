<?php

namespace App\Controller;

use App\Entity\Comments;
use App\Form\CommentsFormType;
use App\Form\CommentsType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentsController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/commentaires", name="comments")
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {

        $comments = $paginator->paginate(
            $this->entityManager->getRepository(Comments::class)->findAll(),
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('comments/index.html.twig', [
            'comments' => $comments
        ]);
    }

    /**
     * @Route("/commentaires/nouveau", name="newComment")
     * @param Request $request
     */
    public function new(Request $request){

        $comment = new Comments();
        $form = $this->createForm(CommentsFormType::class, $comment);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->entityManager->persist($comment);
            $this->entityManager->flush();
            $this->addFlash('success', 'Commentaire envoyé avec succès');
            return $this->redirectToRoute('comments');
        }

        return $this->render('comments/new.html.twig', [
            'comment' => $comment,
            'form' => $form->createView()
        ]);
    }

}
