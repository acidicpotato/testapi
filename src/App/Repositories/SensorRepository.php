<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Database;
use PDO;

class SensorRepository
{
    public function __construct(private Database $database){
        
    }
    public function getAllSensoren():array {
        $pdo = $this->database->getConnection();
        $stmt = $pdo->query('SELECT * FROM sensor');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getSensorById(int $id) : array | bool 
    {

        $sql = 'select * from sensor where sensorID = :id';
        $pdo = $this ->database->getConnection();

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':id', $id, pdo::PARAM_INT);

        $stmt->execute();

        return $stmt->fetch(pdo::FETCH_ASSOC);
    }
}