<?php 

namespace App\Models;

use Database\DBConnection;
use PDO;

class Model {

    protected $db;
    protected $table;

    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }

    public function query(string $sql, int $param = null, bool $single = null)
    {
        $method = is_null($param) ? 'query' : 'prepare';
        $fetch= is_null($single) ? 'fetchAll' : 'fetch';

        $stmnt = $this->db->getPDO()->$method();
        $stmnt->setFetchMode(PDO::FETCH_CLASS, get_class($this), [$this->db]);

        if($method === 'query'){
            return $stmnt->fetch(); 
        } else {
            $stmnt->execute([$param]);
            return $stmnt->fetch();
        }
    }

    public function all():array 
    {
        return $this->query("SELECT * FROM {$this->table} ORDER BY created_at DESC");
    }

    public function findById(int $id)
    {
        return $this->query("SELECT * FROM {$this->table}  WHERE id = ? ", $id, true);
    }

}