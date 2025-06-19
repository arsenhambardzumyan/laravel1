<?php

namespace App\Domain\User\ValueObject;

final class Email {
    public function __construct(private readonly string $email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("Invalid email: {$email}");
        }
    }
    public function value(): string { return $this->email; }
    public function __toString(): string { return $this->email; }
}
