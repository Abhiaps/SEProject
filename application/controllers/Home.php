<?php 
class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home_view');
	}
	public function dean()
	{
		$this->load->view('dean_view');
	}
	public function faculty(){
		$data=array();
		$data['Name']='Abhi';
		$data['Branch']='phy';
		$this->load->view('faculty_view',$data);
	}
	public function admin(){
		$this->load->view('admin_view');
	}
	public function add(){
		$data=($this->input->get('data'));
		$obj=json_decode($data);
		$date = date("Y-m-d");
		$SQL="insert into academic_deficient values('$obj->NAME','$obj->dept','$obj->course',
		'$obj->branch','$obj->admn_no','$obj->session_yr','$obj->session','$obj->sem','$obj->actual_published_on',
		'$obj->cgpa','$obj->gpa','$obj->senester_passfail_status','$obj->academic_status','$obj->prio','$date','admin')";
		$query=$this->db->query($SQL);

		$SQL="insert into academic_deficient_tran_log values('$obj->NAME','$obj->dept','$obj->course',
		'$obj->branch','$obj->admn_no','$obj->session_yr','$obj->session','$obj->sem','$obj->actual_published_on',
		'$obj->cgpa','$obj->gpa','$obj->senester_passfail_status','$obj->academic_status','$obj->prio','I','$obj->modified_by','$date','$obj->remark1','$obj->remark2','$date','admin')";
		$query=$this->db->query($SQL);
		
		echo "<script type='text/javascript'>alert('Successfully added deficient student');</script>";
		$this->load->view('admin_view');
	}

	public function delete(){
		$data=($this->input->get('data'));
		$obj=json_decode($data);
		$date = date("Y-m-d");
		$SQL="delete from academic_deficient where NAME='$obj->NAME' and dept='$obj->dept' and
		course='$obj->course' and branch='$obj->branch' and admn_no='$obj->admn_no' and
		session_yr='$obj->session_yr' and session='$obj->session' and sem='$obj->sem' and cgpa='$obj->cgpa' and gpa='$obj->gpa' and senester_passfail_status='$obj->senester_passfail_status'
		and academic_status='$obj->academic_status' and prio='$obj->prio'";
		$query=$this->db->query($SQL);
		

		$SQL="insert into academic_deficient_tran_log values('$obj->NAME','$obj->dept','$obj->course',
		'$obj->branch','$obj->admn_no','$obj->session_yr','$obj->session','$obj->sem','$obj->actual_published_on',
		'$obj->cgpa','$obj->gpa','$obj->senester_passfail_status','$obj->academic_status','$obj->prio','D','$obj->modified_by','$date','$obj->remark1','$obj->remark2','$date','admin')";
		$query=$this->db->query($SQL);
		
		echo "<script type='text/javascript'>alert('Successfully deleted deficient student');</script>";
		$this->load->view('admin_view');		
	}

	public function deficientStudents(){
		$session_yr=($this->input->get('sessionyr'));
		$session=($this->input->get('session'));
		$branch=($this->input->get('branch'));

		$SQL="select * from academic_deficient where session_yr='$session_yr' and session='$session' and branch='$branch'";
		$query=$this->db->query($SQL);
		$result=array();
		$result['data']=$query->result();
		$result['topic']='Deficient Students';
		$this->load->view('deficient_view',$result);
	}


	public function student()
	{
		$adm="20MS0024";
		$SQL="select (first_name) as NAME,admn_no,cgpa,gpa,present_email,phn_no,emaildata.course,emaildata.branch,year_of_admission from final_semwise_marks_foil_freezed marks join emaildata on (marks.admn_no=emaildata.admission_no) where admn_no='$adm' and semester=(select max(semester) from final_semwise_marks_foil_freezed where admn_no='$adm')";
		$query=$this->db->query($SQL);
		$data=$query->result();
		$status="No Default";
		$SQL="select academic_status from academic_deficient where admn_no='$adm'";
		$query=$this->db->query($SQL);
		$data1=$query->result();
		if($query->num_rows()>0)$status="";
		foreach($data1 as $academic)$status=$status.($academic->academic_status);
		$result=array();
		$result['status']=$status;
		$result['data']=$data;
		$this->load->view('student_view',$result);
	}
	public function allstudents()
	{
		$course=($this->input->get('course'));
		$courseLowest=($this->input->get('courseLowest'));
		$session_yr=($this->input->get('sessionyr'));
		$session=($this->input->get('session'));
		$SQL="select (first_name) as NAME,marks.dept,marks.course,marks.branch,admn_no,marks.session_yr,marks.session,marks.semester,marks.actual_published_on,cgpa,gpa,marks.status from final_semwise_marks_foil_freezed marks join emaildata on (marks.admn_no=emaildata.admission_no) where session_yr='$session_yr' and session='$session'";
		$query = $this->db->query($SQL);
		$data=$query->result();
		$result=array();
		$result['data']=$data;
		$result['topic']="All Data";
		$this->load->view('data_view',$result);
	}
	public function ap()
	{
		$course=$this->input->get('course');
		$courseLowest=($this->input->get('courseLowest'));
		$session_yr=($this->input->get('sessionyr'));
		$session=($this->input->get('session'));
		$SQL="select (first_name) as NAME,marks.dept,marks.course,marks.branch,admn_no,marks.session_yr,marks.session,marks.semester,marks.actual_published_on,cgpa,gpa,marks.status from final_semwise_marks_foil_freezed marks join emaildata on (marks.admn_no=emaildata.admission_no) where session_yr='$session_yr' and session='$session'  and ((gpa<='$courseLowest' and cgpa<'$courseLowest') and (select count(*) from final_semwise_marks_foil_freezed where admn_no=marks.admn_no and gpa<='$courseLowest' and cgpa<'$courseLowest')>1)";
		$query = $this->db->query($SQL);
		$result=$query->result();
		
		$val=array();
		$val['data']=$result;
		$val['topic']="Academic Probabation";
		$this->load->view('data_view',$val);
	}
	public function warning()
	{
		$course=$this->input->get('course');
		$courseLowest=($this->input->get('courseLowest'));
		$session_yr=($this->input->get('sessionyr'));
		$session=($this->input->get('session'));
		$SQL="select (first_name) as NAME,marks.dept,marks.course,marks.branch,admn_no,marks.session_yr,marks.session,marks.semester,marks.actual_published_on,cgpa,gpa,marks.status from final_semwise_marks_foil_freezed marks join emaildata on (marks.admn_no=emaildata.admission_no) where session_yr='$session_yr' and session='$session'  and ((gpa<'$courseLowest' and cgpa>='$courseLowest') or (gpa>'$courseLowest' and cgpa<'$courseLowest') or ((gpa<='$courseLowest' and cgpa<'$courseLowest') and (select count(*) from final_semwise_marks_foil_freezed where admn_no=marks.admn_no and gpa<='$courseLowest' and cgpa<'$courseLowest')=1))";
		$query = $this->db->query($SQL);
		$result=$query->result();
		
		$val=array();
		$val['data']=$result;
		$val['topic']="Warning";
		$this->load->view('data_view',$val);
	}
	public function terminated()
	{
		$course=$this->input->get('course');
		$courseLowest=($this->input->get('courseLowest'));
		$session_yr=($this->input->get('sessionyr'));
		$session=($this->input->get('session'));
		$prevsession;
		$prevsession_yr;
		if($session=="Winter"){
			$prevsession_yr=$session_yr;
			$prevsession="Monsoon";
		}
		else{
			$prevsession="Winter";
			$startyr="";
			$endyr="";
			$startyr=$startyr.($session_yr[0]).($session_yr[1]).($session_yr[2]).($session_yr[3]);
			$endyr=$endyr.($session_yr[5]).($session_yr[6]).($session_yr[7]).($session_yr[8]);
			$x=(int)($startyr)-1;
			$y=(int)($endyr)-1;
			$prevsession_yr="";
			$prevsession_yr=$prevsession_yr.(strval($x)).("-").(strval($y));
		}
		$SQL="select (first_name) as NAME,marks.dept,marks.course,marks.branch,admn_no,marks.session_yr,marks.session,marks.semester,marks.actual_published_on,cgpa,gpa,marks.status from final_semwise_marks_foil_freezed marks join emaildata on (marks.admn_no=emaildata.admission_no) where session_yr='$session_yr' and session='$session'  and ((gpa<='$courseLowest' and cgpa<'$courseLowest') and (select count(*) from final_semwise_marks_foil_freezed where admn_no=marks.admn_no and session_yr='$prevsession_yr' and session='$prevsession'  and gpa<='$courseLowest' and cgpa<'$courseLowest')>0)";
		$query = $this->db->query($SQL);
		$result=$query->result();
		
		$val=array();
		$val['data']=$result;
		$val['topic']="Terminated";
		$this->load->view('data_view',$val);
	}
}
