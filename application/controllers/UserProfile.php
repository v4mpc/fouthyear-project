<?php
class UserProfile extends CI_Controller
{

	function __construct()
	{
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
		$this->data['w3Css']=$this->config->item('w3Css');
		$this->load->model('main');
		$this->load->helper('url');
		$this->data['status']="";
		  $this->data['favicon']=$this->config->item('favicon');
	}







	public function loggedIn()
	{
		if (isset($_SESSION['accountID'])&&isset($_SESSION['username'])&&!empty($_SESSION['accountID'])&&!empty($_SESSION['username'])) {
			return true;
		}else {
			return false;
		}

	}




	public function jobseekerInfo($hasEdit)
	{
		if (isset($_SESSION['accountID'])&&isset($_SESSION['username'])&&!empty($_SESSION['accountID'])&&!empty($_SESSION['username'])&&($_SESSION['accountType']=='Job seeker')) {
			if ($hasEdit==1) {
				$jobseekerInfos=$this->main->getJobseekerInfo();
				if($jobseekerInfos->num_rows()>0){
					$jobseekerinfos_html='<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">User Profile</div><div class="panel-body"><table class="table table-striped"><tbody>';
					foreach($jobseekerInfos->result() as $jobseekerInfo){
						$firstName=$jobseekerInfo->firstName;
						$lastName=$jobseekerInfo->lastName;
						$userName=$jobseekerInfo->userName;
						$region=$jobseekerInfo->region;
						$district=$jobseekerInfo->district;
						$DOB=$jobseekerInfo->DOB;
						$email=$jobseekerInfo->email;
						$fieldOfStudy=$jobseekerInfo->fieldOfStudy;
						$jobseekerinfos_html.='<tr><td><b>First Name</b></td><td>'.$firstName.'</td></tr>';
						$jobseekerinfos_html.='<tr><td><b>Last Name</b></td><td>'.$lastName.'</td></tr>';
						$jobseekerinfos_html.='<tr><td><b>User Name</b></td><td>'.$userName.'</td></tr>';
						$jobseekerinfos_html.='<tr><td><b>Region</b></td><td>'.$region.'</td></tr>';
						$jobseekerinfos_html.='<tr><td><b>District</b></td><td>'.$district.'</td></tr>';
						$jobseekerinfos_html.='<tr><td><b>Date of Birth</b></td><td>'.$DOB.'</td></tr>';
						$jobseekerinfos_html.='<tr><td><b>Field of Study</b></td><td>'.$fieldOfStudy.'</td></tr>';
						$jobseekerinfos_html.='<tr><td><b>Email</b></td><td>'.$email.'</td></tr>';
					}
					$jobseekerinfos_html.='   </tbody>
					</table><h2>Security Changes</h2>

					<form>

					<div class="form-group">
					<label for="pwd">New Password:</label>
					<input type="password" class="form-control" id="pwd" disabled>
					</div>
					<div class="form-group">
					<label for="pwd">Confirm New Password:</label>
					<input type="password" class="form-control" id="pwd" disabled>
					</div>
					<div class="form-group">
					<a href="'.site_url('userProfile/jobseekerInfo/2').'" class="btn btn-default btn-md">
					<span class="glyphicon glyphicon-edit"></span> Edit
					</a>
					</div>
					</form></div></div></div>
					<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">Delete Account</div><div class="panel-body">
					<button type="button" class="btn btn-danger">Delete Account</button>
					</div></div></div>
					';
				}
			}elseif ($hasEdit==2) {
					$jobseekerInfos=$this->main->getJobseekerInfo();
					if($jobseekerInfos->num_rows()>0){
						$jobseekerinfos_html='<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">User Profile</div><div class="panel-body"><table class="table table-striped"><tbody><tbody><form method="post" action="'.site_url('userProfile/editJobseekerInfo/').'" >';
						foreach($jobseekerInfos->result() as $jobseekerInfo){
							$firstName=$jobseekerInfo->firstName;
							$lastName=$jobseekerInfo->lastName;
							$username=$jobseekerInfo->userName;
							$region=$jobseekerInfo->region;
							$district=$jobseekerInfo->district;
							$DOB=$jobseekerInfo->DOB;
							$email=$jobseekerInfo->email;
							$fieldOfStudy=$jobseekerInfo->fieldOfStudy;
							$jobseekerinfos_html.='<tr><td><b>First Name</b></td><td><input class="form-control" type="text" name="firstName" value="'.$firstName.'"></td></tr>';
							$jobseekerinfos_html.='<tr><td><b>Last Name</b></td><td><input class="form-control" type="text" name="lastName" value="'.$lastName.'"></td></tr>';
							$jobseekerinfos_html.='<tr><td><b>User Name</b></td><td><input class="form-control" type="text" name="userName" value="'.$username.'"></td></tr>';
							$jobseekerinfos_html.='<tr><td><b>Region</b></td><td><input class="form-control" type="text" name="region" value="'.$region.'"></td></tr>';
							$jobseekerinfos_html.='<tr><td><b>District</b></td><td><input class="form-control" type="text" name="district" value="'.$district.'"></td></tr>';
							$jobseekerinfos_html.='<tr><td><b>Date of Birth</b></td><td><input class="form-control" type="text" name="DOB" value="'.$DOB.'"></td></tr>';
							$jobseekerinfos_html.='<tr><td><b>Field of Study</b></td><td><input class="form-control" type="text" name="fieldOfStudy" value="'.$fieldOfStudy.'"></td></tr>';
							$jobseekerinfos_html.='<tr><td><b>Email</b></td><td><input class="form-control" type="text" name="email" value="'.$email.'"></td></tr>';
						}
						$jobseekerinfos_html.='    </tbody>
						</table><h2>Security Changes</h2>
						<div class="form-group">
						<label for="pwd">New Password:</label>
						<input type="password" name="password" class="form-control" id="pwd" required>
						</div>
						<div class="form-group">
						<label for="pwd">Confirm New Password:</label>
						<input type="password" class="form-control" id="pwd" required >
						</div>
						<div class="form-group">
						<button type="submit" class="btn btn-default btn-md">
						<span class="glyphicon glyphicon-floppy-save"></span> Save Changes
						</button>
						</div>
						</form></div></div></div>
						<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">Delete Account</div><div class="panel-body">
						<button type="button" class="btn btn-danger">Delete Account</button>
						</div></div></div>
						';
					}
				}
				$this->data['jobseekerinfos_html']=$jobseekerinfos_html;
				$this->data['put_active1']="active";
				$this->data['put_active2']="";
				$this->data['put_active3']="";
				$this->data['put_active4']="";
				$this->data['put_active5']="";
				$this->load->view('jobSeekerHomePagenew',$this->data);
			}else {
				redirect(site_url('/home/'));
			}
		}

