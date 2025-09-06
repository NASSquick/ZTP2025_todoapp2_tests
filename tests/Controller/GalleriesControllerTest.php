<?php

namespace App\Tests\Controller;

use App\Controller\GalleriesController;
use App\Entity\Galleries;
use App\Form\GalleriesType;
use App\Service\GalleriesService;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class GalleriesControllerTest extends TestCase
{
    private GalleriesService $galleriesService;
    private GalleriesController $controller;

    protected function setUp(): void
    {
        $this->galleriesService = $this->createMock(GalleriesService::class);
        $this->controller = new GalleriesController($this->galleriesService);
    }

    public function testIndexReturnsResponseWithPagination(): void
    {
        $request = new Request(['page' => 1]);

        $this->galleriesService
            ->method('createPaginatedList')
            ->willReturn('fake-pagination');

        $response = $this->controller->index($request);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertStringContainsString('fake-pagination', $response->getContent() ?? '');
    }

    public function testShowReturnsResponse(): void
    {
        $this->galleriesService
            ->method('getOneWithPhotos')
            ->willReturn('fake-gallery');

        $response = $this->controller->show(1);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertStringContainsString('Galleries', $response->getContent() ?? '');
    }

    public function testCreateSubmitsValidFormAndSavesGallery(): void
    {
        $request = new Request();

        $gallery = new Galleries();

        $form = $this->createMock(FormInterface::class);
        $form->method('handleRequest')->with($request);
        $form->method('isSubmitted')->willReturn(true);
        $form->method('isValid')->willReturn(true);
        $form->method('createView')->willReturn(new FormView());

        $controllerMock = $this->getMockBuilder(GalleriesController::class)
            ->setConstructorArgs([$this->galleriesService])
            ->onlyMethods(['createForm'])
            ->getMock();

        $controllerMock->method('createForm')->willReturn($form);

        $this->galleriesService
            ->expects($this->once())
            ->method('save')
            ->with($this->isInstanceOf(Galleries::class));

        $response = $controllerMock->create($request);

        $this->assertInstanceOf(RedirectResponse::class, $response);
        $this->assertStringContainsString('/Galleries', $response->getTargetUrl());
    }

    public function testEditSubmitsValidFormAndUpdatesGallery(): void
    {
        $request = new Request();
        $gallery = new Galleries();

        $form = $this->createMock(FormInterface::class);
        $form->method('handleRequest')->with($request);
        $form->method('isSubmitted')->willReturn(true);
        $form->method('isValid')->willReturn(true);
        $form->method('createView')->willReturn(new FormView());

        $controllerMock = $this->getMockBuilder(GalleriesController::class)
            ->setConstructorArgs([$this->galleriesService])
            ->onlyMethods(['createForm'])
            ->getMock();

        $controllerMock->method('createForm')->willReturn($form);

        $this->galleriesService
            ->expects($this->once())
            ->method('save')
            ->with($gallery);

        $response = $controllerMock->edit($request, $gallery);

        $this->assertInstanceOf(RedirectResponse::class, $response);
        $this->assertStringContainsString('/Galleries', $response->getTargetUrl());
    }

    public function testDeleteSubmitsValidFormAndDeletesGallery(): void
    {
        $request = new Request();
        $gallery = new Galleries();

        $form = $this->createMock(FormInterface::class);
        $form->method('handleRequest')->with($request);
        $form->method('isSubmitted')->willReturn(true);
        $form->method('isValid')->willReturn(true);
        $form->method('createView')->willReturn(new FormView());
        $form->method('submit');

        $controllerMock = $this->getMockBuilder(GalleriesController::class)
            ->setConstructorArgs([$this->galleriesService])
            ->onlyMethods(['createForm'])
            ->getMock();

        $controllerMock->method('createForm')->willReturn($form);

        $this->galleriesService
            ->expects($this->once())
            ->method('delete')
            ->with($gallery);

        $response = $controllerMock->delete($request, $gallery);

        $this->assertInstanceOf(Response::class, $response);
    }
}
