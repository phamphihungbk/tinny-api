<?php

namespace TinnyApi\Mysql;

use Illuminate\Database\DatabaseManager;
use Illuminate\Database\MySqlConnection;
use TinnyApi\Contracts\DatabaseConnectionFactory;

class ConnectionFactory implements DatabaseConnectionFactory
{
    /**
     * @var DatabaseManager
     */
    private $dbManager;

    public function __construct(DatabaseManager $dbManager)
    {
        $this->dbManager = $dbManager;
    }

    /**
     * @return MySqlConnection
     */
    public function create(): MySqlConnection
    {
        $this->dbManager->connection('mysql');
    }
}
