<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    
    public function __construct() { 
        parent::__construct();     
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }
    
	public function index()
	{
	    $this->load->model('post_model');
	    
		$this->load->view('header'); 
        $this->load->view('main'); 
        $this->load->view('footer'); 
	}
	
public function form_submit()
    {
        $this->load->model('post_model');
        $this->form_validation->set_rules('topic','Topic','callback_check_database');
        $this->form_validation->set_rules('topic2', 'topic2', 'callback_check_database');
        if ($this->form_validation->run() == FALSE) 
        {
            $this->index();
        }
        else
        {
            $this->load->model('post_model');
            $submit_data = $this->input->post(NULL,TRUE);
            
            if($this->post_model->new_user($submit_data)){
                $this->load->view('header');
                $this->load->view('complete');
                $this->load->view('footer');
            }
        }
    }
    
    public function check_database($topic)
    {
        $this->load->model('post_model');
        $query = $this->db->query("SELECT * FROM hello JOIN hello2 WHERE topic = '$topic' OR co1 = '$topic';");
        if ($query->num_rows() > 0)
        {
            $this->form_validation->set_message('check_database','Everything okay');
            return FALSE;
        }
        else{
            $this->form_validation->set_message('check_database', 'Nothing close to your input');
            return FALSE;
        }
    }
    
    }
   
