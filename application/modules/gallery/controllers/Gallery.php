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
                    'alt' => htmlspecialchars($img['title']) . ' - Manjeet Packers and Movers',
                    'title' => htmlspecialchars($img['title']),
                    'is_default' => false
                );
            }
        }
        
        $data['db_photos'] = $db_photos;
        $data['title'] = "Photo Gallery | " . $this->comp['company3'];
        $data['description'] = "Explore visual highlights of our packaging quality, warehouse storage, specialized container carriers, and relocation operations at " . $this->comp['company3'] . ".";
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

    function video_gallery()
    {
        $data['title'] = "Video Gallery | " . $this->comp['company3'];
        $data['description'] = "Watch our step-by-step packing processes, transport safety standards, and commercial office relocations in action at " . $this->comp['company3'] . ".";
        $data['module'] = "gallery";
        $data['view_file'] = "video-gallery";
        echo Modules::run('template/layout2', $data);
    }
    

}