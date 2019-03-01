<?php
    class Pages extends CI_Controller {
        public function view($page = 'home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){ //check whether page exist or not APPPATH is CI constant
                show_404(); //show CI 404 error
            }

            $data['title'] = ucfirst($page);

            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data); //pass page name & any data
            $this->load->view('templates/footer');
        } 
    }

    