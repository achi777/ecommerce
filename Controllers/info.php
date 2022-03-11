<?php

class Controller extends init
{
    public $infoModel;
    public $shopModel;
    public $errors;

    public function __construct()
    {
        parent::__construct();
        /***LOAD MODEL***/
        $this->load->model("maindb");
        $this->shopModel = new Model();
        $this->load->model("infodb");
        $this->infoModel = new infoModel();
    }



    public function info()
    {
        $controller = $this->helper->segment(1);
        $data['controller'] = $controller;
        $data['contact'] = $this->shopModel->contact();
        $nav[] = new stdClass;
        $nav[0]->name = "Blog";
        $nav[0]->url = baseurl."/info";

        $data['nav'] = json_encode($nav);
        $data['infoCats'] = $this->infoModel->postCats();
        $data['lastPosts'] = $this->infoModel->lastPost();

        $header_data['title'] = "AO Framework Project";
        $data['copyright'] = "© Archil Odishelidze 2019";
        $data['tree'] = $this->shopModel->product_tree();
        $data['posts'] = $this->infoModel->posts();
        $data['randomPost'] = $this->infoModel->randomPost();
        $data['postList'] = $this->infoModel->postList();
        $data['pagination'] = $this->infoModel->pagination();
        /******************************************/
        $this->load->template_start($header_data);
        /******************************************/
        $this->load->view("header", $data);
        $this->load->view("info", $data);
        $this->load->view("footer", $data);
        /******************************************/
        $this->load->template_end();

    }
}