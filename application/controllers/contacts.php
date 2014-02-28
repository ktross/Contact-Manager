<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Contact_model');
	}

	public function index()
	{
		$sort_order = ($this->input->get('sort') == 'desc') ? 'DESC' : 'ASC';

		$data = array(
			'contacts' => $this->Contact_model->get_contacts($sort_order)
		);

		$this->load->view('header');
		$this->load->view('contacts/contacts', $data);
		$this->load->view('footer');
	}

	public function create_contact()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('contact_first_name', 'Contact First Name', 'required|min_length[1]|max_length[24]');
		$this->form_validation->set_rules('contact_last_name', 'Contact Last Name', 'required|min_length[1]|max_length[24]');
		$this->form_validation->set_rules('contact_email', 'Contact Email', 'valid_email|min_length[1]|max_length[24]');
		$this->form_validation->set_rules('contact_phone', 'Contact Phone', 'integer|exact_length[10]');
		$this->form_validation->set_rules('contact_address', 'Contact Address', 'min_length[1]|max_length[128]');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'contact_first_name' => $this->input->post('contact_first_name'),
				'contact_last_name' => $this->input->post('contact_last_name'),
				'contact_email' => $this->input->post('contact_email'),
				'contact_phone' => $this->input->post('contact_phone'),
				'contact_address' => $this->input->post('contact_address')
			);

			$this->Contact_model->create_contact($data);

			redirect('/');
		}

		$this->load->view('header');
		$this->load->view('contacts/create_contact');
		$this->load->view('footer');
	}

	public function edit_contact($id)
	{
		$data = array(
			'contacts' => $this->Contact_model->get_contact($id)
		);

		$this->load->library('form_validation');

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('contact_first_name', 'Contact First Name', 'required|min_length[1]|max_length[24]');
			$this->form_validation->set_rules('contact_last_name', 'Contact Last Name', 'required|min_length[1]|max_length[24]');
			$this->form_validation->set_rules('contact_email', 'Contact Email', 'valid_email|min_length[1]|max_length[24]');
			$this->form_validation->set_rules('contact_phone', 'Contact Phone', 'integer|exact_length[10]');
			$this->form_validation->set_rules('contact_address', 'Contact Address', 'min_length[1]|max_length[128]');

			if ($this->form_validation->run() == TRUE) {
				$data = array(
					'contact_first_name' => $this->input->post('contact_first_name'),
					'contact_last_name' => $this->input->post('contact_last_name'),
					'contact_email' => $this->input->post('contact_email'),
					'contact_phone' => $this->input->post('contact_phone'),
					'contact_address' => $this->input->post('contact_address')
				);
				$this->Contact_model->update_contact($id, $data);

				redirect('/');
			}
		}

		$this->load->view('header');
		$this->load->view('contacts/edit_contact', $data);
		$this->load->view('footer');
	}

	public function delete_contact($id)
	{
		$this->Contact_model->delete_contact($id);

		redirect('/');
	}

}

/* End of file contacts.php */
/* Location: ./application/controllers/contacts.php */