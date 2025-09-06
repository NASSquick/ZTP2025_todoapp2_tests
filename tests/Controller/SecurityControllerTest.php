<?php

namespace App\Tests\Controller;

use App\Controller\SecurityController;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityControllerTest extends TestCase
{
    public function testLoginReturnsResponseWithErrorAndLastUsername(): void
    {
        $authUtils = $this->createMock(AuthenticationUtils::class);
        $authUtils->method('getLastAuthenticationError')->willReturn('fake-error');
        $authUtils->method('getLastUsername')->willReturn('fake-user');

        $controller = new SecurityController();
        $response = $controller->login($authUtils);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertStringContainsString('fake-error', $response->getContent() ?? '');
        $this->assertStringContainsString('fake-user', $response->getContent() ?? '');
    }

    public function testLogoutThrowsLogicException(): void
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('This method can be blank');

        $controller = new SecurityController();
        $controller->logout();
    }
}
