<?php
    class Posts extends CI_Controller {
        public function index(){
            $data['title'] = 'Latest Posts';

            $data['posts'] = $this->post_model->get_posts();
            //print_r($data['posts']); to check whether data is being retreived from the db
            $this->load->view('templates/header');
            $this->load->view('posts/index', $data); //pass page name & any data
            $this->load->view('templates/footer');
        } 

        // below is the same thing as above
        // public function index($page = 'index'){
        //     if(!file_exists(APPPATH.'views/posts/'.$page.'.php')){ //check whether page exist or not APPPATH is CI constant
        //         show_404(); //show CI 404 error
        //     }

        //     $data['title'] = 'Latest Posts';

        //     $this->load->view('templates/header');
        //     $this->load->view('posts/'.$page, $data); //pass page name & any data
        //     $this->load->view('templates/footer');
        // } 
    }

    