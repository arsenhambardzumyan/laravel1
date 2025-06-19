<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\User\Port\Out\UserRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\EloquentUserRepository;

class RepositoryServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);
    }
}
