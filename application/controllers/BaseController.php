<?php header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BaseController extends CI_Controller {
    public function _construct(){
        parent::_construct();
    }
    public function index(){
        //die('i am here');
        $this->load->view('web/index');
    }
    function loadpage($param1="",$param2=""){


        if($param1=="about"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/about', $page_data);   
        }
        if($param1=="contactus"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/contactus', $page_data);   
        }
        if($param1=="countrytopper"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/countrytopper', $page_data);   
        }

        if($param1=="detailnews"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/detailnews', $page_data);   
        }

        if($param1=="history"){
            $page_data['linktype']=$param1;
            $this->load->view('web/pages/history', $page_data);   
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
                     $page_data['messagefail']='Your user detail is deactivated. Please contact system administrator.';
                          $this->load->view('web/login',$page_data );
                          return FALSE; 
                    }
                    else{
                        $this->session->set_userdata('User_Id', $row['Id']);
                        $this->session->set_userdata('Image', $row['Image']);
                        $this->session->set_userdata('Name', $row['Name']);
                        $this->session->set_userdata('Email_Id', $row['Email_Id']);
                        $this->session->set_userdata('Mobile_Number', $row['Mobile_Number']);
                        $this->session->set_userdata('Role_Id', $row['Role_Id']);
                        redirect(base_url() . 'index.php?baseController/dashboard', 'refresh');
                    }  
                }
                else{
                    $page_data['message'] = '<div class="alert alert-danger">Wrong Password! </div>';
                    $this->load->view('web/login',$page_data );
                    return FALSE; 
                }
            } 
            else{
                 $page_data['message'] = '<div class="alert alert-danger">Your email and password mismatch. please try agin or use forgot password if you are not sure with current password</div>';
                $this->load->view('web/login',$page_data );
                return FALSE;
            }
        } 
        else{
            $page_data['message'] = '';
            $this->load->view('web/login',$page_data ); 
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



    function linkresetpassword(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
        $checkemail=$this->db->get_where('t_user_master',array('Email'=>$this->input->post('email')))->row();
         if($checkemail==""){
            $page_data['messagefail']='<div class="alert alert-danger">This email is not registred in our System. Pleaese provide your correct email and please try again.</div>';
            $this->load->view('web/acknowledgement',$page_data);
        }
        else{
            $emailparam='';
            $maildetails=$this->db->get_where('t_mail_template', array( 'Template_Module' => 'PASSWORD'))->row();
            $t_mail_template=$maildetails->Template_Mail_Body;
            $htmlContent =$t_mail_template;
            $val=$this->CommonModel->sendmail($this->input->post('email'), $maildetails->Template_Subject.' (This is system generated mail. Please donot reply)',$htmlContent);
            $page_data['message']="<div class='alert alert-success alert-dismissible'>We have sent you the password reset Link in your email. Please check your inbox and reset your password now.Thank you for using our system.</div>";
            $this->load->view('web/acknowledgement',$page_data);
        }
        
    }
    function replaceoldpassword(){
            $page_data['message']="";
            $page_data['messagefail']="";
            $checkemail=$this->db->get_where('t_user_master',array('Email'=>$this->input->post('email')))->row();
             if($checkemail==""){
                $page_data['messagefail']='<div class="alert alert-danger">This email is not registred in our System. Pleaese provide your correct email and please try again.</div>';
                $this->load->view('web/acknowledgement',$page_data);
            }
            else{
                $data['Password']=password_hash($this->input->post('confirmpassword'), PASSWORD_BCRYPT);
                $this->db->where('Email', $this->input->post('email'));
                $this->db->update('t_user_master', $data);
                $page_data['message']="<div class='alert alert-success alert-dismissible'>your password has been resseted successfully.Thank you for using our system.</div>";
                $this->load->view('web/acknowledgement',$page_data);
        }
        
    }
    //edited this method
    function localregistration(){
        $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
        $page_data['message']="";
        $page_data['messagefail']="";
        $checkemail=$this->db->get_where('t_user_master',array('Email'=>$this->input->post('email')))->row();
        if($checkemail!=""){
            $page_data['messagefail']="This email is already taken. Pleaese provide another one";
           $this->load->view('web/acknowledgement', $page_data); 
        }
        else{
            $data['Name']=$this->input->post('name');
            $data['Email']=$this->input->post('email');
            $data['Contact_No']=$this->input->post('phone');
            $data['Designation']=$this->input->post('designation');
            $data['Role_Id']=2;//local supplier, give id as mentioned in db ->t_role_master    
            $data['Password']=password_hash($this->input->post('confirmpassword'), PASSWORD_BCRYPT);
            $data['Status']="InActive"; //Activeate this user on approval
            $user_id=$this->CommonModel->do_insert('t_user_master', $data); 

            $sup_data['User_Id']=$user_id;
            $sup_data['Supplier_Type_Id']=1; //from t_
            $sup_data['Company_Name']=$this->input->post('company');
            $sup_data['License_No']=$this->input->post('License');
            $sup_data['Company_Website']=$this->input->post('website');
            $sup_data['Telephone_No']=$this->input->post('telephone');
            $sup_data['License_Registration_Date']= date('Y-m-d',strtotime($this->input->post('Registration')));
            $sup_data['Company_Address']=$this->input->post('address');
            $sup_data['Company_Description']=$this->input->post('description');
            $sup_data['Submitted_Date']=date('Y-m-d h:i:s');
            $sup_data['Status_Id']=1;//change here according to the data in t_status_master
            //$sup_data['City']=$this->input->post('Registration');
            //$sup_data['Postal_Code']=$this->input->post('address');
            $new_file_name = $_FILES["Image"]["name"];
            $file_directory = "./uploads/License/";
            if(!is_dir($file_directory)){
                mkdir($file_directory,0777,TRUE); 
            }
            if($new_file_name!=""){
              move_uploaded_file($_FILES["Image"]["tmp_name"], $file_directory . $new_file_name);
              $sup_data['License_Img']=$file_directory . $new_file_name;
            }
            $this->CommonModel->do_insert('t_supplier_company', $sup_data); 
            //mail notification
            $emailparam='';
            $maildetails=$this->db->get_where('t_mail_template', array( 'Template_Module' => 'REGISTRATION_SUBMISSION'))->row();
            $t_mail_template=$maildetails->Template_Mail_Body;
            $t_mail_template=str_replace("##Name##", ''.$this->input->post('name'),  $t_mail_template);
            $htmlContent =$t_mail_template;
            $val=$this->CommonModel->sendmail($this->input->post('email'), $maildetails->Template_Subject.' (This is system generated mail. Please donot reply)',$htmlContent);
            if($this->db->affected_rows()>0){
                $page_data['message']="Your Information has been added for Approval. You will be notified throught email once our team take further action.Thank you for using our system";
            }
            else{
                $page_data['messagefail']='Your Information  is not able to submit. Please try again';
            }
            $this->load->view('web/acknowledgement', $page_data);
        }        
    }
    function globalregistration(){
        $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
        $page_data['message']="";
        $page_data['messagefail']="";
        $checkemail=$this->db->get_where('t_user_master',array('Email'=>$this->input->post('email')))->row();
        if($checkemail!=""){
            $page_data['messagefail']="This email is already taken. Pleaese provide another one";
           $this->load->view('web/acknowledgement', $page_data); 
        }
        else{
            $data['Name']=$this->input->post('name');
            $data['Email']=$this->input->post('email');
            $data['Contact_No']=$this->input->post('phone');
            $data['Designation']=$this->input->post('designation');
            $data['Role_Id']=3;//local supplier, give id as mentioned in db ->t_role_master    
            $data['Password']=password_hash($this->input->post('confirmpassword'), PASSWORD_BCRYPT);
            $data['Status']="InActive"; //Activeate this user on approval
            $user_id=$this->CommonModel->do_insert('t_user_master', $data); 

            $sup_data['User_Id']=$user_id;
            $sup_data['Supplier_Type_Id']=2; //from t_
            $sup_data['Company_Name']=$this->input->post('company');
            $sup_data['Company_Website']=$this->input->post('website');
            $sup_data['Company_Address']=$this->input->post('address');
            $sup_data['Company_Description']=$this->input->post('description');
            $sup_data['Telephone_No']=$this->input->post('telephone');
            $sup_data['Country_Id']=$this->input->post('Country');
            $sup_data['City']=$this->input->post('city');
            $sup_data['Postal_Code']=$this->input->post('postalcode');
            $sup_data['Submitted_Date']=date('Y-m-d h:i:s');
            $sup_data['Status_Id']=1;//change here according to the data in t_status_master

            $this->CommonModel->do_insert('t_supplier_company', $sup_data); 
            
            $emailparam='';
            $maildetails=$this->db->get_where('t_mail_template', array( 'Template_Module' => 'REGISTRATION_SUBMISSION'))->row();
            $t_mail_template=$maildetails->Template_Mail_Body;
            $t_mail_template=str_replace("##Name##", ''.$this->input->post('name'),  $t_mail_template);
            $htmlContent =$t_mail_template;
            $val=$this->CommonModel->sendmail($this->input->post('email'), $maildetails->Template_Subject.' (This is system generated mail. Please donot reply)',$htmlContent);

            if($this->db->affected_rows()>0){
                $page_data['message']="Your Information has been added for Approval. You will be notified throught email once our team take further action.Thank you for using our system";
            }
            else{
                $page_data['messagefail']='Your Information  is not able to submit. Please try again';
            }
            $this->load->view('web/acknowledgement', $page_data);
        }
    }
    function search_details(){
        $page_data['searchResult'] = $this->CommonModel->searchfromtable($this->input->post('searchdetails'));
        $this->load->view('web/search_result', $page_data);
    }

    function technologyrequestForm(){
        $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
        $page_data['message']="";
        $page_data['messagefail']="";
        
        $data['Name']=$this->input->post('name');
        $data['Email']=$this->input->post('email');
        $data['Contact_No']=$this->input->post('phone');
        $data['Present_Address']=$this->input->post('address');
        $data['Equipment_Name']=$this->input->post('equipment');
        $data['Equipment_Description']=$this->input->post('description');
        $data['Type']=$this->input->post('request');
        $this->CommonModel->do_insert('t_technology_request', $data);

        if($this->db->affected_rows()>0){

            $this->load->library('email');
            $config = array(
                'protocol'  => 'ssmtp',
                'smtp_host' => 'ssl://ssmtp.googlemail.com',//ssl://ssmtp.googlemail.com
                'smtp_port' => 465, 
                'smtp_user' => 'noreply@dcsitechnology.bt',
                'smtp_pass' => 'admin@2021',
                'smtp_timeout' => '7',
                'mailtype'  => 'html',
                'smtp_crypto' => 'security', //can be 'ssl' or 'tls' for example
                'charset'   => 'utf-8'
            );
            $this->email->initialize($config);
            $this->email->set_mailtype("html");
            $this->email->set_newline("\r\n");
            $this->load->helper('string');
            $sql = "SELECT Email FROM t_user_master";
            $query = $this->db->query($sql);
            $array = $query->result_array();
            $arr = array_column($array,"Email");

            $t_mail_template=$this->db->get_where('t_mail_template', array( 'Template_Module' => 'NOTIFICATION'))->row()->Template_Mail_Body;
            $t_mail_template=str_replace("##NAME##", ''.$this->input->post('equipment'),  $t_mail_template);
            $t_mail_template=str_replace("##SENDER##", ''.$this->input->post('name'),  $t_mail_template);
            $t_mail_template=str_replace("##CONTACT##", ''.$this->input->post('phone'),  $t_mail_template);
            $t_mail_template=str_replace("##EMAIL##", ''.$this->input->post('email'),  $t_mail_template);
            
            
            $htmlContent =$t_mail_template;
            $this->email->to($arr);
            $this->email->from('noreply@dcsitechnology.bt','noreply');
            $this->email->subject('DCSI Technology Request of Your Choice');
            $this->email->message($htmlContent);
            $this->email->send();
            $page_data['message']="";
            $page_data['messagefail']="";
            $page_data['message']="<div class='alert alert-success alert-dismissible'>Your Information has been added. You will be notified throught email once our the Supplier take further action.Thank you for using our system.</div>";
        }
        else{
            $page_data['messagefail']="<div class='alert alert-danger alert-dismissible'>Your Information  is not able to submit. Please try again.Thank You.</div>";
        }

        $this->load->view('web/acknowledgement', $page_data);
    }

    function load_productdetails($id=""){
        $page_data['product_details'] =$this->db->get_where('t_products_master',array('Id'=>$id))->row();
        $page_data['product_images_details'] =$this->db->get_where('t_product_images',array('Product_Id'=>$id))->result_array();
        $page_data['company_details'] =$this->db->get_where('t_supplier_company',array('Id'=>$page_data['product_details']->Company_Id))->row();

         // $query ="SELECT * FROM `t_supplier_company` t JOIN `t_user_master` u ON t.`User_Id`=u.`Id` WHERE t.`Id` = '".$Company_Id."'";
        //$page_data['company_details'] = $this->db->query($query)->row(); 
        $this->load->view('web/product_details', $page_data);
    }
    
    function createorder(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Name']=$this->input->post('name');
        $data['Email']=$this->input->post('email');
        $data['Contact_No']=$this->input->post('contact');
        $data['Quantity']=$this->input->post('quantity');
        $data['Product_Id']=$this->input->post('productId');
        $data['Company_Id']=$this->input->post('companyId');
        $data['Submitted_Date']=date('Y-m-d h:i:s');
        $this->CommonModel->do_insert('t_order_details', $data); 
        if($this->db->affected_rows()>0){
            $page_data['message']="Your order information has been added. You will be contacted with your provided information.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Your Information  is not able to submit. Please try again';
        }
        $this->load->view('web/acknowledgement', $page_data);
    }
    function load_NewsDestails($id=""){
        $page_data['t_imagecategory'] = $this->db->get_where('t_category_master',array('Status'=>'Active'))->result_array();
        $page_data['CompanyInfo'] = $this->db->get_where('t_company_details')->row(); 
        $page_data['t_announcement'] = $this->db->get_where('t_news_announcement',array('Id'=>$id))->row();
        $page_data['news_list'] = $this->db->get_where('t_news_announcement',array('Status'=>'Active'))->result_array();
        $this->load->view('web/pages/newsdetails', $page_data);
    }
    
    function load_allproductdetails($id=""){
        $query="SELECT p.`Id`,p.`Description`,p.`Last_Updated_Date`,p.`Model_No`,p.`Price`,p.`Product_Name`,i.`Image_Name`  FROM t_products_master p, t_product_images i WHERE p.`Category_Id` = ".$id." AND p.`Id`=i.`Product_Id` AND p.`Status`='Active' GROUP BY p.Id, p.`Last_Updated_Date` DESC ";
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));") ;
        $page_data['product_details'] =$this->db->query($query)->result_array();
        $this->load->view('web/list_product_details', $page_data);
    }
    function Addcontactus(){
        $page_data['message']="";
        $page_data['messagefail']="";
        $data['Name']=$this->input->post('name');
        $data['Phone']=$this->input->post('phone');
        $data['Email']=$this->input->post('email');
        $data['Subject']=$this->input->post('contactSubject');
        $data['Message']=$this->input->post('contactMessage');
        $this->CommonModel->do_insert('t_contactus', $data); 
        
        if($this->db->affected_rows()>0){
            $page_data['message']="Thank you for contacting us. You will be contacted with your provided information.Thank you for using our system";
        }
        else{
            $page_data['messagefail']='Your Information  is not able to submit. Please try again';
        }
        $this->load->view('web/acknowledgement', $page_data); 

    }
}