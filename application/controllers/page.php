<?php
/**
 * page.php
 *
 * page application controller
 *
 * @package	    phpHyppo
 * @subpackage	Sample Application
 * @author			Muhammad Hamizi Jaminan
 */
 
class Page_Controller extends AppController
{
	// loading up require library & model
	public function beforeFilter()
	{
		// load uri library
		$this->load->library('uri');
		
		// load page model alias as page
		$this->load->model('page_model', 'page');		
	}
	
	// list all data
	public function index()
	{	
		// get data from database
		$content['pages'] = $this->page->lists();
		
		// bind page content to template & display
		$this->view->display('pages/index', $content);
	}
	
	// view detail page
	public function view()
	{
		// get the specific page id
		$page_id = (int) $this->uri->segment('2');
		
		// get page data from database
		$content = $this->page->view($page_id);
		
		// bind page content to template & display
		$this->view->display('pages/view', $content);
	}
	
	// create / add new page
	public function create()
	{
		// load input library
		$this->load->library('input');
		
		// get input data & filter it
		$input = $this->input->post('data', true);
		
		// input data exist
		if ($input !== false)
		{
			// insert new data to database
			if ($this->page->create($input))
				redirect('/page/index');
		}
		
		// display form
		$this->view->display('pages/create');
	}

	// update existing page
	public function update()
	{
		// load input library
		$this->load->library('input');
		
		// get input data & filter it
		$input = $this->input->post('data', true);
		
		// data exists
		if ($input !== false)
		{
			// update data on database
			if ($this->page->update($input))
				redirect('/page/index');
		}
		
		// get specific page id
		$page_id = (int) $this->uri->segment('2');
		
		// get page data from database
		$content = $this->page->view($page_id);
		
		// bind page data to form & display
		$this->view->display('pages/update', $content);
	}

	// remove existing page 
	public function remove()
	{
		// get specific page id
		$page_id = (int) $this->uri->segment('2');
		
		// remove page from database
		if ($this->page->remove($page_id))
			redirect('/page/index');
	}
}

/* End of page.php */
/* Location: /application/controllers/page.php */
?>