<?php

class OfficeController extends BaseController{
    public function index()
    {
         $model = new OfficeModel();
        $this->offices = $model->getAll();
    }

    public function create(){
        if($this->isPost){
            $office_name = $_POST['office_name'];
            $office_address = $_POST['office_address'];
            $office_phone = $_POST['office_phone'];
			$office_tz = $_POST['office_tz'];
			
            $model = new OfficeModel();
            $model->createOffice($office_name, $office_address, $office_phone, $office_tz);
            $this->addInfoMessage('Office '.'\'' . $office_name . '\'' . ' successfully created');

            $this->redirect('office');
        }
    }

    public function edit($id){
        $model = new OfficeModel();
        $this->office = $model->getOffice($id);

        if($this->isPost){
            $office_name = $_POST['office_name'];
            $office_address = $_POST['office_address'];
            $office_phone = $_POST['office_phone'];
			$office_tz = $_POST['office_tz'];
			$is_active = $_POST['is_active'];
			

            $model->editOffice($id, $office_name, $office_address, $office_phone, $office_tz, $is_active);

            $this->redirect('office');
        }
    }
	
	public function details($id){
		$model = new OfficeModel();
		$mr_model = new MeetingroomModel();
		
		$this->office = $model->getOffice($id);
		$this->meetingRooms = $mr_model->getAllByOffice($id);
	}
}