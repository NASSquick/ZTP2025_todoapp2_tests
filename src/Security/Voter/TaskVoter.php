<?php

namespace App\Security\Voter;

use App\Entity\Comments;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class TaskVoter.
 */
class TaskVoter extends Voter
{
    public const CREATE = 'create';
    public const EDIT = 'edit';
    public const VIEW = 'view';
    public const DELETE = 'delete';

    private Security $security; // <-- declare property here

    /**
     * Constructor.
     *
     * @param Security $security
     */
    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    /**
     * Supports function.
     *
     * @param string $attribute
     * @param mixed  $subject
     *
     * @return bool
     */
    protected function supports($attribute, $subject): bool
    {
        return in_array($attribute, [self::EDIT, self::VIEW, self::DELETE, self::CREATE]);
        // && $subject instanceof Comments;  // Uncomment and customize as needed
    }

    /**
     * Vote on attribute.
     *
     * @param string          $attribute
     * @param mixed           $subject
     * @param TokenInterface  $token
     *
     * @return bool
     */
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token): bool
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
