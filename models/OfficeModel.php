<?php

class OfficeModel extends BaseModel{
    public function getAll(){
        $database = $this->db->getConnection();
        $stmt  = $database->prepare("SELECT * FROM offices");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOffice($id){
        $database = $this->db->getConnection();
        $stmt = $database->prepare("SELECT * FROM offices WHERE office_id = $id[0]");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createOffice($office_name, $office_address, $office_phone, $office_tz) : bool {

            $database = $this->db->getConnection();
            $stmt  = $database->prepare("INSERT INTO offices (office_id, office_name, office_address, office_phone, office_tz, is_active)
                                      VALUES (?, ?, ?, ?, ?, 1)");
            $office_id = null;
            $stmt->bindParam(1, $office_id);
            $stmt->bindParam(2, $office_name);
            $stmt->bindParam(3, $office_address);
			$stmt->bindParam(4, $office_phone);			
            $stmt->bindParam(5, $office_tz);

            $stmt->execute();

            return true;
    }

    public function editOffice($id, $office_name, $office_address, $office_phone, $office_tz, $is_active){
        $database = $this->db->getConnection();
        $stmt = $database->prepare("UPDATE offices
                                    SET office_name = ?, office_address = ?, office_phone = ?, office_tz = ?, is_active = ?
                                    WHERE office_id = $id[0]");

        $stmt->bindParam(1, $office_name);
        $stmt->bindParam(2, $office_address);
        $stmt->bindParam(3, $office_phone);
		$stmt->bindParam(4, $office_tz);
		$stmt->bindParam(5, $is_active);

        $stmt->execute();
    }
}