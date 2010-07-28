<?php
/**
 * page_model.php
 *
 * page application model
 *
 * @package	    phpHyppo
 * @subpackage	Sample Application
 * @author			Muhammad Hamizi Jaminan
 */

class Page_Model extends AppModel
{
	// list page
	public function lists()
	{
		// get all data from table page
		return $this->db->find_all('page');
	}
	
	// view page
	public function view($page_id)
	{
		// get only one specific page 
		$this->db->where('id', $page_id);
		
		// from table page
		return $this->db->find('page');
	}
	
	// add new page
	public function create($input)
	{
		// insert new page to table page
		return $this->db->insert('page', $input);
	}

	// update page
	public function update($input)
	{
		// update only specific page
		$this->db->where('id', $input['id']);
		unset($input['id']);
		
		// update data on table page
		return $this->db->update('page', $input);
	}

	// remove specific page
	public function remove($page_id)
	{
		// remove only specific page
		$this->db->where('id', $page_id);
		
		// from table page
		return $this->db->delete('page');
	}

}
?>