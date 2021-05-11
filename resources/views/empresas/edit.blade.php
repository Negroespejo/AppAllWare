<!DOCTYPE html>
<html>
<head>
	<title>Empresas | Editar Empresa</title>
	<link rel="stylessheet" href=" /css/app.css">
	<script src=" {{ mix('js/app.js') }} " defer></script>
</head>
<body>
	<h1>Editar un nuevo proyecto</h1>

	<a href="/empresas">Volver</a><br>
	<br/>


{{-- validar error
	<?php
		foreach ($errors as => $value) {
			echo <li> ". $value ."</li>
		}
	?>
--}}

<h1> <?php echo $empresas->nombre?> </h1>







<form  action="{{ route('empresas.update', $empresas) }}" method="POST"> 

	@csrf {{-- Directiva BLADE para generar token--}} 


{{--VALIDACION--}}
{{--	<?php
		in(isset($_POST['nombre'])){
			$nombre = $_POST['nombre'];
			$num_empleados = $_POST['num_empleados'];
			$tipo = $_POST['tipo'];

			$campos = array();

			if ($nombre = "") {
				array_push($campos, "Ingrese un nombre");	
			}
			if ($num_empleados = "") {
				array_push($campos, "Ingrese un numero de empleados");
			}
			if ($tipo = "") {
				array_push($campos, "Ingrese el tipo");
			}

			if count(($campos) > 0) {
				echo" "<div class='error'>"
				for ($i=0; $i < count($campos) ; $i++) { 
						echo "<li>".$campos[$i].
					"</div>";
					"}	
			}	
		}
	?>	
	--}}

<?php echo "
	<a href=\"".route('empresas.edit', $empresas)."\"> Editar </a>
"?><br>
	<input type="hidden" name="_method" value="PATCH">
	<label>
 		Nombre del proyecto:<br>
 		<input/type="text" name="nombre" value=" {{ $empresas->nombre }} " required>  
 	</label><br>
 <br>	
 	<label>
		Nuemro de empleados:<br>
   		<input/type="text" name="num_empleados"  value=" {{ $empresas->num_empleados }}"> 
	</label><br>
<br>
	<label>
		Tipo de empresa 
		<select name="tipo" value=" {{ $empresas->tipo }}">
			<option>Software</option>
			<option>Retail</option>
		</select>
	</label>
<br>
<button>Actualizar</button>
</form>
</body>
</html>