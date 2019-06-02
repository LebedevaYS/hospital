<?php
	$link = mysqli_connect("localhost", "root", "", "hospital");
	mysqli_set_charset($link,"utf8");
	
	$time = $_POST["time"];
	$name = $_POST["name"];
	$lastname = $_POST["lastname"];
	$date = $_POST["date"];
	$emaile = $_POST["e-maile"];
	$phone = $_POST["tel"];
	$doctorName = $_POST["DoctorName"];

    if ($time == '12:32' || $time == '12:38' || $time == '12:43') {
        $sql = "SELECT * FROM `personaldate` WHERE `ReceptionScheduleId` = '$time' AND `DoctorId` = '$doctorName'";
		
		$result = mysqli_query($link, $sql);		
		
		$row_cnt = mysqli_num_rows($result);
		
		if ($row_cnt == 0) {
			$query="INSERT INTO `personaldate`(`FirstName`, `LastName`, `BirthDate`, `E - mail`, `Phone`, `DoctorId`, `ReceptionscheduleId`) VALUES ('".$name."','".$lastname."','".$date."','".$emaile."','".$phone."','".$doctorName."','".$time."')";
			$Answer = mysqli_query($link, $query);
			echo "Успешно";
		}else{
			echo "Время занято ";
			echo "<input type='button' value='Назад'' onclick='history.back()'>";
		}
	} else {
		echo "Выберите другое время";
		echo "<input type='button' value='Назад' onclick='history.back()'>";
		
	}
	
?>




<!-- if () {
		
	echo "<p style='background-color: #a3e1ffb3; margin: 10% 0% 0% 0%; padding: 1% 0% 1% 45%; width: 100%; font-size: 25px;'>Успешно</p>";
	} -->