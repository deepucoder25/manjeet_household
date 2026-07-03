<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Reviews extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('ReviewMdl');
    }

    function index()
    {
        $this->load->library('pagination');
        
        // Filter by star rating if requested
        $star_filter = $this->input->get('star');
        
        // Count total active reviews
        $this->db->where('status', 1);
        if ($star_filter) {
            $this->db->where('stars', $star_filter);
        }
        $total_rows = $this->db->count_all_results('reviews');
        
        $config['base_url'] = site_url('reviews');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 10;
        $config['uri_segment'] = 2;
        $config['reuse_query_string'] = TRUE;
        
        // Bootstrap pagination styling
        $config['full_tag_open'] = '<ul class="pagination pagination-sm m-0">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');
        
        $this->pagination->initialize($config);
        
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        
        $this->db->where('status', 1);
        if ($star_filter) {
            $this->db->where('stars', $star_filter);
        }
        $this->db->order_by('r_id', 'desc');
        $this->db->limit($config['per_page'], $page);
        $data['reviews'] = $this->db->get('reviews');
        
        $data['title'] = "Verified Shifting Reviews & Ratings | " . $this->comp['company3'];
        $data['description'] = "Read genuine reviews, ratings, and testimonials from our clients about their home moving and vehicle shifting experience with " . $this->comp['company3'] . ".";
        $data['module'] = "reviews";
        $data['view_file'] = "reviews";
        echo Modules::run('template/layout2', $data);
    }

    // Handles AJAX review posting from modal
    function review()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            
            $stars = (int) $this->input->post('rating');
            if ($stars <= 0) {
                $stars = (int) $this->input->post('stars') ?: 5;
            }
            
            $r_desc = $this->input->post('review');
            if (empty($r_desc)) {
                $r_desc = $this->input->post('desc');
            }
            
            $city = $this->input->post('city');
            $title = $this->input->post('title') ?: ($city ? 'Shifting feedback from ' . $city : 'Customer Experience');
            
            if (empty($name) || empty($email) || empty($r_desc)) {
                $response = ['err' => 1, 'msg' => 'Please fill in all required fields (Name, Email, and Message).'];
                $this->output->set_content_type('application/json')->set_output(json_encode($response));
                return;
            }
            
            // Handle optional image upload
            $r_img = '';
            if (isset($_FILES['img']) && !empty($_FILES['img']['name'])) {
                $upload_path = './assets/images/reviews/';
                if (!is_dir($upload_path)) {
                    mkdir($upload_path, 0755, true);
                }
                
                $config['upload_path']   = $upload_path;
                $config['allowed_types'] = 'gif|jpg|jpeg|png|webp';
                $config['max_size']      = 2048; // 2MB
                $config['encrypt_name']  = TRUE;
                
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('img')) {
                    $uploadData = $this->upload->data();
                    $r_img = $uploadData['file_name'];
                }
            }
            
            $data = [
                'b_id' => 0,
                'name' => $name,
                'email' => $email,
                'r_title' => $title,
                'stars' => $stars,
                'r_desc' => $r_desc,
                'r_img' => $r_img,
                'views' => 0,
                'status' => 0, // Pending approval
                'posted_date' => date('Y-m-d H:i:s')
            ];
            
            $this->ReviewMdl->insert_reviews($data);
            
            $response = ['err' => 0, 'msg' => 'Success! Thank you for your review! We appreciate your feedback and will approve it shortly.'];
            $this->output->set_content_type('application/json')->set_output(json_encode($response));
        }
    }

    // Fallback legacy submit redirect method
    function submit()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            
            $stars = (int) $this->input->post('rating');
            if ($stars <= 0) {
                $stars = (int) $this->input->post('stars') ?: 5;
            }
            
            $r_desc = $this->input->post('review');
            if (empty($r_desc)) {
                $r_desc = $this->input->post('desc');
            }
            
            $city = $this->input->post('city');
            $title = $this->input->post('title') ?: ($city ? 'Shifting feedback from ' . $city : 'Customer Experience');
            
            $data = [
                'b_id' => 0,
                'name' => $name,
                'email' => $email,
                'r_title' => $title,
                'stars' => $stars,
                'r_desc' => $r_desc,
                'r_img' => '',
                'views' => 0,
                'status' => 0, // Pending approval
                'posted_date' => date('Y-m-d H:i:s')
            ];
            
            $this->ReviewMdl->insert_reviews($data);
            $this->session->set_flashdata('success', 'Thank you! Your review has been submitted for approval.');
            redirect('reviews');
        }
    }
}