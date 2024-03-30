<?php

namespace Hoyvoy\CrossDatabase\Connectors;

use Hoyvoy\CrossDatabase\MariaDbConnection;
use Hoyvoy\CrossDatabase\MySqlConnection;
use Hoyvoy\CrossDatabase\PostgresConnection;
use Hoyvoy\CrossDatabase\SqlServerConnection;
use Illuminate\Database\Connection;

class ConnectionFactory extends \Illuminate\Database\Connectors\ConnectionFactory
{
    /**
     * @param string       $driver
     * @param \Closure|\PDO $connection
     * @param string       $database
     * @param string       $prefix
     * @param array        $config
     *
     * @return \Illuminate\Database\ConnectionInterface
     */
    protected function createConnection($driver, $connection, $database, $prefix = '', array $config = [])
    {
        if ($resolver = Connection::getResolver($driver)) {
            return $resolver($connection, $database, $prefix, $config);
        }

        return match ($driver) {
            'mysql' => new MySqlConnection($connection, $database, $prefix, $config),
            'mariadb' => new MariaDbConnection($connection, $database, $prefix, $config),
            'pgsql' => new PostgresConnection($connection, $database, $prefix, $config),
            'sqlsrv' => new SqlServerConnection($connection, $database, $prefix, $config),
        };

        return parent::createConnection($driver, $connection, $database, $prefix, $config);
    }
}
