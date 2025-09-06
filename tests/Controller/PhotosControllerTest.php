<?php

namespace App\Tests\Controller;

use App\Controller\PhotosController;
use App\Entity\Photos;
use App\Form\PhotosType;
use App\Service\PhotosService;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class PhotosControllerTest extends TestCase
{
    private PhotosService $photosService;
    private PhotosController $controller;

    protected function setUp(): void
    {
        $this->photosService = $this->createMock(PhotosService::class);
        $this->controller = new PhotosController($this->photosService);
    }

    public function testIndexReturnsResponseWithPagination(): void
    {
        $request = new Request(['page' => 1]);

        $this->photosService
            ->method('createPaginatedList')
            ->willReturn('fake-pagination');

        $response = $this->controller->index($request);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertStringContainsString('fake-pagination', $response->getContent() ?? '');
    }

    public function testShowReturnsResponse(): void
    {
        $this->photosService
            ->method('getOneWithComments')
            ->willReturn('fake-photo');

        $response = $this->controller->show(1);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertStringContainsString('Photos', $response->getContent() ?? '');
    }

    public function testCreateSubmitsValidFormAndSavesPhoto(): void
    {
        $request = new Request();
        $photo = new Photos();

        $form = $this->createMock(FormInterface::class);
        $form->method('handleRequest')->with($request);
        $form->method('isSubmitted')->willReturn(true);
        $form->method('isValid')->willReturn(true);
        $form->method('createView')->willReturn(new FormView());
        $form->method('get')->willReturnSelf(); // mock get('file')
        $form->method('getData')->willReturn('fake-file');

        $controllerMock = $this->getMockBuilder(PhotosController::class)
            ->setConstructorArgs([$this->photosService])
            ->onlyMethods(['createForm'])
            ->getMock();

        $controllerMock->method('createForm')->willReturn($form);

        $this->photosService
            ->expects($this->once())
            ->method('save')
            ->with($photo, 'fake-file');

        $response = $controllerMock->create($request);

        $this->assertInstanceOf(RedirectResponse::class, $response);
        $this->assertStringContainsString('/Photos', $response->getTargetUrl());
    }

    public function testEditSubmitsValidFormAndUpdatesPhoto(): void
    {
        $request = new Request();
        $photo = new Photos();

        $form = $this->createMock(FormInterface::class);
        $form->method('handleRequest')->with($request);
        $form->method('isSubmitted')->willReturn(true);
        $form->method('isValid')->willReturn(true);
        $form->method('createView')->willReturn(new FormView());
        $form->method('get')->willReturnSelf(); // mock get('file')
        $form->method('getData')->willReturn('fake-file');

        $controllerMock = $this->getMockBuilder(PhotosController::class)
            ->setConstructorArgs([$this->photosService])
            ->onlyMethods(['createForm'])
            ->getMock();

        $controllerMock->method('createForm')->willReturn($form);

        $this->photosService
            ->expects($this->once())
            ->method('save')
            ->with($photo, 'fake-file');

        $response = $controllerMock->edit($request, $photo);

        $this->assertInstanceOf(RedirectResponse::class, $response);
        $this->assertStringContainsString('/Photos', $response->getTargetUrl());
    }

    public function testDeleteSubmitsValidFormAndDeletesPhoto(): void
    {
        $request = new Request();
        $photo = new Photos();

        $form = $this->createMock(FormInterface::class);
        $form->method('handleRequest')->with($request);
        $form->method('isSubmitted')->willReturn(true);
        $form->method('isValid')->willReturn(true);
        $form->method('createView')->willReturn(new FormView());
        $form->method('submit');

        $controllerMock = $this->getMockBuilder(PhotosController::class)
            ->setConstructorArgs([$this->photosService])
            ->onlyMethods(['createForm'])
            ->getMock();

        $controllerMock->method('createForm')->willReturn($form);

        $this->photosService
            ->expects($this->once())
            ->method('delete')
            ->with($photo);

        $response = $controllerMock->delete($request, $photo);

        $this->assertInstanceOf(Response::class, $response);
    }
}
