<?php

class Dashboard_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
    public function count_all_data()
    {
        return $this->db->count_all("survey");
    }
    public function get_all_data_from_media()
    {
        $query = $this->db->get('media');
        return $query->result();
    }
    
    public function get_all_data_from_purpose()
    {
        $query = $this->db->get('purpose');
        return $query->result();
    }
    
    public function get_all_data()
    {
        $query = $this->db->get('survey');
        return $query->result();
    }

    public function count_male()
    {
        $this->db->where('gender','male');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
     public function count_female()
    {
        $this->db->where('gender','female');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_other()
    {
        $this->db->where('gender','other');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    
    public function count_chitwan()
    {
        $this->db->where('location','chitwan');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_makawanpur()
    {
        $this->db->where('location','makawanpur');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_nawalparasi()
    {
        $this->db->where('location','nawalparasi');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_nepal()
    {
        $this->db->where('location','other district');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_foreign()
    {
        $this->db->where('location','foreign');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    
    public function count_0_14_years()
    {
        $this->db->where('age_group','0-14');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_15_24_years()
    {
        $this->db->where('age_group','15-24');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_25_54_years()
    {
        $this->db->where('age_group','25-54');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_55_64_years()
    {
        $this->db->where('age_group','55-64');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_65above_years()
    {
        $this->db->where('age_group','65above');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_agriculture()
    {
        $this->db->where('profession','agriculture');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_tourism()
    {
        $this->db->where('profession','tourism');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_health()
    {
        $this->db->where('profession','health');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_education()
    {
        $this->db->where('profession','education');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_commerce()
    {
        $this->db->where('profession','commerce');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_industry()
    {
        $this->db->where('profession','industry');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_sports()
    {
        $this->db->where('profession','sports');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_politics()
    {
        $this->db->where('profession','politics');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_others()
    {
        $this->db->where('profession','other');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_new()
     {
        $this->db->where('frequency','new commer');
         $query = $this->db->get('survey');
        return $query->num_rows;
    } 
    public function count_one_time()
     {
        $this->db->where('frequency','one time');
         $query = $this->db->get('survey');
        return $query->num_rows;
    } 
    public function count_two_times()
     {
        $this->db->where('frequency','two times');
         $query = $this->db->get('survey');
        return $query->num_rows;
    } 
    public function count_frequent()
     {
        $this->db->where('frequency','frequently');
         $query = $this->db->get('survey');
        return $query->num_rows;
    } 
    
    
    /* for date*/
    public function count_all_data_by_date($date)
    {
        $this->db->like('start_time', $date);
        $query = $this->db->get('survey');
        return $query->num_rows;;
    }
    public function get_all_data_by_date($date)
    {
        $this->db->like('start_time', $date);
        $query = $this->db->get('survey');
        return $query->result();
    }
    
    public function get_all_data_by_date_of_media($date)
    {
        $this->db->like('date', $date);
        $query = $this->db->get('media');
        return $query->result();
    }
    
    public function get_all_data_by_date_of_purpose($date)
    {
        $this->db->like('date', $date);
        $query = $this->db->get('purpose');
        return $query->result();
    }

    public function count_male_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('gender','male');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
     public function count_female_by_date($date)
    {
         $this->db->like('start_time', $date);
        $this->db->where('gender','female');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_other_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('gender','other');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    
    public function count_chitwan_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('location','chitwan');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_makawanpur_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('location','makawanpur');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_nawalparasi_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('location','nawalparasi');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_nepal_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('location','other district');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_foreign_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('location','foreign');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    
    public function count_0_14_years_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('age_group','0-14');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_15_24_years_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('age_group','15-24');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_25_54_years_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('age_group','25-54');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_55_64_years_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('age_group','55-64');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_65above_years_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('age_group','65above');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_agriculture_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('profession','agriculture');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_tourism_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('profession','tourism');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_health_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('profession','health');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_education_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('profession','education');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_commerce_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('profession','commerce');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_industry_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('profession','industry');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_sports_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('profession','sports');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_politics_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('profession','politics');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_others_by_date($date)
    {
        $this->db->like('start_time', $date);
        $this->db->where('profession','other');
         $query = $this->db->get('survey');
        return $query->num_rows;
    }
    public function count_new_by_date($date)
     {
        $this->db->like('start_time', $date);
        $this->db->where('frequency','new commer');
         $query = $this->db->get('survey');
        return $query->num_rows;
    } 
    public function count_one_time_by_date($date)
     {
        $this->db->like('start_time', $date);
        $this->db->where('frequency','one time');
         $query = $this->db->get('survey');
        return $query->num_rows;
    } 
    public function count_two_times_by_date($date)
     {
        $this->db->like('start_time', $date);
        $this->db->where('frequency','two times');
         $query = $this->db->get('survey');
        return $query->num_rows;
    } 
    public function count_frequent_by_date($date)
     {
        $this->db->like('start_time', $date);
        $this->db->where('frequency','frequently');
         $query = $this->db->get('survey');
        return $query->num_rows;
    } 
    
}