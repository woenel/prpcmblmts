<?php

namespace Woenel\Prpcmblmts\Commands;

use Illuminate\Console\Command;

class RunPrpcmblmts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'philippines:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run PRPCMBLMTS.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Publishing PRPCMBLMTS migrations...');

        $this->call('vendor:publish', ['--provider' => \Woenel\Prpcmblmts\ServiceProvider::class, '--tag' => 'prpcmblmts-migrations']);

        $this->info('Migrating PRPCMBLMTS...');

        $this->call('migrate', ['--path' => '/database/migrations/prpcmblmts']);

        $this->info('Running PRPCMBLMTS seeders...');

        $this->call('db:seed', ['--class' => \Woenel\Prpcmblmts\Database\Seeders\PrpcmblmtsSeeder::class]);

        $this->info('PRPCMBLMTS is now ready! You may check the README.md for guides and information.');

        return Command::SUCCESS;
    }
}
