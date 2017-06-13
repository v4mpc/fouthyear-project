<?php
class Home extends CI_Controller{
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
  $this->data['chartJs']=$this->config->item('chartJs');
  $this->data['favicon']=$this->config->item('favicon');

 	$this->load->model('main');
  $this->load->helper('url');
 	}


  public function getRegion()
  {
    $regions=$this->main->get_region();
    if($regions->num_rows()>0){
      $region_html='';
      foreach($regions->result() as $region_name){
        $regionName=$region_name->region;
        $region_html.='<option value='.$regionName.'>'.$regionName;
      }
      return $region_html;
    }
  }

  public function getSecurityquestion($value='')
  {
    $questions=$this->main->get_security_question();
   	if($questions->num_rows()>0){
   		$question_html='';
   		foreach($questions->result() as $question_name){
   			$questionName=$question_name->securityQuestion;
   			$question_html.='<option>'.$questionName.'</option>';
   		}
   		return $question_html;
   	}
}
    public function getDistrict($value='')
    {
      $districts=$this->main->get_district();
     	if($districts->num_rows()>0){
     		$district_html='';
     		foreach($districts->result() as $district_name){
     			$districtName=$district_name->district;
     			$district_html.='<option value='.$districtName.'>'.$districtName;
     		}
     		return $district_html;
     	}
    }

 	public function index(){




$query=$this->db->get('job_Post');
$data['job_Post']=$query->result();
///total rows
$query2=$this->db->get('job_Post');


//pegination configuration
$config["uri_segment"]= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


$config['base_url']=base_url()."home/index";
$config['total_rows']=$query2->num_rows();
$config['per_page']=3;
$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

$this->pagination->initialize($config);













 	//get region
$this->data['region_html']=$this->getRegion();
  //

 	//get security question
$this->data['question_html']=$this->getSecurityquestion();
  //
$this->data['district_html']=$this->getDistrict();
//






//post job home page

  $jobPosts=$this->main->getJobPost();
  $this->data['jobPosts']=$jobPosts->result();;
/*  if ($jobPosts->num_rows()>0) {
 $jobPost_html='';
      foreach ($jobPosts->result() as $jobPost) {
      $companyname=$jobPost->companyName;
      //$post=$jobPost->emailE;
      $regione=$jobPost->regionE;
      $districte=$jobPost->districtE;
      $companylogo=$jobPost->logo;
      $cwebsite=$jobPost->website;
      $csize=$jobPost->size;
      $industry=$jobPost->industryType;
      $crevenue=$jobPost->revenue;
      $cfounded=$jobPost->founded;
      $jobtitle=$jobPost->jobTitle;
      $jdiscription=$jobPost->discription;
      $postdate=$jobPost->postDate;
      $jsalary=$jobPost->salary;
    //  $post=$jobPost->skillsAndExperience;
      $interview=$jobPost->onlineInterview;
      $jobPost_html.='<div class="panel panel-default">
      <div class="panel-body"><h2>'.$jobtitle.'</h2>
        <div class="media">
          <div class="media-left media-top">
            <img src="'.$this->data['base'].'/'.$companylogo.'" class="media-object" style="width:80px">
          </div>
          <div class="media-body">
            <h4 class="media-heading">'.$companyname.'<small> -'.$regione.', '.$districte.'</small></h4>
            <h4><small><i>posted '.$postdate.'</i></small></h4>
          </div>
        </div>
        <div id="discription">
          <h4><b>Description</b></h4><hr>
          '.$jdiscription.'
        </div><br>
        <div class="row">
          <div class="col-sm-6">
            <h5><b>Estimated salary: </b>'.$jsalary.' Tshs</h5>
          </div>

          <div class="col-sm-6">
            <h5 ><b>Online interview: </b><span class="text-info">'.$interview.'</span></h5>
          </div>

        </div><br>
        <h4><b>Company Information</b></h4><hr>
        <div class="row">
          <div class="col-sm-6">
            <h5><b>Website: </b><a href="'.$cwebsite.'">'.$cwebsite.'</a></h5>
          </div>
          <div class="col-sm-6">
            <h5><b>Headquaters: </b>'.$regione.', '.$districte.'</h5>
          </div>

        </div>

        <div class="row">
          <div class="col-sm-6">
            <h5><b>Size: </b>'.$csize.' employees</h5>
          </div>
          <div class="col-sm-6">
            <h5><b>Revenue: </b>'.$crevenue.' Millions Tshs per year</h5>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <h5><b>Industry: </b>'.$industry.'</h5>
          </div>
          <div class="col-sm-6">
            <h5><b>Founded: </b>'.$cfounded.'</h5>
            </div>
            </div>

            <hr>
            <div class="row">
            <div class="col-sm-2 col-sm-offset-8">
              <button type="" class="btn btn-primary btn-md" name="save" value="save"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
            </div>

            <div class="col-sm-2">
              <button type="" class="btn btn-primary btn-md" name="apply" value="apply"><span class="glyphicon glyphicon-play"></span> Apply</button>
            </div>
            </div>


            </div></div>';








    }

  }

$this->data['jobPost_html']=$jobPost_html;*/
$statusHtml='';
$this->data['statusHtml']=$statusHtml;
//redirect(site_url('/home/'));

  $this->load->view('homepagenew',$this->data);
}

















  public function ftoUpper($name)
  {

    $firstLetter=substr($name,0,1);
    $firstLetter=strtoupper($firstLetter);
    $part=substr($name,1,strlen($name));
    $newname=$firstLetter.$part;
     echo $newname;
    return $newname;
  }

  public function ftoLower($name)
  {

    $firstLetter=substr($name,0,1);
    $firstLetter=strtolower($firstLetter);
    $part=substr($name,1,strlen($name));
    $newname=$firstLetter.$part;
     //echo $newname;
    return $newname;
  }
 	public function login(){
///if (isset($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['username'])&&!empty($_POST['password'])) {
  $data['username']=$this->ftoUpper($_POST['username']);
  $data['password']=md5($_POST['password']);
  $userLogins=$this->main->getSession($data);

  if($userLogins->num_rows()==1){
    $userLogin=$userLogins->row_array();



      if ($userLogin['accountType']=="Job seeker") {
        $_SESSION['username']=$userLogin['userName'];
        $_SESSION['accountID']=$userLogin['accountID'];
        $_SESSION['accountType']=$userLogin['accountType'];
       redirect(site_url('/userProfile/jobseekerInfo/1'));
      //echo true;

    }elseif ($userLogin['accountType']=="Admin") {
        $_SESSION['username']=$userLogin['userName'];
        $_SESSION['accountID']=$userLogin['accountID'];
        $_SESSION['accountType']=$userLogin['accountType'];
       redirect(site_url('/userProfile/adminStatistics'));
      //echo true;

      }else {
        $_SESSION['username']=$userLogin['userName'];
        $_SESSION['accountID']=$userLogin['accountID'];
        $_SESSION['accountType']=$userLogin['accountType'];
        redirect(site_url('/userProfile/employerInfo/1'));

      }













}else {

  $statusHtml='<div class="alert alert-danger alert-dismissable col-sm-6 col-sm-offset-3">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Login Failed!</strong> Incorrect Username/Password combination.
  </div>';
  $this->data['statusHtml']=$statusHtml;
  $this->data['region_html']=$this->getRegion();
    //

   	//get security question
  $this->data['question_html']=$this->getSecurityquestion();
    //
  $this->data['district_html']=$this->getDistrict();
  //redirect(site_url('/home/'));
  $this->load->view('homepagenew',$this->data);


}
//}
 	}

 	public function register_seeker(){
 	$data_jobseeker1['accountType']='Job seeker';
 	$data_jobseeker1['userName']=$this->ftoUpper($_POST['userName']);
  $data_jobseeker1['password']=md5($_POST['password']);
 	$data_jobseeker2['firstName']=$this->ftoUpper($_POST['firstName']);
 	$data_jobseeker2['lastName']=$this->ftoUpper($_POST['lastName']);
  $data_jobseeker2['userName']=$this->ftoUpper($_POST['userName']);
 	$data_jobseeker2['email']=$_POST['email'];
 	$data_jobseeker2['region']=$_POST['region'];
 	$data_jobseeker2['district']=$_POST['district'];
  $data_jobseeker2['fieldOfStudy']=$_POST['fieldOfStudy'];
  $data_jobseeker2['gender']=$_POST['gender'];
 	$data_jobseeker2['DOB']=$_POST['DOB'];
 	$data_jobseeker2['securityQuestion']=$_POST['securityQuestion'];
 	$data_jobseeker2['securityAnswer']=$_POST['securityAnswer'];
 	$this->main->insert_register_Jobseeker($data_jobseeker1,$data_jobseeker2);
  $statusHtml='<div class="alert alert-success alert-dismissable col-sm-6 col-sm-offset-3">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> You have been registered.
  </div>';
  $this->data['statusHtml']=$statusHtml;
  $this->data['region_html']=$this->getRegion();
    //

   	//get security question
  $this->data['question_html']=$this->getSecurityquestion();
    //
  $this->data['district_html']=$this->getDistrict();
  //redirect(site_url('/home/'));
  $this->load->view('homepagenew',$this->data);

 	}
  public function register_employer(){
 	$data_employer1['accountType']='Employer';
 	$data_employer1['userName']=$this->ftoUpper($_POST['userNameE']);
 	$data_employer1['password']=md5($_POST['passwordE']);
 	$data_employer2['companyName']=$this->ftoUpper($_POST['companyName']);
  $data_employer2['userNameE']=$this->ftoUpper($_POST['userNameE']);
 	$data_employer2['emailE']=$_POST['emailE'];
 	$data_employer2['regionE']=$_POST['regionE'];
 	$data_employer2['districtE']=$_POST['districtE'];
  $data_employer2['website']=$_POST['website'];
 	$data_employer2['founded']=$_POST['founded'];
  $data_employer2['size']=$_POST['size'];
 	$data_employer2['securityQuestionE']=$_POST['securityQuestionE'];
 	$data_employer2['securityAnswerE']=$_POST['securityAnswerE'];
 	$this->main->insert_register_Employer($data_employer1,$data_employer2);
  $statusHtml='<div class="alert alert-success alert-dismissable col-sm-6 col-sm-offset-3">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> You have been registered.
  </div>';
  $this->data['statusHtml']=$statusHtml;
  //redirect(site_url('/home/'));
  $this->data['region_html']=$this->getRegion();
    //

   	//get security question
  $this->data['question_html']=$this->getSecurityquestion();
    //
  $this->data['district_html']=$this->getDistrict();
  $this->load->view('homepagenew',$this->data);
 	}

