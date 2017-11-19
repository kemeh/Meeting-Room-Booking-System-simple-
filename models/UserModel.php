<?php

class UserModel extends BaseModel
{
    public function getAll(){
        $database = $this->db->getConnection();
        $stmt = $database->prepare('SELECT users.user_id,
                                             users.username,
                                             users.email,
                                             users.first_name, 
                                             users.last_name, 
                                             users.user_tz, 
                                             users.user_status, 
                                             offices.office_name, 
                                             user_roles.role_name
                                    FROM users
                                    LEFT JOIN offices ON users.office_id = offices.office_id
                                    LEFT JOIN user_roles ON users.role_id = user_roles.role_id');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser($username, $email, $password, $first_name, $last_name, $role_id, $user_tz, $office_id){
        $database = $this->db->getConnection();
        $stmt = $database->prepare('INSERT INTO users 
                                    (user_id, username, email, password, first_name, last_name, role_id, user_tz, office_id, user_status)
                                    VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, 1)');


        $user_id = null;
        $hashed_pass = hash('gost', $password);
        $stmt->bindParam(1, $user_id);
        $stmt->bindParam(2, $username);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $hashed_pass);
        $stmt->bindParam(5, $first_name);
        $stmt->bindParam(6, $last_name);
        $stmt->bindParam(7, $role_id);
        $stmt->bindParam(8, $user_tz);
        $stmt->bindParam(9, $office_id);

        $stmt->execute();
    }

    public function getByUsername($username){
        $database = $this->db->getConnection();
        $stmt = $database->prepare('SELECT user_id, username, password 
                                    FROM users
                                    WHERE username = ?');

        $stmt->bindParam(1, $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getById($id){
        $database = $this->db->getConnection();
        $stmt = $database->prepare('SELECT user_id, username, password, role_name 
                                    FROM users
                                    LEFT JOIN user_roles ON users.role_id = user_roles.role_id
                                    WHERE user_id = ?');

        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}