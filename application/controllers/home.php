<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
			
			parent::__construct();
			$this->load->model('model_users');
		}

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
	/*public function index()
	{
		$this->load->view('welcome_message');
	}*/
	public function index(){
		$this->form_helper();
	}


	public function array_helper()
	{
		$this->load->helper('array');
		$data['title'] = 'Array Helper Title';
		$data['page_header'] = 'Array Helper in Code Igniter';
		$data['firstnames'] = $this->model_users->getFirstNames();
		
		$this->load->view('view_home', $data);

	}

	public function email_helper()
	{
		$this->load->helper('email');
		$data['title'] = 'Email Helper Title';
		$data['page_header'] = 'Email Helper in Code Igniter';
		$data['firstnames'] = $this->model_users->getUsers();
		
		$this->load->view('view_email', $data);

	}

	public function html_helper()
	{
		$this->load->helper('HTML');
		$data['title'] = 'HTML Helper Title';
		$data['page_header'] = 'HTMl Helper in Code Igniter';
		$data['firstnames'] = $this->model_users->getUsers();
		
		$this->load->view('view_html', $data);

	}
	public function url_helper()
	{
		$this->load->helper('url');
		$data['title'] = 'URL Helper Title';
		$data['page_header'] = 'URL Helper in Code Igniter';
		$data['firstnames'] = $this->model_users->getUsers();
		
		$this->load->view('view_url', $data);

	}

	public function form_helper()
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');

		$data['title'] = 'form Helper Title';
		$data['page_header'] = 'form Helper in Code Igniter';
		$data['firstnames'] = $this->model_users->getUsers();

		$this->form_validation->set_rules('email','E-mail','required|trim|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim');
		$this->form_validation->set_rules('url','URL','required');

		if ($this->form_validation->run()==FALSE)
		{

			$this->load->view('view_form', $data);
		}
		else
		{
			$data['email'] = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['pass_length'] = $this->input->post('password');
			$data['url'] = $this->input->post('url');
			$this->load->view('view_form', $data);
		}


	public function form_helper2()
	{
		$this->load->helper('url');
		$this->load->helper('form_validation');
		$this->load->helper('form');
		$this->load->helper('model_orders');

		$this->form_validation->set_rules('email', 'E-mail', 'required|trim|valid_email|xss_clear');
		$this->form_validation->set_rules('shirt_size', 'Shirt Size', 'required|alpha');
		$this->form_validation->set_rules('stripe_choice[]', 'Stripes', 'required');
		$this->form_validation->set_rules('terms', 'Terms and Conditions', 'callback_accept_terms');
		$this->form_validation->set_rules('free_shipping', 'Shipping Choice', 'required|numeric');

		if (this->form_validation->run()==FALSE)
		{
			$data['title'] = 'form Helper - Part 2';
			$data['page_header'] = 'Form Helper Part 2';
			$this->load->view('view_form2', $data);
		}else
		{
			$order_array = array(
				'id' => NULL, 
				'email' => this->input->post('email'), 
				'order_time' => this->input->post('order_time'), 
				'shirt_size' => this->input->post('shirt_size'), 
				'stripe_choice' => implode(', ', $_POST['stripe_choice']), 
				'free_shipping' => this->input->post('free_shipping')
				);

			$insert_order = $this->model_orders->insert_order($order_array);
			$data['title'] = '';
			$data['page_header'] = 'Order Success!';
			$this->load->view('view_form_success', $data);

		}

	}	
	public function accept_terms($value)
	{

		if ($value == 'accept')
		{
			return TRUE;
		}else
		{
			return FALSE;
		}
	}


	}
}

/* End of file home.php */
/* Location: ./application/controllers/welcome.php */