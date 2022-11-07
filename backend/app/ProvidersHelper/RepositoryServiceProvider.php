<?php

namespace App\ProvidersHelper;

use App\Repositories\User\UserInterface;
use App\Repositories\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UserInterface::class,
            UserRepository::class);
    }
}
