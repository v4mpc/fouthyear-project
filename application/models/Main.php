<?php
	class Main extends CI_Model{

		function __construct()
		{
		parent::__construct();


		}
		public function get_EID()
		{
			$username=$_SESSION['username'];
			$query_EID="SELECT registerEmployer.EID FROM registerEmployer INNER JOIN accountInfo ON registerEmployer.accountID=accountInfo.accountID WHERE accountInfo.userName='$username'";
			$result_EID=$this->db->query($query_EID);
			foreach ($result_EID->result() as $EID) {
				$result_EID=$EID->EID;
			}
		return $result_EID;
		}


		public function get_SID()
		{
			$username=$_SESSION['username'];
			$querySID="SELECT registerJobSeeker.SID FROM registerJobSeeker INNER JOIN accountInfo ON registerJobSeeker.accountID = accountInfo.accountID WHERE accountInfo.username='$username'";
			$resultSIDs=$this->db->query($querySID);
			foreach ($resultSIDs->result() as $resultSID) {
				$SID=$resultSID->SID;
			}
			return $SID;
		}




		public function get_region(){
		$query_region="SELECT DISTINCT region FROM location ORDER BY region ASC";
		$result_region=$this->db->query($query_region);
		return $result_region;
		}
		public function get_district(){
		$query_district="SELECT DISTINCT district FROM location ORDER BY district ASC";
		$result_district=$this->db->query($query_district);
		return $result_district;
		}
		public function get_security_question(){
		$query_question="SELECT DISTINCT securityQuestion FROM securityQuestionLookupTable";
		$result_question=$this->db->query($query_question);
		return $result_question;
		}
		public function insert_register_Jobseeker($data_jobseeker1,$data_jobseeker2){
			$this->db->insert("accountInfo",$data_jobseeker1);
			$firstName=$data_jobseeker2['firstName'];
			$lastName=$data_jobseeker2['lastName'];
		 	$userName=$data_jobseeker2['userName'];
			$email=$data_jobseeker2['email'];
			$region=$data_jobseeker2['region'];
			$district=$data_jobseeker2['district'];
			$DOB=$data_jobseeker2['DOB'];
			$securityQuestion=$data_jobseeker2['securityQuestion'];
			$securityAnswer=$data_jobseeker2['securityAnswer'];
			$fieldofstudy=$data_jobseeker2['fieldOfStudy'];
			$gender=$data_jobseeker2['gender'];
			$query_insert_js="INSERT INTO registerJobSeeker(firstName,lastName,email,region,district,DOB,securityQuestion,securityAnswer,accountID, FieldOfStudy,gender) VALUES ('$firstName','$lastName','$email','$region','$district','$DOB','$securityQuestion','$securityAnswer',(SELECT accountID FROM accountInfo WHERE userName = '$userName'),'$fieldofstudy','$gender')";
			$this->db->query($query_insert_js);
		}
		public function insert_register_Employer($data_employer1,$data_employer2){
			$this->db->insert("accountInfo",$data_employer1);
			$companyName=$data_employer2['companyName'];
			$userName=$data_employer2['userNameE'];
			$email=$data_employer2['emailE'];
			$region=$data_employer2['regionE'];
			$district=$data_employer2['districtE'];
			$securityQuestion=$data_employer2['securityQuestionE'];
			$securityAnswer=$data_employer2['securityAnswerE'];
			$website=$data_employer2['website'];
			$founded=$data_employer2['founded'];
			$size=$data_employer2['size'];
			$query_insert_e="INSERT INTO registerEmployer(companyName,emailE,regionE,districtE,securityQuestion,securityAnswer,accountID,website,founded,size) VALUES ('$companyName','$email','$region','$district','$securityQuestion','$securityAnswer',(SELECT accountID FROM accountInfo WHERE userName = '$userName'),'$website','$founded','$size')";
			$this->db->query($query_insert_e);
		}
public function getJobseekerInfo()
{
$username=$_SESSION['username'];
$SID=$this->get_SID();
$_SESSION['SID']=$SID;
$query_userinfo="SELECT registerJobSeeker.firstName, registerJobSeeker.lastName,accountInfo.userName ,registerJobSeeker.region, registerJobSeeker.district ,registerJobSeeker.DOB ,registerJobSeeker.fieldOfStudy, registerJobSeeker.email FROM registerJobSeeker INNER JOIN accountInfo ON registerJobSeeker.accountID = accountInfo.accountID WHERE accountInfo.username='$username'";
$result_userinfo=$this->db->query($query_userinfo);
return $result_userinfo;
}
 public function getUserCv()
 {
	$username=$_SESSION['username'];
 	$query_cv="SELECT resumeLink FROM resume WHERE SID=(SELECT registerJobSeeker.SID FROM registerJobSeeker INNER JOIN accountInfo ON registerJobSeeker.accountID = accountInfo.accountID WHERE accountInfo.username='$username')";
	$result_cv=$this->db->query($query_cv);
	return $result_cv;
 }
 public function setUserCv($data)
 {
	 $cv_link=$data['cv_link'];
	 $username=$_SESSION['username'];
 	$query_set_cv="INSERT INTO resume(resumeLink, SID) VALUES ('$cv_link',(SELECT registerJobSeeker.SID FROM registerJobSeeker INNER JOIN accountInfo ON registerJobSeeker.accountID = accountInfo.accountID WHERE accountInfo.username='$username'))";
	$this->db->query($query_set_cv);
 }


public function getSession($data)
{
	$username=$data['username'];
	$password=$data['password'];


	$query_session_get="SELECT accountID,userName,accountType FROM accountInfo WHERE userName='$username' AND password='$password'";
	$results_session_get=$this->db->query($query_session_get);

	//database hit/miss
/*$loginDate=date("Y-m-d H:i:s");
$correct_ip_address=$_SERVER['REMOTE_ADDR'];
	if($results_session_get->num_rows()==1){
//$queryHit="INSERT INTO dbHit(ipAddrress, userName, password, loginTime, loginStatus) VALUES ('$correct_ip_address','$username','$password','$loginDate','Success')";
$this->db->query($queryHit);
	}else{
		//$queryMiss="INSERT INTO dbHit(ipAddrress, userName, password, loginTime, loginStatus) VALUES //('$correct_ip_address','$username','$password','$loginDate','Failed')";
		$this->db->query($queryMiss);
	}*/
	return $results_session_get;
}
public function getJobPost($data)
{
		if(empty($data['jobID'])){
		$query_jobPost="SELECT registerEmployer.companyName,registerEmployer.regionE, registerEmployer.districtE, registerEmployer.logo, registerEmployer.website, registerEmployer.size, registerEmployer.industryType, registerEmployer.revenue, registerEmployer.founded, job_Post.jobTitle, job_Post.jobID, job_Post.discription, job_Post.postDate,job_Post.salary, job_Post.onlineInterview FROM registerEmployer INNER JOIN job_Post ON registerEmployer.EID=job_Post.EID";
	$result_jobPost=$this->db->query($query_jobPost);

	//$jobPosts=$result_jobPost->result();
	return $result_jobPost;

		}else{

			$jobID=$data['jobID'];
			$query_jobPost="SELECT registerEmployer.companyName,registerEmployer.regionE, registerEmployer.districtE, registerEmployer.logo, registerEmployer.website, registerEmployer.size, registerEmployer.industryType, registerEmployer.revenue, registerEmployer.founded, job_Post.jobTitle, job_Post.discription, job_Post.postDate,job_Post.salary, job_Post.onlineInterview FROM registerEmployer INNER JOIN job_Post ON registerEmployer.EID=job_Post.EID WHERE job_Post.jobID='$jobID'";
	$result_jobPost=$this->db->query($query_jobPost);
	return $result_jobPost;

		}
}


//get employer Information

public function getEmployerInfo()
{
$username=$_SESSION['username'];
$result_EID=$this->get_EID();
$_SESSION['EID']=$result_EID;
$query_employerinfo="SELECT registerEmployer.companyName,registerEmployer.emailE ,registerEmployer.regionE ,registerEmployer.districtE, registerEmployer.website ,registerEmployer.size, registerEmployer.industryType ,registerEmployer.revenue ,registerEmployer.founded, accountInfo.userName FROM registerEmployer INNER JOIN accountInfo ON registerEmployer.accountID=accountInfo.accountID WHERE accountInfo.userName='$username' ";
$result_employerinfo=$this->db->query($query_employerinfo);
return $result_employerinfo;
}

public function setJobPost($data)
{

$jobTitle=$data['jobTitle'];
$jdiscription=$data['jdiscription'];
$salary=$data['salary'];
$skillsAndExperience=$data['skillsAndExperience'];
$interview=$data['interview'];
$postDate=date('Y-m-d');
$username=$_SESSION['username'];
	$queryPost="INSERT INTO job_Post(jobTitle, discription, postDate, salary, skillsAndExperience, onlineInterview,EID) VALUES ('$jobTitle','$jdiscription','$postDate','$salary','$skillsAndExperience','$interview',(SELECT registerEmployer.EID FROM registerEmployer INNER JOIN accountInfo ON registerEmployer.accountID=accountInfo.accountID WHERE accountInfo.userName='$username'))";
	$this->db->query($queryPost);
}


public function getPostedJobs($access)
{
	if ($access=='employer') {
		$username=$_SESSION['username'];
		$eid=$_SESSION['EID'];
		$queryPostedJobs="SELECT jobTitle,discription,postDate,salary,skillsAndExperience,onlineInterview FROM job_Post WHERE EID='$eid'";
		$resultPostedJobs=$this->db->query($queryPostedJobs);
		return $resultPostedJobs;
	}else {
		$queryPostedJobs="SELECT jobTitle,discription,postDate,salary,skillsAndExperience,onlineInterview FROM job_Post WHERE 1";
		$resultPostedJobs=$this->db->query($queryPostedJobs);
		return $resultPostedJobs;
	}

}

public function editPostedJob($data)
{
	$username=$_SESSION['username'];
	$eid=$_SESSION['EID'];
	$jobtitle=$data['jobtitle'];
	$queryPostedJob="SELECT jobTitle,discription,postDate,salary,skillsAndExperience,onlineInterview FROM job_Post WHERE EID='$eid' AND jobTitle='$jobtitle'";
	$resultPostedJob=$this->db->query($queryPostedJob);
	return $resultPostedJob;
}



public function setApply($data)
{
	$jobtitle=$data['jobtitle'];
  $companyname=$data['companyname'];
	$username=$_SESSION['username'];
//get EID
	$queryEID="SELECT EID FROM registerEmployer WHERE companyName='$companyname'";
	$resultEIDs=$this->db->query($queryEID);
	foreach ($resultEIDs->result() as $resultEID) {
		$EID=$resultEID->EID;
	}


//get JID
$queryJID="SELECT jobID FROM job_Post WHERE EID='$EID' AND jobTitle='$jobtitle'";
$resultJIDs=$this->db->query($queryJID);
foreach ($resultJIDs->result() as $resultJID) {
	$JID=$resultJID->jobID;
}

//get SID


$SID=$this->get_SID();
$applicationDate=date('Y-m-d');
$querySetApplication="INSERT INTO jobApplications(jobID, EID, SID,applicationDate) VALUES ('$JID','$EID','$SID','$applicationDate')";
$this->db->query($querySetApplication);



$query_update_apply="UPDATE job_Post SET TotalApplications=TotalApplications+1 WHERE jobTitle='$jobtitle' AND EID='$EID'";
$this->db->query($query_update_apply);

}








public function getUsername($data)
{
$username=$data['username'];

$query_username="SELECT userName FROM accountInfo WHERE userName='$username'";
$username_result=$this->db->query($query_username);
return $username_result;
}


public function unsetJob($data)
{
	$jobtitle=$data['jobtitle'];

	$EID=$this->get_EID();
	$query_unset=" DELETE FROM 	job_Post WHERE jobTitle='$jobtitle' AND EID='$EID'";
	$this->db->query($query_unset);
}




public function getJobApplications()
{

//$EID=$this->get_EID();
//$SID=$this->get_SID();

if (isset($_SESSION['EID'])&&!empty($_SESSION['EID'])) {
	$EID=$_SESSION['EID'];
	$query_jobApplications="SELECT job_Post.jobTitle, jobApplications.applicationDate, registerJobSeeker.firstName,registerJobSeeker.LastName FROM jobApplications INNER JOIN job_Post ON jobApplications.jobID=job_Post.jobID INNER JOIN registerJobSeeker ON registerJobSeeker.SID=jobApplications.SID WHERE jobApplications.EID='$EID'";
}else if (isset($_SESSION['SID'])&&!empty($_SESSION['SID'])) {
	$SID=$_SESSION['SID'];
	$query_jobApplications="SELECT job_Post.jobTitle, jobApplications.applicationDate, registerEmployer.companyName FROM jobApplications INNER JOIN job_Post ON jobApplications.jobID=job_Post.jobID INNER JOIN registerEmployer ON registerEmployer.EID=jobApplications.EID WHERE jobApplications.SID='$SID'";
}
$result_jobApplications=$this->db->query($query_jobApplications);
return $result_jobApplications;






}
public function getEmployerStatistics()
{

	$EID=$_SESSION['EID'];
	$query_statistics="SELECT jobTitle , TotalApplications FROM job_Post WHERE EID='$EID'";
$result_statistics=$this->db->query($query_statistics);
return $result_statistics;
}


public function getTotalUsers()
{
	$query_totalUsers="SELECT COUNT(accountID) AS TotalUsers FROM `accountInfo` WHERE 1 ";
	$results_totalUsers=$this->db->query($query_totalUsers);
	return $results_totalUsers;
}

public function getTotalMales()
{
	$query_totalMales="SELECT COUNT(gender) AS male FROM `registerJobSeeker` WHERE gender='M'  ";
	$results_totalMales=$this->db->query($query_totalMales);
	return $results_totalMales;
}

public function getTotalFemales()
{
	$query_totalFemales="SELECT COUNT(gender) AS female FROM `registerJobSeeker` WHERE gender='F'  ";
	$results_totalFemales=$this->db->query($query_totalFemales);
	return $results_totalFemales;
}


public function getTotalJobseekers()
{
	$query_totalJobseekers="SELECT COUNT(SID) AS totalJobseekers FROM `registerJobSeeker` WHERE 1 ";
	$results_totalJobseekers=$this->db->query($query_totalJobseekers);
	return $results_totalJobseekers;
}


public function getTotalEmployers()
{
	$query_totalEmployers="SELECT COUNT(EID) AS totalEmployers FROM `registerEmployer` WHERE 1 ";
	$results_totalEmployers=$this->db->query($query_totalEmployers);
	return $results_totalEmployers;
}

/*public function getTotalEmployers()
{
	$query_totalEmployers="SELECT COUNT(EID) AS totalEmployers FROM `registerEmployer` WHERE 1 ";
	$results_totalEmployers=$this->db->query($query_totalEmployers);
	return $results_totalEmployers;
}


*/


public function getEmployers($value='')
{
	$queryEmployers="SELECT * FROM `registerEmployer` WHERE 1 ";

	$resultsEmployers=$this->db->query($queryEmployers);
	return $resultsEmployers;
}

public function getJobseeker()
{
	$queryJobseekers="SELECT * FROM `registerJobSeeker` WHERE 1 ";

	$resultsJobseekers=$this->db->query($queryJobseekers);
	return $resultsJobseekers;
}


public function setLocation($data)
{

	$region=$data['region'];
	$district=$data['district'];
	$query_set_location="INSERT INTO location (region, district) VALUES ('$region','$district')";
	$this->db->query($query_set_location);
}

public function getlogins()
{
	$querylogins="SELECT * FROM `dbHit` WHERE 1";
	$resultlogins=$this->db->query($querylogins);
	return $resultlogins;
}


public function getSearch($data)
{
	$searchName=$this->data['searchName'];
	$query_searchName="SELECT registerEmployer.companyName,registerEmployer.regionE,job_Post.jobID, registerEmployer.districtE, registerEmployer.logo, registerEmployer.website, registerEmployer.size, registerEmployer.industryType, registerEmployer.revenue, registerEmployer.founded, job_Post.jobTitle, job_Post.discription, job_Post.postDate,job_Post.salary, job_Post.onlineInterview FROM registerEmployer INNER JOIN job_Post ON registerEmployer.EID=job_Post.EID WHERE job_Post.jobTitle='$searchName'";
	$result_searchName=$this->db->query($query_searchName);
	return $result_searchName;
}


public function getApplications()
{
$SID=$_SESSION['SID'];
$query_jobApplications="SELECT job_Post.jobTitle, jobApplications.applicationDate, registerEmployer.companyName FROM jobApplications INNER JOIN job_Post ON jobApplications.jobID=job_Post.jobID INNER JOIN registerEmployer ON registerEmployer.EID=jobApplications.EID WHERE jobApplications.SID='$SID'";
$result_jobApplications=$this->db->query($query_jobApplications);
return $result_jobApplications;






}

public function set_edit_Employer($data_employer1,$data_employer2)
{
$usernamenew=$data_employer1['userName'];
$password=$data_employer1['password'];
$username=$_SESSION['username'];
$query_edit_accountinfo="UPDATE accountInfo SET userName='$usernamenew' ,password='$password' WHERE userName='$username'";

$this->db->query($query_edit_accountinfo);
$_SESSION['username']=$usernamenew;
$result_EID=$this->get_EID();
	$companyName=$data_employer2['companyName'];

	$email=$data_employer2['emailE'];
	$region=$data_employer2['regionE'];
	$district=$data_employer2['districtE'];

	$website=$data_employer2['website'];
	$founded=$data_employer2['founded'];
	$size=$data_employer2['size'];
	$query_edit_e="UPDATE registerEmployer SET companyName='$companyName',emailE='$email',regionE='$region',districtE='$district',website='$website',founded='$founded',size= '$size' WHERE EID='$result_EID'";
	$this->db->query($query_edit_e);
	//
}


public function set_edit_Jobseeker($data_jobseeker1,$data_jobseeker2)
{

	$usernamenew=$data_jobseeker1['userName'];
	$password=$data_jobseeker1['password'];
	$username=$_SESSION['username'];
	$query_edit_accountinfo="UPDATE accountInfo SET userName='$usernamenew' ,password='$password' WHERE userName='$username'";

	$this->db->query($query_edit_accountinfo);
	$_SESSION['username']=$usernamenew;
	$result_SID=$this->get_SID();
		$firstname=$data_jobseeker2['firstName'];
		$email=$data_jobseeker2['email'];
		$region=$data_jobseeker2['region'];
		$district=$data_jobseeker2['district'];
		$lastname=$data_jobseeker2['lastName'];
		$DOB=$data_jobseeker2['DOB'];
		$fieldOfStudy=$data_jobseeker2['fieldOfStudy'];
		$query_edit_s="UPDATE registerJobSeeker SET firstName='$firstname',lastName='$lastname',email='$email',region='$region',district='$district',DOB='$DOB',FieldOfStudy='$fieldOfStudy' WHERE SID='$result_SID'";
		$this->db->query($query_edit_s);

}





public function unsetUser($userId)
{

/*$aid=$userId;
$query_unset*/
}


}











?>
