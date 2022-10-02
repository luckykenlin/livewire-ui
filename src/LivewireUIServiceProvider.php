<?php

namespace Luckykenlin\LivewireUI;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Luckykenlin\LivewireUI\Commands\LivewireUICommand;

class LivewireUIServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewire-ui')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(LivewireUICommand::class);
    }
}