		public function myCv()
		{
			$userCvs=$this->main->getUserCv();
			if ($userCvs->num_rows()>0) {
				$userCv_html='<div class="panel-group">
				<div class="panel panel-default">
				<div class="panel-heading">My Resume</div>
				<div class="panel-body">
				<p class="text-info">Your have uploaded your Cv already!!</p>
				</div>
				</diV>
				</div>';
				$this->data['jobseekerinfos_html']=$userCv_html;
				$this->data['put_active2']="active";
				$this->data['put_active1']="";
				$this->data['put_active3']="";
				$this->data['put_active4']="";
				$this->data['put_active5']="";

				$this->load->view('jobSeekerHomePagenew',$this->data);
			}else {
				$userCv_html='<div class="panel-group">
				<div class="panel panel-default">
				<div class="panel-heading">My Resume</div>
				<div class="panel-body">
				<p class="text-danger">You have not upload a CV yet!!</p>
				<form id="signupForm1" method="post" class="form-horizontal" action="'.site_url('userProfile/do_upload').'"  enctype="multipart/form-data">
				<div class="form-group" >
				<input type="file" name="userfile" class="file" >
				<div class="input-group col-md-9">
				<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
				<input type="text" class="form-control input-md-3" disabled placeholder="Upload CV">
				<span class="input-group-btn">
				<button class="browse btn btn-primary input-md" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
				</span>
				</div>
				</div>

				<div class="form-group" >
				<div class="col-sm-9 col-sm-offset-4">
				<button type="submit" class="btn btn-primary" name="signup1" value="Sign up">Upload</button>
				</div>
				</div>

				</form>
				</div>
				</div>
				</div>';
			}
			$this->data['jobseekerinfos_html']=$userCv_html;
			$this->data['put_active2']="active";
			$this->data['put_active1']="";
			$this->data['put_active3']="";
			$this->data['put_active4']="";
			$this->data['put_active5']="";
			$this->load->view('jobSeekerHomePagenew',$this->data);
		}

		public function do_upload()
		{
			$username=$_SESSION['username'];
			$config['upload_path']= './assets/uploads/myCv/';
			$config['allowed_types']='pdf';
			$config['max_size']=0;
			$config['file_name']=$_SESSION['username'];
			$this->load->library('upload', $config);
			$this->upload->do_upload('userfile');
			$data['cv_link']='./assets/uploads/myCv/'.$username.'.pdf';
			$this->main->setUserCv($data);
			$this->myCv();
		}
		public function account()
		{
			# code...
		}


		public function logOut()
		{
			unset($_SESSION['accountID'],$_SESSION['username'],$_SESSION['accountType'],$_SESSION['EID'],$_SESSION['SID']);
			redirect(site_url('/home/'));

		}


		//get employer Information


		public function employerInfo($hasEdit)
		{
			if (isset($_SESSION['accountID'])&&isset($_SESSION['username'])&&!empty($_SESSION['accountID'])&&!empty($_SESSION['username'])&&($_SESSION['accountType']=='Employer')) {
				if ($hasEdit==1) {
					$employerInfos=$this->main->getEmployerInfo();
					if($employerInfos->num_rows()>0){
						$employerinfos_html='<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">User Profile</div><div class="panel-body"><table class="table table-striped"><tbody>';
						foreach($employerInfos->result() as $employerInfo){
							$companyname=$employerInfo->companyName;
							$emailE=$employerInfo->emailE;
							$regionE=$employerInfo->regionE;
							$districtE=$employerInfo->districtE;
							$website=$employerInfo->website;
							$size=$employerInfo->size;
							$industryType=$employerInfo->industryType;
							$revenue=$employerInfo->revenue;
							$founded=$employerInfo->founded;
							$username=$employerInfo->userName;
							$employerinfos_html.='<tr><td><b>Company Name</b></td><td>'.$companyname.'</td></tr>';
							$employerinfos_html.='<tr><td><b>Email</b></td><td>'.$emailE.'</td></tr>';
							$employerinfos_html.='<tr><td><b>User Name</b></td><td>'.$username.'</td></tr>';
							$employerinfos_html.='<tr><td><b>Region</b></td><td>'.$regionE.'</td></tr>';
							$employerinfos_html.='<tr><td><b>District</b></td><td>'.$districtE.'</td></tr>';
							$employerinfos_html.='<tr><td><b>Founded</b></td><td>'.$founded.'</td></tr>';
							$employerinfos_html.='<tr><td><b>Website</b></td><td>'.$website.'</td></tr>';
							$employerinfos_html.='<tr><td><b>Size</b></td><td>'.$size.'</td></tr>';
						}
						$employerinfos_html.='   </tbody>
						</table><h2>Security Changes</h2>

						<form>

						<div class="form-group">
						<label for="pwd">New Password:</label>
						<input type="password" class="form-control" id="pwd" disabled>
						</div>
						<div class="form-group">
						<label for="pwd">Confirm New Password:</label>
						<input type="password" class="form-control" id="pwd" disabled>
						</div>
						<div class="form-group">
						<a href="'.site_url('userProfile/employerInfo/2').'" class="btn btn-default btn-md">
						<span class="glyphicon glyphicon-edit"></span> Edit
						</a>
						</div>
						</form></div></div></div>


						<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">Delete Account</div><div class="panel-body">
						<button type="button" class="btn btn-danger">Delete Account</button>
						</div></div></div>
						';
					}
				}elseif($hasEdit==2) {
					$employerInfos=$this->main->getEmployerInfo();
					if($employerInfos->num_rows()>0){
						$employerinfos_html='<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">User Profile</div><div class="panel-body"><table class="table table-striped"><tbody><form method="post" action="'.site_url('userProfile/editEmployerInfo/').'" >';
						foreach($employerInfos->result() as $employerInfo){
							$companyname=$employerInfo->companyName;
							$emailE=$employerInfo->emailE;
							$regionE=$employerInfo->regionE;
							$districtE=$employerInfo->districtE;
							$website=$employerInfo->website;
							$size=$employerInfo->size;
							$industryType=$employerInfo->industryType;
							$revenue=$employerInfo->revenue;
							$founded=$employerInfo->founded;
							$username=$employerInfo->userName;
							$employerinfos_html.='<tr><td><b>Company Name</b></td><td><input class="form-control" type="text" name="companyName" value="'.$companyname.'"></td></tr>';
							$employerinfos_html.='<tr><td><b>Email</b></td><td><input class="form-control" type="text" name="emailE" value="'.$emailE.'"></td></tr>';
							$employerinfos_html.='<tr><td><b>User Name</b></td><td><input class="form-control" type="text" name="userName" value="'.$username.'"></td></tr>';
							$employerinfos_html.='<tr><td><b>Region</b></td><td><input class="form-control" type="text" name="regionE" value="'.$regionE.'"></td></tr>';
							$employerinfos_html.='<tr><td><b>District</b></td><td><input class="form-control" type="text" name="districtE" value="'.$districtE.'"></td></tr>';
							$employerinfos_html.='<tr><td><b>Founded</b></td><td><input class="form-control" type="text" name="founded" value="'.$founded.'"></td></tr>';
							$employerinfos_html.='<tr><td><b>Website</b></td><td><input class="form-control" type="text" name="website" value="'.$website.'"></td></tr>';
							$employerinfos_html.='<tr><td><b>Size</b></td><td><input  class="form-control" type="text" name="size" value="'.$size.'"></td></tr>';
						}
						$employerinfos_html.='   </tbody>
						</table><h2>Security Changes</h2>
						<div class="form-group">
						<label for="pwd">New Password:</label>
						<input type="password" name="password" class="form-control" id="pwd" required>
						</div>
						<div class="form-group">
						<label for="pwd">Confirm New Password:</label>
						<input type="password" class="form-control" id="pwd" required >
						</div>
						<div class="form-group">
						<button type="submit" class="btn btn-default btn-md">
						<span class="glyphicon glyphicon-floppy-save"></span> Save Changes
						</button>
						</div>
						</form></div></div></div>
						<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">Delete Account</div><div class="panel-body">
						<button type="button" class="btn btn-danger">Delete Account</button>
						</div></div></div>
						';
					}
				}
				$this->data['employerinfos_html']=$employerinfos_html;
				$this->data['put_active1']="active";
				$this->data['put_active2']="";
				$this->data['put_active3']="";
				$this->data['put_active4']="";
				$this->data['put_active5']="";
				$this->data['post_respond']="";
				$this->load->view('employerHomePagenew',$this->data);
			}else {
				redirect(site_url('/home/'));
			}
		}

