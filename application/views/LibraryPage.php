<?php
$this->load->view('library/HeaderFragment');
// $this->load->view('public/HeaderFragment');
$this->load->view('library/NavbarFragment');
$this->load->view($content);
$this->load->view('library/FooterFragment');

