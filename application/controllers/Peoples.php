<?php

class Peoples extends CI_Controller
{


    public function index()
    {
        $data['judul'] = 'Nama Nama Orang';

        $this->load->model('peoples_model', 'peoples');

        $this->load->library('pagination');

        $config['base_url'] = 'http://localhost/ci-app/peoples/index';
        $config['total_rows'] = $this->peoples->countAllPeoples();
        $config['per_page'] = 12;

        $config['full_tag_open'] = '<nav><ul class ="pagination">';
        $config['full_tag_close'] = '</ul></nav>';


        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class ="page-item">';
        $config['first_tag_close'] = '</li>';


        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class ="page-item">';
        $config['last_tag_close'] = '</li>';


        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class ="page-item">';
        $config['next_tag_close'] = '</li>';


        $config['Prev_link'] = '&laquo';
        $config['Prev_tag_open'] = '<li class ="page-item">';
        $config['Prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class ="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class ="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        // var_dump($config['total_rows']); die;

        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start']);
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }
}
