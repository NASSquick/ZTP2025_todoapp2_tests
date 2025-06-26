<?php

namespace App\Controller;

use App\Entity\Galleries;
use App\Form\GalleriesType;
use App\Service\GalleriesService;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/Galleries')]
class GalleriesController extends AbstractController
{
    private GalleriesService $galleriesService;

    public function __construct(GalleriesService $galleriesService)
    {
        $this->galleriesService = $galleriesService;
    }

    #[Route('/', name: 'Galleries_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $pagination = $this->galleriesService->createPaginatedList($request->query->getInt('page', 1));

        return $this->render('Galleries/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    #[Route('/{id}', name: 'Galleries_show', methods: ['GET'], requirements: ['id' => '[1-9]\d*'])]
    public function show(int $id): Response
    {
        $galleries = $this->galleriesService->getOneWithPhotos($id);

        return $this->render('Galleries/show.html.twig', [
            'Galleries' => $galleries,
        ]);
    }

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
