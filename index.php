<html>
<body>
	<div class = "phpCoding">
		<?php include 'header.php';?>
		<section class = "mainContent">
			Hello I am Araf Hasan, This is my site which is basically use to store Phonenumbers....!!!

			<?php include 'form.php';?>
			<?php
		//----------------------Tutorial-16(autoload_function)-------------------
			// include "Classes/Ruby.php";
			// $ruby = new Ruby();
			// $ruby->print();

			// include "Classes/Java.php";
			// $java = new Java();
			// $java->print();

			// include "Classes/Php.php";
			// $php = new Php();
			// $php->print();

			// function __autoload($class_name){
			// 	echo $class_name;
			// 	include "Classes/".$class_name.".php";
			// }

			// spl_autoload_register(function ($class_name){
			// 	echo $class_name;
			// 	include "Classes/".$class_name.".php";
			// });

			// 	$java = new Java();
			// 	$java->print();

			// 	$php = new Php();
			// 	$php -> print();

			// 	$ruby = new Ruby();
			// 	$ruby -> print();

	//------------------ Tutorial - 17(Method_Chaining)-----------------------------
			// spl_autoload_register(function ($class_name){
			// 	include "Classes/".$class_name.".php";
			// });

			// $php = new Php();
			// $java = new Java();
			// $x = new Cal();

			// $x->getValue(3.58, 5.80)->getResult();

	//----------------------Tutorial - 18 (Type Hinting)-----------------------------
			
			// spl_autoload_register(function ($class_name){
			// 	include "Classes/".$class_name.".php";
			// });

			// $cal = new TypeHinting();

			// $nums = array(
			// 	array("Number One: ",10, 4),
			// 	array("Number Two: ", 12, 8),
			// );

			// $cal->getValues($nums);


			// $php = new Php();

			// new Java($php);

		// ----------------------------Tutorial - 19 (Object Iterator)------------------------------
			// spl_autoload_register(function ($class_name){
			// 	include "Classes/".$class_name.".php";
			// });
			// $person = new Person();
			// foreach ($person as $key => $info) {
			// 	echo "<pre>";
			// 	echo "$key => $info";
			// 	echo "<pre/>";
			// }

			// $person -> innerClass();

		// -------------------------------Tutorial - 20 (Trait)-----------------------

			// trait Java{
			// 	public function javaCoder(){
			// 		echo "I love Java </br>";
			// 	}
			// }

			// trait Php{
			// 	public function phpCoder(){
			// 		echo "I love Php </br>";
			// 	}
			// }

			// trait JavaPhp{
			// 	use Java, Php;
			// }

			// class CoderOne{
			// 	use JavaPhp;
			// }

			
			// $c1 = new CoderOne();
			// $c1->javaCoder();
			// $c1->phpCoder();

		// ---------------------------Tutorial-21 (__CLASS__ and getclass 'method')----------------
			// spl_autoload_register(function ($class_name){
			// 	include "Classes/".$class_name.".php";
			// });

			// class RubyChild extends Ruby{
			// 	public function RubyChildClass(){
			// 		echo "Child class constant and class name: ".__CLASS__."</br>";
			// 		echo "Child class function and class name: ".get_class($this)."</br>";
			// 	}

			// 	public function ourMethod(){
			// 		parent:: RubyParentClass();
			// 	}	

			// }

			// $ruby = new RubyChild();
			// $ruby->RubyParentClass();
			// echo "<hr/>";
			// $ruby->RubyChildClass();
			// echo "<hr/>";
			// $ruby->ourMethod();

		// -------------------------Tutorial-22 (Late Static Binding)------------------------
			// spl_autoload_register(function ($class_name){
			// 	include "Classes/".$class_name.".php";
			// });

			// class phpChild extends Php{

			// 	public static function test1(){
			// 		return "Kallol ";
			// 	}

			// 	public static function test2(){
			// 		return "Hasib ";
			// 	}

			// 	public static function test3(){
			// 		return "Akib ";
			// 	}
			// }

			// $php = new Php();
			// $php->frameWork();

			// $childPhp = new phpChild();
			// $childPhp->frameWork();

		// ----------------------------Tutorial - 23 (Object Cloning)------------------
			// spl_autoload_register(function ($class_name){
			// 	include "Classes/".$class_name.".php";
			// });

			// $java = new Language();
			// $java->setCat("OOP");
			// $java->setFramework("Spring");

			// echo $java->getCat()."<br/>";
			// echo $java->getFramework()."<br/>";

			// $php = $java; //here the referance copying
			// // $php = clone $java;//here we use cloe which is basically use to copy the value just.

			// $php->setCat("Structural");
			// $php->setFramework("CakePHP");

			// echo "By calling java object: ".$java->getCat()."<br/>";
			// echo "By calling java object: ".$java->getFramework()."<br/>";

			// echo "By calling php object: ".$php->getCat()."<br/>";
			// echo "By calling php object: ".$php->getFramework()."<br/>";

		//-------------Tutorial - 24 (Magic Method Cloning)---------------------
			/*spl_autoload_register(function ($class_name){
				include "Classes/".$class_name.".php";
			});

			$java = new Language2();

			$java->setCat("OOP");
			$java->setFramework("Kotlin");

			echo $java->getCat()."<br/>";
			echo $java->getFramework()."<br/>";

			$php =  clone $java;

			$php->setCat("Web");
			$php->setFramework("CakePHP");

			echo $java->getCat()."<br/>";
			echo $java->getFramework()."<br/>";
			echo "<hr/>";
			echo $php->getCat()."<br/>";
			echo $php->getFramework()."<br/>";*/

		// ---------------------------Tutorial - 25 (Array Object)------------------------
			/*$arr = array("Araf", "Hasan", "Kallol", "Jakir");
			$coding = new ArrayObject($arr);
			$iteration = $coding->getIterator();
			while($iteration->valid()){
				echo $iteration->current()."<br/>";
				$iteration->next();
			}*/

		// -------------------------Tutorial - 26 (Standered PHP Library (SPL))---------------
			/*$arr = array("HTML", "CSS", "PHP", "JAVA");
			$ai = new ArrayIterator($arr);
			$ai->append("Parl");
			$ai->append("Ruby");
			$ai->append("C#");
			$limit = new limitIterator($ai, 0, 6);
			foreach ($limit as $key => $language) {
				echo $key.$language."<br/>";
			}

			while($ai->valid()){
				echo $ai->current()."<br/>";
				$ai->next();
			}
			$ci = new cachingIterator($ai);
			foreach ($ci as $key => $value) {
				echo $value;
				if($ci->hasnext()){
					echo "||";
				}
			}*/

			/*$arr = array("C", "C#", "C++", "JAVA");
			$ai = new ArrayIterator($arr);
			foreach ($ai as $key => $language) {
				echo $key.$language."<br/>";
			}
			$ai->append("PHP");
			foreach ($ai as $key => $language) {
				echo $key.$language."<br/>";
			}
			$limit = new limitIterator($ai, 1, 3);
			foreach ($limit as $key => $language) {
				echo $key.$language."<br/>";
			}*/

		// --------------------------Tutorial - 27 (Serialize)----------------------------
			/*spl_autoload_register(function ($class_name){
				include "Classes/".$class_name.".php";
			});

			$pro = new Programming();
			$ser = serialize($pro);
			file_put_contents("programming.txt", $ser);
			echo $ser;

			$getCont = file_get_contents("programming.txt");
			$unSer = unserialize($getCont);
			echo "<pre>";
			print_r($unSer);
			echo "<pre/>";*/
		// -----------------------------Tutorial - 28 (nameSpeaces)--------------------------------
			/*spl_autoload_register(function ($class_name){
				include "Classes/".$class_name.".php";
			});*/

			/*include "Classes/Java.php";
			include "Classes/Php.php";
			include "Classes/Ruby.php";

			use araf\live\Ruby as fb;
			
			new araf\Java();
			new araf\Php();
			new fb();
			echo HTML;
			echo araf\CSS;
			araf\coding();*/

			/*include "Classes/Test.php";

			new araf\Test();
			echo Java;
			echo araf\CSS;
			araf\coding();*/
		// ----------------------Tutorial - 29 (Strategy Design Patern)-------------------------
			/*spl_autoload_register(function ($class_name){
				include "Strategy_Design_Patern/".$class_name.".php";
			});


			$user = new User();
			$msg = $user->getMsg();

			switch ($msg) {
				case 'sms':
					$obj = new SendSms();
					break;
				case 'email':
					$obj = new SendEmail();
					break;
				case 'fax':
					$obj = new SendFax();
					break;
				
				default:
					echo "No formate Selected";
					break;
			}
			$obj->notification();*/

		// --------------------------------Tutorial - 30 (Factory Design Patern)-----------------
			/*spl_autoload_register(function ($class_name){
				include "Factory_Design_Patern".$class_name.".php";
			});

			$db = new DataBase();
			$db->setDriver("mysql");
			$db->connect();*/

		// -----------------------------Tutorial - 31 (Abstract Factory Design Patern)--------------
			/*spl_autoload_register(function ($class_name){
				include "Abstract_Factory_Design_Patern/".$class_name.".php";
			});*/

		// -----------------------------Tutorial - 32 (Singleton Design Patern)-----------------
			/*spl_autoload_register(function ($class_name){
				include "Singleton_Design_Patern/".$class_name.".php";
			});

			new DataBase();
			new DataBase();
			new DataBase();
			new DataBase();*/
		// ---------------------------Tutorail - 33 (Iterator Design Patern)-----------------------

			  /*spl_autoload_register(function ($class_name){
			  	include "Iterator_Design_Patern/".$class_name.".php";
			  });

			  $posts = new Post();
			  foreach ($posts as $post) {
			  	echo $post->getTitle();
			  	echo $post->getContent();
			  	echo $post->getDate();
			  	echo $post->getAuthor();

			  	$comments = new comment($post->getComments());
			  		foreach ($comments as $comment) {
			  			echo $comment->getCommentsAuthor();
			  			echo $comment->getCommentContent();
			  		}
			  }*/
