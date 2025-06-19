<?php

namespace App\Infrastructure\Controller\Api;

use App\Application\User\DTO\RegisterUserDTO;
use App\Application\User\UseCase\RegisterUserUseCase;
use App\Infrastructure\Request\RegisterUserRequest;
use App\Infrastructure\Resource\UserResource;

class RegisterController {
    public function __construct(protected RegisterUserUseCase $useCase) {}

    public function __invoke(RegisterUserRequest $request) {
        $dto = RegisterUserDTO::fromArray($request->validated());
        $user = $this->useCase->execute($dto);
        return new UserResource($user);
    }
}
