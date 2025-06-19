<?php
namespace App\Application\User\UseCase;

use App\Application\User\DTO\RegisterUserDTO;
use App\Domain\User\Port\Out\UserRepositoryInterface;
use App\Domain\User\Service\UserDomainService;
use Illuminate\Support\Facades\Hash;
use App\Infrastructure\Job\SendWelcomeEmailJob;
use Illuminate\Support\Facades\Queue;

class RegisterUserUseCase {
    public function __construct(
        protected UserDomainService $domainService,
        protected UserRepositoryInterface $repository
    ) {}
    public function execute(RegisterUserDTO $dto) {
        $entity = $this->domainService->create(
            $dto->name,
            $dto->email,
            Hash::make($dto->password),
            $dto->role
        );

        $saved = $this->repository->save($entity);
        Queue::push(new SendWelcomeEmailJob($saved->email));

        return $saved;
    }
}
