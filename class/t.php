<?php
//error_reporting(0);
session_start();
//include "db.php";

class users{
	//db variables;
	public $host="localhost";
	public $username="root";
	public $pass="";
	public $db_name="quiz_oops";
	public $conn;
	
	//public $dbconn;
	//public $match;
	//public $data;
	//public $pro;
	//public $ques_show;
	//public $ans;
	// this is db constructer function
	
	public function __construct()
	{
		$this->dbconn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		
		if($this->dbconn->connect_errno)
		{
			die('Connect Error: ' . $this->dbconn->connect_errno);
		}
/* 		$db=new db;
		$this->dbconn=$db->conn; */
	}
	
	// this function is used for regsiteration for users
	public function signup($data)
	{
		$match=$this->conn->query($data); ?> /*"select email from register where email='$e'"*/
		//$row=$match->fetch_array();

		/*if($row[0]==$e)
		{
			$this->url("index.php?succ=already_regis");
		}
		else
		{
			//echo $f.$l.$e.$p;
			//var_dump($this->dbconn);
			$stmt=$this->dbconn->prepare("INSERT INTO register (fname,lname,email,pass) VALUES(?,?,?,?)");
			//var_dump($stmt);
			//print_r($stmt);
			$stmt->bind_param("ssss",$f,$l,$e,$p);
			$stmt->execute();
			return $this->success="Your Registration successfull";
			//print_r($stmt->num_rows);
	/* 		if($stmt->num_rows==1)
			{
				return true;
			}
			else
			{
				return false;
			} 
	  
*/	  		
	
	
	
	
	// this function is used for login for users
	/*public function login($email,$pass)
	{
		$log=$this->dbconn->query("SELECT * FROM register WHERE email='$email' AND pass='$pass'");
		$abc=$log->fetch_array(MYSQLI_ASSOC);
		//echo "<pre>";
		//print_r($abc);
 		if($log->num_rows > 0)
		{	
			$_SESSION['email']=$email;
			return true;
		}
		else
		{
			return false;
			//echo "not match";
		} 
		
	}
	
	
	//profile
	/*public function profile($em)
	{
	
		$profile=$this->dbconn->query("SELECT * FROM register WHERE email='$em'");
		$pr=$profile->fetch_object();
		$this->pro[]=$pr;
		return $this->pro;
		//print_r($pro);		
	}
	
	// session_cache_expire
	
	public function session()
	{
		if(isset($_SESSION['email']))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	// use for add category
	public function add_category($category)
	{
		$this->dbconn->query("insert into category values ('','$category')");
		
	}
	//delete category
	public function delete_category($cat_id)
	{
		$this->dbconn->query("DELETE FROM category WHERE id='$cat_id'");
		return true;
	}
	// add_quiz_questions()
	public function add_quiz_questions($query)
	{
		$this->dbconn->query($query);
		return true;
	}
	
	// show dropdown
	public function category()
	{
		$ft=$this->dbconn->query("select * from category");
		while($row=$ft->fetch_array())
		{
			$this->data[]=$row;
		   /* echo "<pre>";
			print_r($row); */
	/*	}
		return $this->data;
		//print_r($data);
	}
	
	// for showing question on admin panel
	public function question_shows()
	{
		$show=$this->dbconn->query("select * from questions");
		while($sh=$show->fetch_array())
		{
			$ques[]=$sh;
		   /* echo "<pre>";
			print_r($row); 
		}
		return $ques;
		//print_r($data);
	}
	
	//delete question
	public function delete_question($user_id)
	{
		//echo $user_id;
		$this->dbconn->query("DELETE FROM questions WHERE id='$user_id'");
		$this->url("index.php?suc=true");
	}

	//questions_show()
	public function questions_show($category_id)
	{
		$ques=$this->dbconn->query("select * from questions where cat_id='$category_id'");
		while($ft=$ques->fetch_array())
		{
			$this->ques_show[]=$ft;
		}
		return $this->ques_show;
	}

	
	// answer of question
	//public function answer($choice,$catid)
    public function answer($choice)
	{
 		$right=0;
		$wrong=0;
		$no_answer=0;
		//echo "<br>";
		//$j= implode(",",$choice);
		//print_r($choice);
		//echo "<br>"; 
		$key=array_keys($choice);
		//echo "value multiple  ->";
		//print_r($key);
		//echo "<br>";
		//echo "value join ->";
		$j=join(",",$key); 
		//echo implode(",",$key);
		//$j=join(",",$key);
		//echo "<br>";
		//echo "select id,answer from questions where id IN($j) ORDER BY FIELD(id,$j)";
		//echo "<br>";
 		$qu=$this->dbconn->query("select id,answer from questions where id IN($j) ORDER BY FIELD(id,$j)");
 		//$qu=$this->dbconn->query("select id,answer from questions where cat_id='$catid'");
 		while($ques=$qu->fetch_array())
		{	
	        //echo "database_id  ".$ques['id'].
			//echo "<br>";
	        //echo "ques_value".$_POST[$ques['id']]."=";
			//echo "ans".$ques['answer'];
			//echo "<pre>";
			//print_r($_POST[$ques['id']]);
			//echo "<br>";
			//print_r($ques['answer']);
			if($ques['answer']==$_POST[$ques['id']])
			{
				 $right++;
			}
 			elseif($_POST[$ques['id']]==5)
			{
				 $no_answer++;
			}  
  			else
			{
				$wrong++;
			}  
		}
		$result=array();
		$result['right']=$right;
		$result['wrong']=$wrong;
		$result['no_answer']=$no_answer;
		return $result;
		//return $ques;
	}
	
	

	// admin login function
	public function admin_login($email,$pass)
	{
		$log=$this->dbconn->query("SELECT * FROM quiz_admin WHERE email='$email' AND pass='$pass'");
		$abc=$log->fetch_array(MYSQLI_ASSOC);
		//echo "<pre>";
		//print_r($abc);
 		if($log->num_rows > 0)
		{	
			$_SESSION['admin']=$email;
			return true;
		}
		else
		{
			return false;
			//echo "not match";
		} 
		
	}
	
	//admin login session
	public function admin_session()
	{
		if(isset($_SESSION['admin']))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	//url for redirections
	public function url($location)
	{
		header("location:".$location);
	}
}
*/
