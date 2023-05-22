<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct(){
		 parent::__construct();
		 $this->load->helper("form");
		 $this->load->helper("url");
		  $this->load->helper("date");
		  $this->load->helper("cookie");
		 $this->load->database();
		 $this->load->model("Record");
		 $this->load->library("session");
		 $tcode='';
		 $arr='';
	 }
	
	public function index()
	{   
	    $rec["rd"]=$this->Record->welcome();
		$this->load->view("welcome_message",$rec);
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function submit(){
		$username=$this->input->post("username");
		$pass=$this->input->post("pass");
		if($this->Record->check($username,$pass)){
			echo $this->session->userdata($username);
			set_cookie("login",$username,3600*24);
			$this->input->set_cookie("login",$username,3600*24);
			redirect(base_url()."index.php/welcome/dashboard");
	   }
	   else{
		   echo "Try Again";
		   redirect(base_url()."index.php/welcome/login");
    }
	}
	public function reterive()
	{
		$data=array(
		"username"=>$this->input->post("username"),
		"email"=>$this->input->post("email"),
		"pass"=>$this->input->post("pass"),
		);
		if($this->Record->insert_record($data)){
			echo "Record Inserted";
			redirect(base_url()."index.php/welcome/login");
		}
		else{
			echo "Try Again";
			redirect(base_url()."index.php/welcome/login");
		}
	}
	public function dashboard()
	{
		$username=get_cookie("login");
		$rec["rd"]=$this->Record->display();
		$this->load->view("dashboard",$rec);
		
	}
	public function do_upload(){
		$sn=$this->Record->sn();
		$code="";
		$a=array();
		for($i='A';$i<='Z';$i++){
			array_push($a,$i);
			if($i=='Z')
				break;
		}
		for($i='a';$i<='z';$i++){
			array_push($a,$i);
			if($i=='z')
				break;
		}
		for($i=0;$i<=9;$i++){
			array_push($a,$i);
		}
		$b=array_rand($a,6);
		for($i=0;$i<sizeof($b);$i++){
			$code=$code.$a[$b[$i]];
		}
		 $config['upload_path']= '././uploads/';
		 $config['allowed_types']= 'gif|jpg|png';
		 $config['file_name']=$code;
		 $this->load->library('upload', $config);
		 if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('dashboard', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                }
				
			$username=get_cookie("login");
		     $data=array(
			 "sn"=>$sn,
			 "code"=>$code,
			 "name"=>$this->input->post("name"),
			 "author"=>$this->input->post("author"),
			 "category"=>$this->input->post("category"),
			 "price"=>$this->input->post("price"),
			 "description"=>$this->input->post("description"),
			 "username"=>get_cookie("login")
		);
		if($this->Record->upload_record($data)){
			echo "Record Inserted";
			redirect(base_url()."index.php/welcome/dashboard");
		}
		else{
			echo "Try Again";
			redirect(base_url()."index.php/welcome/dashboard");
		}
  }
  public function books()
	{
		$username=get_cookie("login");
		$rec["rd"]=$this->Record->books();
		$this->load->view("books",$rec);
	}
	 public function books_a()
	{
		$username=get_cookie("login");
		$rec["rd"]=$this->Record->books_a();
		$this->load->view("books_a",$rec);
	}
	public function show()
	{
		$id=$this->uri->segment(3);
		$rec["rd"]=$this->Record->edit($id);
		$this->load->view("edit",$rec);
	}
	public function update(){
		$sn=$this->uri->segment(3);
		$data=array(
			 "name"=>$this->input->post("name"),
			 "author"=>$this->input->post("author"),
			 "category"=>$this->input->post("category"),
			 "price"=>$this->input->post("price"),
			 "description"=>$this->input->post("description"),
			);
			$this->Record->update_record($data,$sn);
			redirect(base_url()."index.php/welcome/books");
	}
	public function delete(){
		$sn=$this->uri->segment(3);
		$this->Record->delete_record($sn);
			redirect(base_url()."index.php/welcome/books");
	}
	public function buy()
	{
		$tcode=$this->uri->segment(3);
		$rec["rd"]=$this->Record->book_display($tcode);
		$this->load->view("buy",$rec,$tcode);
	}
	public function enquiry(){
		$sn=$this->Record->sn_1();
		$code="";
		$a=array();
		for($i='A';$i<='Z';$i++){
			array_push($a,$i);
			if($i=='Z')
				break;
		}
		for($i='a';$i<='z';$i++){
			array_push($a,$i);
			if($i=='z')
				break;
		}
		for($i=0;$i<=9;$i++){
			array_push($a,$i);
		}
		$b=array_rand($a,6);
		for($i=0;$i<sizeof($b);$i++){
			$code=$code.$a[$b[$i]];
		}
		$tcode=$this->uri->segment(3);
		$to_email=$this->Record->enquiry($tcode);
		$data=array(
		      "sn"=>$sn,
			  "code"=>$code,
			 "contact"=>$this->input->post("contact"),
			 "message"=>$this->input->post("message"),
			 "from_email"=>get_cookie("login"),
			 "to_email"=>$to_email,
			 "date"=>date("Y-m-d")
			);
			if($this->Record->inbox($data)){
			echo "Record Inserted";
			redirect(base_url()."index.php/welcome/dashboard");
		}
		else{
			echo "Try Again";
		}
	}
	public function message()
	{
		$username=get_cookie("login");
		$rec["rd"]=$this->Record->message($username);
		$this->load->view("inbox",$rec);
	}
	public function search()
	{
	    $search=$this->input->post("search");
		$rec["rd"]=$this->Record->search($search);
		$this->load->view("search",$rec);
		
	}
	public function search1()
	{
	    $search=$this->input->post("search");
		$rec["rd"]=$this->Record->search1($search);
		$this->load->view("search1",$rec);
		
	}
	public function logout(){
		delete_cookie("login");
		redirect(base_url()."index.php/Welcome/");
	}
}
?>