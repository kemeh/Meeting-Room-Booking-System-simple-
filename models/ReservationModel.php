<?php

class ReservationModel extends BaseModel
{
    public function createReservation($start, $end, $user_id, $room_id){
        $database = $this->db->getConnection();
        $stmt = $database->prepare('INSERT INTO reservations (start, `end`, user_id, mr_id)
                                    VALUES (?, ?, ?, ?)');

        $stmt->bindParam(1, $start);
        $stmt->bindParam(2, $end);
        $stmt->bindParam(3, $user_id);
        $stmt->bindParam(4, $room_id);

        $stmt->execute();

        return true;
    }

    public function getByRoomId($id){
        $database = $this->db->getConnection();
        $stmt = $database->prepare('SELECT reservation_id, start, end, users.username
                                    FROM reservations 
                                    LEFT JOIN users ON reservations.user_id = users.user_id
                                    WHERE mr_id = ? 
                                    ORDER BY UNIX_TIMESTAMP(start) ASC');

        $stmt->bindParam(1, $id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id){
        $database = $this->db->getConnection();
        $stmt = $database->prepare('SELECT reservation_id, DATE_FORMAT(start, \'%Y-%m-%dT%H:%i\') as start, DATE_FORMAT(end, \'%Y-%m-%dT%H:%i\') as end, mr_id, user_id
                                    FROM reservations
                                    WHERE reservation_id = ?');

        $stmt->bindParam(1, $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}