		public function postHtml($hasEdit,$jobtitle)
		{

			if ($hasEdit) {

				$data['jobtitle']=$jobtitle;

				$editJob=$this->main->editPostedJob($data);
				if($editJob->num_rows()>0){
					foreach($editJob->result() as $editpostedField){
						$jobtitle=ucwords($editpostedField->jobTitle);
						$discription=$editpostedField->discription;
						$postdate=$editpostedField->postDate;
						$salary=$editpostedField->salary;
						$skillsandexperience=$editpostedField->skillsAndExperience;
						//$interview=$postedJob->onlineInterview;
					}
					$this->main->unsetJob($data);

					$post_html='<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">Post Job</div>
					<div class="panel-body"><form id="post" method="post" class="form-horizontal" action="'.site_url('userProfile/doPost').'">
					<div class="form-group">
					<label class="col-sm-4 control-label" for="jobtitle">Job title *</label>
					<div class="col-sm-5">
					<input type="text" class="form-control" id="" name="jobTitle" value="'.$jobtitle.'" required>
					</div>
					</div>
					<div class="form-group">
					<label for="JDescription" class="col-sm-4 control-label">Job Description</label>
					<div class="col-sm-8">
					<textarea required class="form-control" name="JDescription" rows="4">'.$discription.'</textarea>
					</div>
					</div>

					<div class="form-group">
					<label class="col-sm-4 control-label" for="salary">Salary</label>
					<div class="col-sm-5">
					<input required required type="text" class="form-control" id="" name="salary" value="'.$salary.'" />
					</div>
					</div>

					<div class="form-group">
					<label for="skillsAndExperience" class="col-sm-4 control-label">Skills and Expirience</label>
					<div class="col-md-8">
					<textarea required class="form-control" name="skillsAndExperience" rows="4">'.$skillsandexperience.'</textarea>
					</div>
					</div>

					<div class="form-group">
					<label for="interview" class="col-sm-4 control-label">Interview</label>
					<div class="col-sm-8 " role="group">
					<label class="radio-inline"><input type="radio" value="Yes" name="interview">Yes</label>
					<label class="radio-inline"><input type="radio" value="No" name="interview">No</label>
					</div>
					</div>

					<div class="form-group">
					<div class="col-sm-5 col-sm-offset-7">
					<button type="submit" class="btn btn-primary" id="button1"value=" "><span class="glyphicon glyphicon-share"> Post</span></button>
					</div>
					</div>



					</form>
					</div>
					</div>';



					return $post_html;



				}





			}else {
				$post_html='<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Step 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
    </div>
  </div>



 <form id="post" method="post" class="form-horizontal" action="'.site_url('userProfile/doPost').'">
    <div class="row setup-content" id="step-1">
	<div class="panel-group">
							<div class="panel panel-default">

									<div class="panel-body">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Job Details</h3>

												<div class="form-group">
													<label class=" control-label" for="jobtitle">Job title</label>
													<div >
														<input type="text" class="form-control" id="" name="jobTitle" placeholder="Job title" required />
													</div>
												</div>

												<div class="form-group">
													<label for="JDescription" class=" control-label">Job Description</label>
													<div>
														<textarea required class="form-control" name="JDescription" rows="4" placeholder="Describe the Job in brief..."></textarea>
													</div>
												</div>

												<div class="form-group">
													<label class=" control-label" for="salary">Salary</label>
														<div >
															<input required type="text" class="form-control" id="" name="salary" placeholder="Salary in Tshs" />
														</div>
												</div>

												<div class="form-group">
													<label for="skillsAndExperience" class=" control-label">Skills and Expirience</label>
													<div class="">
														<textarea required class="form-control" name="skillsAndExperience" rows="4" placeholder="State required qualifcations..."></textarea>
													</div>
												</div>

												<div class="form-group">
													<label for="interview" class=" control-label">Interview</label>
													<div class="" role="group">
														<label class="radio-inline"><input type="radio" value="Yes" name="interview">Yes</label>
														<label class="radio-inline"><input type="radio" value="No" name="interview">No</label>
													</div>
												</div>

          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
      </div>

	  </div>
      </div>


		</div>

    </div>





<div class="container">

    <div class="row setup-content" id="step-2">

		<div class="panel-group">
							<div class="panel panel-default">

									<div class="panel-body">



									<div class="col-xs-6 col-md-offset-3">
						        <div class="col-md-12">


          <h3> Set Interview</h3>
          <div class="form-group">
											<label  control-label" for="question">Question 1</label>
												<div>
													<input type="text" class="form-control" id="" name="question1" placeholder="question 1" required />
												</div>
										</div>
										<div class="form-group">
											<label  control-label" for="question">Question 2</label>
												<div>
													<input type="text" class="form-control" id="" name="question2" placeholder="question 2" required />
												</div>
										</div>
										<div class="form-group">
											<label  control-label" for="question">Question 3</label>
												<div>
													<input type="text" class="form-control" id="" name="question3" placeholder="question 3" />
												</div>
										</div>
										<div class="form-group">
											<label  control-label" for="question">Question 4</label>
												<div>
													<input type="text" class="form-control" id="" name="question4" placeholder="question 4"  />
												</div>
										</div>
										<div class="form-group">
											<label  control-label" for="question">Question 5</label>
												<div>
													<input type="text" class="form-control" id="" name="question5" placeholder="question 5"  />
												</div>
										</div>

										<div class="form-group">
											<label  control-label" for="question">Question 6</label>
												<div>
													<input type="text" class="form-control" id="" name="question6" placeholder="question 6"/>
												</div>
										</div>
										<div class="form-group">
											<label  control-label" for="question">Question 7</label>
												<div>
													<input type="text" class="form-control" id="" name="question7" placeholder="question 7"  />
												</div>
										</div>
										<div class="form-group">
											<label  control-label" for="question">Question 8</label>
												<div>
													<input type="text" class="form-control" id="" name="question8" placeholder="question 8"  />
												</div>
										</div>
										<div class="form-group">
											<label  control-label" for="question">Question 9</label>
												<div>
												<input type="text" class="form-control" id="" name="question9" placeholder="question 9"  />
												</div>
										</div>
										<div class="form-group">
											<label  control-label" for="question">Question 10</label>
												<div>
													<input type="text" class="form-control" id="" name="question10" placeholder="question 10" />
												</div>
											</div>

          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
      </div>
		</div>
		</div>
      </div>
			</div>
	      </div>








    <div class="row setup-content" id="step-3">
	<div class="panel-group">
							<div class="panel panel-default">

									<div class="panel-body">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Finish</h3>
          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
          <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
        </div>
      </div>
    </div>
	</div>
      </div>
    </div>
  </form>
';



				return $post_html;
			}


		}



