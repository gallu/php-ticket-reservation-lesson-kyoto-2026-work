<?php

declare(strict_types=1);

interface EmailValidatorInterface
{
    public function validate(string $email): bool;
}
