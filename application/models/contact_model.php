<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model
{

	const TABLE_CONTACTS = 'cm_contacts';

	function __construct()
	{
		parent::__construct();
	}

	function get_contacts($sort = 'ASC', $limit = null, $offset = 0)
	{
		$this->db->order_by('contact_last_name', $sort);
		$query = $this->db->get(self::TABLE_CONTACTS, $limit, $offset);
        return $query->result();
	}

	function get_contact($id)
	{
		$query = $this->db->get_where(self::TABLE_CONTACTS, array('contact_id' => $id), 1);
        return $query->result();
	}

	function create_contact($data)
	{
		$this->db->insert(self::TABLE_CONTACTS, $data);
	}

	function update_contact($id, $data)
	{
		$this->db->where('contact_id', $id);
		$this->db->update(self::TABLE_CONTACTS, $data);
	}

	function delete_contact($id)
	{
		$this->db->delete(self::TABLE_CONTACTS, array('contact_id' => $id));
	}

}