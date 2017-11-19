<?php
include 'includes/database.php';

abstract class BaseModel{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
}