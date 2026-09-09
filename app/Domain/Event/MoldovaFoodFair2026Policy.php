<?php

declare(strict_types=1);

require_once BASEPATH . '/app/Domain/Event/EventPolicyInterface.php';

// 2026年モルドバ料理フェア
class MoldovaFoodFair2026Policy implements EventPolicyInterface
{
    public function __construct(
        private EmailValidatorInterface $emailValidator,
    )
    {}

    public function eventTitle(): string
    {
        return '2026年モルドバ料理フェア';
    }

    // １回のチケット申し込みの枚数制限
    // [memo]5枚まで
    public function validateMaxTicketCount(int $quantity): bool
    {
        return 1 <= $quantity && $quantity <= 5;
    }

    public function validateEmail(string $email): bool
    {
        return $this->emailValidator->validate($email);
    }
}
