<?php

class Controller extends init
{
    public $model;
    public $infoModel;
    public $errors;

    public function __construct()
    {
        parent::__construct();
        /***LOAD MODEL***/
        $this->load->model("maindb");
        $this->model = new Model();
        $this->load->model("infodb");
        $this->infoModel = new infoModel();
    }


    public function details()
    {
        
 
        $controller = $this->helper->segment(1);
        $data['controller'] = $controller;
        $data['contact'] = $this->model->contact();
        $nav[] = new stdClass;
        $nav[0]->name = "Shop";
        $nav[0]->url = baseurl."/shop";
        @$nav[1]->name = "Details";
        $nav[1]->url = "";
        $data['nav'] = json_encode($nav);

        $productID = $this->convert->to_int($this->helper->segment(2));
        $header_data['title'] = "AO Framework Project || Details";
        $data['copyright'] = "© Archil Odishelidze 2021";
        $data['tree'] = $this->model->product_tree();
        $data['infoCats'] = $this->infoModel->postCats();

        $data['productID'] = $productID;
        $data['productDetails'] = $this->model->productDetails($productID);
        $data['variationList'] = $this->model->variationList($productID);
        $data['colorList'] = $this->model->colorList();
        $data['colorPhotos'] = $this->model->colorPhotos($productID);
        $combo = $this->model->comboByProductID($productID);
        $combo = json_decode($combo);
        if(!empty($combo[0]->combo_code)){
        $productLike = $this->model->productLike($productID, $combo[0]->combo_code);

        $data['productLike'] = $productLike; 
        }
        //easy::out($productLike);


        //easy::out($data['productDetails']);
        /******************************************/
        $this->load->template_start($header_data);
        /******************************************/
        $this->load->view("header", $data);
        $this->load->view("details", $data);
        $this->load->view("footer", $data);
        /******************************************/
        $this->load->template_end();

    }
}