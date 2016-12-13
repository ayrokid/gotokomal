<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
  *--------------------------------------------------------------------------
  * Class Application
  * Parent class from this application
  *--------------------------------------------------------------------------
 */
class Base_Controller extends CI_Controller {

    protected $subTitle;
    protected $data;
    protected $dataContent;
    protected $content;
    protected $sess;
    protected $theme = 'layouts/full';

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");

        /**
          *  memanggil file helper system_helper
          *  file tersebut berisi fungsi-fungsi dasar dari aplikasi seperti :
          *  name_system() yang berfungsi memanggil nama dari sistem
          *  company()     yang berfungsi untuk memanggil nama dari perusahaan, dll.
          *  lokasi : application/helpers/
         */
        $this->load->helper(array('app'));


        /**
          *  memanggil file library system
          *  merupakan file class yang berisi fungsi-fungsi untuk membantu menjalankan aplikasi seperti :
          *  mengkonversi tanggal dari database ke dalam bentuk tanggal bahasa indonesia, dll.
          *  lokasi : application/libraries/
         */
        //$this->load->library(array('system'));

    }

    public function view() {
        if (isset($this->subTitle)) {
            $this->data['title'] = $this->subTitle;
        } else {
            $this->data['title'] = apps_name();
        }

        if(isset($this->smallTitle)){
            $this->data['smallTitle'] =  $this->smallTitle;
        }else{
            $this->data['smallTitle'] = '';
        }

        $this->data['subTitle'] = $this->subTitle;
        $this->data['data']     = $this->dataContent;
        $this->data['content']  = $this->content;

        return $this->load->view($this->theme, $this->data);
    }

    protected function pagination() {
        $config = array();
        $config['uri_segment'] = $this->segment;
        $config['base_url'] = $this->linkPage;
        $config['total_rows'] = $this->totalPage;
        $config['per_page'] = $this->perPage;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = $config['last_tag_open'] = $config['next_tag_open'] = $config['prev_tag_open'] = $config['num_tag_open'] = '<li>';
        $config['first_tag_close'] = $config['last_tag_close'] = $config['next_tag_close'] = $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';

        $config['cur_tag_open'] = "<li class='active'><span><b>";
        $config['cur_tag_close'] = "</b></span></li>";

        $this->pagination->initialize($config);

        return $this->pagination->create_links();
    }

    protected function start_page($uri) {
        if ($this->uri->segment($uri) > 0) {
            $start = $this->uri->segment($uri);
            $this->data['no'] = $start + 1;
        } else {
            $start = 0;
            $this->data['no'] = $start + 1;
        }
        return $start;
    }

    protected function is_loggedin() {
        if($this->auth->is_loggedin() == false) {
            //redirect('login');
            error_404();
        }
    }

    protected function send_email($params = array()) {
        $this->load->library('sendMail');
        $this->sendmail->send_mail($params);
    }

}
