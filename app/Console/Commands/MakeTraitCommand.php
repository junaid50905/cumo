<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeTraitCommand extends Command
{
    protected $signature = 'make:trait {name : The name of the trait}';

    protected $description = 'Create a new trait file';

    public function handle()
    {
        $name = $this->argument('name');
        $traitClass = ucfirst($name) . 'Trait';

        $path = app_path("Traits/{$traitClass}.php");

        if (File::exists($path)) {
            $this->error('Trait already exists!');
            return;
        }

        $content = <<<EOD
        <?php

        namespace App\Traits;

        use Illuminate\Support\Collection;

        trait {$traitClass}
        {
            // Add your trait methods here...
        }
        EOD;

        File::put($path, $content);

        $this->info('Trait created successfully: ' . $path);
    }
}