		public function showPostForm()
		{
			$this->data['jobtitle']=$this->input->post('jobTitle');
			$jobtitle=strtolower($this->data['jobtitle']);
			if (isset($jobtitle)&&!empty($jobtitle)) {
				$postHtml=$this->postHtml(true,$jobtitle);
				$this->data['put_active1']='';
				$this->data['put_active2']='active';
				$this->data['put_active3']='';
				$this->data['put_active4']="";
				$this->data['put_active5']="";
				$this->data['employerinfos_html']=$postHtml;
				$this->load->view('employerHomePagenew',$this->data);
			}else{
				$jobtitle="";
				$postHtml=$this->postHtml(false,$jobtitle);
				$this->data['put_active1']='';
				$this->data['put_active2']='active';
				$this->data['put_active3']='';
				$this->data['put_active4']="";
				$this->data['put_active5']="";
				$this->data['employerinfos_html']=$postHtml;
				//$this->data['post_respond']=$respond;
				$this->load->view('employerHomePagenew',$this->data);

			}
		}
		public function doPost()
		{


			$this->data['jobTitle']=strtolower($_POST['jobTitle']);
			$this->data['jdiscription']=$_POST['JDescription'];
			$this->data['salary']=$_POST['salary'];
			$this->data['skillsAndExperience']=$_POST['skillsAndExperience'];
			$this->data['interview']=$_POST['interview'];

			$this->main->setJobPost($this->data);








			$this->viewPostedJobs();

		}



		public function viewPostedJobs()
		{

			$postedJobs=$this->main->getPostedJobs($access='employer');
			if($postedJobs->num_rows()>0){
				$postedJobs_html='<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">Posted Jobs</div><div class="panel-body"><table class="table table-striped table-bordered">
				<thead>
				<tr>
				<th>S/N</th>
				<th>Job Title</th>
				<th>Discription</th>
				<th>Post Date</th>
				<th>Salary</th>
				<th>Skills and Experience</th>
				<th>Interview</th>
				<th>Action</th>
				</tr>
				</thead>
				<tbody>';
				$sn=1;
				foreach($postedJobs->result() as $postedJob){
					$jobtitle=ucwords($postedJob->jobTitle);
					$discription=$postedJob->discription;
					$postdate=$postedJob->postDate;
					$salary=$postedJob->salary;
					$skillsandexperience=$postedJob->skillsAndExperience;
					$interview=$postedJob->onlineInterview;





					//html part
					$postedJobs_html.='<tr>
					<td>'.$sn.'</td>
					<td>'.$jobtitle.'</td>
					<td>'.$discription.'</td>
					<td>'.$postdate.'</td>
					<td>'.$salary.'</td>
					<td>'.$skillsandexperience.'</td>
					<td>'.$interview.'</td>
					<td><form method="post"action="'.site_url('userProfile/showPostForm').'"><input type="hidden" name="jobTitle" value="'.$jobtitle.'"><button type="submit" class="btn btn-link">Edit</button></form>   <form method="post"action="'.site_url('userProfile/doDeleteJob').'"><input type="hidden" name="jobTitle" value="'.$jobtitle.'"><button type="submit" class="btn btn-link">Delete</button></form></td>

					</tr>';
					$sn++;



				}
				$postedJobs_html.='</tbody>
				</table>
				</div>
				</div></div>
				';





			}else{

				$postedJobs_html='<div class="panel-group">
				<div class="panel panel-default">
				<div class="panel-heading">Posted Jobs</div>
				<div class="panel-body">
				<p class="text-danger">Your have Not Posted any Job yet!!</p>
				</div>
				</diV>
				</div>';


			}
			$this->data['put_active1']='';
			$this->data['put_active2']='';
			$this->data['put_active3']='active';
			$this->data['put_active4']="";
			$this->data['put_active5']="";

			$this->data['employerinfos_html']=$postedJobs_html;
			$this->load->view('employerHomePagenew',$this->data);




		}
		public function doDeleteJob()
		{
			$this->data['jobtitle']=strtolower($this->input->post('jobTitle'));
			$this->main->unsetJob($this->data);
			$this->viewPostedJobs();
		}

		/*public function doEditJob()
		{
		$this->data['jobtitle']=$this->input->post('jobTitle');
		$this->jobtitle=$this->data['jobtitle'];
		//$this->main->unsetJob($this->data);

	}*/


