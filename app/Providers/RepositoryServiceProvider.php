<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\JobRepositoryInterface;
use App\Repositories\JobRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(JobRepositoryInterface::class, JobRepository::class);
    }

    public function boot()
    {
        //
    }
}
