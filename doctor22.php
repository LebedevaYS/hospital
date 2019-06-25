<?php
	if (isset($_POST["authorized"]) == true) {
	$doctorName = $_POST["DoctorName"];
	echo "<style type='text/css'>
			body {
				width: 1265px;
				min-height: 100px;
			    _height: 100px;
			    font-family: Verdana;
			    padding: 0 0px;
			}
			.time {
			    margin: 1px 0px 0px 38px;
			    font-size: 15px;
			}
			.datalist {
				width: 200px;
			}
			.list {
				margin: 9px 0px 0px 41px;
				
			}
			.name {
				margin: 30px 0px 1px 40px;
			    font-size: 15px;

			}
			.phone {
				vertical-align: top;
				display: inline-block;
				margin: 1px 0px 1px 40px;
				width: 343;
			}
			.textarea {
				margin: 0px 0px 0px 40px;
			    width: 343px;
			    height: 21px;
			    resize: none;
			}
			.button {
			  	text-decoration: none;
			    outline: none;
			    display: inline-block;
			    width: 131px;
			    height: 40px;
			    line-height: 20px;
			    border-radius: 45px;
			    margin: 73px 192px;
			    font-family: 'Montserrat', sans-serif;
			    font-size: 14px;
			    text-transform: uppercase;
			    text-align: center;
			    letter-spacing: 0px;
			    font-weight: 600;
			    color: #524f4e;
			    background: white;
			    box-shadow: 0 8px 15px rgba(0,0,0,.1);
			    transition: .3s;
			}
			.button:hover {
			  background: #2EE59D;
			  box-shadow: 0 15px 20px rgba(46,229,157,.4);
			  color: white;
			  transform: translateY(-7px);
			}
			.div1 {
				width: 1265px;
			    
			    margin: 4px 0px 0px 0px;
			    padding: 1px 0px 3px 0px;
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
			.title {
				font-size: 17px;
				margin: 32px 0px 0px 0px;
				vertical-align: top;
				display: inline-block;
			}
			.district_map {
			    position: absolute;
			    width: 468px;
			    height: 436px;
			    background: url(../img/map-district.png) 0 436px no-repeat;
			    opacity: 0;
			    filter: alpha(opacity=0);
			    transition: all .8s ease;
			}
			.personaldate {
				vertical-align: top;
				display: inline-block;
			}
			.personaldate1 {
				vertical-align: top;
				display: inline-block;
				width: 1265px;
			}
			</style>
			<div class='div1'>
				<form action='doctor3.php' method='POST'>
				<div class='personaldate1'>
				<img src='https://bessarabiainform.com/wp-content/uploads/2013/08/%D0%BA%D1%80%D0%B0%D1%81-%D1%81%D1%82.png' class='img_krest'>
					<p class='title'>ЗДОРОВЬЕ ПЕТЕРБУРЖЦА</p>
				<div class='div'>
					<div class='a'>Запись<br> к врачу</div>
					<div class='b'>Войти в<br> личный кабинет</div>
					<div class='a'>Справочник <br>учреждений</div>
					<div class='b'>Вопросы <br>и ответы</div>
				</div>
					<input style='visibility:hidden; margin: 0% 0% 0% 92%;' name='DoctorName' value='".$doctorName."'>
					</div>
					<div class='personaldate'>
					<p class='time'>Выберите время приема:</p>
					<p class='list'><input list='time' name='time'>
				 	<datalist id='time' class='datalist'>
						<option value='12:32'></option>
						<option value='12:38'></option>
						<option value='12:43'></option>
					</datalist></p>	
					<p class='name'>Имя</p>
					<textarea name='name' class='textarea' autocomplete='off'></textarea>
					<p class='name'>Фамилия</p>
					<textarea name='lastname' class='textarea' autocomplete='off'></textarea>
					<p class='name'>Дата Рождения</p>	
					<input type='date' name='date' class='textarea' autocomplete='off'>
					<p class='name'>E-mail</p>
					<input type='email' class='textarea' name='e-maile' autocomplete='off'>
					<p class='name'>Телефон в формате xxx-xxx:</p>  <input type='tel' name='tel' 
   					pattern='[0-9]{3}-[0-9]{3}' class='phone' autocomplete='off'>
					<button type='submit' class='button'>Подтвердить</button>
					</div>
					<div class='district_map'></div>
				</form>
			</div>";
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