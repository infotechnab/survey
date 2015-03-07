<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

     function __construct() {
        parent::__construct();
        $this->load->helper('form');
         $this->load->helper('url');
         $this->load->library('session');
         $this->load->model('dbmodel');
         $this->load->model('dashboard_model');
     }
     
     public function index()
     {
          $dates = date('Y-m-d');
         $data['date'] = '2015-01-09 to '.$dates; 
        $data['male']= $this->dashboard_model->count_male();
         $data['female']= $this->dashboard_model->count_female();
        $data['otherGender']= $this->dashboard_model->count_other();
         $data['total']= $this->dashboard_model->count_all_data();
         $data['chitwan']= $this->dashboard_model->count_chitwan();
         $data['nawalparasi']= $this->dashboard_model->count_nawalparasi();
        $data['makawanpur']= $this->dashboard_model->count_makawanpur();
         $data['otherDist']= $this->dashboard_model->count_nepal();
         $data['foreign']= $this->dashboard_model->count_foreign();
         $data['first']= $this->dashboard_model->count_0_14_years();
         $data['second']= $this->dashboard_model->count_15_24_years();
         $data['third']= $this->dashboard_model->count_25_54_years();
         $data['four']= $this->dashboard_model->count_55_64_years();
         $data['fifth']= $this->dashboard_model->count_65above_years();
         $data['all']= $this->dashboard_model->get_all_data();
         $data['agriculture']= $this->dashboard_model->count_agriculture();
         $data['tourism']= $this->dashboard_model->count_tourism();
         $data['health']= $this->dashboard_model->count_health();
         $data['education']= $this->dashboard_model->count_education();
         $data['commerce']= $this->dashboard_model->count_commerce();
         $data['industry']= $this->dashboard_model->count_industry();
         $data['sports']= $this->dashboard_model->count_sports();
         $data['politics']= $this->dashboard_model->count_politics();
         $data['other']= $this->dashboard_model->count_others();
         $data['new'] = $this->dashboard_model->count_new();
         $data['oneTime'] = $this->dashboard_model->count_one_time();
         $data['twoTimes'] = $this->dashboard_model->count_two_times();
         $data['frequent'] = $this->dashboard_model->count_frequent();
         $data['media']= $this->dashboard_model->get_all_data_from_media();
         $data['purpose']= $this->dashboard_model->get_all_data_from_purpose();
         $this->load->view('dashboard/header');
         $this->load->view('dashboard/navigation');
         $this->load->view('dashboard/gender', $data);
         $this->load->view('dashboard/district', $data);
         $this->load->view('dashboard/ageGroup', $data);
         $this->load->view('dashboard/profession', $data);
         $this->load->view('dashboard/frequency', $data);
         $this->load->view('dashboard/averageFeed', $data);
         $this->load->view('dashboard/media', $data);
         $this->load->view('dashboard/purpose', $data);
     }
     
     public function dateWise()
     {
         $date = $this->input->post('date');
         $data['date'] = $date;
         $data['male']= $this->dashboard_model->count_male_by_date($date);
         $data['female']= $this->dashboard_model->count_female_by_date($date);
        $data['otherGender']= $this->dashboard_model->count_other_by_date($date);
         $data['total']= $this->dashboard_model->count_all_data_by_date($date);
         $data['chitwan']= $this->dashboard_model->count_chitwan_by_date($date);
         $data['nawalparasi']= $this->dashboard_model->count_nawalparasi_by_date($date);
        $data['makawanpur']= $this->dashboard_model->count_makawanpur_by_date($date);
         $data['otherDist']= $this->dashboard_model->count_nepal_by_date($date);
         $data['foreign']= $this->dashboard_model->count_foreign_by_date($date);
         $data['first']= $this->dashboard_model->count_0_14_years_by_date($date);
         $data['second']= $this->dashboard_model->count_15_24_years_by_date($date);
         $data['third']= $this->dashboard_model->count_25_54_years_by_date($date);
         $data['four']= $this->dashboard_model->count_55_64_years_by_date($date);
         $data['fifth']= $this->dashboard_model->count_65above_years_by_date($date);
         $data['all']= $this->dashboard_model->get_all_data_by_date($date);
         $data['agriculture']= $this->dashboard_model->count_agriculture_by_date($date);
         $data['tourism']= $this->dashboard_model->count_tourism_by_date($date);
         $data['health']= $this->dashboard_model->count_health_by_date($date);
         $data['education']= $this->dashboard_model->count_education_by_date($date);
         $data['commerce']= $this->dashboard_model->count_commerce_by_date($date);
         $data['industry']= $this->dashboard_model->count_industry_by_date($date);
         $data['sports']= $this->dashboard_model->count_sports_by_date($date);
         $data['politics']= $this->dashboard_model->count_politics_by_date($date);
         $data['other']= $this->dashboard_model->count_others_by_date($date);
         $data['new'] = $this->dashboard_model->count_new_by_date($date);
         $data['oneTime'] = $this->dashboard_model->count_one_time_by_date($date);
         $data['twoTimes'] = $this->dashboard_model->count_two_times_by_date($date);
         $data['frequent'] = $this->dashboard_model->count_frequent_by_date($date);
         $data['media']= $this->dashboard_model->get_all_data_by_date_of_media($date);
         $data['purpose']= $this->dashboard_model->get_all_data_by_date_of_purpose($date);
         $this->load->view('dashboard/header');
         $this->load->view('dashboard/navigation');
         $this->load->view('dashboard/gender', $data);
         $this->load->view('dashboard/district', $data);
         $this->load->view('dashboard/ageGroup', $data);
         $this->load->view('dashboard/profession', $data);
         $this->load->view('dashboard/frequency', $data);
         $this->load->view('dashboard/averageFeed', $data);
         $this->load->view('dashboard/media', $data);
         $this->load->view('dashboard/purpose', $data);
     }
     
