<?php

class server extends CI_Controller {

    function __construct() {

        parent::__construct();
        //load model server_model
        $this->load->model('server_model');
    }

    public function index()
    {
        //get data dari model
        $server = $this->server_model->get_server();
        //masukkan data kedalam variabel
        $data['server'] = $server;
        //deklarasi variabel array
        $response = array();
        $posts = array();
        //lopping data dari database
        foreach ($server as $hasil)
        {
            $posts[] = array(
                "id"                 =>  $hasil->id,
                "nama"            =>  $hasil->nama,
                "nim"        =>  $hasil->nim,
                "jurusan"   =>  $hasil->jurusan
            );
        }
        $response['server'] = $posts;
        header('Content-Type: application/json');
        echo json_encode($response,TRUE);

    }
}