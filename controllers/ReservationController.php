<?php

class ReservationController extends BaseController{
    public function index(){
        $model = new ReservationModel();

        $this->list = $model->getByRoomId(1);
    }

	public function create($id = null){
        if($id != null){
            $_SESSION['mr_id'] = $id[0];
        }

		if($this->isPost){
            $model = new ReservationModel();
			$start = $_POST['start'];
			$end = $_POST['end'];
			$user_id = $_SESSION['user_id'];
			$mr_id = $_SESSION['mr_id'];

            $list = $model->getByRoomId($_SESSION['mr_id']);
            if(count($list) > 0){
                foreach($list as $reservation){
                    if(strtotime($reservation['start']) < strtotime($end) && strtotime($start) < strtotime($reservation['end'])){
                        $this->addErrorMessage('There is another reservation from ' . $reservation['start'] . ' to ' . $reservation['end']);
                    }
                }
            }

            if(!isset($_SESSION['messages'])){
                $model->createReservation($start, $end, $user_id, $mr_id);
                $this->addInfoMessage('Meeting successfully created!');
                unset($_SESSION['mr_id']);

                $this->redirect('meetingroom', 'details', $mr_id);
            }
		}
	}

	public function edit($id){
	    if($this->isUserAdmin($_SESSION['user_id']) || $this->isUserAuthor($_SESSION['user_id'], $id[0])){
            $model = new ReservationModel();
            $this->reservation = $model->getById($id[0]);
            if($this->isPost){
                $model = new ReservationModel();
                $start = $_POST['start'];
                $end = $_POST['end'];
                $user_id = $_SESSION['user_id'];
                $mr_id = $_POST['mr_id'];

                $list = $model->getByRoomId($mr_id);
                if(count($list) > 0){
                    foreach($list as $reservation){
                        if(strtotime($reservation['start']) < strtotime($end)
                            && strtotime($start) < strtotime($reservation['end'])
                            && $reservation['reservation_id'] != $id[0])
                        {
                            $this->addErrorMessage('There is another reservation from ' . $reservation['start'] . ' to ' . $reservation['end']);
                        }
                    }
                }

                if(!isset($_SESSION['messages'])){
                    $model->createReservation($start, $end, $user_id, $mr_id);
                    $this->addInfoMessage('Meeting successfully created!');

                    $this->redirect('meetingroom', 'details', $mr_id);
                }
            }
        } else{
            $this->addErrorMessage('You are not authorized to edit this reservation!');
            $mr_id = array_pop(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
            $this->redirect('meetingroom', 'details', $mr_id);
        }

    }
}