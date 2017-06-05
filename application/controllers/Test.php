<?php
class Test extends CI_Controller{
 public function __construct(){
 	parent::__construct();
 	$this->data['base']=$this->config->item('base_url');
 	$this->data['customeCss']=$this->config->item('customeCss');
 	$this->data['bootstrapJs']=$this->config->item('bootstrapJs');
 	$this->data['bootstrapCss']=$this->config->item('bootstrapCss');
 	$this->data['jquery']=$this->config->item('jquery');
 	$this->data['datepickerCss']=$this->config->item('datepickerCss');
 	$this->data['datepickerJs']=$this->config->item('datepickerJs');
 	$this->data['formValidateJs']=$this->config->item('formValidateJs');
 	$this->data['validateJs']=$this->config->item('validateJs');
  $this->data['customeJs']=$this->config->item('customeJs');
  $this->data['sitetemplateCss']=$this->config->item('sitetemplateCss');
  $this->data['sitetemplateFont']=$this->config->item('sitetemplatefont');
  $this->data['sitetemplateJs']=$this->config->item('sitetemplateJs');
  $this->data['sitetemplateImg']=$this->config->item('sitetemplateImg');
 	$this->load->model('main');
  $this->load->helper('url');
 	}
 	public function index(){


    $this->load->view('trial', $this->data);

  }
}
