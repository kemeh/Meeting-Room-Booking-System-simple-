<?php

class MeetingroomModel extends BaseModel{
	public function getMeetingRoom($id){
	    if(is_array($id)){
	        $id = $id[0];
        }
        $database = $this->db->getConnection();
        $stmt = $database->prepare("SELECT * FROM meeting_rooms WHERE mr_id = $id");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
	
	public function createMeetingRoom($mr_name, $mr_capacity, $has_multimedia, $has_workstations, $has_whiteboard, $office_id){
		$database = $this->db->getConnection();
		$stmt = $database->prepare("INSERT INTO meeting_rooms (mr_id, mr_name, mr_capacity, multimedia, workstations, whiteboard, mr_status, office_id)
						VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
						
		$mr_id = null;
		$status = 1;
		$stmt->bindParam(1, $mr_id);
		$stmt->bindParam(2, $mr_name);
		$stmt->bindParam(3, $mr_capacity);
		$stmt->bindParam(4, $has_multimedia);
		$stmt->bindParam(5, $has_workstations);
		$stmt->bindParam(6, $has_whiteboard);
		$stmt->bindParam(7, $status);
		$stmt->bindParam(8, $office_id);
		
		$stmt->execute();
	}
	
	public function editMeetingRoom($id, $mr_name, $mr_capacity, $multimedia, $workstations, $whiteboard, $mr_status, $office_id){
        if(is_array($id)){
            $id = $id[0];
        }
		$database = $this->db->getConnection();
		$stmt = $database->prepare("UPDATE meeting_rooms
									SET mr_name = ?, mr_capacity = ?, multimedia = ?, workstations = ?, whiteboard = ?, mr_status = ?, office_id = ?
									WHERE mr_id = $id");
									
		$stmt->bindParam(1, $mr_name);
		$stmt->bindParam(2, $mr_capacity);
		$stmt->bindParam(3, $multimedia);
		$stmt->bindParam(4, $workstations);
		$stmt->bindParam(5, $whiteboard);
		$stmt->bindParam(6, $mr_status);
		$stmt->bindParam(7, $office_id);
		
		$stmt->execute();		
	}
	
	public function getAllByOffice($id){
        if(is_array($id)){
            $id = $id[0];
        }
		$database = $this->db->getConnection();
		$stmt = $database->prepare("SELECT * FROM meeting_rooms WHERE office_id = $id");
		$stmt->execute();
		
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}