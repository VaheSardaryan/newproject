<?php
class WellcomeTco extends CI_Controller{
    public function index()
    {
        $this->load->model('users_model');// sargum enq modeli object (new a anum), vor@ $this_i meja
        $userinfo = $this->users_model->getinfo(); // ogtagorcum enq model@ vorpeszi kanchenq modeli function@
        //print_r($userinfo);die;
        $this->load->view('users/User',['userinfo2'=>$userinfo]);

        // $this->load->view('users/User');
        //$this->load->view('wellcome_tco/Wellcome_tco');
    }
}