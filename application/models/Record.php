<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record extends CI_Model {
	public function check($username,$pass){
		 $this->db->select('pass');
		 $this->db->from('register');
		 $this->db->where("username",$username);
		 foreach($this->db->get()->result() as $row){
			 $rpass=$row->pass;
			 if($rpass == $pass){
				 return true;
			 }
			 else{
				 return false;
			 }
		 }
	 }
	 public function welcome(){
        $this->db->select("*");
        $this->db->from("upload");
        return $this->db->get()->result();
    }
     public function display(){
		$username=get_cookie("login");
        $this->db->select("*");
        $this->db->from("upload");
		$this->db->where("username<>",$username);
		
        return $this->db->get()->result();
    }
	 
	 public function insert_record($data){
		 $this->db->insert("register",$data);
		 return true;
	 }
	 public function upload_record($data){
		 $this->db->insert("upload",$data);
		 return true;
	 }
	  public function sn(){
		 $this->db->select_max("sn");
		 $this->db->from('upload');
		 foreach($this->db->get()->result() as $row){
			 $sn=$row->sn;
			 $sn=$sn+1;
		     return $sn;
		 }
	 }
	  public function books(){
		  $username=get_cookie("login");
        $this->db->select("*");
        $this->db->from("upload");
		$this->db->where("username",$username);
		
        return $this->db->get()->result();
    }
	public function books_a(){
		  $username=get_cookie("login");
        $this->db->select("*");
        $this->db->from("upload");
		$this->db->where("username<>",$username);
        return $this->db->get()->result();
    }
	 public function edit($id){
		 $this->db->select("*");
		 $this->db->from("upload");
		 $this->db->where("sn",$id);
		 return $this->db->get()->result();
	 }
	 public function update_record($data,$sn){
		 $this->db->where("sn",$sn);
		 $this->db->update("upload",$data);
	 }
	 public function delete_record($sn){
		 $this->db->where("sn",$sn);
		 $this->db->delete("upload");
	 }
	public function enquiry($tcode){
		 $this->db->select("username");
		 $this->db->from("upload");
		 $this->db->where("code",$tcode);
		 foreach($this->db->get()->result() as $row){
			$to_email=$row->username;
			return $to_email;
	}
	}
	 public function sn_1(){
		 $this->db->select_max("sn");
		 $this->db->from('inbox');
		 foreach($this->db->get()->result() as $row){
			 $sn=$row->sn;
			 $sn=$sn+1;
		     return $sn;
		 }
	 }
	 public function inbox($data){
		 $this->db->insert("inbox",$data);
		 return true;
	 }
	 public function book_display($tcode){
		   $this->db->select("*");
		    $this->db->from("upload");
			 $this->db->where("code",$tcode);
			 return $this->db->get()->result();
	 }
	 public function message($username){
        $this->db->select("*");
        $this->db->from("inbox");
		$this->db->where("to_email",$username);
        return $this->db->get()->result();
    }
	 public function search($search){
		  $this->db->select("*");
        $this->db->from("upload");
		$this->db->like("name",$search,"both");
        return $this->db->get()->result();
	 }
	 public function search1($search){
		  $this->db->select("*");
        $this->db->from("inbox");
		$this->db->like("from_email",$search,"both");
        return $this->db->get()->result();
	 }
}
?>