// ----------------Tutorial - 34 (Observer Design Patern)-----------
			  /*spl_autoload_register(function ($class_name){
			  	include "Observer_Design_Patern/".$class_name.".php";
			  });

			  $obj = new Observable();
			  $sk = new Skype();
			  $gt = new GTalk();
			  $s = new stdClass();
			  $obj->register($sk);
			  $obj->register($gt);
			  $obj->register($s);
			  $obj->stateChange();*/

// -------------Tutorial - 35 (Decorator Design Patern)-------------
			 /* spl_autoload_register(function ($class_name){
			  	include "Decorator_Design_Patern/".$class_name.".php";
			  });

			  $post = new Post();
			  $comment = new Comment();

			  $post->filter();
			  $comment->filter();

			  if($BBCodeEnable == false && $EmoticonEnable == false){
			  	$postContent = $post->getContent();
			  	$commentCOntent = $Comment->getContent();

			  }elseif ($BBCodeEnable == true && $EmoticonEnable == false) {
			  	$bb = new BBCodeParser($post);
			  	$postContent = $bb->getContent();

			  	$bb = new BBCodeParser($comment);
			  	$comContent = $bb->getContent();
			  }elseif ($BBCodeEnable == false && $EmoticonEnable == true) {
			  	$em = new Emoticon($post);
			  	$postContent = $em->getContent();

			  	$bb = new Emoticon($comment);
			  	$comContent = $bb->getContent();
			  }*/

