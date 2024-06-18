<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zip extends CI_Controller {

  public function __construct(){
 
      parent::__construct();
      $this->load->helper('url');

      // Load zip library
      $this->load->library('zip');

    }

    public function index(){
        // Load view
        $this->load->view('index_view');
    }   

    // Create zip
    public function createzip(){
   
        // Read file from path
        if($this->input->post('but_createzip1') != NULL){

            // File path
            $filepath1 = FCPATH.'/uploads/image1.jpg';
            $filepath2 = FCPATH.'/uploads/document/users.csv';
           
            // Add file
            $this->zip->read_file($filepath1);
            $this->zip->read_file($filepath2);

            // Download
            $filename = "backup.zip";
            $this->zip->download($filename);

        }

        // Read files from directory
        if($this->input->post('but_createzip2') != NULL){

            // File name
            $filename = "backup.zip";

            // Directory path (uploads directory stored in project root)
            $path = 'uploads';

            // Add directory to zip
            $this->zip->read_dir($path);

            // Save the zip file to archivefiles directory
            $this->zip->archive(FCPATH.'/archivefiles/'.$filename);

            // Download
            $this->zip->download($filename);

        }
        
        // Load view
        $this->load->view('index_view');
    }

}