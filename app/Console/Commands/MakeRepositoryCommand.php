<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeRepositoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new repository';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $repositoryClass = ucwords($name) . 'Repository';

        $path = app_path("Repositories/{$repositoryClass}.php");

        if (File::exists($path)) {
            $this->error('Repository already exists!');
            return Command::FAILURE;
        }

        $stub = file_get_contents(__DIR__ . '/stubs/Repository.stub');
        $stub = str_replace('{{class}}', $repositoryClass, $stub);

        File::put($path, $stub);

        $this->info('Repository created successfully.');
        return Command::SUCCESS;
    }
}
