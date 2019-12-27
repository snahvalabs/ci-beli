<?php

class About extends CI_Controller {
    //put your code here
    public function index()
    {
	$this->load->view('menu_about');
    }
    
    function hello(){
	$this->load->model('m_test', 'mtest');
        $mydata = $this->uri->segment(3);
        if($mydata!=NULL)
        {
            $data['content'] = $this->mtest->hey($mydata);
            $this->load->view('menu_about', $data);
        }else{
            $this->load->view('menu_about');
        }
    }
    
}


