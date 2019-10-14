<?php
class Pages extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index($page = 'home'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
        $data['title']=ucfirst($page);

        $data['main_content']='templates/login';
        $this->load->view('templates/main_content',$data);
    }
    public function login()
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $user = $this->users_model->checkUserInfo($email,$password);
        if(!empty($user)){
            print_r($user);die;
        }else{
            $data['main_content']= 'templates/registration';
            $this->load->view('templates/main_content',$data);
        }
    }
}