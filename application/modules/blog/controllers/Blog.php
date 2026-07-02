<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {

    function __construct(){
        parent::__construct();
    }

    private function slugify($text) {
        $text = strtolower($text);
        $text = preg_replace('~[^a-z0-9\s-]~', '', $text);
        $text = preg_replace('~[\s-]+~', '-', $text);
        return trim($text, '-');
    }

    private function loadBlogs() {
        $this->load->database();
        // Query active blogs from the database
        $this->db->where('status', 1);
        $this->db->order_by('b_id', 'asc'); // Keep asc because the caller array_reverse()s them to show newest first
        $query = $this->db->get('blog');
        $blogs = [];
        if ($query) {
            foreach ($query->result_array() as $row) {
                $blogs[] = array(
                    'id' => (int) $row['b_id'],
                    'title' => $row['title'],
                    'slug' => $row['slug'],
                    'date' => $row['date'],
                    'time' => $row['time'],
                    'author' => $row['author'],
                    'image' => $row['image'],
                    'status' => (int) $row['status'],
                    'description' => $row['description'],
                    'content' => $row['description'],
                    'tags' => $row['tags'],
                    'meta_title' => $row['meta_title'],
                    'meta_desc' => $row['meta_desc'],
                    'views' => (int) $row['views'],
                    'main_title' => $row['main_title'],
                    'created_at' => $row['timestamp']
                );
            }
        }
        return $blogs;
    }

    function index() {
        redirect('blog/view');
    }

    function view(){
        $this->load->library('pagination');
        $this->load->helper('text'); 

        $all_blogs = array_reverse($this->loadBlogs());
        $total_rows = count($all_blogs);
        $per_page = 6;
        $offset = (int) $this->uri->segment(3);

        $config['base_url'] = site_url('blog/view');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 3;

        $config['full_tag_open'] = '<ul class="styled-pagination clearfix text-center">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="#" class="active rc_first_hr color_dark">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_link'] = 'First';

        $this->pagination->initialize($config);

        $data['blogs'] = array_slice($all_blogs, $offset, $per_page);
        $data['total'] = $total_rows;
        $data['recent_posts'] = array_slice($all_blogs, 0, 5);

        $data['title'] = "Official Blog of ".$this->comp['company3']." India";
        $data['description'] = "Latest blog of ".$this->comp['company3'];
        $data['module'] = "blog";
        $data['view_file'] = "blog"; 

        echo Modules::run('template/layout2', $data);
    }

    function read($slug = '') {
        // die("DEBUG: Slug received: " . $slug);
        $this->load->helper('text');

        $all_blogs = $this->loadBlogs();
        $selected_blog = null;
        
        foreach ($all_blogs as $b) {
            $custom_slug = $b['slug'] ?? '';
            $auto_slug = $this->slugify($b['title']);
            
            // Handle CI's translate_uri_dashes by replacing _ back to - in incoming slug
            $search_slug = str_replace('_', '-', $slug);

            if (
                (!empty($custom_slug) && strtolower($custom_slug) == strtolower($search_slug)) || 
                (strtolower($auto_slug) == strtolower($search_slug)) ||
                ($b['id'] == $search_slug)
            ) {
                $selected_blog = (object) $b;
                break;
            }
        }

        if ($selected_blog) {
            $data['query'] = [$selected_blog];
            $data['recent_posts'] = array_slice(array_reverse($all_blogs), 0, 5);
            
            $data['title'] = ucfirst($selected_blog->title);
            $data['description'] = word_limiter(strip_tags($selected_blog->description), 200);
            
            $image_file = $selected_blog->image;
            $data['img'] = ($image_file && file_exists(FCPATH . 'assets/uploads/blog/' . $image_file)) ? base_url('assets/uploads/blog/'.$image_file) : base_url('assets/images/about/packers_movers.jpg');
            
            $data['module'] = "blog";
            $data['view_file'] = "view"; 

            echo Modules::run('template/layout2', $data);
        } else {
            show_404();
        }
    }
}
