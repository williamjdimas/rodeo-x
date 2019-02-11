<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->render_page();
	}

	public function render_page() {

        $this->load->helper('url');
        $this->load->helper('html');

        echo doctype('html5');
        echo meta('X-UA-Compatible', 'IE=edge; charset=utf-8', 'equiv');
        echo meta('description', 'We Understand. We Care.');
        echo meta('author', 'WJD');
        echo meta('viewport', 'width=device-width, initial-scale=1');

        $base_url = base_url();
        echo <<<EOD
			<title>Rodeo-X</title>
			<script>
				var app_base_url = "{$base_url}";
			</script>
EOD;
        echo link_tag(base_url('bootstrap/css/bootstrap.min.css'));

        echo link_tag(base_url('assets/images/favicon.ico'), 'shortcut icon', 'image/ico');

        echo '<body><div id="wrapper"  >';

        $this->load->view('home');

        $this->load->view('js_scripts');

        echo '</div></body>';



    }

}
