<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts_mdl extends CI_Model
{
    private $config;
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->config = array(
            'protocol' => 'smtp',
            'smtp_host' => '',
            'smtp_port' => 587,
            'smtp_user' => '',
            'smtp_pass' => '',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
    }



public function bookings()
{
    $this->load->library('email', $this->config);
    $this->email->set_newline("\r\n");
    $this->email->set_crlf("\r\n");

    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $phone = $this->input->post('phone');
    $mfrom = $this->input->post('mfrom');
    $mto = $this->input->post('mto');
    
    // Additional Form Fields
    $mdate = $this->input->post('mdate');
    $mtype = $this->input->post('mtype');
    $comments = $this->input->post('comments');
    $msg = $this->input->post('message');

    $full_msg = "";
    if ($mtype) {
        $full_msg .= "Type of Move: " . $mtype . "\n";
    }
    if ($mdate) {
        $full_msg .= "Moving Date: " . $mdate . "\n";
    }
    if ($comments) {
        $full_msg .= "Additional Details: " . $comments . "\n";
    }
    if ($msg) {
        $full_msg .= "Message: " . $msg;
    }
    $msg = trim($full_msg);

    // Insert booking data into the database
    $this->db->insert('bookings', array(
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "mfrom" => $mfrom,
        "mto" => $mto,
        "msg" => $msg
    ));

    // Admin notification email
    $msgd = "Services Needed";
    $adminMessage = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$msgd</q></b><br><br>Client's Name:  <b>$name</b><br><br>From: <b>$mfrom</b><br><br>To: <b>$mto</b><br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br>Email: <b> $email</b><br><br>Client Msg: <b>" . nl2br(htmlentities($msg)) . "</b></div>";

    $this->email->to("");
    $this->email->from("");
  
    $this->email->subject('New Booking Enquiry Received');
    $this->email->message($adminMessage);
    $this->email->send();

    
    return true;
}

  
    
    public function contact(){
        $this->load->library('email', $this->config);
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $qry = $this->input->post('message');
        $this->db->insert('contacts', array("name"=>$name,"phone"=>$phone,"message"=>$qry,"email" => $email));
        $message = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$qry</q></b><br><br>Client's Name:  <b>$name</b><br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br>Email: <b> $email</b></div>";
      $this->email->to("");
    $this->email->from("");
       
        $this->email->subject('New Contacts Enquiry Received ');
        $this->email->message($message);
        $this->email->send();
        return true;
    }

    public function trackings()
    {
   
        $trackingNumber = $this->input->post('trackingNumber');
        $this->db->select('
        ship_main.id as main_id,
        ship_main.tracking_id,
        ship_main.lr_no,
        ship_main.c_name,
        ship_main.ship_from,
        ship_main.ship_to,
        ship_main.ship_type,
        ship_main.ex_del_date,
        
        ship_tracking.id as tracking_row_id,
        ship_tracking.type,
        ship_tracking.date,
        ship_tracking.time,
        ship_tracking.place,
        ship_tracking.remarks
    ');

        $this->db->from('ship_main');
        $this->db->join('ship_tracking', 'ship_main.id = ship_tracking.sh_id', 'left');
        $this->db->group_start()
            ->where('ship_main.tracking_id', $trackingNumber)
            ->or_where('ship_main.lr_no', $trackingNumber)
            ->group_end();
        $this->db->order_by('ship_tracking.type', 'ASC');
        return $this->db->get()->result_array();

    }
}