//     public function store(){
//         $all= $this->dashboard_model->get_all_data();
//          foreach ($all as $dataall)
//     {
//       $purpose = $dataall->purpose;
//       $id = $dataall->id;
//       $datee = $dataall->start_time;
//       $res = (explode(', ', $purpose));
//       $exchange = array_flip($res);
//       foreach($exchange as $key => $value)
//        {
//          $exchange[$key] = "1";
//        }
//        
//        
//        
//       $fixed = array("purchase"=>"0","ICT"=>"0","agriculture"=>"0","entertainment"=>"0","goods and service"=>"0","other"=>"0");
//
//        $final = array_merge($fixed,$exchange);
//        
//        $rem = array("survey_id"=>$id,"date"=>$datee);
//        $ex = array_merge($final,$rem);
//        
//      
//       
//        //var_dump($final);
//        foreach($ex as $k=>$v){
//            if($k=='goods and service'){
//               $new_arr['goods_n_service'] = $final['goods and service'];
//            }else{
//               $new_arr[$k] = $v;
//            }
//         }
//         var_dump($new_arr);
//          
//        
//        $this->dashboard_model->tostore($new_arr);
//       
//       }
//      
//     }
//    
//    public function storemedia(){
//         $all= $this->dashboard_model->get_all_data();
//          foreach ($all as $dataall)
//     {
//       $purpose = $dataall->media;
//       $id = $dataall->id;
//       $datee = $dataall->start_time;
//       $res = (explode(', ', $purpose));
//       $exchange = array_flip($res);
//       foreach($exchange as $key => $value)
//        {
//          $exchange[$key] = "1";
//        }
//        
//        
//        
//       $fixed = array("newspaper"=>"0","television"=>"0","fm radio"=>"0","social media"=>"0","road miking"=>"0","friends"=>"0","ccic member"=>"0","banner pamphlet"=>"0","other"=>"0");
//
//        $final = array_merge($fixed,$exchange);
//        
//        $rem = array("survey_id"=>$id,"date"=>$datee);
//        $ex = array_merge($final,$rem);
//        
//      
//       
//        //var_dump($final);
//        foreach($ex as $k=>$v){
//            if($k=='fm radio'){
//               $new_arr['fm_radio'] = $final['fm radio'];
//            }
//           
//            elseif($k=='social media'){
//               $new_arr['social_media'] = $final['social media'];
//            }
//            
//            elseif($k=='road miking'){
//               $new_arr['road_miking'] = $final['road miking'];
//            }
//           
//             elseif($k=='ccic member'){
//               $new_arr['ccic_member'] = $final['ccic member'];
//            }
//            
//             elseif($k=='banner pamphlet'){
//               $new_arr['banner_pamphlet'] = $final['banner pamphlet'];
//             }
//            else{
//               $new_arr[$k] = $v;
//            }
//         }
//      
//        
//         var_dump($new_arr);
//          
//        
//        $this->dashboard_model->tostoremedia($new_arr);
//       
//       }
//    }
}