	public function getSeekerJobPost()
	{

		$data['jobID']='';
		$jobPosts=$this->main->getJobPost($data);
		//$jobPosts=$jobPosts->row_array();
		//  $this->data['jobPosts']=$jobPosts;

		//$jobsApplied=$this->main->getApplications();
		//$jobsApplied=$jobsApplied->row_array();

		//$newjobPosts=array_diff($jobsApplied,$jobPosts);

		if ($jobPosts->num_rows()>0) {
			$jobPost_html='';
			$counter=1;
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
				$jobID=$jobPost->jobID;
				//  $post=$jobPost->skillsAndExperience;
				$interview=$jobPost->onlineInterview;








				$jobPost_html.='<div class="panel panel-default">
				<div class="panel-body"><h2 id="jobtitle'.$counter.'">'.$jobtitle.'</h2>
				<div class="media">
				<div class="media-left media-top">
				<img src="'.$this->data['base'].'/'.$companylogo.'" class="media-object" style="width:80px">
				</div>
				<div class="media-body">
				<h4 class="media-heading"><span id="companyname'.$counter.'">'.$companyname.'</span><small> -'.$regione.', '.$districte.'</small></h4>
				<h4><small><i>posted '.$postdate.'</i></small></h4>
				</div>


				</div>

				<div class="col-sm-2" id="apply" >
				<a class="btn btn-info btn-sm" href="'.site_url('userProfile/jobDetail/'.$jobID).'">
				<span class="glyphicon glyphicon-list"></span> View details
				</a>
				</div>
</div>


</div>







				';


				/*

				$jobPost_html.='<div class="panel panel-default">
				<div class="panel-body"><h2 id="jobtitle'.$counter.'">'.$jobtitle.'</h2>
				<div class="media">
				<div class="media-left media-top">
				<img src="'.$this->data['base'].'/'.$companylogo.'" class="media-object" style="width:80px">
				</div>
				<div class="media-body">
				<h4 class="media-heading"><span id="companyname'.$counter.'">'.$companyname.'</span><small> -'.$regione.', '.$districte.'</small></h4>
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


				<div class="col-sm-2 col-sm-offset-10" id="apply" >
				<button type="" class="btn btn-primary btn-md" id="button'.$counter.'" name="apply" value="apply"><span class="glyphicon glyphicon-play"></span> Apply</button>
				</div>
				</div>


				</div></div>

				<script>






				$("#button'.$counter.'").on("click",function () {
					var jobtitle=$("#jobtitle'.$counter.'").text();
					var companyname=$("#companyname'.$counter.'").text();




					$.post(\''.site_url('userProfile/apply').'\', {jobTitle:jobtitle,companyName:companyname});



				});


				</script>







				';




				*/






				$counter=$counter+1;
















			}


			$this->data['put_active1']='';
			$this->data['put_active2']='';
			$this->data['put_active3']='';
			$this->data['put_active4']='active';
			$this->data['put_active5']="";
			$this->data['jobseekerinfos_html']=$jobPost_html;
			$this->load->view('jobSeekerHomePagenew',$this->data);
		}
	}

