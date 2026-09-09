<?php

declare(strict_types=1);

require_once BASEPATH . '/app/Domain/Event/EventPolicyInterface.php';

// 2026年石膏像デッサン選手権
class PlasterStatueContest2026Policy implements EventPolicyInterface
{
    public function __construct(
        private EmailValidatorInterface $emailValidator,
    )
    {}

    public function eventTitle(): string
    {
        return '2026年石膏像デッサン選手権';
    }

    // １回のチケット申し込みの枚数制限
    // [memo]無制限
    public function validateMaxTicketCount(int $quantity): bool
    {
        return 1 <= $quantity;
    }

    public function validateEmail(string $email): bool
    {
        return $this->emailValidator->validate($email);
    }
}
