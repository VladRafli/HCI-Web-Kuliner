<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {
    public function getAllBlogPost(){
        /*
        $query = $this->db->get('blog_posts');
        return $query->result_array();
        */
        return $this->db->get('blog_posts')->result_array();
    }
}