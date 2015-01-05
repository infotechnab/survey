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
            $this->load->view('templates/header');
            if(isset($_POST['language'])){
                $language= $_POST['language'];
            }else{ $language='english'; }
           
            if($language=='english')
            {
                $this->load->view('templates/genderE');
            }else{
                $this->load->view('templates/genderN');
            }
             $this->load->view('templates/footer');
        }
        public function ageGroup()
        {
            $this->load->view('templates/header');
            if(isset($_POST['language'])){
                $language= $_POST['language'];
            }else{ $language='english'; }
           
            if($language=='english')
            {
                $this->load->view('templates/ageGroupE');
            }else{
                $this->load->view('templates/ageGroupN');
            }
            $this->load->view('templates/footer');
        }
        public function location()
        {
                $this->load->view('templates/header');
               if(isset($_POST['language'])){
                $language= $_POST['language'];
            }else{ $language='english'; }
           
            if($language=='english')
            {
                $this->load->view('templates/locationE');
            }else{
                $this->load->view('templates/locationN');
            }
                $this->load->view('templates/footer');
        }
        public function profession()
        {
                $this->load->view('templates/header');
                if(isset($_POST['language'])){
                $language= $_POST['language'];
            }else{ $language='english'; }
           
            if($language=='english')
            {
                $this->load->view('templates/professionE');
            }else{
                $this->load->view('templates/professionN');
            }
           $this->load->view('templates/footer');
        }
        public function purpose()
        {
             $this->load->view('templates/header');
            if(isset($_POST['language'])){
                $language= $_POST['language'];
            }else{ $language='english'; }
            if($language=='english')
            {
                $this->load->view('templates/purposeE');
            }else{
                $this->load->view('templates/purposeN');
            }
            $this->load->view('templates/footer');
        }
        public function frequency()
        {
             $this->load->view('templates/header');
            if(isset($_POST['language'])){
                $language= $_POST['language'];
            }
           
            if($language=='english')
            {
                $this->load->view('templates/frequencyE');
            }else{
                $this->load->view('templates/frequencyN');
            }
            $this->load->view('templates/footer');
        }
        public function media()
        {
             $this->load->view('templates/header');
            if(isset($_POST['language'])){
                $language= $_POST['language'];
            }
           
            if($language=='english')
            {
                $this->load->view('templates/mediaE');
            }else{
                $this->load->view('templates/mediaN');
            }
            $this->load->view('templates/footer');
        }
        public function feed()
        {
            $this->load->view('templates/header');
            if(isset($_POST['language'])){
                $language= $_POST['language'];
            }
           
            if($language=='english')
            {
                $this->load->view('templates/overallFeed');
            }else{
                $this->load->view('templates/overallFeed');
            }
            $this->load->view('templates/footer');
        }
        
        
        
        
        
}
