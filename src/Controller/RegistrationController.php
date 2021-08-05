<?php

namespace App\Controller;

use App\DataFixtures\UserFixtures;
use App\Entity\User;
use App\Form\UserReg;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/registration", name="registration")
     */
    public function index(Request $request, UserFixtures $userFixtures): Response
    {
        $user = new User();

        $form = $this->createForm(UserReg::class,$user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $userFixtures->hashNrole($user);
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('app_login',[],Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('registration/_form.html.twig', [
            'form'=>$form
        ]);
    }
}
