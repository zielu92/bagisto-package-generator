<?php

namespace Webkul\PackageGenerator\Providers;

use Illuminate\Support\ServiceProvider;
use Webkul\PackageGenerator\Console\Command\PackageMakeCommand;
use Webkul\PackageGenerator\Console\Command\ProviderMakeCommand;
use Webkul\PackageGenerator\Console\Command\ModuleProviderMakeCommand;
use Webkul\PackageGenerator\Console\Command\AdminControllerMakeCommand;
use Webkul\PackageGenerator\Console\Command\ShopControllerMakeCommand;
use Webkul\PackageGenerator\Console\Command\AdminRouteMakeCommand;
use Webkul\PackageGenerator\Console\Command\ShopRouteMakeCommand;
use Webkul\PackageGenerator\Console\Command\MigrationMakeCommand;
use Webkul\PackageGenerator\Console\Command\ModelMakeCommand;
use Webkul\PackageGenerator\Console\Command\ModelProxyMakeCommand;
use Webkul\PackageGenerator\Console\Command\ModelContractMakeCommand;
use Webkul\PackageGenerator\Console\Command\RepositoryMakeCommand;
use Webkul\PackageGenerator\Console\Command\SeederMakeCommand;

class PackageGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerCommands();
    }

    /**
     * Register the console commands of this package
     *
     * @return void
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PackageMakeCommand::class,
                ProviderMakeCommand::class,
                ModuleProviderMakeCommand::class,
                AdminControllerMakeCommand::class,
                ShopControllerMakeCommand::class,
                AdminRouteMakeCommand::class,
                ShopRouteMakeCommand::class,
                MigrationMakeCommand::class,
                ModelMakeCommand::class,
                ModelProxyMakeCommand::class,
                ModelContractMakeCommand::class,
                RepositoryMakeCommand::class,
                SeederMakeCommand::class,
            ]);
        }
    }
}