public function jobDetail($jobID)
	{


		$this->data['jobID']=$jobID;
		$jobPosts=$this->main->getJobPost($this->data);
		//$jobPosts=$jobPosts->row_array();
		//  $this->data['jobPosts']=$jobPosts;

		//$jobsApplied=$this->main->getApplications();
		//$jobsApplied=$jobsApplied->row_array();

		//$newjobPosts=array_diff($jobsApplied,$jobPosts);

		if ($jobPosts->num_rows()>0) {
			$jobPost_html='';
			$counter=1;
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
				<div class="panel-body"><h2 id="jobtitle'.$counter.'">'.$jobtitle.'</h2>
				<div class="media">
				<div class="media-left media-top">
				<img src="'.$this->data['base'].'/'.$companylogo.'" class="media-object" style="width:80px">
				</div>
				<div class="media-body">
				<h4 class="media-heading"><span id="companyname'.$counter.'">'.$companyname.'</span><small> -'.$regione.', '.$districte.'</small></h4>
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



				<form method="post" action="'.site_url('userProfile/Interview').'">
				<input type="hidden" name="jobId">
				<div class="col-sm-2" id="interview" >
				<button type="submit" class="btn btn-primary btn-md" id="button'.$counter.'" name="apply" value="apply"><span class="glyphicon glyphicon-play"></span>  Perform Interview</button>
			</form>
				</div>

				</div>




				</div>


				</div></div>

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


			$this->data['put_active1']='';
			$this->data['put_active2']='';
			$this->data['put_active3']='';
			$this->data['put_active4']='active';
			$this->data['put_active5']="";
			$this->data['jobseekerinfos_html']=$jobPost_html;
			$this->load->view('jobSeekerHomePagenew',$this->data);
		}
	}





	public function Interview(){


		for ($i=1;$i<10; $i++){
		$interview_html='<div class="panel panel-default">

				<div class="panel-body"><video id="gum" autoplay muted></video>
    <video id="recorded" autoplay loop></video>

    <div>
      <button id="record" disabled>Start Recording</button>
      <button id="play" disabled>Play</button>
      <button id="download" disabled>Download</button>
    </div></div></div>';
			$this->data['put_active1']='';
			$this->data['put_active2']='';
			$this->data['put_active3']='';
			$this->data['put_active4']='active';
			$this->data['put_active5']="";
			$this->data['jobseekerinfos_html']=$interview_html;
			$this->load->view('jobSeekerHomePagenew',$this->data);



		}




	}


	public function apply()
	{

		$this->data['jobtitle']=strtolower($this->input->post('jobTitle'));
		$this->data['companyname']=strtolower($this->input->post('companyName'));




		$this->main->setApply($this->data);
	}





	public function employerStatistics()
	{


		$statistics=$this->main->getEmployerStatistics();
		if($statistics->num_rows()>=1){
			$statistics_html='<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">Statistics</div><div class="panel-body"><canvas id="myChart"></canvas><script>$(function () {
				var data = {
					labels: [';

					foreach($statistics->result() as $statistic){
						$jobtitle=ucwords($statistic->jobTitle);




						$statistics_html.='"'.$jobtitle.'",';
					}

					$statistics_html.='],
					datasets: [
						{
							label: "My Second dataset",
							fillColor: "rgba(151,187,205,0.2)",
							strokeColor: "rgba(151,187,205,1)",
							pointColor: "rgba(151,187,205,1)",
							pointStrokeColor: "#fff",
							pointHighlightFill: "#fff",
							pointHighlightStroke: "rgba(151,187,205,1)",
							data: [';
							foreach($statistics->result() as $statistic){
								$totalApplication=$statistic->TotalApplications;
								$statistics_html.=$totalApplication.',';///ended here pie chart in editing the links so sa to make chart display/

							}
							$statistics_html.=']
						}
					]
				};

				var option = {
					responsive: true,
				};

				// Get the context of the canvas element we want to select
				var ctx = document.getElementById("myChart").getContext(\'2d\');

				var myLineChart = new Chart(ctx).Bar(data, option);

			});</script>

			</div>
			</diV>
			</div>';





			//html part













		}else{

			$statistics_html='<div class="panel-group">
			<div class="panel panel-default">
			<div class="panel-heading">Posted Jobs</div>
			<div class="panel-body">
			<p class="text-danger">No one has applied for Jobs yet!!</p>
			</div>
			</diV>
			</div>';


		}




















		$this->data['put_active1']='';
		$this->data['put_active2']='';
		$this->data['put_active3']='';
		$this->data['put_active4']='active';
		$this->data['put_active5']="";
		$this->data['employerinfos_html']=$statistics_html;



		$this->load->view('employerHomePagenew',$this->data);
	}

	public function applications()
	{
		$jobApplications=$this->main->getJobApplications();
		if($jobApplications->num_rows()>0){
			$employerinfos_html='<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">Applications</div><div class="panel-body"><table class="table table-striped table-bordered">
			<thead>
			<tr>
			<th>S/N</th>
			<th>Job Title</th>
			<th>Job Seeker</th>
			<th>Application Date</th>
			<th>Respond</th>

			</tr>
			</thead>
			<tbody>';
			$sn=1;
			foreach($jobApplications->result() as $jobApplication){
				$jobtitle=ucwords($jobApplication->jobTitle);
				$firstName=$jobApplication->firstName;
				$lastName=$jobApplication->LastName;
				$applicationDate=$jobApplication->applicationDate;






				//html part
				$employerinfos_html.='<tr>
				<td>'.$sn.'</td>
				<td>'.$jobtitle.'</td>
				<td>'.$firstName.' '.$lastName.'</td>

				<td>'.$applicationDate.'</td>
				<td><select></select></td>

				</tr>';
				$sn++;



			}
			$employerinfos_html.='</tbody>
			</table>
			</div>
			</div></div>
			';





		}else{

			$employerinfos_html='<div class="panel-group">
			<div class="panel panel-default">
			<div class="panel-heading">Applications</div>
			<div class="panel-body">
			<p class="text-danger">No one has applied any Job yet!!</p>
			</div>
			</diV>
			</div>';


		}


		$this->data['put_active1']='';
		$this->data['put_active2']='';
		$this->data['put_active3']='';
		$this->data['put_active4']='';
		$this->data['put_active5']='active';
		$this->data['employerinfos_html']=$employerinfos_html;

		$this->load->view('employerHomePagenew',$this->data);


	}








	public function appliedJobs()
	{
		$jobApplications=$this->main->getJobApplications();
		if($jobApplications->num_rows()>0){
			$jobseekerinfos_html='<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">Applied Jobs</div><div class="panel-body"><table class="table table-striped table-bordered">
			<thead>
			<tr>
			<th>S/N</th>
			<th>Job Title</th>
			<th>Company Name</th>
			<th>Application Date</th>
			<th>Respond</th>

			</tr>
			</thead>
			<tbody>';
			$sn=1;
			foreach($jobApplications->result() as $jobApplication){
				$jobtitle=ucwords($jobApplication->jobTitle);
				$companyName=$jobApplication->companyName;
				$applicationDate=$jobApplication->applicationDate;






				//html part
				$jobseekerinfos_html.='<tr>
				<td>'.$sn.'</td>
				<td>'.$jobtitle.'</td>
				<td>'.$companyName.'</td>
				<td>'.$applicationDate.'</td>
				<td><select></select></td>

				</tr>';
				$sn++;



			}
			$jobseekerinfos_html.='</tbody>
			</table>
			</div>
			</div></div>
			';





		}else{

			$jobseekerinfos_html='<div class="panel-group">
			<div class="panel panel-default">
			<div class="panel-heading">Applied Jobs</div>
			<div class="panel-body">
			<p class="text-danger">You have not applied any Job yet!!</p>
			</div>
			</diV>
			</div></div>';


		}


		$this->data['put_active1']='';
		$this->data['put_active2']='';
		$this->data['put_active3']='active';
		$this->data['put_active4']='';
		$this->data['put_active5']='';
		$this->data['jobseekerinfos_html']=$jobseekerinfos_html;

		$this->load->view('jobSeekerHomePagenew',$this->data);


	}


	public function adminStatistics()
	{



		$totalUsers=$this->main->getTotalUsers();
		if($totalUsers->num_rows()>0){
			$totalUsersHtml='<div class="row"><div class="col-sm-12"><div class="alert alert-success "><h2><strong>Total Users</strong></h2>';
			foreach($totalUsers->result() as $totalUser){
				$totalUsers=$totalUser->TotalUsers;
				$totalUsersHtml.='<h2><p>'.$totalUsers.'</p></h2></div></div></div>';
			}
		}

		$totalJobseekers=$this->main->getTotalJobseekers();
		if($totalJobseekers->num_rows()>0){
			foreach($totalJobseekers->result() as $totalJobseeker){
				$totalJobseekers=$totalJobseeker->totalJobseekers;
				$totalUsersHtml.='<div class="row>"><div class="col-sm-6"><div class="alert alert-danger"><h4><strong>Total Jobseekers</strong></h4><h2><p>'.$totalJobseekers.'</p></h2></div></div>';
			}
		}

		$totalEmployers=$this->main->getTotalEmployers();
		if($totalEmployers->num_rows()>0){
			foreach($totalEmployers->result() as $totalEmployer){
				$totalEmployers=$totalEmployer->totalEmployers;
				$totalUsersHtml.='<div class="col-sm-6"><div class="alert alert-danger"><h4><strong>Total Employers</strong></h4><h2><p>'.$totalEmployers.'</p></h2></div></div></div>';
			}
		}
		//totalmale
		$totalMales=$this->main->getTotalMales();
		if($totalMales->num_rows()>0){

			foreach($totalMales->result() as $totalMale){
				$totalMales=$totalMale->male;
				$totalUsersHtml.='<div clas="row"><div class="col-sm-3"><div class="alert alert-info"><h3><strong>Total Males</strong></h3><h2><p>'.$totalMales.'</p></h2></div></div>';
			}
		}

		$totalFemales=$this->main->getTotalFemales();
		if($totalFemales->num_rows()>0){
			foreach($totalFemales->result() as $totalFemale){
				$totalFemales=$totalFemale->female;
				$totalUsersHtml.='<div class="col-sm-3"><div class="alert alert-info"><h3><strong>Total Females</strong></h3><h2><p>'.$totalFemales.'</p></h2></div></div></div>';
			}
		}


		$totalUsersHtml.='<hr><div class="row"><div class=" col-sm-12"><h2>Total Users</h2><canvas id="myChart"></canvas><script>$(function () {
			var data = [
				{
					value:';
					$totalUsersHtml.=$totalMales.',
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Males"
				},
				{
					value: ';
					$totalUsersHtml.=$totalFemales.',
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Females"
				},
				{
					value: ';
					$totalUsersHtml.=$totalEmployers.',
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Employers"
				}
			]
			var option = {
				responsive: true,
			};

			// Get the context of the canvas element we want to select
			var ctx = document.getElementById("myChart").getContext(\'2d\');


			var myDoughnutChart = new Chart(ctx).Doughnut(data,option);


		});</script></div></div></div>';



		/*$totalUsersHtml.='<div class=" col-sm-6"><h2>Total Job Post </h2><canvas id="myChart1"></canvas><script>$(function () {
		var data = [
		{
		value:';
		$totalUsersHtml.=$totalMales.',
		color:"#F7464A",
		highlight: "#FF5A5E",
		label: "Males"
	},
	{
	value: ';
	$totalUsersHtml.=$totalFemales.',
	color: "#46BDBD",
	highlight: "#5AD3D1",
	label: "Females"
},
{
value: ';
$totalUsersHtml.=$totalEmployers.',
color: "#FDB45C",
highlight: "#FFC870",
label: "Employers"
}
]
var option = {
responsive: true,
};

// Get the context of the canvas element we want to select
var ctx = document.getElementById("myChart1").getContext(\'2d\');


var myDoughnutChart = new Chart(ctx).Doughnut(data,option);


});</script></div></div>';*/

$this->data['adminHtml']=$totalUsersHtml;

$this->data['put_active1']="active";
$this->data['put_active2']="";
$this->data['put_active3']="";
$this->data['put_active4']="";
$this->data['put_active5']="";
$this->data['put_active6']="";





$this->load->view('adminHomepagenew',$this->data);
}

