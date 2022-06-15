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
	public function intmarket()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/intmarket');
		$this->load->view('frontend/template/footer');
	}
	public function campaign()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/campaigndev');
		$this->load->view('frontend/template/footer');
	}
	public function boostersosmed()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/boostersosmed');
		$this->load->view('frontend/template/footer');
	}
	public function buzzer()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/buzzer');
		$this->load->view('frontend/template/footer');
	}
	public function onlinerep()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/onlinerep');
		$this->load->view('frontend/template/footer');
	}
	public function personalbrand()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/personalbrand');
		$this->load->view('frontend/template/footer');
	}
	public function sosmedmanagement()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/sosmedmanagement');
		$this->load->view('frontend/template/footer');
	}
	public function influencer()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/influencer');
		$this->load->view('frontend/template/footer');
	}
	public function jasamob()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/jasamob');
		$this->load->view('frontend/template/footer');
	}
	public function jasaweb()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/jasaweb');
		$this->load->view('frontend/template/footer');
	}
	public function jasasistem()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/jasasistem');
		$this->load->view('frontend/template/footer');
	}
	public function client()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/client');
		$this->load->view('frontend/template/footer');
	}
	public function contact()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/contact');
		$this->load->view('frontend/template/footer');
	}
	public function team()
	{
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/pages/team');
		$this->load->view('frontend/template/footer');
	}
}
