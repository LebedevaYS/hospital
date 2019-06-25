<?php 
	
	if (isset($_POST["authorized"]) == true) {
		$link = mysqli_connect("localhost", "root", "", "hospital");
	mysqli_set_charset($link,"utf8");
	$service = $_POST["service"];
	$query = "SELECT `FirstName`, `LastName` FROM `doctor`, `generalinformation` WHERE `doctor`.`ServiceId` = `generalinformation`.`Id` AND `generalinformation`.`Service`='".$service."';";
	$Answer = mysqli_query($link, $query);
		
	$tableecho = "<form action='doctor22.php' method='POST'><input style='visibility:hidden; display: block;' name='authorized' value='1'><img src='https://bessarabiainform.com/wp-content/uploads/2013/08/%D0%BA%D1%80%D0%B0%D1%81-%D1%81%D1%82.png' class='img_krest'>
			<p class='title'>ЗДОРОВЬЕ ПЕТЕРБУРЖЦА</p>
		<div class='div'>
			<div class='a'>Запись<br> к врачу</div>
			<div class='b'>Войти в<br> личный кабинет</div>
			<div class='a'>Справочник <br>учреждений</div>
			<div class='b'>Вопросы <br>и ответы</div>
		</div>
		<div>";
	$tableecho.= "<div class='div1'><p style='margin: 4px auto 0px auto;
			    font-size: 22px; width: 196px;'>Выберите врача:</p>";
	$tableecho.= "<table>";
		while ($row = mysqli_fetch_assoc($Answer)) {
			$tableecho.="<tr>";
			$tableecho.="<form><p> </p></form>";
			$tableecho.="<input style='visibility:hidden; display: block;' name='DoctorName' value='".$row["FirstName"]." ".$row["LastName"]."' ><p class='name'>". $row["FirstName"]." ";
			$tableecho.= $row["LastName"]."</p><button type='submit' class='p'>Выбрать</button></form>";
			$tableecho.="<form><p> </p></form></tr>";
			$tableecho.="</div></div>";
			
		};
		$tableecho.="<style type='text/css'>
		.p {
		  	text-decoration: none;
		    outline: none;
		    display: inline-block;
		    width: 79px;
		    height: 23px;
		    line-height: 20px;
		    border-radius: 45px;
		    margin: 0px 15px;
		    font-family: 'Montserrat', sans-serif;
		    font-size: 9px;
		    text-transform: uppercase;
		    text-align: center;
		    letter-spacing: 0px;
		    font-weight: 600;
		    color: #524f4e;
		    background: white;
		    box-shadow: 0 8px 15px rgba(0,0,0,.1);
		    transition: .3s;
		}
		.p:hover {
		  background: #2EE59D;
		  box-shadow: 0 15px 20px rgba(46,229,157,.4);
		  color: white;
		  transform: translateY(-7px);
		}x
		body {
			width: 1265px;
		    min-height: 100px;
		    _height: 100px;
		    font-family: Verdana;
		    padding: 0 0px;	
		}
		.name {
			margin: 0px 0px 0px 0px;
		    vertical-align: top;
		    display: inline-block;
				}
		.img_krest {
			width: 134px;
			margin: 0px 0px 0px 0px;
			vertical-align: top;
			display: inline-block;
		}
		.div {
			vertical-align: top;
		    display: inline-block;
		    margin: 4px 0px 0px 12px;
		    width: 567px;
		    font-size: 100px;
		    margin-right: auto;
		    float: right;
		    display: flex;
		    justify-content: flex-end;
		}
		.div1 {
			width: 296px;
			margin-left: auto;
			margin-right: auto;
			vertical-align: top;
			margin: 90px auto 0px auto;
			padding: 52px 75px 52px 75px;
			background-color: #00000005;
			border: 2px solid;
			border-color: #0000003d;
			border-radius: 23px 23px 23px 23px;
		}
		.title {
			font-size: 17px;
			margin: 32px 0px 0px 0px;
			vertical-align: top;
			display: inline-block;
		}
		.a {
			font-size: 17px;
		    background-color: #4145a5;
		    padding: 14px 20px 14px 20px;
		    margin: 0px -0px 0px 0px;
		    vertical-align: top;
		    display: inline-block;
		    color: white;
		    text-align: left;
			
		}
		.b {
			font-size: 17px;
		    background-color: #4145a5c4;
		    padding: 14px 20px 14px 20px;
		    margin: 0px 0px 0px 0px;
		    vertical-align: top;
		    display: inline-block;
		    color: white;
			
		}";

		echo $tableecho;
	} else {
		
			echo "<form action='doctor-1.php' method='POST'>
			<p>Вам нужно пройти на начальную страницу</p>
							<button type='submit' class='p'>Перейти</button>
					</form><style type='text/css'>
					body {
						width: 1265px;
    					min-height: 100px;
					}
					.p {
				  	text-decoration: none;
				    outline: none;
				    display: inline-block;
				    width: 79px;
				    height: 23px;
				    line-height: 20px;
				    border-radius: 45px;
				    margin: -11px 596px;
				    font-family: 'Montserrat', sans-serif;
				    font-size: 9px;
				    text-transform: uppercase;
				    text-align: center;
				    letter-spacing: 0px;
				    font-weight: 600;
				    color: #524f4e;
				    background: white;
				    box-shadow: 0 8px 15px rgba(0,0,0,.1);
				    transition: .3s;
					}
					.p:hover {
					  background: #2EE59D;
					  box-shadow: 0 15px 20px rgba(46,229,157,.4);
					  color: white;
					  transform: translateY(-7px);
					}
					p {
						font-size: 16px;
						font-family: 'Montserrat', sans-serif;
						margin: 42px 473px;
					}</style>";
	}
	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
?> 	