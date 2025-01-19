<?php

namespace Vormkracht10\MediaField\Commands;

use Illuminate\Console\Command;

class MediaFieldCommand extends Command
{
    public $signature = 'backstage-media-field';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