// ---------------------Tutorial - 36 (Facade Design Patern)-----------------
			  /*spl_autoload_register(function ($class_name){
			  	include "Facade_Design_Patern/".$class_name.".php";
			  });

			  $fa = new Facade();

			  $fa->findApartments("Jatrabari, Dhaka","mapdiv");*/

// ---------------Tutorial - 37 (Connect To the mysqli)-------------------------

			 /* $db = new mysqli("localhost", "root", "araf.hasan", "userdata");
			  if(mysqli_connect_errno()){
			  	echo "Connection Failed...!!!";
			  	exit();
			  }else{
			  	echo "Connection Established...!!!<br/>";
			  }

			  $sql = "SELECT *FROM tbl_user";
			  $result = $db->query($sql);
			  while ($data = $result->fetch_object()) {
			  		echo $data->name."    ".$data->email."    ".$data->skill."<br/>";
			  	}*/
// ---------Tutorial - 38 (Select and UPDATE Database)-------------
			/*$db = new mysqli("localhost", "root", "araf.hasan", "vicktus");
			$sql1 = "SELECT *FROM customer";
			$result = $db->query($sql1);
		 
		 while ($data = $result->fetch_object()) {
		 	echo "---------------Information------------------<br/>";
		 	 echo "Name: ".$data->firstName." ".$data->lastName."<br/>";
			 echo "Address: ".$data->address."<br/>";
			 echo "Email: ".$data->email."<br/>";
			 echo "Home Town: ".$data->city.", ".$data->division."<br/>";
			 echo "Zip Code: ".$data->zipcode."<br/>";
			 echo "Age: ".$data->age."<br/>";
			 echo "Salary: ".$data->salary."<br/>";
		 }*/

		 /*$db = new mysqli("localhost", "root", "araf.hasan", "vicktus");
		 $sql1 = "UPDATE customer SET firstName = 'Sumaiya' WHERE id = 10";
		 $db->query($sql1);
		 $sql2 = "SELECT *FROM customer";
		 $result = $db->query($sql2);
		 while ($data = $result->fetch_object()) {
		 	echo "Name: ".$data->firstName." ".$data->lastName."<br/>";
		 }*/
