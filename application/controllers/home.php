<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function index()
	{
		$page_data['page_name']='home';
		$this->load->view('frontend/index',$page_data);
	}
	
	function contact()
	{
	
		$page_data['page_name']='contact';
		$this->load->view('frontend/index',$page_data);
	}
	
	function room_list()
	{
	
		$page_data['page_name']='room_list';
		$this->load->view('frontend/index',$page_data);
	}
	
	function room_type_list()
	{
	
		$page_data['page_name']='room_type_list';
		$this->load->view('frontend/index',$page_data);
	}
	
	function room_detail($param1)
	{
	
		$page_data['room_list1'] = $this->db->get_where('rooms',array('rooms_id'=>$param1))->result_array();
		$page_data['page_name']='room_detail';
		$this->load->view('frontend/index',$page_data);
	}
	
	function packages()
	{
	
		$page_data['page_name']='packages';
		$this->load->view('frontend/index',$page_data);
	}
	
	function packages_detail()
	{
	
		$page_data['page_name']='packages_detail';
		$this->load->view('frontend/index',$page_data);
	}
	
	function event_list()
	{
	
		$page_data['page_name']='event_list';
		$this->load->view('frontend/index',$page_data);
	}
	
	function event_detail($param1)
	{
	
		$page_data['event_list'] = $this->db->get_where('events',array('events_id'=>$param1))->result_array();;
		$page_data['page_name']='event_detail';
		$this->load->view('frontend/index',$page_data);
	}
	
	function mem_login()
	{
	
		$page_data['page_name']='mem_login';
		$this->load->view('frontend/index',$page_data);
	}
	
	function mem_reg()
	{
	
		$page_data['page_name']='mem_reg';
		$this->load->view('frontend/index',$page_data);
	}
	
	function food_corner_list()
	{
	
		$page_data['page_name']='food_corner_list';
		$this->load->view('frontend/index',$page_data);
	}
	
	function food_corner_detail($param1)
	{
	
		$page_data['food_corner'] = $this->db->get_where('food_item',array('food_item_id'=>$param1))->result_array();
		$page_data['page_name']='food_corner_detail';
		$this->load->view('frontend/index',$page_data);
	}
	function blog()
	{
		
		$page_data['page_name']='blog';
		$this->load->view('frontend/index',$page_data);
	}
	function blog_detail($param1)
	{
		$page_data['news'] = $this->db->get_where('news',array('news_id'=>$param1))->result_array();
		$page_data['page_name']='blog_detail';
		$this->load->view('frontend/index',$page_data);
	}
	function room_detail_temp()
	{
	
		$page_data['page_name']='room_detail_temp';
		$this->load->view('frontend/index',$page_data);
	}
	function about_us()
	{
	
		$page_data['page_name']='about_us';
		$this->load->view('frontend/index',$page_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */