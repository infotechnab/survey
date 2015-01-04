<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

     function __construct() {
        parent::__construct();
        $this->load->helper('form');
         $this->load->helper('url');
     }
    
    public function index()
	{
		$this->load->view('templates/header');
                $this->load->view('templates/body');
                $this->load->view('templates/footer');
	}
        
        public function gender()
        {
            if(isset($_POST['language'])){
                $language= $_POST['language'];
            }
           
            if($language=='english')
            {
                $this->load->view('templates/genderE');
            }else{
                $this->load->view('templates/genderN');
            }
        }
        
        
        
        
        
        
        
        
        
        
        
}
