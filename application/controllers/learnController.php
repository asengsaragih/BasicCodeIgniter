<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class LearnController extends CI_Controller {

        function __construct() {
            parent::__construct();
        }

        public function index() {
            echo "ini methode index pada controller belajar";
        }

        public function halo() {
            echo "ini methode halo pada controller belajar";
        }

        public function name() {
            echo "Nama saya aldi wahyu saragih";
        }
    }
?>