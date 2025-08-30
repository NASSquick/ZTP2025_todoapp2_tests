<?php

/**
 * This file is part of the TODO App project.
 *
 * (c) Hlib Ivanov.
 *
 * For license information, see the LICENSE file.
 */

namespace App\Controller;

use App\Entity\Photos;
use App\Form\PhotosType;
use App\Service\PhotosService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

/**
 * Controller responsible for managing photos.
 */
#[Route('/Photos')]
class PhotosController extends AbstractController
{
    private PhotosService $photosService;

    /**
     * Constructor.
     *
     * @param PhotosService $photosService the photos service
     */
    public function __construct(PhotosService $photosService)
    {
        $this->photosService = $photosService;
    }

    /**
     * List paginated photos.
     *
     * @param Request $request the current HTTP request
     *
     * @return Response the response object
     */
    #[Route('/', name: 'Photos_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $pagination = $this->photosService->createPaginatedList($request->query->getInt('page', 1));

        return $this->render('Photos/index.html.twig', ['pagination' => $pagination]);
    }

    /**
     * Show a single photo with its comments.
     *
     * @param int $id the photo identifier
     *
     * @return Response the response object
     */
    #[Route('/{id}', name: 'Photos_show', methods: ['GET'], requirements: ['id' => '[1-9]\d*'])]
    public function show(int $id): Response
    {
        $photos = $this->photosService->getOneWithComments($id);

        return $this->render('Photos/show.html.twig', ['Photos' => $photos]);
    }

    /**
     * Create a new photo.
     *
     * @param Request $request the current HTTP request
     *
     * @return Response the response object
     */
    #[Route('/create', name: 'photos_create', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function create(Request $request): Response
    {
        $photos = new Photos();
        $this->denyAccessUnlessGranted('edit', $photos);

        $form = $this->createForm(PhotosType::class, $photos, ['required' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->photosService->save($photos, $form->get('file')->getData());
            $this->addFlash('success', 'message_created_successfully');

            return $this->redirectToRoute('Photos_index');
        }

        return $this->render('Photos/create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * Edit an existing photo.
     *
     * @param Request $request the current HTTP request
     * @param Photos  $photos  the photo entity
     *
     * @return Response the response object
     */
    #[Route('/{id}/edit', name: 'Photos_edit', methods: ['GET', 'PUT'], requirements: ['id' => '[1-9]\d*'])]
    public function edit(Request $request, Photos $photos): Response
    {
        $this->denyAccessUnlessGranted('edit', $photos);

        $form = $this->createForm(PhotosType::class, $photos, ['method' => 'PUT', 'required' => false]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->photosService->save($photos, $form->get('file')->getData());
            $this->addFlash('success', 'message_updated_successfully');

            return $this->redirectToRoute('Photos_index');
        }

        return $this->render('Photos/edit.html.twig', [
            'form' => $form->createView(),
            'Photos' => $photos,
        ]);
    }

    /**
     * Delete a photo.
     *
     * @param Request $request the current HTTP request
     * @param Photos  $photos  the photo entity
     *
     * @return Response the response object
     */
    #[Route('/{id}/delete', name: 'Photos_delete', methods: ['GET', 'DELETE'], requirements: ['id' => '[1-9]\d*'])]
    public function delete(Request $request, Photos $photos): Response
    {
        $this->denyAccessUnlessGranted('delete', $photos);

        $form = $this->createForm(FormType::class, $photos, ['method' => 'DELETE']);
        $form->handleRequest($request);

        if ($request->isMethod('DELETE') && !$form->isSubmitted()) {
            $form->submit($request->request->get($form->getName()));
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $this->photosService->delete($photos);
            $this->addFlash('success', 'message.deleted_successfully');

            return $this->redirectToRoute('Photos_index');
        }

        return $this->render('Photos/delete.html.twig', [
            'form' => $form->createView(),
            'Photos' => $photos,
        ]);
    }
}
