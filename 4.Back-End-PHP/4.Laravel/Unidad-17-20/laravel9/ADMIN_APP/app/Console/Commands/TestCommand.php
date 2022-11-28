<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Aquí amplio la información de mi comando';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // echo "Hola";
        return Command::SUCCESS;
    }
}
