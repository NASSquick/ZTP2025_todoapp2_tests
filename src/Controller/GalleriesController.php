<?php

/**
 * This file is part of the TODO App project.
 *
 * (c) Hlib Ivanov.
 *
 * For license information, see the LICENSE file.
 */

namespace App\Controller;

use App\Entity\Galleries;
use App\Form\GalleriesType;
use App\Service\GalleriesService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller responsible for managing galleries.
 */
#[Route('/Galleries')]
class GalleriesController extends AbstractController
{
    private GalleriesService $galleriesService;

    /**
     * GalleriesController constructor.
     *
     * @param GalleriesService $galleriesService service for handling galleries
     */
    public function __construct(GalleriesService $galleriesService)
    {
        $this->galleriesService = $galleriesService;
    }

    /**
     * List all galleries with pagination.
     *
     * @param Request $request the HTTP request
     *
     * @return Response the response object
     */
    #[Route('/', name: 'Galleries_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $pagination = $this->galleriesService->createPaginatedList($request->query->getInt('page', 1));

        return $this->render('Galleries/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    /**
     * Display a single gallery with photos.
     *
     * @param int $id the gallery ID
     *
     * @return Response the response object
     */
    #[Route('/{id}', name: 'Galleries_show', methods: ['GET'], requirements: ['id' => '[1-9]\d*'])]
    public function show(int $id): Response
    {
        $galleries = $this->galleriesService->getOneWithPhotos($id);

        return $this->render('Galleries/show.html.twig', [
            'Galleries' => $galleries,
        ]);
    }

    /**
     * Create a new gallery.
     *
     * @param Request $request the HTTP request
     *
     * @return Response the response object
     */
    #[Route('/create', name: 'galleries_create', methods: ['GET', 'POST'])]
    public function create(Request $request): Response
    {
        $galleries = new Galleries();
        $this->denyAccessUnlessGranted('create', $galleries);

        $form = $this->createForm(GalleriesType::class, $galleries);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->galleriesService->save($galleries);
            $this->addFlash('success', 'message_created_successfully');

            return $this->redirectToRoute('Galleries_index');
        }

        return $this->render('Galleries/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Edit an existing gallery.
     *
     * @param Request   $request   the HTTP request
     * @param Galleries $galleries the gallery entity
     *
     * @return Response the response object
     */
    #[Route('/{id}/edit', name: 'galleries_edit', methods: ['GET', 'PUT'], requirements: ['id' => '[1-9]\d*'])]
    public function edit(Request $request, Galleries $galleries): Response
    {
        $this->denyAccessUnlessGranted('edit', $galleries);

        $form = $this->createForm(GalleriesType::class, $galleries, ['method' => 'PUT']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->galleriesService->save($galleries);
            $this->addFlash('success', 'message_updated_successfully');

            return $this->redirectToRoute('Galleries_index');
        }

        return $this->render('Galleries/edit.html.twig', [
            'form' => $form->createView(),
            'Galleries' => $galleries,
        ]);
    }

    /**
     * Delete a gallery.
     *
     * @param Request   $request   the HTTP request
     * @param Galleries $galleries the gallery entity
     *
     * @return Response the response object
     */
    #[Route('/{id}/delete', name: 'Galleries_delete', methods: ['GET', 'DELETE'], requirements: ['id' => '[1-9]\d*'])]
    public function delete(Request $request, Galleries $galleries): Response
    {
        $this->denyAccessUnlessGranted('delete', $galleries);

        $form = $this->createForm(FormType::class, $galleries, ['method' => 'DELETE']);
        $form->handleRequest($request);

        if ($request->isMethod('DELETE') && !$form->isSubmitted()) {
            $form->submit($request->request->get($form->getName()));
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $this->galleriesService->delete($galleries);
            $this->addFlash('success', 'message.deleted_successfully');

            return $this->redirectToRoute('Galleries_index');
        }

        return $this->render('Galleries/delete.html.twig', [
            'form' => $form->createView(),
            'Galleries' => $galleries,
        ]);
    }
}
