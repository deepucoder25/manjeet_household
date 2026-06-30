<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reviews extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) { redirect('login'); }
        $this->load->model('mdl_reviews');
    }

    function index()
    {
        $this->load->view('data');
    }

    function save()
    {
        if (isset($_GET['id'])) {
            $rid = (int) $_GET['id'];
            $st_val = (int) $_GET['status']; // '0' or '1'
            $data['status'] = $st_val;
            $where['r_id'] = $rid;
            $this->mdl_reviews->update_data($where, $data);
            echo 1;
        } else {
            echo "invalid Request";
        }
    }

    function update_data()
    {
        if (!$this->input->post('r_id')) {
            echo "invalid Request";
            return;
        }
        $rid = (int) $this->input->post('r_id');
        $where['r_id'] = $rid;
        
        $data = [];
        if ($this->input->post('name') !== null) $data['name'] = $this->input->post('name');
        if ($this->input->post('email') !== null) $data['email'] = $this->input->post('email');
        if ($this->input->post('stars') !== null) $data['stars'] = (int) $this->input->post('stars');
        if ($this->input->post('r_desc') !== null) $data['r_desc'] = $this->input->post('r_desc');
        if ($this->input->post('status') !== null) {
            $data['status'] = (int) $this->input->post('status');
        }
        
        $this->mdl_reviews->update_data($where, $data);
        echo 1;
    }

    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $rid = (int) $_GET['id'];
            $where['r_id'] = $rid;
            $this->mdl_reviews->delete_data($where);
            echo 1;
        } else {
            echo "Not Deleted";
        }
    }

    function view_data()
    {
        $where = null;
        if (isset($_GET['id'])) {
            $where['r_id'] = (int) $_GET['id'];
        }
        $res = $this->mdl_reviews->view_data($where);
        $formatted = [];
        foreach ($res->result_array() as $r) {
            $formatted[] = [
                "r_id" => (int) $r['r_id'],
                "unm" => $r['name'],
                "email" => $r['email'],
                "img" => $r['r_img'],
                "rt" => (int) $r['stars'],
                "cmt" => $r['r_desc'],
                "pd" => $r['posted_date'],
                "t" => $r['r_title'],
                "ty" => '',
                "tm" => '',
                "st" => (string) $r['status']
            ];
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($formatted));
    }
}
