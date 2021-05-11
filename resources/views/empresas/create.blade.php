<!DOCTYPE html>
<html>
<head>
	<title>Empresas | Crear Empresa</title>
</head>
<body>
	<h1>Crear un nuevo proyecto</h1>

	<a href="/empresas">Volver</a><br>
	<br/>

<form method="POST" action="{{ route('empresas.store') }}"> 
	@csrf {{--token--}}
	<label>
 		Nombre del proyecto:<br>
 		<input/type="text" placeholder="Nombre empresa" name="nombre" required> 
 		<small>campo obligatorio</small>
 	</label><br>
 <br>	
 	<label>
		Nuemro de empleados:<br>
   		<input/type="text" name="num_empleados"> 
	</label><br>
<br>
	<label>
		Tipo de empresa 
		<select name="tipo">
			<option>Software</option>
			<option>Retail</option>
		</select>
	</label>
<br>
<button>Guardar</button>
</form>



	
</body>
</html>

