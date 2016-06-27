<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
   function new_user($data)
    {
        $value = array(
            'topic'  => $data['topic'],
            'topic2'  => $data['topic2'],
        );
        return $this->db->insert('users', $value);
    }
    
}