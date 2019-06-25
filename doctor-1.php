<?php 
	$link = mysqli_connect("localhost", "root", "", "hospital");
	mysqli_set_charset($link,"utf8");
	$query = "SELECT `Service` FROM `generalinformation`";
	$Answer = mysqli_query($link, $query);
	
	$tableecho = "<form action='doctor.php' method='POST'><div class='top'><input style='visibility:hidden; display: block;' name='authorized' value='1'><div class='div1'>
	
	<img src='https://bessarabiainform.com/wp-content/uploads/2013/08/%D0%BA%D1%80%D0%B0%D1%81-%D1%81%D1%82.png' class='img_krest'>
	<p class='title'>ЗДОРОВЬЕ ПЕТЕРБУРЖЦА</p>
</div>
<div class='div'>
	<div class='a'>Запись<br> к врачу</div>
	<div class='b'>Войти в<br> личный кабинет</div>
	<div class='a'>Справочник <br>учреждений</div>
	<div class='b'>Вопросы <br>и ответы</div>
</div>
</div>
<div class='background'>
<div class='div2'>
	<p class='note'>Запись к врачу</p>";
					$tableecho.="<datalist id='test'>";
			while ($row = mysqli_fetch_assoc($Answer)) {
			    $tableecho.= "<option>". $row["Service"] ."</option>";		    			
			};
			$tableecho .= "
				</datalist>
				<input type='text' list='test' name='service'  class='textarea'></input><br>
				<button type='submit' class='p'>Выбрать</button></form>";
				$tableecho.="<form><p> </p></form></tr>";
				$tableecho.="</div></div>";
	$tableecho.="</div>";
		echo "<style type='text/css'>
		.p {
		  	text-decoration: none;
		    outline: none;
		    display: inline-block;
		    width: 79px;
		    height: 23px;
		    line-height: 20px;
		    border-radius: 45px;
		    margin: 20px 70px;
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
		body {
			width: 1265px;
		    min-height: 100px;
		    _height: 100px;
		    font-family: Verdana;
		    padding: 0 0px;
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
			vertical-align: top;
			display: inline-block;
			width: 375px;
			margin-left: auto;
			
		}
		.div2 {
			width: 206px;
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
			
		}
		.button {
			width: 94px;
			height: 23px;
			margin: 4px 0px 0px 45px;
			display: inline;
		}
		.note {
			font-size: 26px;
		    margin: 4px auto 0px auto;
		}
		.textarea {
			margin: 19px 9px auto;
    width: 194px;
		}
		.background {
			width: 1265px;
			margin: 4px 0px 0px 5px;
		}
		</style>";

		echo $tableecho;