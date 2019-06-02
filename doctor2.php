<?php
	$doctorName = $_POST["DoctorName"];
	echo "<style type='text/css'>
			.time {
			    margin: 1% 0% 0% 38%;
			    font-size: 156%;
			}
			.list {
				margin: 2% 0% 0% 41%;
			}
			.name {
				margin: 16px 0px 9px 585px;
			    font-size: 20px;
			}
			.lastname {
				margin: 16px 0px 9px 566px;
			    font-size: 20px;
			}
			.date {
				margin: 16px 0px 9px 541px;
			    font-size: 20px;
			}
			.emaile {
				margin: 16px 0px 9px 585px;
			    font-size: 20px;
			}
			.phone {
				margin: 16px 0px 9px 537px;
			    font-size: 20px;
			}
			.textarea {
				margin: 8.2656px 0px 0px 542.516px;
			    width: 125px;
			    height: 21px;
			    resize: none;
			}
			.button {
				width: 94px;
			    height: 23px;
			    margin: 4% 0% 0% 45%;
			    display: inline;
			}
			.div {
				width: 100%;
			    background-color: #a3e1ffb3;
			    margin: 4% 0% 0% 0%;
			    padding: 1% 0% 3% 0%;
		}</style>
			<div class='div'>
				<form action='doctor3.php' method='POST'>
					<input style='visibility:hidden; margin: 0% 0% 0% 92%;' name='DoctorName' value='".$doctorName."'>
					<p class='time'>Выберите время приема:</p>
					<p class='list'><input list='time' name='time'>
				 	<datalist id='time'>
						<option value='12:32'></option>
						<option value='12:38'></option>
						<option value='12:43'></option>
					</datalist></p>	
					<p class='name'>Имя</p>
					<textarea name='name' class='textarea'></textarea>
					<p class='lastname'>Фамилия</p>
					<textarea name='lastname' class='textarea'></textarea>
					<p class='date'>Дата Рождения</p>	
					<textarea name='date' class='textarea'>2001-01-01</textarea>
					<p class='emaile'>E-mail</p>
					<textarea name='e-maile' class='textarea'></textarea>
					<p class='phone'>Телефон в формате xxx-xxx:  <input type='tel' name='tel' 
   					pattern='[0-9]{3}-[0-9]{3}'></p>
				
					<button type='submit' class='button'>Подтвердить</button>
				</form>
			</div>";
	
?>https://bessarabiainform.com/wp-content/uploads/2013/08/%D0%BA%D1%80%D0%B0%D1%81-%D1%81%D1%82.png