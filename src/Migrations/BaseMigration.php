<?php

namespace Sagirba\ClickhouseMigrations\Migrations;

abstract class BaseMigration implements MigrationInterface
{
    
    /**
     * 
     * @return \ClickHouseDB\Client
     */
    protected function getClient(): \ClickHouseDB\Client
    {
        return \Sagirba\ClickhouseMigrations\Clickhouse::client();
    }
    
}
