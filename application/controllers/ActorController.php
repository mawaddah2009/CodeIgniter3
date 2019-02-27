<?php
class ActorController extends CI_Controller{
    public function index(){
        $this->load->model('actor');
        $rows = $this->actor->listing();
           //     foreach ($rows as $actor) {
           // echo $actor['first_name'] . '<br>';
       // }
       header('Content-Type:application/json');
       //yg ni header addkn utk keluarkan dalam bentuk json yg proper
       echo json_encode($rows);

    }
    //add new actor
    public function add(){
        $this->load->model('actor');
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $this->actor->insert([
            'first_name' => $first_name,
            'last_name' => $last_name
            
        ]);
        echo "actor added";
    }
}