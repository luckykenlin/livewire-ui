<?php

namespace Luckykenlin\LivewireUI\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Luckykenlin\LivewireUI\LivewireUIServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Luckykenlin\\LivewireUI\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LivewireUIServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_livewireui_table.php.stub';
        $migration->up();
        */
    }
}
