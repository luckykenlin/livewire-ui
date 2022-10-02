<?php

namespace Luckykenlin\LivewireUI;

use Luckykenlin\LivewireUI\Commands\LivewireUICommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