//----------------Tutorail - 39 (MySql Basic Prepared Stat)---------
			/*$db = new mysqli("localhost", "root", "araf.hasan", "vicktus");
			
			if(mysqli_connect_errno()){
				echo "Connection Failed";
				exit();
			}else{
				echo "Connection Established...!!!!<br/>";
			}

			$sql = "SELECT firstName, lastName FROM customer ORDER BY 			firstName";
			$statement = $db->prepare($sql);
			$statement->execute();
			$statement->bind_result($nameOne, $nameTwo);
			while ($statement->fetch()) {
				echo $nameOne." ".$nameTwo."<br/>";
			}*/
			/*$db = new mysqli("localhost", "root", "araf.hasan", "vicktus");
			if(mysqli_connect_errno()){
				echo "Connection Failed...!!!";
			}else{
				echo "Connection Established...!!!<br/>";
			}
			$sql = "SELECT firstName, lastName, address, email, city, division, zipcode, age, salary FROM customer ORDER BY firstName";
			$stmnt = $db->prepare($sql);
			$stmnt->execute();
			$stmnt->bind_result($firstName, $lastName, $address, $email,$city, $division, $zipcode, $age, $salary);
			while ($stmnt->fetch()) {
				echo "------------Information--------------<br/>";
				echo "Name: ".$firstName." ".$lastName."<br/>";
				echo "Address: ".$address."<br/>";
				echo "Email: ".$email."<br/>";
				echo "Home Town: ".$city.", ".$division."-".$zipcode."<br/>";
				echo "Age: ".$age."<br/>";
				echo "Salary: ".$salary."<br/>";
			}*/

//------------Tutorial - 40 (Prepared statement with variable)---------
			/*$db = new mysqli("localhost", "root", "araf.hasan", "vicktus");
			if(mysqli_connect_errno()){
				echo "Connection Failed";
			}else{
				echo "Connection Esatblished...!!! <br/>";
			}
			$sql = "INSERT INTO customer(firstName, lastName, address, email, city, division, zipcode, age, salary) VALUES(?,?,?,?,?,?,?,?,?)";
			$stmnt = $db->prepare($sql);
			$stmnt->bind_param("sssssssid", $firstName,$lastName, $address, $email, $city, $division, $zipcode, $age, $salary);
			$firstName = "Lubaba";
			$lastName = "Islam";
			$address =  "Jaweleshoritola, Bogra";
			$email = "lubaba@gmail.com";
			$city = "Bogra";
			$division = "Rajshahi";
			$zipcode = "5700";
			$age = 19;
			$salary = 2100;
			$stmnt->execute();
			$stmnt->close();
			$db->close();*/
//-----------------Tutorial - 41 (BLOB with prepared statement)----------
		/*$db = new mysqli("localhost", "root", "araf.hasan", "basicinfo");
			if(mysqli_connect_errno()){
				echo "Connection Failed...!!!<br/>";
			}else{
				echo "Connection Established<br/>";
			}
			$sql = "SELECT image FROM images";
			$stmnt = $db->prepare($sql);
			$stmnt->execute();
			$stmnt->bind_result($image);*/

	//Code to show a single image
			/*$stmnt->fetch();
			header("content-type: jpg");
echo '<img src = "data: image/jpg; base64,'.base64_encode($image).'">';*/
	// code for showing all imagese
			/*header("content-type: jpg");
			while ($stmnt->fetch()) {
				echo '<img src = "data: image/jpg; base64,'.base64_encode($image).'">';
			}*/

	//Image inserting code
			/*$sql = "INSERT INTO images(image) VALUES(?)";
			$stmnt = $db->prepare($sql);
			$stmnt->bind_param("b", $image);
			$image= file_get_contents("pictur.jpg");
			$stmnt->send_long_data(0,$image);
			$stmnt->execute();*/