public function contactPage()
{
$this->load->view('contactPage',$this->data);
}

public function aboutPage()
{


$this->load->view('aboutPagenew',$this->data);
}



public function checkUsername()
{
  $this->data['username']=$this->input->post('username');


  $results=$this->main->getUsername($this->data);
  if ($results->num_rows()==1) {
    echo "taken";
  }
  else {
    echo "notetaken";
  }
}

public function search()
{
  $this->data['searchName']=$_POST['searchName'];
  $searchResults=$this->main->getSearch($this->data);


  if ($searchResults->num_rows()>0) {
   $searchResult_html='<div class="panel panel-default">
   <div class="panel-body">';
     $counter=1;
        foreach ($searchResults->result() as $searchResult) {
        $companyname=$searchResult->companyName;
        //$post=$searchResult->emailE;
        $regione=$searchResult->regionE;
        $districte=$searchResult->districtE;
        $companylogo=$searchResult->logo;
        $cwebsite=$searchResult->website;
        $csize=$searchResult->size;
        $industry=$searchResult->industryType;
        $crevenue=$searchResult->revenue;
        $cfounded=$searchResult->founded;
        $jobtitle=ucwords($searchResult->jobTitle);
        $jdiscription=$searchResult->discription;
        $postdate=$searchResult->postDate;
        $jsalary=$searchResult->salary;
      //  $post=$searchResult->skillsAndExperience;








        $interview=$searchResult->onlineInterview;
        $searchResult_html.='
          <div class="media">
            <div class="media-left media-top">
              <img src="'.$this->data['base'].'/'.$companylogo.'" class="media-object" style="width:150px">
            </div>
            <div class="media-body">
            <h3 id="jobtitle'.$counter.'"><a>'.$jobtitle.'</a></h3>
              <h4 class="media-heading"><span id="companyname'.$counter.'">'.$companyname.'</span><small> -'.$regione.', '.$districte.'</small></h4>
              <h4><small><i>posted '.$postdate.'</i></small></h4>
            </div>
          </div><hr>





                <script>






                  $("#button'.$counter.'").on("click",function () {
                  var jobtitle=$("#jobtitle'.$counter.'").text();
                  var companyname=$("#companyname'.$counter.'").text();




    $.post(\''.site_url('userProfile/apply').'\', {jobTitle:jobtitle,companyName:companyname});



                });


                  </script>







              ';






              $counter=$counter+1;

      }
      $searchResult_html.='</div></div>';

    }else {
      $searchResult_html='<div class="panel panel-danger">
      <div class="panel-heading">Search Results</div>
      <div class="panel-body">Job not Found! Try a different key word</div>
    </div>';
    }







$this->data['searchhtml']=$searchResult_html;
  $this->load->view('searchPage',$this->data);
}





  }


 ?>
