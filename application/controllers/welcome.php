<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

     function __construct() {
        parent::__construct();
        $this->load->helper('form');
         $this->load->helper('url');
         $this->load->library('session');
     }
    
    public function index()
	{
		$this->load->view('templates/header');
                $this->load->view('templates/headHome');
                $this->load->view('templates/body');
                $this->load->view('templates/footer');
	}
        
        public function gender()
        {
            if(isset($_POST['language']))
            {
                $language= $_POST['language'];
            }else{$language='nepali';}
            $data = array('language' => $language);
                $this->session->set_userdata($data);
            $this->load->view('templates/header');
                $this->load->view('templates/genderE');
             $this->load->view('templates/footer');
        }
        public function ageGroup()
        {
            $language = $this->session->userdata('language');
            $gender = $this->input->post('gender');
            $data = array('language' => $language, 'gender'=>$gender);
                $this->session->set_userdata($data);
            $this->load->view('templates/header');
           
                $this->load->view('templates/ageGroupE');
            
            $this->load->view('templates/footer');
        }
        public function location()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->input->post('age');
            $data = array('language' => $language, 'gender'=>$gender, 'age'=>$ageGroup);
                $this->session->set_userdata($data);
                $this->load->view('templates/header');
              
                $this->load->view('templates/locationE');
            
                $this->load->view('templates/footer');
        }
        public function profession()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->session->userdata('age');
            $district = $this->input->post('district');

            $data = array('language' => $language, 'gender'=>$gender, 'age'=>$ageGroup, 'district'=>$district);
                $this->session->set_userdata($data);
                $this->load->view('templates/header');
                
                $this->load->view('templates/professionE');
            
           $this->load->view('templates/footer');
        }
        public function purpose()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->session->userdata('age');
            $district = $this->session->userdata('district');
            
            //$profession = $this->input->post('profession');
             $this->load->view('templates/header');
            
                $this->load->view('templates/purposeE');
            
            $this->load->view('templates/footer');
        }
        public function frequency()
        {
             $this->load->view('templates/header');
            
                $this->load->view('templates/frequencyE');
            
            $this->load->view('templates/footer');
        }
        public function media()
        {
             $this->load->view('templates/header');
           
                $this->load->view('templates/mediaE');
           
            $this->load->view('templates/footer');
        }
        public function feed()
        {
            $this->load->view('templates/header');
           
                $this->load->view('templates/overallFeed');
           
            $this->load->view('templates/footer');
        }
        
        public function thankYou()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/headHome');
                $this->load->view('templates/thankYou');
           
            $this->load->view('templates/footer');
        }
        
        
        
        
        
}
