<?php 
	$link = mysqli_connect("localhost", "root", "", "hospital");
	mysqli_set_charset($link,"utf8");
	$query = "SELECT `Service` FROM `generalinformation`";
	$Answer = mysqli_query($link, $query);
	$tableecho = "<div>
	<img src='https://bessarabiainform.com/wp-content/uploads/2013/08/%D0%BA%D1%80%D0%B0%D1%81-%D1%81%D1%82.png' class='img_krest'>
	<p class='zagolovok'>ЗДОРОВЬЕ ПЕТЕРБУРЖЦА</p>
</div>
<div>
	<p class='a'>Запись к врачу</p>
	<p class='b'>Войти в личный кабинет</p>
	<p class='c'>Справочник учреждений</p>
	<p class='d'>Вопросы и ответы</p>
</div>
<p class='zapis'>Запись к врачу</p>";
				$tableecho.="<datalist id='test'>";
		while ($row = mysqli_fetch_assoc($Answer)) {
		    $tableecho.= "<option>". $row["Service"] ."</option>";		    			
		};
		$tableecho .= "
			</datalist>
			<input type='text' list='test' name='service'  class='textarea'></input><br>
			<button type='submit' style='width: 94px;
		    height: 23px;
		    margin: 2% 0% 0% 44%;'>Выбрать</button></form>";
			$tableecho.="<form><p> </p></form></tr>";
			$tableecho.="</div>";
		echo "<style type='text/css'>
		body {
			width: 100%;
		}
		.img_krest {
			width: 18%;
			height: 20%;
			margin: 0% 0% 0% 0%;
			vertical-align: top;
			display: inline-block;
		}
		.zagolovok {
			font-size: 90%;
			margin: 0% 0% 0% 0%;
			vertical-align: top;
			display: inline-block;
		}
		.a {
			font-size: 90%;
			background-color: #4145a5;
			padding: 0% 0% 0% 0%;
			margin: 0% 0% 0% 0%;
			vertical-align: top;
			display: inline-block;
			color: white;
		}
		.b {
			font-size: 90%;
			background-color: #4145a5c4;
			padding: 0% 0% 0% 0%;
			margin: 0% 0% 0% 0%;
			vertical-align: top;
			display: inline-block;
			color: white;
		}
		.c {
			font-size: 90%;
			background-color: #4145a5;
			padding: 0% 0% 0% 0%;
			margin: 0% 0% 0% 0%;
			vertical-align: top;
			display: inline-block;
			color: white;
		}
		.d {
			font-size: 90%;
			background-color: #4145a5c4;
			padding: 0% 0% 0% 0%;
			margin: 0% 0% 0% 0%;
			vertical-align: top;
			display: inline-block;
			color: white;
		}
		.button {
			width: 94px;
			height: 23px;
			margin: 4% 0% 0% 45%;
			display: inline;
		}
		.zapis {
			font-size: 100%;
		}</style>";

		echo $tableecho;
?>