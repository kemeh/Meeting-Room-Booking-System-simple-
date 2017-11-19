<?php

class RoleModel extends BaseModel
{
    public function getAll(){
        $database = $this->db->getConnection();
        $stmt = $database->prepare('SELECT * FROM user_roles');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($role_name){
        $database = $this->db->getConnection();
        $stmt = $database->prepare('INSERT INTO user_roles (role_name)
                                    VALUES (?)');
        $stmt->bindParam(1, $role_name);
        $stmt->execute();

        return true;
    }

    public function getByName($role_name){
        $database = $this->db->getConnection();
        $stmt = $database->prepare('SELECT * FROM user_roles
                                    WHERE role_name = ?');
        $stmt->bindParam(1, $role_name);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}