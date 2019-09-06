<?php

namespace Sagirba\ClickhouseMigrations\Console;

class MigrationCreate extends \Illuminate\Console\Command
{
    
    /**
     *
     * @var string
     */
    protected $signature = 'clickhouse:migration:create {name}';
    
    /**
     *
     * @var string
     */
    protected $description = 'Create clickhouse migrations';

    /**
     * 
     * Create migration handle
     */
    public function handle()
    {
        $migrationService = new \Sagirba\ClickhouseMigrations\Migrations\MigrationService();
        if ($migrationService->create($this->argument('name'))) {
            $this->info('Migration created successfully');
        }
    }
    
}
