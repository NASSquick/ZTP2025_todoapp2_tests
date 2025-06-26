<?php

namespace App\Controller;

use App\Entity\Photos;
use App\Form\PhotosType;
use App\Service\PhotosService;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/Photos')]
class PhotosController extends AbstractController
{
    private PhotosService $photosService;

    public function __construct(PhotosService $photosService)
    {
        $this->photosService = $photosService;
    }

    #[Route('/', name: 'Photos_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $pagination = $this->photosService->createPaginatedList($request->query->getInt('page', 1));

        return $this->render('Photos/index.html.twig', ['pagination' => $pagination]);
    }

    #[Route('/{id}', name: 'Photos_show', methods: ['GET'], requirements: ['id' => '[1-9]\d*'])]
    public function show(int $id): Response
    {
        $photos = $this->photosService->getOneWithComments($id);

        return $this->render('Photos/show.html.twig', ['Photos' => $photos]);
    }

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
