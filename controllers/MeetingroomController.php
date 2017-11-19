<?php

class MeetingroomController extends BaseController{
	public function create(){
		$officeModel = new OfficeModel();
		$this->offices = $officeModel->getAll();
		
		if($this->isPost){
			$mr_name = $_POST['mr_name'];
			$mr_capacity = $_POST['mr_capacity'];
			$has_multimedia = $_POST['has_multimedia'];
			$has_workstations = $_POST['has_workstations'];
			$has_whiteboard = $_POST['has_whiteboard'];
			$office_id = $_POST['office_id'];
			
			$model = new MeetingroomModel();
			$model->createMeetingRoom($mr_name, $mr_capacity, $has_multimedia, $has_workstations, $has_whiteboard, $office_id);
			
			$this->redirect('office', 'details', $office_id);
		}
	}
	
	public function edit($id){
		$officeModel = new OfficeModel();
		$this->offices = $officeModel->getAll();
		$model = new MeetingroomModel();
		$this->meetingRoom = $model->getMeetingRoom($id);
		
		if($this->isPost){
			$mr_name = $_POST['mr_name'];
			$mr_capacity = $_POST['mr_capacity'];
			$has_multimedia = $_POST['has_multimedia'];
			$has_workstations = $_POST['has_workstations'];
			$has_whiteboard = $_POST['has_whiteboard'];
			$mr_status = $_POST['mr_status'];
			$office_id = $_POST['office_id'];
			
			$model->editMeetingRoom($id, $mr_name, $mr_capacity, $has_multimedia, $has_workstations, $has_whiteboard, $mr_status, $office_id);
			
			$this->redirect('office', 'details', $office_id);
		}
	}

    public function details($id){
        $reservationModel = new ReservationModel();

        $this->list = $reservationModel->getByRoomId($id[0]);
        $this->id = $id[0];
    }
}