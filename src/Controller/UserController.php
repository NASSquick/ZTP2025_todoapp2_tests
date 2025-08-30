<?php

/**
 * This file is part of the TODO App project.
 *
 * (c) Hlib Ivanov.
 *
 * For license information, see the LICENSE file.
 */

namespace App\Controller;

use App\Form\UserType;
use App\Service\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class UserController.
 * Handles user-related actions like editing profile.
 */
#[Route('/User')]
class UserController extends AbstractController
{
    private UserService $userService;

    /**
     * UserController constructor.
     *
     * @param UserService $userService the user service instance
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Edit the currently logged-in user's profile.
     *
     * @param Request $request the current HTTP request
     *
     * @return Response the response object
     */
    #[Route('/admin/user/edit', name: 'User_edit', methods: ['GET', 'PUT'])]
    public function edit(Request $request): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(UserType::class, $user, [
            'method' => 'PUT',
            'required' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newPlainPassword = $form->get('newPassword')->getData();
            $this->userService->save($user, $newPlainPassword);

            $this->addFlash('success', 'message_updated_successfully');

            return $this->redirectToRoute('User_edit');
        }

        return $this->render('User/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