public function editEmployer()
{
	$employers=$this->main->getEmployers();


	if(  $employers->num_rows()>0){
		$employerHtml='<table class="table table-striped">
		<thead>
		<tr>
		<th>S/N</th>
		<th>Company Name</th>
		<th>Email</th>
		<th>Region</th>
		<th>District</th>
		<th>Website</th>
		<th>Size</th>
		<th>Industry</th>
		<th>Revenue</th>
		<th>Founded</th>




		</tr>
		</thead>
		<tbody>
		';
		$sn=1;
		foreach($employers->result() as   $employer){
			$companyName=$employer->companyName;
			$email=$employer->emailE;
			$region=$employer->regionE;
			$district=$employer->districtE;
			$website=$employer->website;
			$size=$employer->size;
			$revenue=$employer->revenue;
			$industry=$employer->industryType;
			$founded=$employer->founded;
			$aid=$employer->accountID;


			$employerHtml.='<tr><td>'.$sn.'</td>
			<td>'.$companyName.'</td>
			<td>'.$email.'</td>
			<td>'.$region.'</td>
			<td>'.$district.'</td>
			<td>'.$website.'</td>
			<td>'.$size.'</td>
			<td>'.$industry.'</td>
			<td>'.$revenue.'</td>
			<td>'.$founded.'</td>
			';
			$sn++;
		}
		$employerHtml.='  </tbody>
		</table>

		<a class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal1">
		<span class="glyphicon glyphicon-plus"></span> Add User
		</a>'  ;


		$this->data['adminHtml']=$employerHtml;
		$this->data['put_active1']="";
		$this->data['put_active2']="active";
		$this->data['put_active3']="";
		$this->data['put_active4']="";
		$this->data['put_active5']="";
		$this->data['put_active6']="";
		$this->load->view('adminHomepagenew',$this->data);

	}
}

public function editJobseeker()
{
	$jobseekers=$this->main->getJobseeker();


	if(  $jobseekers->num_rows()>0){
		$jobseekerHtml='<table class="table table-striped">
		<thead>
		<tr>
		<th>S/N</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Date Of Birth</th>
		<th>Email</th>
		<th>Region</th>
		<th>District</th>
		<th>Gender</th>
		<th>Field of Study</th>



		</tr>
		</thead>
		<tbody>
		';
		$sn=1;
		foreach($jobseekers->result() as   $jobseeker){
			$firstname=$jobseeker->firstName;
			$lastname=$jobseeker->lastName;
			$email=$jobseeker->email;
			$region=$jobseeker->region;
			$district=$jobseeker->district;
			$dob=$jobseeker->DOB;
			$fieldOfStudy=$jobseeker->FieldOfStudy;
			$gender=$jobseeker->gender;



			$jobseekerHtml.='<tr><td>'.$sn.'</td>
			<td>'.$firstname.'</td>
			<td>'.$lastname.'</td>
			<td>'.$dob.'</td>
			<td>'.$email.'</td>
			<td>'.$region.'</td>
			<td>'.$district.'</td>
			<td>'.$gender.'</td>
			<td>'.$fieldOfStudy.'</td>

			';
			$sn++;
		}
		$jobseekerHtml.='  </tbody>
		</table>  <a class="btn btn-default btn-sm" role="button" data-toggle="modal" data-target="#myModal">
		<span class="glyphicon glyphicon-plus"></span> Add User
		</a>'  ;


		$this->data['adminHtml']=$jobseekerHtml;
		$this->data['put_active1']="";
		$this->data['put_active2']="";
		$this->data['put_active3']="active";
		$this->data['put_active4']="";
		$this->data['put_active5']="";
		$this->data['put_active6']="";
		$this->load->view('adminHomepagenew',$this->data);

	}
}

public function editPostedJobs()
{

	$postedJobs=$this->main->getPostedJobs($access='admin');
	if($postedJobs->num_rows()>0){
		$postedJobs_html='<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">Posted Jobs</div><div class="panel-body"><table class="table table-striped table-bordered">
		<thead>
		<tr>
		<th>S/N</th>
		<th>Job Title</th>
		<th>Discription</th>
		<th>Post Date</th>
		<th>Salary</th>
		<th>Skills and Experience</th>
		<th>Interview</th>
		<th>Action</th>
		</tr>
		</thead>
		<tbody>';
		$sn=1;
		foreach($postedJobs->result() as $postedJob){
			$jobtitle=ucwords($postedJob->jobTitle);
			$discription=$postedJob->discription;
			$postdate=$postedJob->postDate;
			$salary=$postedJob->salary;
			$skillsandexperience=$postedJob->skillsAndExperience;
			$interview=$postedJob->onlineInterview;





			//html part
			$postedJobs_html.='<tr>
			<td>'.$sn.'</td>
			<td>'.$jobtitle.'</td>
			<td>'.$discription.'</td>
			<td>'.$postdate.'</td>
			<td>'.$salary.'</td>
			<td>'.$skillsandexperience.'</td>
			<td>'.$interview.'</td>
			<td><form method="post"action="'.site_url('userProfile/showPostForm').'"><input type="hidden" name="jobTitle" value="'.$jobtitle.'"><button type="submit" class="btn btn-link">Edit</button></form>   <form method="post"action="'.site_url('userProfile/doDeleteJob').'"><input type="hidden" name="jobTitle" value="'.$jobtitle.'"><button type="submit" class="btn btn-link">Delete</button></form></td>

			</tr>';
			$sn++;



		}
	}
	$postedJobs_html.='</tbody>
	</table>
	</div>
	</div>
	</div>
	';
	$this->data['adminHtml']=$postedJobs_html;
	$this->data['put_active1']="";
	$this->data['put_active2']="";
	$this->data['put_active3']="";
	$this->data['put_active4']="active";
	$this->data['put_active5']="";
	$this->data['put_active6']="";
	$this->load->view('adminHomepagenew',$this->data);

}

