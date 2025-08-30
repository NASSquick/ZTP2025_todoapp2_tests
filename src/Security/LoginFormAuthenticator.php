<?php

/*
 This work, including the code samples, is licensed under a Creative Commons BY-SA 3.0 license.
 */

namespace App\Security;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\PasswordUpgradeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

/**
 * Class LoginFormAuthenticator.
 *
 * Handles authentication for the login form.
 */
class LoginFormAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    private UserRepository $userRepository;
    private UrlGeneratorInterface $urlGenerator;

    /**
     * LoginFormAuthenticator constructor.
     *
     * @param UserRepository        $userRepository Repository to fetch users
     * @param UrlGeneratorInterface $urlGenerator   URL generator for redirections
     */
    public function __construct(UserRepository $userRepository, UrlGeneratorInterface $urlGenerator)
    {
        $this->userRepository = $userRepository;
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * Authenticates a user based on the login form data.
     *
     * @param Request $request HTTP request
     *
     * @return Passport The passport containing user credentials and badges
     *
     * @throws CustomUserMessageAuthenticationException When the user email is not found
     */
    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');
        $request->getSession()->set(Security::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email, function ($userIdentifier) {
                $user = $this->userRepository->findOneBy(['email' => $userIdentifier]);

                if (!$user) {
                    throw new CustomUserMessageAuthenticationException('Email could not be found.');
                }

                return $user;
            }),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
                new PasswordUpgradeBadge($request->request->get('password', ''), null),
            ]
        );
    }

    /**
     * Called on successful authentication.
     *
     * @param Request $request      HTTP request
     * @param mixed   $token        Security token
     * @param string  $firewallName The name of the firewall
     *
     * @return RedirectResponse|null Redirect response to the target path or default route
     */
    public function onAuthenticationSuccess(Request $request, $token, string $firewallName): ?RedirectResponse
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        return new RedirectResponse($this->urlGenerator->generate('Photos_index'));
    }

    /**
     * Returns the login URL for the authenticator.
     *
     * @param Request $request HTTP request
     *
     * @return string URL of the login page
     */
    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate('app_login');
    }
}
