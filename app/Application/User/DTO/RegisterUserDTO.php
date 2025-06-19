<?php

namespace App\Application\User\DTO;

use App\Domain\User\Enum\UserRole;
use App\Domain\User\ValueObject\Email;

class RegisterUserDTO
{
    public function __construct(
        public string   $name,
        public Email    $email,
        public string   $password,
        public UserRole $role,
    )
    {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['name'],
            $data['email'],
            $data['password'],
            $data['role'] ?? UserRole::USER);
    }
}
