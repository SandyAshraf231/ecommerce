<?php
namespace App\Database\Config;

class Connection {
    private string $db_hostname = 'localhost';
    private string $db_username = 'root';
    private string $db_password = '';
    private string $db_name = 'ecommerce';
    public \mysqli $con;

    public function __construct() {
        $this->con = new \mysqli($this->db_hostname,$this->db_username,$this->db_password,$this->db_name);
    }
    public function __destruct()
    {
        $this->con->close();
    }
}
