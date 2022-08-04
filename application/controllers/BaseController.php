<?php header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BaseController extends CI_Controller {
    public function _construct(){
        parent::_construct();
    }
    public function index(){
        $page_data['t_homeslider'] = $this->db->get('t_homeslider')->result_array();
        $page_data['t_news'] = $this->db->get_where('t_news',array('Type'=>'News'))->result_array();
        $page_data['t_staff'] = $this->db->get('t_staff')->result_array();
        $page_data['t_aboutus'] = $this->db->get('t_aboutus')->row();
        $page_data['t_events'] = $this->db->get_where('t_news',array('Type'=>'Announcement'))->result_array();
        $this->load->view('web/index', $page_data);
    }
    function loadpage($param1="",$param2=""){

        if($param1=="home"){
            $page_data['linktype']=$param1;
            $this->load->view('web/index', $page_data);   
        }

        if($param1=="Announcement"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/Announcement', $page_data);   
        }
       
        if($param1=="NewsEvents"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/NewsEvents', $page_data);   
        }
        if($param1=="AcademicTopper"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/AcademicTopper', $page_data);   
        }

        if($param1=="contactus"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/contactus', $page_data);   
        }
       
        if($param1=="StaffProfile"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/StaffProfile', $page_data);   
        }

        if($param1=="history"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/history', $page_data);   
        }

        if($param1=="MhssFinest"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/MhssFinest', $page_data);   
        }

        if($param1=="contactus"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/contactus', $page_data);   
        }
        
        if($param1=="EventDetail"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/EventDetail', $page_data);   
        }
        if($param1=="login"){
            $page_data['linktype']=$param1;
            $this->load->view('web/login/login', $page_data);   
        }
        
    }
    function login(){
         $page_data['message']="";
        if($this->input->post('email')!="" &&  $this->input->post('password')!=""){
            $query = $this->db->get_where('t_user', array('Email_Id' => $this->input->post('email')));
            if ($query->num_rows() > 0){
                $row = $query->row_array(); 
                if(password_verify($this->input->post('password'), $row['Password'])){
                    if($row['Status']=="InActive"){
                      $page_data['message'] = '<div><p style="Color:#fc1c03">Your user detail is deactivated. Please contact system administrator.</p></div>';
                          $this->load->view('web/login/login',$page_data );
                          return FALSE; 
                    }
                    else{
                        $this->session->set_userdata('User_Id', $row['Id']);
                        $this->session->set_userdata('Image', $row['Image']);
                        $this->session->set_userdata('Name', $row['Name']);
                        $this->session->set_userdata('Email_Id', $row['Email_Id']);
                        $this->session->set_userdata('Mobile_Number', $row['Mobile_Number']);
                        redirect(base_url() . 'index.php?baseController/dashboard', 'refresh');
                    }  
                }
                else{
                    $page_data['message'] = '<div><p style="Color:#fc1c03">Wrong Password! </p></div>';
                    $this->load->view('web/login/login',$page_data );
                    return FALSE; 
                }
            } 
            else{
                 $page_data['message'] = '<div><p style="Color:#fc1c03">Your email and password mismatch. please try agin or use forgot password if you are not sure with current password</p></div>';
                $this->load->view('web/login/login',$page_data );
                return FALSE;
            }
        } 
        else{
            $page_data['message'] = '';
            $this->load->view('web/login/login',$page_data ); 
        }
    }

    function dashboard($param=""){
        $page_data['message']="";
        if ($this->session->userdata('User_Id') == null ){
            redirect(base_url(), 'refresh');
        }
        else{
            $this->load->view('admin/dashboard', $page_data);
        }
    }
    function logout($param=''){  
        $this->session->unset_userdata(0);
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'index.php?baseController/', 'refresh');
    }
    function load_newsdetails($id=""){
        $page_data['t_news'] = $this->db->get_where('t_news',array('Id'=>$id))->result_array();
        $this->load->view('web/pages/detailnews', $page_data); 
    }


}