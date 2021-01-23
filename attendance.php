
    <?php
    	session_start();

		$con = mysqli_connect('localhost', 'root', '', 'university');
		if (mysqli_connect_errno()){
			die('Error. Failed to connect to MySQL: '.mysqli_connect_error());
		}

		$query = 'SELECT PersonID FROM Person WHERE PersonName = \'' . $_POST['uname'] . '\' AND Pwd = \'' . $_POST['psw'] . '\';';

    	$res = mysqli_query($con, $query);

    	if(!$res){
			die('Query error: '.mysqli_error());
		}

		$row1 = mysqli_fetch_row($res);

		$sql = 'SELECT CourseID, CourseName, ClassDate, ClassTime FROM course WHERE CourseID = \''.$_SESSION["curs"].'\';';
		$result = mysqli_query($con, $sql);

		if(!$result){
			die('Query error: '.mysqli_error());
		}

		$row = mysqli_fetch_row($result);
		echo 'Your attendance has been registered for course '.$row[1].' on the date of '.$row[2].' at time '.$row[3];

		$s = 'INSERT INTO Attendance VALUES (\''.$row[0].'\', \''.$row1[0].'\');';
		$r = mysqli_query($con, $s);

    	if(!$r){
			die('Query error: '.mysqli_error());
		}
	?>