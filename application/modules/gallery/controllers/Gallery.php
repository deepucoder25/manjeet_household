<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    

    function photo_gallery()
    {
        $this->load->database();
        // Fetch active albums from the sqlite database
        $this->db->order_by('album_id', 'DESC');
        $db_images = $this->db->get_where('album', array('status' => 1))->result_array();
        
        $db_photos = array();
        if (!empty($db_images)) {
            foreach ($db_images as $img) {
                $db_photos[] = array(
                    'image' => $img['image'],
                    'alt' => htmlspecialchars($img['title']) . ' - ' . $this->comp['company3'],
                    'title' => htmlspecialchars($img['title']),
                    'is_default' => false
                );
            }
        }
        
        $data['title'] = "Shifting & Packing Photo Gallery - Moving Images | " . $this->comp['company3'];
        $data['description'] = "Browse through photos of our professional household packing techniques, loading procedures, specialized vehicle carrier trucks, and warehouses at " . $this->comp['company3'] . ".";
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

    function video_gallery()
    {
        $data['title'] = "Watch House Shifting & Packing Process Videos | " . $this->comp['company3'];
        $data['description'] = "Watch our live relocation videos showing step-by-step household packing, heavy machinery loading, and vehicle transportation processes handled by " . $this->comp['company3'] . ".";
        $data['module'] = "gallery";
        $data['view_file'] = "video-gallery";
        echo Modules::run('template/layout2', $data);
    }
    

}