public function locationForm()
{
	$locationFormHtml='<div class="panel panel-info">
	<div class="panel-heading">Add Location</div> <div class="panel-body"><form id="signupForm2" method="post" class="form-horizontal" action="'.site_url("/UserProfile/addLocation").'">

	<div class="form-group">
	<label class="col-sm-4 control-label" for="Region">Region</label>
	<div class="col-sm-5">
	<input type="text" class="form-control" id="name" name="region" placeholder="region" />
	</div>
	</div>
	<div class="form-group">
	<label class="col-sm-4 control-label" for="District">District</label>
	<div class="col-sm-5">
	<input type="text" class="form-control" id="word" name="district" placeholder="district" />
	</div>
	</div>

	<div class="form-group">
	<div class="col-sm-9 col-sm-offset-4">
	<button type="submit" class="btn btn-default btn-sm">
	<span class="glyphicon glyphicon-plus"></span> Add Location
	</button>
	</div>

	<div class="err" id="add_err"></div>

	</div>
	</form>
	</div>
	</div>
	';

	$this->data['adminHtml']=$locationFormHtml;
	$this->data['put_active1']="";
	$this->data['put_active2']="";
	$this->data['put_active3']="";
	$this->data['put_active4']="";
	$this->data['put_active5']="active";
	$this->data['put_active6']="";
	$this->load->view('adminHomepagenew',$this->data);
}






public function addLocation()
{
	$this->data['region']=$this->input->post('region');
	$this->data['district']=$this->input->post('district');

	$this->main->setLocation($this->data);


	redirect(site_url('/UserProfile/locationForm'));





}


public function showLogins()
{
	$logins=$this->main->getlogins();
	if($logins->num_rows()>0){
		$logins_html='<div class="panel-group"><div class="panel panel-default"><div class="panel-heading">Login Report</div><div class="panel-body"><table class="table table-striped table-bordered">
		<thead>
		<tr>
		<th>S/N</th>
		<th>IP address</th>
		<th>Username</th>
		<th>Password</th>
		<th>Attempt date</th>
		<th>Login status</th>
		</tr>
		</thead>
		<tbody>';
		$sn=1;
		foreach($logins->result() as $login){

			$ipaddress=$login->ipAddrress;
			$username=$login->userName;
			$password=$login->password;
			$logintime=$login->loginTime;
			$status=$login->loginStatus;

			if ($status=='Success'){
				$logins_html.='<tr>
				<td>'.$sn.'</td>
				<td>'.$ipaddress.'</td>
				<td>'.$username.'</td>
				<td>'.$password.'</td>
				<td>'.$logintime.'</td>
				<td class="alert alert-success"><strong>'.$status.'</strong></td></tr>';
				$sn++;

			}else {
				$logins_html.='<tr>
				<td>'.$sn.'</td>
				<td>'.$ipaddress.'</td>
				<td>'.$username.'</td>
				<td>'.$password.'</td>
				<td>'.$logintime.'</td>
				<td class="alert alert-danger"><strong>'.$status.'</strong></td></tr>';
				$sn++;
			}





		}
		$logins_html.='</tbody>
		</table>
		</div>
		</div>
		</div>
		';


		$this->data['adminHtml']=$logins_html;
		$this->data['put_active1']="";
		$this->data['put_active2']="";
		$this->data['put_active3']="";
		$this->data['put_active4']="";
		$this->data['put_active5']="";
		$this->data['put_active6']="active";
		$this->load->view('adminHomepagenew',$this->data);
	}


}

public function editEmployerInfo()
{


	$data_employer1['accountType']='Employer';
	$data_employer1['userName']=$_POST['userName'];
	$data_employer1['password']=md5($_POST['password']);
	$data_employer2['companyName']=$_POST['companyName'];
	$data_employer2['emailE']=$_POST['emailE'];
	$data_employer2['regionE']=$_POST['regionE'];
	$data_employer2['districtE']=$_POST['districtE'];
	$data_employer2['website']=$_POST['website'];
	$data_employer2['founded']=$_POST['founded'];
	$data_employer2['size']=$_POST['size'];

	$this->main->set_edit_Employer($data_employer1,$data_employer2);
	$this->data['status']='<div class="alert alert-success alert-dismissable col-sm-6 col-sm-offset-3">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Success!</strong> Your informations have been Updated.
	</div>';

	$this->employerInfo(1);



}

public function editJobseekerInfo()
{


	$data_jobseeker1['accountType']='Job seeker';
	$data_jobseeker1['userName']=$_POST['userName'];
	$data_jobseeker1['password']=md5($_POST['password']);
	$data_jobseeker2['firstName']=$_POST['firstName'];
	$data_jobseeker2['lastName']=$_POST['lastName'];
	$data_jobseeker2['email']=$_POST['email'];
	$data_jobseeker2['region']=$_POST['region'];
	$data_jobseeker2['district']=$_POST['district'];
	$data_jobseeker2['fieldOfStudy']=$_POST['fieldOfStudy'];
	//$data_jobseeker2['gender']=$_POST['gender'];
	$data_jobseeker2['DOB']=$_POST['DOB'];

	$this->main->set_edit_Jobseeker($data_jobseeker1,$data_jobseeker2);
	$this->data['status']='<div class="alert alert-success alert-dismissable col-sm-6 col-sm-offset-3">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Success!</strong> Your informations have been Updated.
	</div>';

	$this->jobseekerInfo(1);



}

public function deleteUser($aid)
{
$aid=$aid;
$this->main->unsetUser($aid);
$this->data['status']='<div class="alert alert-success alert-dismissable col-sm-6 col-sm-offset-3">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Success!</strong> User have been deleted.
</div>';



}


}


?>
