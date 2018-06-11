<?php include('head.php') ?>
<?php include('header.php') ?>
<main role="main" class="body-log main2">
		<div class="container">
			<div class="center-block pad-10">
	        <form class="backColor-purple margin-15 pad-10" action="index.html" method="post">
	        	<h2 class="text-center text-uppercase bg-white">Registrate</h2>
	        	<p class="text-center bg-white">Ingresa los datos requeridos:</p>
	        	<hr>
	        	<div class="row">
	        		<div class="col-lg-6">
	        			<h3 class="text-center bg-white">Nombre(s)</h3>
	          			<input class="center-block text-center w-75" type="text" name="" value="" placeholder="Ej:Aurora Alma" required="Por favor llena este campo.">
	        		</div>
	        		<div class="col-lg-6">
	        			<h3 class="text-center bg-white">Apellidos(s)</h3>
	          			<input class="center-block text-center w-75" type="text" name="" value="" placeholder="Ej:Ortega Hernández" required="Por favor llena este campo.">
	        		</div>
	        	</div>
	        	<div class="row">
	        		<div class="col-lg-4 center-block bg-white">
	        			<fieldset>
	        				<h3 class="text-center bg-white">¿Eres estudiante?</h3>
	        				<center>
		        				<input type="radio" name="opcion" value="si" required="Seleccione una opción">Sí
						  		<input type="radio" name="opcion" value="no">No
					  		</center>
	        			</fieldset>
	        			
	        		</div>
	        		<div class="col-lg-4">
	        			<h3 class="text-center bg-white">Institución</h3>
	          			<select class="center-block w-50">
	          				<option value="UPMH">UPMH</option>
	          				<option value="UAH">UAH</option>
	          				<option value="Poli">Politécnico</option>
	          				<option value="Poli">Otra</option>
	          			</select>
	        		</div>
	        		<div class="col-lg-4">
	        			<h3 class="text-center bg-white">Actividad deportiva</h3>
	          			<select class="center-block w-50">
	          				<option value="UPMH">Fútbol</option>
	          				<option value="UAH">Volevbol</option>
	          				<option value="Poli">Natación</option>
	          				<option value="Poli">Zumba</option>
	          				<option value="Poli">Otra</option>
	          			</select>
	        		</div>
	        	</div>
	          <h3 class="text-center bg-white">Captcha</h3>
	          <input class="center-block text-center w-50" type="text" name="" value="" placeholder="Introduce tu maricula. Ej: 1234567890">
	          <br>
	          <input class="center-block" type="submit" name="Enviar">
	        </form>

	      </div>
		</div>
</main>
<?php include('footer.php') ?>