// -----------------Tutorial - 42(PDO PHP Data Object)--------
			/*$dsn = "mysql: bdname = basicinfo; host = localhost;";
			$user = "root";
			$pass = "araf.hasan";

			try{
				$pdo = new PDO($dsn, $user, $pass);
			}catch(PDOException $e){
				echo "Connection Failed...!!!".$e->getMessage();
			}

			$sql = "SELECT *FROM students";
			$result = $pdo->query($sql);
			foreach ($result as $value) {
				echo $value['email']."<br/>";
			}*/
//---------------------Tutorial - 43(PDO with Prepare statement)------
		// $serverName = "localhost";
		/*$userName = "root";
		$password = "araf.hasan";
		// $dbname = "vicktus";
		$dsn = "mysql:dbname=vicktus;host=localhost";

		try{
			$pdo = new PDO($dsn,$userName,$password);
			echo "Connection Established...!!!";
		}catch(PDOException $e){
			echo "Connection Failed...!!!".$e->getMessage();
		}

		$firstName = "Sadik";
		$lastName = "Khan";
		$address = "House 6, lane 2";
		$email = "munif@gmail.com";
		$city = "Bogra";
		$division = "Rajshahi";
		$zipcode = "5700";
		$age = 35;
		$salary = 2000;



		$sql = "INSERT INTO customer(firstName, lastName, address, email, city, division, zipcode, age, salary) VALUES(?,?,?,?,?,?,?,?,?)";
			$stmnt = $pdo->prepare($sql);
			$arr = array($firstName, $lastName, $address, $email, $city, $division, $zipcode, $age, $salary);
			$stmnt->execute($arr);*/
//--------------------PDO TESTING-----------------------------------
		/*$serverName = "localhost";
		$userName = "root";
		$password = "araf.hasan";
		$dbname = "mydbpdo";

		try{
			$conn = new PDO("mysql:host=$serverName;dbname=$dbname",$userName, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$stmt = $conn->prepare("INSERT INTO myguest(firstName,lastName, email) VALUES(:firstName, :lastName, :email)");
			$stmt->bindParam(':firstName',$firstName);
			$stmt->bindParam(':lastName',$lastName);
			$stmt->bindParam(':email',$email);

			//insert a row
			$firstName = "John";
			$lastName = "Doe";
			$email = "jhon@gmail.com";
			$stmt->execute();
			echo "Success";
		}catch(PDOException $e){
			echo "Error".$e->getMessage();
		}
		$conn = null;*/
//-----------Tutorial - 44 (bindValue() and bindParam())-----------
		/*$dsn = "mysql:host=localhost;dbname=userdata";
		$userName = "root";
		$password = "araf.hasan";

		try{
			$con = new PDO($dsn,$userName, $password);
			echo "Connection Established...!!! <br/>";
		}catch(PDOException $e){
			echo "Connection Failed...!!!".$e->getMessage()."<br/>";
		}
		$name = "Ivan Habib pro";
		$email = "ivan@gmail.com";
		$skill = "HTML";
		$sql = "INSERT INTO tbl_user(name, email, skill) VALUES(:name, :email, :skill)";
		$stmt = $con->prepare($sql);
		
		$stmt->bindValue(':name',$name);
		$stmt->bindValue(':email',$email);
		$stmt->bindValue(':skill',"Bloging");
		$stmt->execute();*/
