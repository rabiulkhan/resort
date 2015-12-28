<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/*	
	   *	Developed by: Active IT zone
       *	Date	: 10 december, 2014
       *	Active Resort Management System
       */
	public function index()
	{
	
		if ($this->session->userdata('admin_login') !== 1)
			redirect(base_url() . 'index.php/login', 'refresh');
	
		$page_data['page_name']='dashboard';
		$this->load->view('backend/index',$page_data);
	}
	public function dashboard()
	{
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
	
		$page_data['page_name']='dashboard';
		$this->load->view('backend/index',$page_data);
	}
	
	//DECLARATION : MANAGE BRANCH
	function branch($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         					= $this->input->post('name');
			$data['email']         					= $this->input->post('email');
			$data['phone_number']         			= $this->input->post('phone_number');
			$data['division']         				= $this->input->post('division');
			$data['address']         				= $this->input->post('address');
			
			$this->db->insert('branch',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/branch/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['branch']   = $this->db->get('branch')->result_array();
			$page_data['page_name']   = 'branch_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['email']         					= $this->input->post('email');
			$data['phone_number']         			= $this->input->post('phone_number');
			$data['division']         				= $this->input->post('division');
			$data['address']         				= $this->input->post('address');
			
			$this->db->where('branch_id',$pamr2);
			$this->db->update('branch',$data);
			redirect(base_url().'index.php/admin/branch/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			
			$this->db->where('branch_id',$pamr2);
			$this->db->delete('branch');
			redirect(base_url().'index.php/admin/branch/view', 'refresh');
		}
	}
	
	//DECLARATION : MANAGE FLOOR
	function floors($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         				= $this->input->post('name');
			$data['branch']         			= $this->input->post('branch');
			$data['number']         			= $this->input->post('number');
			
			$this->db->insert('floors',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/floors/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['floors']   = $this->db->get('floors')->result_array();
			$page_data['page_name']   = 'floors_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['branch']         				= $this->input->post('branch');
			$data['number']        	       			= $this->input->post('number');
			
			$this->db->where('floors_id',$pamr2);
			$this->db->update('floors',$data);
			redirect(base_url().'index.php/admin/floors/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			
			$this->db->where('floors_id',$pamr2);
			$this->db->delete('floors');
			redirect(base_url().'index.php/admin/floors/view', 'refresh');
		}
	}
	
	//DECLARATION : MANAGE ROOM CATEGORY
	function room_type($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         				= $this->input->post('name');
			$data['floor']         				= $this->input->post('floor');
			$data['branch']         			= $this->input->post('branch');
			$data['facilities']         		= implode(',',$this->input->post('facilities'));
			
			$this->db->insert('room_type',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/room_type/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['room_type']   = $this->db->get('room_type')->result_array();
			$page_data['page_name']   = 'room_type_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         				= $this->input->post('name');
			$data['floor']         				= $this->input->post('floor');
			$data['branch']         			= $this->input->post('branch');
			$data['facilities']         		= implode(',',$this->input->post('facilities'));
			
			$this->db->where('room_type_id',$pamr2);
			$this->db->update('room_type',$data);
			redirect(base_url().'index.php/admin/room_type/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			
			$this->db->where('room_type_id',$pamr2);
			$this->db->delete('room_type');
			redirect(base_url().'index.php/admin/room_type/view', 'refresh');
		}
	}
	
	function extra_facility($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         					= $this->input->post('name');
			$data['description']         			= $this->input->post('description');
				
			$this->db->insert('extra_facility',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/extra_facility/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['extra_facility']   = $this->db->get('extra_facility')->result_array();
			$page_data['page_name']   = 'extra_facility_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['description']         			= $this->input->post('description');
			
			$this->db->where('extra_facility_id',$pamr2);
			$this->db->update('extra_facility',$data);
			redirect(base_url().'index.php/admin/extra_facility/view', 'refresh');
		} else if($pamr1 == "delete"){
			
			$this->db->where('extra_facility_id',$pamr2);
			$this->db->delete('extra_facility');
			redirect(base_url().'index.php/admin/extra_facility/view', 'refresh');
		}
	}
	
	function room($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['branch']         					= $this->input->post('branch');
			$data['floor']         			       		= $this->input->post('floor');
			$data['room_type']         			 	    = $this->input->post('room_type');
			$data['rent_per_night']         			= $this->input->post('rent_per_night');
			$data['description']         				= $this->input->post('description');
			$data['room_size']         					= $this->input->post('room_size');
			$data['adult']         						= $this->input->post('adult');
			$data['children']         					= $this->input->post('children');
			$data['bathroom']         					= $this->input->post('bathroom');
			$data['packages']         					= $this->input->post('packages');
			$data['creation_date']         				= $this->input->post('creation_date');
			$data['garage']         					= $this->input->post('garage');
			$data['bed']         						= $this->input->post('bed');
			$data['room_service']       	  			= $this->input->post('room_service');
			
			
			$this->db->insert('rooms',$data);
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/room_image/room_".$id.".jpg");
			redirect(base_url().'index.php/admin/room/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['room']   = $this->db->get('rooms')->result_array();
			$page_data['page_name']   = 'room_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['branch']         					= $this->input->post('branch');
			$data['floor']         			       		= $this->input->post('floor');
			$data['room_type']         			 	    = $this->input->post('room_type');
			$data['rent_per_night']         			= $this->input->post('rent_per_night');
			$data['description']         				= $this->input->post('description');
			$data['room_size']         					= $this->input->post('room_size');
			$data['adult']         						= $this->input->post('adult');
			$data['children']         					= $this->input->post('children');
			$data['bathroom']         					= $this->input->post('bathroom');
			$data['packages']         					= $this->input->post('packages');
			$data['creation_date']         				= $this->input->post('creation_date');
			$data['garage']         					= $this->input->post('garage');
			$data['bed']         						= $this->input->post('bed');
			$data['room_service']       	  			= $this->input->post('room_service');
			
			$this->db->where('rooms_id',$pamr2);
			$this->db->update('rooms',$data);
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/room_image/room_".$pamr2.".jpg");
			redirect(base_url().'index.php/admin/room/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			if(file_exists("upload/room_image/room_".$pamr2.".jpg"))
			{
				unlink("upload/room_image/room_".$pamr2.".jpg");
			}
			
			$this->db->where('rooms_id',$pamr2);
			$this->db->delete('rooms');
			redirect(base_url().'index.php/admin/room/view', 'refresh');
		}
	}
	
	function swimming_pool($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         					= $this->input->post('name');
			$data['depth']         					= $this->input->post('depth');
			$data['size']         					= $this->input->post('size');
			$data['about']        	 				= $this->input->post('about');
			$data['allowance']        	 			= $this->input->post('allowance');
				
			$this->db->insert('swimming_pool',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/swimming_pool/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['swimming_pool']   = $this->db->get('swimming_pool')->result_array();
			$page_data['page_name']   = 'swimming_pool_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['depth']         					= $this->input->post('depth');
			$data['size']         					= $this->input->post('size');
			$data['about']        	 				= $this->input->post('about');
			$data['allowance']        	 			= $this->input->post('allowance');
			
			$this->db->where('swimming_pool_id',$pamr2);
			$this->db->update('swimming_pool',$data);
			redirect(base_url().'index.php/admin/swimming_pool/view', 'refresh');
		} else if($pamr1 == "delete"){
			
			$this->db->where('swimming_pool_id',$pamr2);
			$this->db->delete('swimming_pool');
			redirect(base_url().'index.php/admin/swimming_pool/view', 'refresh');
		}
	}
	
	function outdoor_games($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         					= $this->input->post('name');
			$data['about']         					= $this->input->post('about');
			$data['place']         					= $this->input->post('place');
			$data['available_item']        	 		= $this->input->post('available_item');
			$data['allowance']        	 			= $this->input->post('allowance');
				
			$this->db->insert('outdoor_games',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/outdoor_games/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['outdoor_games']   = $this->db->get('outdoor_games')->result_array();
			$page_data['page_name']   = 'outdoor_games_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['about']         					= $this->input->post('about');
			$data['place']         					= $this->input->post('place');
			$data['available_item']        	 		= $this->input->post('available_item');
			$data['allowance']        	 			= $this->input->post('allowance');
			
			$this->db->where('outdoor_games_id',$pamr2);
			$this->db->update('outdoor_games',$data);
			redirect(base_url().'index.php/admin/outdoor_games/view', 'refresh');
		} else if($pamr1 == "delete"){
			
			$this->db->where('outdoor_games_id',$pamr2);
			$this->db->delete('outdoor_games');
			redirect(base_url().'index.php/admin/outdoor_games/view', 'refresh');
		}
	}
	
	function indoor_games($pamr1="",$pamr2=""){
		
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         					= $this->input->post('name');
			$data['about']         					= $this->input->post('about');
			$data['available_item']        	 		= $this->input->post('available_item');
			$data['allowance']        	 			= $this->input->post('allowance');
				
			$this->db->insert('indoor_games',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/indoor_games/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['indoor_games']   = $this->db->get('indoor_games')->result_array();
			$page_data['page_name']   = 'indoor_games_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['about']         					= $this->input->post('about');
			$data['available_item']        	 		= $this->input->post('available_item');
			$data['allowance']        	 			= $this->input->post('allowance');
			
			$this->db->where('indoor_games_id',$pamr2);
			$this->db->update('indoor_games',$data);
			redirect(base_url().'index.php/admin/indoor_games/view', 'refresh');
		} else if($pamr1 == "delete"){
			
			$this->db->where('indoor_games_id',$pamr2);
			$this->db->delete('indoor_games');
			redirect(base_url().'index.php/admin/indoor_games/view', 'refresh');
		}
	}
	
	function library($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         					= $this->input->post('name');
			$data['about']         					= $this->input->post('about');
			$data['type']        	 				= $this->input->post('available_item');
				
			$this->db->insert('library',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/library/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['library']   = $this->db->get('library')->result_array();
			$page_data['page_name']   = 'library_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['about']         					= $this->input->post('about');
			$data['type']        	 				= $this->input->post('type');
			
			$this->db->where('library_id',$pamr2);
			$this->db->update('library',$data);
			redirect(base_url().'index.php/admin/library/view', 'refresh');
		} else if($pamr1 == "delete"){
			
			$this->db->where('library_id',$pamr2);
			$this->db->delete('library');
			redirect(base_url().'index.php/admin/library/view', 'refresh');
		}
	}
	
	function religion($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['type']         					= $this->input->post('type');
			$data['floor']         					= $this->input->post('floor');
			$data['name']        	 				= $this->input->post('name');
			$data['about']         					= $this->input->post('about');
			$data['size']        	 				= $this->input->post('size');
				
			$this->db->insert('religion',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/religion/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['religion']   = $this->db->get('religion')->result_array();
			$page_data['page_name']   = 'religion_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['type']         					= $this->input->post('type');
			$data['floor']         					= $this->input->post('floor');
			$data['name']        	 				= $this->input->post('name');
			$data['about']         					= $this->input->post('about');
			$data['size']        	 				= $this->input->post('size');
			
			$this->db->where('religion_id',$pamr2);
			$this->db->update('religion',$data);
			redirect(base_url().'index.php/admin/religion/view', 'refresh');
		} else if($pamr1 == "delete"){
			
			$this->db->where('religion_id',$pamr2);
			$this->db->delete('religion');
			redirect(base_url().'index.php/admin/religion/view', 'refresh');
		}
	}
	
	function member_type($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         				= $this->input->post('name');
			
			$this->db->insert('member_type',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/member_type/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['member_type']   = $this->db->get('member_type')->result_array();
			$page_data['page_name']   = 'member_type_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			
			$this->db->where('member_type_id',$pamr2);
			$this->db->update('member_type',$data);
			redirect(base_url().'index.php/admin/member_type/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			
			$this->db->where('member_type_id',$pamr2);
			$this->db->delete('member_type');
			redirect(base_url().'index.php/admin/member_type/view', 'refresh');
		}
	}
	function member($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         					= $this->input->post('name');
			$data['address']         			   	= $this->input->post('address');
			$data['email']         			 	    = $this->input->post('email');
			$data['phone_number']         			= $this->input->post('phone_number');
			$data['skype']         					= $this->input->post('skype');
			$data['facebook']         				= $this->input->post('facebook');
			$data['google_plus']       				= $this->input->post('google_plus');
			$data['member_type']   					= $this->input->post('member_type');
			$data['creation_date']         			= $this->input->post('creation_date');
			
			$this->db->insert('member',$data);
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/member_image/member_".$id.".jpg");
			redirect(base_url().'index.php/admin/member/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['member']   = $this->db->get('member')->result_array();
			$page_data['page_name']   = 'member_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['address']         			   	= $this->input->post('address');
			$data['email']         			 	    = $this->input->post('email');
			$data['phone_number']         			= $this->input->post('phone_number');
			$data['skype']         					= $this->input->post('skype');
			$data['facebook']         				= $this->input->post('facebook');
			$data['google_plus']       				= $this->input->post('google_plus');
			$data['member_type']   					= $this->input->post('member_type');
			$data['creation_date']         			= $this->input->post('creation_date');
			
			$this->db->where('member_id',$pamr2);
			$this->db->update('member',$data);
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/member_image/member_".$pamr2.".jpg");
			redirect(base_url().'index.php/admin/member/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			if(file_exists("upload/member_image/member_".$pamr2.".jpg"))
			{
				unlink("upload/member_image/member_".$pamr2.".jpg");
			}
			
			$this->db->where('member_id',$pamr2);
			$this->db->delete('member');
			redirect(base_url().'index.php/admin/member/view', 'refresh');
		}
	}
	
	function booking($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['branch']         				= $this->input->post('branch');
			$data['room']         					= $this->input->post('room_type');
			$data['start_date']        				= $this->input->post('start_date');
			$data['end_date']        	 			= $this->input->post('end_date');
			$data['current_state']        	 		= $this->input->post('current_state');
			$data['cost']        	 				= $this->input->post('cost');
			$data['payment_state']        	 		= $this->input->post('payment_state');
				
			$this->db->insert('booking',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/booking/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['booking']   = $this->db->get('booking')->result_array();
			$page_data['page_name']   = 'booking_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['branch']         				= $this->input->post('branch');
			$data['room']         					= $this->input->post('room_type');
			$data['start_date']        				= $this->input->post('start_date');
			$data['end_date']        	 			= $this->input->post('end_date');
			$data['current_state']        	 		= $this->input->post('current_state');
			$data['cost']        	 				= $this->input->post('cost');
			$data['payment_state']        	 		= $this->input->post('payment_state');
			
			$this->db->where('booking_id',$pamr2);
			$this->db->update('booking',$data);
			redirect(base_url().'index.php/admin/booking/view', 'refresh');
		} else if($pamr1 == "delete"){
			
			$this->db->where('booking_id',$pamr2);
			$this->db->delete('booking');
			redirect(base_url().'index.php/admin/booking/view', 'refresh');
		}
	}
	function food_item_category($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         				= $this->input->post('name');
			
			$this->db->insert('food_item_category',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/food_item_category/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['food_item_category']   = $this->db->get('food_item_category')->result_array();
			$page_data['page_name']   = 'food_item_category_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			
			$this->db->where('food_item_category_id',$pamr2);
			$this->db->update('food_item_category',$data);
			redirect(base_url().'index.php/admin/food_item_category/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			
			$this->db->where('food_item_category_id',$pamr2);
			$this->db->delete('food_item_category');
			redirect(base_url().'index.php/admin/food_item_category/view', 'refresh');
		}
	}
	
	function food_item($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         					= $this->input->post('name');
			$data['food_item_category']         	= $this->input->post('food_item_category');
			$data['description']         			= $this->input->post('description');
			$data['made_by']         			 	= $this->input->post('made_by');
			$data['price']         					= $this->input->post('price');
			$data['availability']         			= $this->input->post('availability');
			
			
			$this->db->insert('food_item',$data);
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/food_item_image/food_item_".$id.".jpg");
			redirect(base_url().'index.php/admin/food_item/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['food_item']   = $this->db->get('food_item')->result_array();
			$page_data['page_name']   = 'food_item_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['food_item_category']         	= $this->input->post('food_item_category');
			$data['description']         			= $this->input->post('description');
			$data['made_by']         			 	= $this->input->post('made_by');
			$data['price']         					= $this->input->post('price');
			$data['availability']         			= $this->input->post('availability');
			
			$this->db->where('food_item_id',$pamr2);
			$this->db->update('food_item',$data);
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/food_item_image/food_item_".$pamr2.".jpg");
			redirect(base_url().'index.php/admin/food_item/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			if(file_exists("upload/food_item_image/food_item_".$pamr2.".jpg"))
			{
				unlink("upload/food_item_image/food_item_".$pamr2.".jpg");
			}
			
			$this->db->where('food_item_id',$pamr2);
			$this->db->delete('food_item');
			redirect(base_url().'index.php/admin/food_item/view', 'refresh');
		}
	}
	
	function food_package($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['food_item']         	= $this->input->post('food_item');
			$data['quantity']         	= $this->input->post('quantity');
			$data['price']         		= $this->input->post('price');
			
			$this->db->insert('food_package',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/food_package/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['food_package']   = $this->db->get('food_package')->result_array();
			$page_data['page_name']   = 'food_package_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['food_item']         	= $this->input->post('food_item');
			$data['quantity']         	= $this->input->post('quantity');
			$data['price']         		= $this->input->post('price');
			
			$this->db->where('food_package_id',$pamr2);
			$this->db->update('food_package',$data);
			redirect(base_url().'index.php/admin/food_package/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			
			$this->db->where('food_package_id',$pamr2);
			$this->db->delete('food_package');
			redirect(base_url().'index.php/admin/food_package/view', 'refresh');
		}
	}
	
	function event_type($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         					= $this->input->post('name');
			$data['description']         			= $this->input->post('description');
			
			$this->db->insert('event_type',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/event_type/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['event_type']   = $this->db->get('event_type')->result_array();
			$page_data['page_name']   = 'event_type_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         					= $this->input->post('name');
			$data['description']         			= $this->input->post('description');
			
			$this->db->where('event_type_id',$pamr2);
			$this->db->update('event_type',$data);
			redirect(base_url().'index.php/admin/event_type/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			
			$this->db->where('event_type_id',$pamr2);
			$this->db->delete('event_type');
			redirect(base_url().'index.php/admin/event_type/view', 'refresh');
		}
	}
	
	function social_media($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['media']         				= $this->input->post('media');
			$data['link']         				= $this->input->post('link');
			
			
			$this->db->insert('social_media',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/social_media/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['social_media']   = $this->db->get('social_media')->result_array();
			$page_data['page_name']   = 'social_media_add';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$val = $this->db->get_where('social_media')->result_array();
			foreach($val as $row){
				$data['link']         = 	$this->input->post('social_'.$row['social_media_id']);
			
				$this->db->where('social_media_id',$row['social_media_id']);
				$this->db->update('social_media',$data);
			}
			redirect(base_url().'index.php/admin/social_media/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			
			$this->db->where('social_media_id',$pamr2);
			$this->db->delete('social_media');
			redirect(base_url().'index.php/admin/social_media/view', 'refresh');
		}
	}
	
	function events($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['title']         					= $this->input->post('title');
			$data['event_type']         			= $this->input->post('event_type');
			$data['start_time']         			= $this->input->post('start_time');
			$data['end_time']         			    = $this->input->post('end_time');
			$data['venue']         					= $this->input->post('venue');
			$data['description']         			= $this->input->post('description');
			
			$this->db->insert('events',$data);
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/events_image/events_".$id.".jpg");
			redirect(base_url().'index.php/admin/events/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['events']   = $this->db->get('events')->result_array();
			$page_data['page_name']   = 'events_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['title']         					= $this->input->post('title');
			$data['event_type']         			= $this->input->post('event_type');
			$data['start_time']         			= $this->input->post('start_time');
			$data['end_time']         			    = $this->input->post('end_time');
			$data['venue']         					= $this->input->post('venue');
			$data['description']         			= $this->input->post('description');
			
			$this->db->where('events_id',$pamr2);
			$this->db->update('events',$data);
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/events_image/events_".$pamr2.".jpg");
			redirect(base_url().'index.php/admin/events/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			if(file_exists("upload/events_image/events_".$pamr2.".jpg"))
			{
				unlink("upload/events_image/events_".$pamr2.".jpg");
			}
			
			$this->db->where('events_id',$pamr2);
			$this->db->delete('events');
			redirect(base_url().'index.php/admin/events/view', 'refresh');
		}
	}
	
	function logo($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"template/back/img/logo.png");
			redirect(base_url().'index.php/admin/logo/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['favicon']   = $this->db->get('logo')->result_array();
			$page_data['page_name']   = 'logo_add';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			
			move_uploaded_file($_FILES['image']['tmp_name'],"template/back/img/logo.png");
			redirect(base_url().'index.php/admin/logo/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			if(file_exists("upload/logo_image/logo_".$pamr2.".jpg"))
			{
				unlink("upload/logo_image/logo_".$pamr2.".jpg");
			}
			
			$this->db->where('logo_id',$pamr2);
			$this->db->delete('logo');
			redirect(base_url().'index.php/admin/logo/view', 'refresh');
		}
	}
	
	function favicon($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/favicon_image/favicon_".$id.".jpg");
			redirect(base_url().'index.php/admin/favicon/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['favicon']   = $this->db->get('favicon')->result_array();
			$page_data['page_name']   = 'favicon_add';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/favicon_image/favicon_".$pamr2.".jpg");
			redirect(base_url().'index.php/admin/favicon/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			if(file_exists("upload/favicon_image/favicon_".$pamr2.".jpg"))
			{
				unlink("upload/favicon_image/favicon_".$pamr2.".jpg");
			}
			
			$this->db->where('favicon_id',$pamr2);
			$this->db->delete('favicon');
			redirect(base_url().'index.php/admin/favicon/view', 'refresh');
		}
	}
	function general_settings($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['system_name']       				= $this->input->post('system_name');
			$data['system_email']         			= $this->input->post('system_email');
			$data['system_title']        	 		= $this->input->post('system_title');
			$data['currency']        	 			= $this->input->post('currency');
			$data['language']         				= $this->input->post('language');
			$data['google_ad']         				= $this->input->post('google_ad');
			$data['google_box']        	 			= $this->input->post('google_box');
			$data['google_wide']        	 		= $this->input->post('google_wide');
			$data['meta_tags']        	 			= $this->input->post('meta_tags');
			
			$this->db->insert('general_settings',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/general_settings/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['general_settings']   = $this->db->get('general_settings')->result_array();
			$page_data['page_name']   = 'general_settings';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$val = $this->db->get_where('general_settings')->result_array();
			foreach($val as $row){
				$data['system_name']       				= $this->input->post('system_name');
				$data['system_email']         			= $this->input->post('system_email');
				$data['system_title']        	 		= $this->input->post('system_title');
				$data['currency']        	 			= $this->input->post('currency');
				$data['language']         				= $this->input->post('language');
				$data['google_ad']         				= $this->input->post('google_ad');
				$data['google_box']        	 			= $this->input->post('google_box');
				$data['google_wide']        	 		= $this->input->post('google_wide');
				$data['meta_tags']        	 			= $this->input->post('meta_tags');
				
				$this->db->where('general_settings_id',$row['general_settings_id']);
				$this->db->update('general_settings',$data);
				}
				redirect(base_url().'index.php/admin/general_settings/view', 'refresh');
		} else if($pamr1 == "delete"){
			
			$this->db->where('general_settings_id',$pamr2);
			$this->db->delete('general_settings');
			redirect(base_url().'index.php/admin/general_settings/view', 'refresh');
		}
	}
	function packages($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         			= $this->input->post('name');
			$data['description']         	= $this->input->post('description');
			$data['cost']         			= $this->input->post('cost');
			
			$this->db->insert('packages',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/packages/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['packages']   = $this->db->get('packages')->result_array();
			$page_data['page_name']   = 'packages_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         			= $this->input->post('name');
			$data['description']         	= $this->input->post('description');
			$data['cost']         			= $this->input->post('cost');
			
			$this->db->where('packages_id',$pamr2);
			$this->db->update('packages',$data);
			redirect(base_url().'index.php/admin/packages/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			
			$this->db->where('packages_id',$pamr2);
			$this->db->delete('packages');
			redirect(base_url().'index.php/admin/packages/view', 'refresh');
		}
	}
	function employee($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['name']         			= $this->input->post('name');
			$data['employee_type']         	= $this->input->post('employee_type');
			$data['email']         			= $this->input->post('email');
			$data['address']         		= $this->input->post('address');
			$data['others']         		= $this->input->post('others');
			$data['facebook']         		= $this->input->post('facebook');
			$data['twitter']         		= $this->input->post('twitter');
			$data['google_plus']         	= $this->input->post('google_plus');
			
			$this->db->insert('employee',$data);
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/employee_image/employee_".$id.".jpg");
			redirect(base_url().'index.php/admin/employee/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['employee']   = $this->db->get('employee')->result_array();
			$page_data['page_name']   = 'employee_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['name']         			= $this->input->post('name');
			$data['employee_type']         	= $this->input->post('employee_type');
			$data['email']         			= $this->input->post('email');
			$data['address']         		= $this->input->post('address');
			$data['others']         		= $this->input->post('others');
			$data['facebook']         		= $this->input->post('facebook');
			$data['twitter']         		= $this->input->post('twitter');
			$data['google_plus']         	= $this->input->post('google_plus');
			
			$this->db->where('employee_id',$pamr2);
			$this->db->update('employee',$data);
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/employee_image/employee_".$pamr2.".jpg");
			redirect(base_url().'index.php/admin/employee/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			if(file_exists("upload/employee_image/employee_".$pamr2.".jpg"))
			{
				unlink("upload/employee_image/employee_".$pamr2.".jpg");
			}
			$this->db->where('employee_id',$pamr2);
			$this->db->delete('employee');
			redirect(base_url().'index.php/admin/employee/view', 'refresh');
		}
	}
	
	function blog($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['headline']         					= $this->input->post('headline');
			$data['summery']         			       	= $this->input->post('summery');
			$data['description']         			 	= $this->input->post('description');
			$data['tag']         						= $this->input->post('tag');
			$data['date']         			       		= $this->input->post('date');
			$data['time']         			 			= $this->input->post('time');
			$data['publication']         			 	= $this->input->post('publication');
			$data['writter']         			 		= $this->input->post('writter');
			
			
			$this->db->insert('news',$data);
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/blog_image/blog_".$id.".jpg");
			redirect(base_url().'index.php/admin/blog/view', 'refresh');
		} else if($pamr1 == "view"){
			$page_data['blog']   = $this->db->get('news')->result_array();
			$page_data['page_name']   = 'blog_list';
			$this->load->view('backend/index',$page_data);
		}else if($pamr1 == "do_update"){
			$data['headline']         					= $this->input->post('headline');
			$data['summery']         			       	= $this->input->post('summery');
			$data['description']         			 	= $this->input->post('description');
			$data['tag']         						= $this->input->post('tag');
			$data['date']         			       		= $this->input->post('date');
			$data['time']         			 			= $this->input->post('time');
			$data['publication']         			 	= $this->input->post('publication');
			$data['writter']         			 		= $this->input->post('writter');
			
			$this->db->where('news_id',$pamr2);
			$this->db->update('news',$data);
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/blog_image/blog_".$pamr2.".jpg");
			redirect(base_url().'index.php/admin/blog/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			if(file_exists("upload/blog_image/blog_".$pamr2.".jpg"))
			{
				unlink("upload/blog_image/blog_".$pamr2.".jpg");
			}
			
			$this->db->where('news_id',$pamr2);
			$this->db->delete('news');
			redirect(base_url().'index.php/admin/blog/view', 'refresh');
		}
	}
	
	
	function about($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		if($pamr1 == "view"){
			$page_data['about']   		= $this->db->get('about')->result_array();
			$page_data['page_name']   	= 'about';
			$this->load->view('backend/index',$page_data);
		}
		
		else if($pamr1 == "about_us"){
			$data['description'] = $this->input->post('main_text');
      
			$this->db->where('type', 'main_text');
            $this->db->update('about', $data);
			redirect(base_url().'index.php/admin/about/view', 'refresh');
		}
		
		
		else if($pamr1 == "gallary"){
			
			foreach ($_FILES["files"]['name'] as $f => $name){
				$data['about'] = '';
				$this->db->insert('about_gallary',$data);
				$id = mysql_insert_id();
				move_uploaded_file($_FILES["files"]["tmp_name"][$f],"upload/about_gallary_image/about_gallary_".$id.".jpg");	
			}
			redirect(base_url().'index.php/admin/about/view', 'refresh');
		}
		else if($pamr1 == "delete1"){
			
			if(file_exists("upload/about_gallary_image/about_gallary_".$pamr2.".jpg"))
			{
				unlink("upload/about_gallary_image/about_gallary_".$pamr2.".jpg");
			}
			
			$this->db->where('about_gallary_id',$pamr2);
			$this->db->delete('about_gallary');
			redirect(base_url().'index.php/admin/about/view', 'refresh');
		}
		
		else if($pamr1 == "exclusive_gallary"){
			
			foreach ($_FILES["files"]['name'] as $f => $name){
				$data['about'] = '';
				$this->db->insert('exclusive_gallary',$data);
				$id = mysql_insert_id();
				move_uploaded_file($_FILES["files"]["tmp_name"][$f],"upload/exclusive_gallary_image/exclusive_gallary_".$id.".jpg");	
			}
			redirect(base_url().'index.php/admin/about/view', 'refresh');
		}
		else if($pamr1 == "delete"){
			
			if(file_exists("upload/exclusive_gallary_image/exclusive_gallary_".$pamr2.".jpg"))
			{
				unlink("upload/exclusive_gallary_image/exclusive_gallary_".$pamr2.".jpg");
			}
			
			$this->db->where('exclusive_gallary_id',$pamr2);
			$this->db->delete('exclusive_gallary');
			redirect(base_url().'index.php/admin/about/view', 'refresh');
		}
		
		else if($pamr1 == "counters"){
			$data1['description'] = $this->input->post('counter_number1');
			$data2['description'] = $this->input->post('counter_number2');
			$data3['description'] = $this->input->post('counter_number3');
			$data4['description'] = $this->input->post('counter_number4');
			$data5['description'] = $this->input->post('counter_text1');
			$data6['description'] = $this->input->post('counter_text2');
			$data7['description'] = $this->input->post('counter_text3');
			$data8['description'] = $this->input->post('counter_text4');
      
			$this->db->where('type', 'counter_number1');
            $this->db->update('about', $data1);
      
			$this->db->where('type', 'counter_number2');
            $this->db->update('about', $data2);
      
			$this->db->where('type', 'counter_number3');
            $this->db->update('about', $data3);
      
			$this->db->where('type', 'counter_number4');
            $this->db->update('about', $data4);
      
			$this->db->where('type', 'counter_text1');
            $this->db->update('about', $data5);
      
			$this->db->where('type', 'counter_text2');
            $this->db->update('about', $data6);
      
			$this->db->where('type', 'counter_text3');
            $this->db->update('about', $data7);
      
			$this->db->where('type', 'counter_text4');
            $this->db->update('about', $data8);
			
			redirect(base_url().'index.php/admin/about/view', 'refresh');
		}
		else if($pamr1 == "add"){
			
			$id = mysql_insert_id();
			move_uploaded_file($_FILES['image']['tmp_name'],"upload/parallax_image/bck.jpg");
			redirect(base_url().'index.php/admin/about/view', 'refresh');
		}
			
	}
	
	
	
	function ui_home($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "view"){
			
			$page_data['manu_status_1']		= $this->db->get_where('ui_home',array('ui_home_id'=>'1'))->row()->status;
			$page_data['manu_status_2']		= $this->db->get_where('ui_home',array('ui_home_id'=>'2'))->row()->status;
			$page_data['manu_status_3']		= $this->db->get_where('ui_home',array('ui_home_id'=>'3'))->row()->status;
			$page_data['manu_status_4']		= $this->db->get_where('ui_home',array('ui_home_id'=>'4'))->row()->status;
			
			$page_data['page_name']		= 'ui_home';
			$this->load->view('backend/index',$page_data);
			
		} else if($pamr1 == "do_update"){
			
			$data1['status']         			= $this->input->post('manu_status_1');
			$data2['status']         			= $this->input->post('manu_status_2');
			$data3['status']         			= $this->input->post('manu_status_3');
			$data4['status']         			= $this->input->post('manu_status_4');
			
			
			$this->db->where('ui_home_id','1');
			$this->db->update('ui_home',$data1);
			
			$this->db->where('ui_home_id','2');
			$this->db->update('ui_home',$data2);
			
			$this->db->where('ui_home_id','3');
			$this->db->update('ui_home',$data3);
			
			$this->db->where('ui_home_id','4');
			$this->db->update('ui_home',$data4);
			
			redirect(base_url().'index.php/admin/ui_home/view', 'refresh');
			
		} 
	}
	
	function contact($pamr1="",$pamr2=""){
	
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php/login', 'refresh');
		
		if($pamr1 == "add"){
			$data['address']         				= $this->input->post('address');
			$data['email']         					= $this->input->post('email');
			$data['phone_number']         			= $this->input->post('phone_number');
			
			$this->db->insert('contact',$data);
			$id = mysql_insert_id();
			redirect(base_url().'index.php/admin/contact/view', 'refresh');
		} 
		else if($pamr1 == "view"){
			$page_data['contact']   = $this->db->get('contact')->result_array();
			$page_data['page_name']   = 'contact';
			$this->load->view('backend/index',$page_data);
		}
		else if($pamr1 == "do_update"){
			$val = $this->db->get_where('contact')->result_array();
			foreach($val as $row){
				$data['address']       					= $this->input->post('address');
				$data['email']         					= $this->input->post('email');
				$data['phone_number']        	 		= $this->input->post('phone_number');
				
				
				$this->db->where('contact_id',$row['contact_id']);
				$this->db->update('contact',$data);
				}
				redirect(base_url().'index.php/admin/contact/view', 'refresh');
			
		} else if($pamr1 == "delete"){
			
			$this->db->where('contact_id',$pamr2);
			$this->db->delete('contact');
			redirect(base_url().'index.php/admin/contact/view', 'refresh');
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */