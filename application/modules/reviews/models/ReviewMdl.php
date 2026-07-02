<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReviewMdl extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //ADD REVIEWS
    public function insert_reviews($data)
    {
        return $this->db->insert('reviews', $data);
    }
}