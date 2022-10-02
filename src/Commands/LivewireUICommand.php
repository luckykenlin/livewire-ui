<?php

namespace Luckykenlin\LivewireUI\Commands;

use Illuminate\Console\Command;

class LivewireUICommand extends Command
{
    public $signature = 'livewireui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
