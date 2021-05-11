<!DOCTYPE html>
<html>
<head>
	<title>EMPRESAS</title>
</head>
<body>
	<h1>Empresas</h1>

	<a href="/">Volver</a>
	</br>
	<p> está es la vista</p>
	</br>

	<a href=" {{ route('empresas.create') }} "> Crear un nuevo proyecto </a><br>

{{-- 
	<ul>
		@forelse($empresas as $value)
		
			<li><a href="{{ route('empresas.show', $value) }}"> {{ $value->nombre }} </a></li>
			<small> {{ $value->created_at->diffForHumans() }} </small><br>
		
		@empty
		
			<li> No hay proyactos </li>

		@endforelse
	</ul>
--}}


<?php 
	
	foreach ($empresas as $value) {
		echo " 
		<br>
		<li> <a href=\"".route('empresas.show', $value)."\"> Nombre del proyecto " . $value->nombre . "</a></li>    
		<small> Ultima edicion: " . $value->created_at->diffForHumans() . "</small><br>
		 
		";
	} ?>



<?php 
echo $empresas->links(); // paginación
?>

	
</body>
</html>


