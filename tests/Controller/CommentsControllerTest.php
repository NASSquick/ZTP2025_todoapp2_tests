<?php

namespace App\Tests\Controller;

use App\Controller\CommentsController;
use App\Entity\Comments;
use App\Entity\Photos;
use App\Form\CommentsType;
use App\Service\CommentsService;
use App\Service\PhotosService;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class CommentsControllerTest extends TestCase
{
    private CommentsService $commentsService;
    private PhotosService $photosService;
    private CommentsController $controller;

    protected function setUp(): void
    {
        $this->commentsService = $this->createMock(CommentsService::class);
        $this->photosService = $this->createMock(PhotosService::class);

        $this->controller = new CommentsController(
            $this->commentsService,
            $this->photosService
        );
    }

    public function testIndexReturnsResponseWithPagination(): void
    {
        $request = new Request(['page' => 1]);

        $this->commentsService
            ->method('createPaginatedList')
            ->willReturn('fake-pagination');

        $response = $this->controller->index($request);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertStringContainsString('fake-pagination', $response->getContent() ?? '');
    }

    public function testShowReturnsResponse(): void
    {
        $comment = new Comments();
        $response = $this->controller->show($comment);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertStringContainsString('Comments', $response->getContent() ?? '');
    }

    public function testCreateRedirectsWhenPhotoNotFound(): void
    {
        $request = new Request();

        $this->photosService
            ->method('getOne')
            ->willReturn(null);

        $response = $this->controller->create($request, 123);

        $this->assertInstanceOf(RedirectResponse::class, $response);
        $this->assertStringContainsString('/Comments', $response->getTargetUrl());
    }

    public function testCreateSubmitsValidFormAndSavesComment(): void
    {
        $request = new Request([], ['comments' => ['nick' => 'John', 'email' => 'john@example.com', 'text' => 'Hello']]);
        $photo = $this->createMock(Photos::class);

        $this->photosService
            ->method('getOne')
            ->willReturn($photo);

        $comment = new Comments();

        // Mock form
        $form = $this->createMock(FormInterface::class);
        $form->method('handleRequest')->with($request);
        $form->method('isSubmitted')->willReturn(true);
        $form->method('isValid')->willReturn(true);
        $form->method('createView')->willReturn(new FormView());

        // Mock controller method createForm to return our form
        $controllerMock = $this->getMockBuilder(CommentsController::class)
            ->setConstructorArgs([$this->commentsService, $this->photosService])
            ->onlyMethods(['createForm'])
            ->getMock();

        $controllerMock->method('createForm')->willReturn($form);
        $controllerMock->method('generateUrl')->willReturn('/Comments/create/1/photo');

        $this->commentsService
            ->expects($this->once())
            ->method('save')
            ->with($this->isInstanceOf(Comments::class));

        $response = $controllerMock->create(new Request(), 1);

        $this->assertInstanceOf(RedirectResponse::class, $response);
        $this->assertStringContainsString('/Comments', $response->getTargetUrl());
    }

    public function testDeleteSubmitsValidFormAndDeletesComment(): void
    {
        $comment = new Comments();
        $request = new Request();

        // Mock form
        $form = $this->createMock(FormInterface::class);
        $form->method('handleRequest')->with($request);
        $form->method('isSubmitted')->willReturn(true);
        $form->method('isValid')->willReturn(true);
        $form->method('createView')->willReturn(new FormView());
        $form->method('submit');

        // Mock controller
        $controllerMock = $this->getMockBuilder(CommentsController::class)
            ->setConstructorArgs([$this->commentsService, $this->photosService])
            ->onlyMethods(['createForm'])
            ->getMock();

        $controllerMock->method('createForm')->willReturn($form);

        $this->commentsService
            ->expects($this->once())
            ->method('delete')
            ->with($comment);

        $response = $controllerMock->delete($request, $comment);

        $this->assertInstanceOf(Response::class, $response);
    }
}