//---------Tutorial - 45 (Select Data with PDO Prepared statement)----
		/*$dsn = "mysql:host=localhost;dbname=userdata";
		$user = "root";
		$password = "araf.hasan";

		try{
			$con = new PDO($dsn, $user, $password);
			echo "Connection Established...!!! <br/>";
		}catch(PDOException $e){
			echo "Connection Failed...!!!".$e->getMessage()."<br/>";
		}
		// ----Using Name_Place_Holder
		$id = 9;

		$sql = "SELECT *FROM tbl_user WHERE id= :id";
		$stmt = $con->prepare($sql);
		$stmt->execute(array(':id'=>$id));
		while ($data = $stmt->fetch()) {
			echo "Name: ".$data['name']."<br/>";
			echo "Skill: ".$data['skill']."<br/>";
			echo "Email: ".$data['email']."<br/>";
		}

		//---Without Using Name_Place_Holder
		$id1 = 8;

		$sql1 = "SELECT *FROM tbl_user WHERE id=?";
		$stmt1 = $con->prepare($sql1);
		$stmt1->execute(array($id1));
		while ($data1 = $stmt1->fetch()) {
			echo "Name: ".$data1['name']."<br/>";
			echo "Skill: ".$data1['skill']."<br/>";
			echo "Email: ".$data1['email']."<br/>";
		}

		//Using bindParam()
		//Without Name_Place_Holder
		$id2 = 7;
		$skill = "PHP";

		$sql2 = "SELECT *FROM tbl_user WHERE id=? and skill = ?";
		$stmt2=$con->prepare($sql2);
		$stmt2->bindParam(1,$id2);
		$stmt2->bindParam(2, $skill);
		$stmt2->execute();
		while ($data = $stmt2->fetch()) {
			echo "Name: ".$data['name']."<br/>";
		}

		//-----Using Name_Place_Holder
		$id3 = 6;

		$sql3 = "SELECT *FROM tbl_user WHERE id = :id";
		$stmt3 = $con->prepare($sql3);
		$stmt3->bindParam(':id',$id3);
		$stmt3->execute();
		while ($data = $stmt3->fetch()) {
			echo "Name: ".$data['name']."<br/>";
			echo "Skill: ".$data['skill']."<br/>";
			echo "Email: ".$data['email']."<br/>";
		}*/

//----------Tutorial - 46 (UPDATE DATA with PDO)---------
		/*$dsn = "mysql:host=localhost;dbname=userdata";
		$userName = "root";
		$password = "araf.hasan";

		try{
			$pdo = new PDO($dsn, $userName, $password);
			echo "Connection Established...!!!";
		}catch(PDOException $e){
			echo "Connection Failed...!!!".$e.getMessage();
		}*/

		/*$id = 1;
		$skill = "java, PHP, Physics";

		$sql = "UPDATE tbl_user SET skill = ? WHERE id = ?";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array($skill, $id));
	//---------Using Name_Place_Holder-----------------------
		$id1 = 2;
		$skill = "C++, C#";

		$sql1 = "UPDATE tbl_user SET skill = :skill WHERE id = :id";
		$stmt1 = $pdo->prepare($sql1);
		$stmt1->bindParam(':skill', $skill);
		$stmt1->bindParam(':id', $id1);
		$stmt1->execute();
	//------------Using Name_Place_Holder(bindValue method)------

		$id2 = 5;
		$skill = "Parl, JavaScript";

		$sql2 = "UPDATE tbl_user SET skill = :skill WHERE id = :id";
		$stmt2 = $pdo->prepare($sql2);
		$stmt2->bindValue(':skill', $skill);
		$stmt2->bindValue(':id', $id2);
		$stmt2->execute();
	//-------------------------Delete Operation------

		$id3 = 11;

		$sql3 = "DELETE FROM tbl_user WHERE id = ?";
		$stmt3 = $pdo->prepare($sql3);
		$stmt3->execute(array($id3));*/

//----Delete Operation Using bindParam() Method with Name_Place_holder-----
		/*$id4 = 10;

		$sql4 = "DELETE FROM tbl_user WHERE id=:id";
		$stmt4 = $pdo->prepare($sql4);
		$stmt4->bindParam(':id',$id4);
		$stmt4->execute();*/
//-Delete Operation Using bindParam() Method without Name_Place_holder--
		/*$id5 = 3;

		$sql5 = "DELETE FROM tbl_user WHERE id = ?";
		$stmt5 = $pdo->prepare($sql5);
		$stmt5->bindParam(1, $id5);
		$stmt5->execute();*/

		?>
			
		</section>
		<?php include 'footer.php'; ?> 
	</div>
</html>
</body>