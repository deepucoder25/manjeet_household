<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) { redirect('login'); }
        $this->load->model('mdl_blog');
    }
   
    function index()
    {
        $this->load->view('form');
    }
    
    function save_data()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("title","Title","required|trim");
        $this->form_validation->set_rules("description","Description","required|trim");
        $this->form_validation->set_rules("date","Date","required|trim");
        $this->form_validation->set_rules("time","Time","required|trim");
        $this->form_validation->set_rules("author","Author","trim"); 
        $this->form_validation->set_rules("tags","Tags","trim"); 
        $this->form_validation->set_rules("meta_title","Meta Title","trim|max_length[255]");
        $this->form_validation->set_rules("meta_desc","Meta Description","trim|max_length[300]");
        $this->form_validation->set_rules("slug","Slug","trim|max_length[255]");
        $this->form_validation->set_rules("status","Status","trim");
        
        if ($this->form_validation->run()==TRUE)
        {
            $data = [];
            $data['title']=$_POST['title'];
            $data['description']=$_POST['description'];
            $data['author']=$_POST['author'];
            $data['date']=$_POST['date'];
            $data['time']=$_POST['time']; 
            $data['tags']=$_POST['tags']; 
            $data['meta_title']=$_POST['meta_title'];
            $data['meta_desc']=$_POST['meta_desc'];
            $data['slug']=$_POST['slug'];
            $data['status'] = isset($_POST['status']) ? (int)$_POST['status'] : 1;
            
            if (empty($data['slug'])) {
                $data['slug'] = $this->slugify($data['title']);
            }
            
            if (!isset($_POST['b_id']) || !$_POST['b_id']) {
                $data['views'] = 0;
                $data['main_title'] = $data['title'];
            }
            
            // Image upload handling
            if (!empty($_FILES['image']['name'])) 
            {
                $data['image']=$this->image_upload($data['title']);
                if (isset($_POST['old_image']) && $_POST['old_image'])
                {
                    $this->remove_image($_POST['old_image']);
                }
            }else if ($this->input->post('image_url')){
                $data['image']=$this->input->post('image_url');
                if (isset($_POST['old_image']) && $_POST['old_image'])
                {
                    $this->remove_image($_POST['old_image']);
                }
            }else{
                if (!isset($_POST['b_id']) || !$_POST['b_id']) {
                    $data['image'] = '';
                }
            }
            
            if (isset($_POST['b_id']) && $_POST['b_id'])//update
            {
                $where['b_id']=$_POST['b_id'];
                $res = $this->mdl_blog->update_data($where,$data);
                echo $res;
            }
            else //add
            {
                $res = $this->mdl_blog->add_data($data);
                echo $res;
            }
        }
        else
        {
            echo validation_errors();
        }
    }

    function save_status()
    {
        if (isset($_GET['id'])) {
            $bid = (int) $_GET['id'];
            $st_val = (int) $_GET['status']; // 0 or 1
            $data['status'] = $st_val;
            $where['b_id'] = $bid;
            $res = $this->mdl_blog->update_data($where, $data);
            echo 1;
        } else {
            echo "invalid Request";
        }
    }
    
    function view_data()
    {
        $where=null;
        if (isset($_GET['b_id']))
             $where['b_id']=$_GET['b_id'];
        
        if (isset($_GET['data']))
            $select=$_GET['data'];
        else $select="*";
        
        $res=$this->mdl_blog->view_data($where,$select);
        $formatted = [];
        foreach ($res->result_array() as $b) {
            $formatted[] = [
                "b_id" => (int) $b['b_id'],
                "title" => $b['title'] ?? '',
                "slug" => $b['slug'] ?? '',
                "date" => $b['date'] ?? '',
                "time" => $b['time'] ?? '',
                "author" => $b['author'] ?? '',
                "image" => $b['image'] ?? '',
                "status" => (string) ($b['status'] ?? '1'),
                "description" => $b['description'] ?? '',
                "tags" => $b['tags'] ?? '',
                "meta_title" => $b['meta_title'] ?? '',
                "meta_desc" => $b['meta_desc'] ?? '',
                "views" => (int) ($b['views'] ?? 0),
                "main_title" => $b['main_title'] ?? ($b['title'] ?? '')
            ];
        }
        
        $this->output->set_content_type('application/json')->set_output(json_encode($formatted));
    }
    
    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id'])
        {
            $bid = (int) $_GET['id'];
            $where['b_id']=$bid;
            
            $res = $this->mdl_blog->view_data($where);
            foreach ($res->result() as $row)
            {
                if (!empty($row->image)) {
                    $this->remove_image($row->image);
                }
            }
           
            echo $this->mdl_blog->delete_data($where) ? "1" : "0";
        }else echo "Not Deleted";
    }

    function image_upload($title)
    {
        $folder="blog";
        $config['upload_path'] = './assets/temp';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['new_image'] = "./assets/uploads/$folder/";
        $config['min_width']=100;
    
        $rand_number = mt_rand(0, 85);
        $timestamp = time();
        $config['file_name'] =  $rand_number . $timestamp;
    
        $config['overwrite'] = false;
        $config['remove_spaces'] = true;
    
        $this->load->library('upload', $config);
        if (! $this->upload->do_upload('image'))
        {
            echo $this->upload->display_errors();
            die();
        }
        else
        {
            $image = $this->upload->data();
            if ($this->input->post('width'))
            {
                $config['width'] = $this->input->post('width');
            }else{
                if ($image['image_width']>720)
                    $config['width'] =720;
            }
            $config['source_image'] = './assets/temp/' . $image['file_name'];
            $config['maintain_ratio'] = TRUE;
    
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
    
            if (! $this->image_lib->resize())
            {
                echo $this->image_lib->display_errors();die();
            }
    
            $this->image_lib->clear();
            $config['source_image'] = './assets/temp/' . $image['file_name'];
            $config['new_image'] = "./assets/uploads/$folder/thumb/";
            $config['file_name'] =  $rand_number . $timestamp;
            $config['maintain_ratio'] = TRUE;
            if ($image['image_width']>100){
                $config['width'] = 100;
            }
            $config['overwrite'] = FALSE;
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            if (! $this->image_lib->resize())
            {
                echo $this->image_lib->display_errors();die();
            }
            else
            {
                @unlink($config['source_image']);
                return $image['file_name'];
            }
        }
    }
        
    function remove_image($title)
    {
        if (!empty($title) && substr($title, 0,4)!="http")
        {
            $path1="./assets/uploads/blog/".$title;
            $path2="./assets/uploads/blog/thumb/".$title;
            if (is_file($path1) && file_exists($path1)) {
                @unlink($path1);
            }
            if (is_file($path2) && file_exists($path2)) {
                @unlink($path2);
            }
        }
    }
    
    private function slugify($text)
    {
        $text = strtolower(trim($text));
        $text = preg_replace('/[^a-z0-9\s-]/', '', $text);
        $text = preg_replace('/[\s-]+/', '-', $text);
        return trim($text, '-');
    }
}
?>
