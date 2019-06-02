<?php 
	$link = mysqli_connect("localhost", "root", "", "hospital");
	mysqli_set_charset($link,"utf8");
	$service = $_POST["service"];
	$query = "SELECT `FirstName`, `LastName` FROM `doctor`, `generalinformation` WHERE `doctor`.`ServiceId` = `generalinformation`.`Id` AND `generalinformation`.`Service`='".$service."';";
	$Answer = mysqli_query($link, $query);
	$tableecho = "<div style='margin: 4% 0% 0% 0%; width: 100%; background-color: #a3e1ffb3; padding: 1% 0% 3% 40%; font-size: 20px;'>";
	$tableecho.= "<p style='margin: 2% 0% 0% 3%;
			    font-size: 110%;'>Выберите врача:</p>";
	$tableecho.= "<table>";
		while ($row = mysqli_fetch_assoc($Answer)) {
			$tableecho.="<tr>";
			$tableecho.="<form><p> </p></form>";
			$tableecho.="<form action='doctor2.php' method='POST'>"."<input style='visibility:hidden;' name='DoctorName' value='".$row["FirstName"]." ".$row["LastName"]."' >". $row["FirstName"]." ";
			$tableecho.= $row["LastName"]."<button type='submit' style='width: 94px;
		    height: 23px;
		    margin: 1% 0% 0% 2%;'>Выбрать</button></form>";
			$tableecho.="<form><p> </p></form></tr>";
			$tableecho.="</div>";
			
		};

		echo $tableecho;
	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
?>