<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts extends MX_Controller
{
    function __construct(){
        parent::__construct();
     $this->load->database();
    }
    function index()
    {
        $data['title'] = "Contact Us - Packers and Movers Customer Support | " . $this->comp['company3'];
        $data['description'] = "Get in touch with " . $this->comp['company3'] . " for bookings, queries, or complaints. Call our packers and movers support at " . $this->comp['phone'] . " or visit our office.";
        $data['module'] = "contacts";
        $data['view_file'] = "contacts";
        echo Modules::run('template/layout2', $data);
    }
  
  
    function booking()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        $this->form_validation->set_rules('email', "Email", 'trim|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'trim');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->bookings();
            if ($check == true) {
          echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }
    function faq()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->faq();
            if ($check == true) {
          echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }
    function contact()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->contact();
            if ($check == true) {
          echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }

    function call_back()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->call_back();
            if ($check == true) {
                echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }

 public function tracking()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('trackingNumber', 'Tracking ID', 'required|trim');

        if ($this->form_validation->run() == true) {
            $data = $this->contacts_mdl->trackings();

            if ($data) {
                $response = [
                    'status' => 'success',
                    'main' => [
                        'tracking_id' => $data[0]['tracking_id'],
                        'lr_no' => $data[0]['lr_no'],
                        'c_name' => $data[0]['c_name'],
                        'ship_from' => $data[0]['ship_from'],
                        'ship_to' => $data[0]['ship_to'],
                        'ship_type' => $data[0]['ship_type'],
                        'ex_del_date' => $data[0]['ex_del_date']
                    ],
                    'timeline' => []
                ];
                foreach ($data as $row) {
                    $response['timeline'][] = [
                        'type' => $row['type'],
                        'date' => $row['date'],
                        'time' => $row['time'],
                        'place' => $row['place'],
                        'remarks' => $row['remarks']
                    ];
                }
                echo json_encode($response);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Tracking number not found']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => validation_errors()]);
        }
    }

    function trackingpage()
    {
        $data['title'] = "Track Your Shipment - Shifting Status Tracking | " . $this->comp['company3'];
        $data['description'] = "Track your relocation shipment in real-time. Enter your tracking ID or LR number to get instant updates on your home shifting or vehicle transport consignment status.";
        $data['module'] = "contacts";
        $data['view_file'] = "tracking";
        echo Modules::run('template/layout2', $data);
    }

    
}