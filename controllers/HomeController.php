<?php

class HomeController extends BaseController
{
    public function index(){
    }

    public function getMeetingRooms(){
        $model = new MeetingroomModel();
        $meetingRoom = $model->getAllByOffice(1);
        exit( json_encode($meetingRoom));
    }
}