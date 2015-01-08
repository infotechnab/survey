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
                //$this->load->view('templates/footer');
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
            if($language=='english'){
                $this->load->view('templates/genderE');
            }else{
                $this->load->view('templates/genderN');
            }
             $this->load->view('templates/footer');
        }
        public function ageGroup()
        {
            $language = $this->session->userdata('language');
            $gender = $this->input->post('gender');
            $data = array('language' => $language, 'gender'=>$gender);
                $this->session->set_userdata($data);
            $this->load->view('templates/header');
           if($language=='english'){
                $this->load->view('templates/ageGroupE');
            }else{
                $this->load->view('templates/ageGroupN');
            }
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
            if($language=='english'){
                $this->load->view('templates/locationE');
            }else{
                $this->load->view('templates/locationN');
            }  
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
            if($language=='english'){
                $this->load->view('templates/professionE');
            }else{
                 $this->load->view('templates/professionN');
            }                
           $this->load->view('templates/footer');
        }
        public function purpose()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->session->userdata('age');
            $district = $this->session->userdata('district'); 
            $profession = $this->input->post('profession');
           $data = array('language' => $language, 'gender'=>$gender, 'age'=>$ageGroup, 'district'=>$district, 'profession'=>$profession);
                $this->session->set_userdata($data);
             $this->load->view('templates/header');
            if($language=='english'){
               $this->load->view('templates/purposeE');
            }else{
                 $this->load->view('templates/purposeN');
            }  
            $this->load->view('templates/footer');
        }
        public function frequency()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->session->userdata('age');
            $district = $this->session->userdata('district'); 
            $profession = $this->session->userdata('profession');
            $purpose = $this->input->post('purpose');
            $data = array('language' => $language, 'gender'=>$gender, 'age'=>$ageGroup, 'district'=>$district, 'profession'=>$profession, 'purpose'=>$purpose);
                $this->session->set_userdata($data);
             $this->load->view('templates/header');
            if($language=='english'){
                $this->load->view('templates/frequencyE');
            }else{
                  $this->load->view('templates/frequencyN');
            } 
            $this->load->view('templates/footer');
        }
        public function media()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->session->userdata('age');
            $district = $this->session->userdata('district'); 
            $profession = $this->session->userdata('profession');
            $purpose = $this->session->userdata('purpose');
            $frequency = $this->input->post('frequency');
            $data = array('language' => $language, 'gender'=>$gender, 'age'=>$ageGroup, 'district'=>$district, 'profession'=>$profession, 'purpose'=>$purpose, 'frequency'=>$frequency);
                $this->session->set_userdata($data);
             $this->load->view('templates/header');
           if($language=='english'){
                $this->load->view('templates/mediaE');
            }else{
                  $this->load->view('templates/mediaN');
            }  
            $this->load->view('templates/footer');
        }
        public function feed()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->session->userdata('age');
            $district = $this->session->userdata('district'); 
            $profession = $this->session->userdata('profession');
            $purpose = $this->session->userdata('purpose');
            $frequency = $this->session->userdata('frequency');
            $media = $this->input->post('media');
            $data = array('language' => $language, 'gender'=>$gender, 'age'=>$ageGroup, 'district'=>$district, 'profession'=>$profession, 'purpose'=>$purpose, 'frequency'=>$frequency, 'media'=>$media);
            $this->session->set_userdata($data);
            $this->load->view('templates/header');
           if($language=='english'){
                $this->load->view('templates/overallFeedE');
            }else{
                  $this->load->view('templates/overallFeedN');
            } 
            $this->load->view('templates/footer');
        }
        
        public function thankYou()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->session->userdata('age');
            $district = $this->session->userdata('district'); 
            $profession = $this->session->userdata('profession');
            $purpose = $this->session->userdata('purpose');
            $frequency = $this->session->userdata('frequency');
            $media = $this->session->userdata('media');
            $sachibalaya = $this->input->post('sachibalaya');
           $water = $this->input->post('water');
           $toilet = $this->input->post('toilet');
           $communication = $this->input->post('communication');
           $security = $this->input->post('security');
            
            $data = array('language' => $language, 'gender'=>$gender, 'age'=>$ageGroup, 'district'=>$district, 'profession'=>$profession, 'purpose'=>$purpose, 'frequency'=>$frequency, 'media'=>$media, 'sachibalaya'=>$sachibalaya, 'water'=>$water, 'toilet'=>$toilet, 'communication'=>$communication, 'security'=>$security);
            $this->session->set_userdata($data);
            var_dump($data);
            
            
            $this->load->view('templates/header');
            $this->load->view('templates/headHome');
                $this->load->view('templates/thankYou');
           
            $this->load->view('templates/footer');
        }
        
        public function close()
        {
            $this->session->sess_destroy();
        redirect('welcome/index', 'refresh');
        }
        
        public function backGender()
        {
            $language = $this->session->userdata('language');
            $data = array('language' => $language);
            $this->session->set_userdata($data);
            $this->load->view('templates/header');
            if($language=='english'){
                $this->load->view('templates/genderE');
            }else{
                $this->load->view('templates/genderN');
            }
             $this->load->view('templates/footer');
        }
        
        public function backageGroup()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $data = array('language' => $language, 'gender'=>$gender);
                $this->session->set_userdata($data);
            $this->load->view('templates/header');
           if($language=='english'){
                $this->load->view('templates/ageGroupE');
            }else{
                $this->load->view('templates/ageGroupN');
            }
            $this->load->view('templates/footer');
        }
        
        public function backLocation()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->session->userdata('age');
            $data = array('language' => $language, 'gender'=>$gender, 'age'=>$ageGroup);
                $this->session->set_userdata($data);
                $this->load->view('templates/header');
            if($language=='english'){
                $this->load->view('templates/locationE');
            }else{
                $this->load->view('templates/locationN');
            }  
                $this->load->view('templates/footer');
        }
        
        public function backprofession()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->session->userdata('age');
            $district = $this->session->userdata('district'); 
            $data = array('language' => $language, 'gender'=>$gender, 'age'=>$ageGroup, 'district'=>$district);
                $this->session->set_userdata($data);
                $this->load->view('templates/header');
            if($language=='english'){
                $this->load->view('templates/professionE');
            }else{
                 $this->load->view('templates/professionN');
            }                
           $this->load->view('templates/footer');
        }
        
        public function backPurpose()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->session->userdata('age');
            $district = $this->session->userdata('district'); 
            $profession = $this->session->userdata('profession');
            $data = array('language' => $language, 'gender'=>$gender, 'age'=>$ageGroup, 'district'=>$district, 'profession'=>$profession);
                $this->session->set_userdata($data);
             $this->load->view('templates/header');
            if($language=='english'){
               $this->load->view('templates/purposeE');
            }else{
                 $this->load->view('templates/purposeN');
            }  
            $this->load->view('templates/footer');
        }
        
        public function backFrequency()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->session->userdata('age');
            $district = $this->session->userdata('district'); 
            $profession = $this->session->userdata('profession');
            $purpose = $this->session->userdata('purpose');
            $data = array('language' => $language, 'gender'=>$gender, 'age'=>$ageGroup, 'district'=>$district, 'profession'=>$profession, 'purpose'=>$purpose);
                $this->session->set_userdata($data);
             $this->load->view('templates/header');
            if($language=='english'){
                $this->load->view('templates/frequencyE');
            }else{
                  $this->load->view('templates/frequencyN');
            } 
            $this->load->view('templates/footer');
        }
        
        public function backMedia()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->session->userdata('age');
            $district = $this->session->userdata('district'); 
            $profession = $this->session->userdata('profession');
            $purpose = $this->session->userdata('purpose');
            $frequency = $this->session->userdata('frequency');
            $data = array('language' => $language, 'gender'=>$gender, 'age'=>$ageGroup, 'district'=>$district, 'profession'=>$profession, 'purpose'=>$purpose, 'frequency'=>$frequency);
                $this->session->set_userdata($data);
             $this->load->view('templates/header');
           if($language=='english'){
                $this->load->view('templates/mediaE');
            }else{
                  $this->load->view('templates/mediaN');
            }  
            $this->load->view('templates/footer');
        }
        
        public function backFeed()
        {
            $language = $this->session->userdata('language');
            $gender = $this->session->userdata('gender');
            $ageGroup = $this->session->userdata('age');
            $district = $this->session->userdata('district'); 
            $profession = $this->session->userdata('profession');
            $purpose = $this->session->userdata('purpose');
            $frequency = $this->session->userdata('frequency');
            $media = $this->session->userdata('media');
            $data = array('language' => $language, 'gender'=>$gender, 'age'=>$ageGroup, 'district'=>$district, 'profession'=>$profession, 'purpose'=>$purpose, 'frequency'=>$frequency, 'media'=>$media);
            $this->session->set_userdata($data);
            $this->load->view('templates/header');
           if($language=='english'){
                $this->load->view('templates/overallFeedE');
            }else{
                  $this->load->view('templates/overallFeedN');
            } 
            $this->load->view('templates/footer');
        }
        
}
