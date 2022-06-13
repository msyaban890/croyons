<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{
	public function index()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/index');
		$this->load->view('frontend/template/footer');
	}
	public function about()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/about');
		$this->load->view('frontend/template/footer');
	}
	public function solusi()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/solusi');
		$this->load->view('frontend/template/footer');
	}
	public function jasaseo()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/solusi');
		$this->load->view('frontend/template/footer');
	}
}
