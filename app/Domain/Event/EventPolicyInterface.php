<?php

declare(strict_types=1);

interface EventPolicyInterface
{
    public function eventTitle(): string;

    // １回のチケット申し込みの枚数制限
    public function validateMaxTicketCount(int $quantity): bool;

    //
    public function validateEmail(string $email): bool;
}

