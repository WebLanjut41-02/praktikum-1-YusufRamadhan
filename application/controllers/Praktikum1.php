<?php
	defined('BASEPATH') OR exit('No direct script are allowed');

	class Praktikum1 extends MY_Controller{
		private $USname;
		private $USpass;

	function index(){
		$this->load->view('Praktikum1/Log-in');
	}

	function home(){
		$UN = $this->input->post('username');
		$PW = $this->input->post('password');
		$this->USname = array( "MYR", "EGN","Admin");
		$this->USpass = array( "123","234","345");
		if (in_array($UN,$this->USname)) {
				$_SESSION["Name"] = $UN;
				$key = array_search($UN,$this->USname);
					if ($this->USpass[$key]==$PW) {
						$_SESSION["Pass"] = $PW;
						$data['isi'] = array('User' => $_SESSION["Name"], 'Pass' => $_SESSION["Pass"] = $PW);
						$data['list'] = array('user' => $this->USname, 'pass'=>$this->USpass);
						$this->load->view('Praktikum1/Home',$data);
					}
					else {
						echo '<script language="javascript"> alert ("Username dan Password tidak cocok");</script>';
						$this->load->view('Praktikum1/Log-in');
					}
			}
			else {
				echo '<script language="javascript"> alert ("login gagal");</script>';
				$this->load->view('Praktikum1/Log-in');
			}
	}

	}
?>
