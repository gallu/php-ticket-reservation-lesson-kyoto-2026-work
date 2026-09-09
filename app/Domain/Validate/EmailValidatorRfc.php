<?php

declare(strict_types=1);

require_once BASEPATH . '/app/Domain/Validate/EmailValidatorInterface.php';

class EmailValidatorRfc implements EmailValidatorInterface
{
    public function validate(string $email): bool
    {
        return false !== filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
