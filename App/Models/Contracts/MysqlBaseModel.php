<?php

namespace App\Models\Contracts;

use Medoo\Medoo;

class MysqlBaseModel extends BaseModel
{
    protected function __construct()
    {
        try {
            $database = new Medoo([
                // [required]
                'type' => 'mysql',
                'host' => $_ENV['DB_HOST'],
                'database' => $_ENV['DB_NAME'],
                'username' => $_ENV['DB_USER'],
                'password' => $_ENV['DB_PASS'],

                // [optional]
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_general_ci',
                'port' => 3306,

                // [optional] Table prefix, all table names will be prefixed as PREFIX_table.
                'prefix' => '',

                // [optional] Enable logging, it is disabled by default for better performance.
                'logging' => true,

                // [optional]
                // Error mode
                // Error handling strategies when error is occurred.
                // PDO::ERRMODE_SILENT (default) | PDO::ERRMODE_WARNING | PDO::ERRMODE_EXCEPTION
                // Read more from https://www.php.net/manual/en/pdo.error-handling.php.
                'error' => \PDO::ERRMODE_EXCEPTION,

                // [optional]
                // The driver_option for connection.
                // Read more from http://www.php.net/manual/en/pdo.setattribute.php.
                'option' => [
                    \PDO::ATTR_CASE => \PDO::CASE_NATURAL
                ],

                // [optional] Medoo will execute those commands after connected to the database.
                'command' => [
                    'SET SQL_MODE=ANSI_QUOTES'
                ]
            ]);
        } catch (\PDOException $e) {
            echo "Connection failed" . $e->getM;
        }
    }


    public function create(array $data): int
    {
        $this->connection->insert($this->table,$data);
        return  $this->connection->id();
    }
    public function find($id): object
    {
        return (object)[];
    }
    public function get(array $columns, array $where): array
    {
        return [];
    }
    public function update(array $data, array $where): int
    {
        return 1;
    }
    public function delete(array $where): int
    {
        return 1;
    }
}
