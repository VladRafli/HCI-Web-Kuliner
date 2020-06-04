<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function index(){
        $data['blog_post'] = $this->blog_post();
        $this->load->view('blog', $data);
    }
    private function blog_post(){
        $this->load->model('Blog_model'); //Load Model
        $data['blog_post'] = $this->Blog_model->getAllBlogPost(); //Get Data from Database by Model
        return $data['blog_post'];
    }
}