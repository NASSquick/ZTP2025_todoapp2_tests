<?php

/*
 This work, including the code samples, is licensed under a Creative Commons BY-SA 3.0 license.
 */

namespace App\Security\Voter;

use App\Entity\Comments;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class TaskVoter.
 *
 * Handles authorization logic for tasks/comments.
 */
class TaskVoter extends Voter
{
    public const CREATE = 'create';
    public const EDIT = 'edit';
    public const VIEW = 'view';
    public const DELETE = 'delete';

    private Security $security;

    /**
     * TaskVoter constructor.
     *
     * @param Security $security Symfony Security service
     */
    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    /**
     * Determines if the voter supports a given attribute and subject.
     *
     * @param string $attribute The attribute to check (e.g., 'create', 'edit')
     * @param mixed  $subject   The subject of the authorization (e.g., Comments entity)
     *
     * @return bool True if this voter supports the attribute and subject
     */
    protected function supports(string $attribute, mixed $subject): bool
    {
        return in_array($attribute, [
            self::EDIT,
            self::VIEW,
            self::DELETE,
            self::CREATE,
        ]);
        // && $subject instanceof Comments;  // Uncomment and customize as needed
    }

    /**
     * Performs the authorization logic for a supported attribute.
     *
     * @param string         $attribute The attribute to check
     * @param mixed          $subject   The subject of the authorization
     * @param TokenInterface $token     Security token
     *
     * @return bool True if access is granted, false otherwise
     */
    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof UserInterface) {
            return false;
        }

        if (in_array('ROLE_ADMIN', $user->getRoles()) || (self::CREATE === $attribute && $subject instanceof Comments)) {
            return true;
        }

        return false;
    }
}
