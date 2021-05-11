<!DOCTYPE html>
<html>
<head>
	<title>Empresas | <?php echo $empresas->nombre?></title>
</head>

<body>



<?php echo "
<a href='" . route('empresas.index') . "'>Ir a empresas</a>
"?>

<h2>Nombre: <?php echo $empresas->nombre?></h2> {{-- no muestra en pantalla la etiqueta PHP--}}

<p>Tipo de empresa: <?php echo $empresas->tipo?></p>

<p>Cantidad de empleados: <?php echo $empresas->num_empleados?></p>

<p>Fecha de cración: <?php echo $empresas->created_at?></p>

<small>Ultima edición: <?php echo $empresas->updated_at?></small>

<br>
<?php echo "
	<a href=\"".route('empresas.edit', $empresas)."\"> Editar </a>
"?>

<form method="POST" action=" {{ route('empresas.destroy', $empresas) }} ">
	@csrf
	@method('DELETE')
	<button>Eliminar</button>	
</form>


</body>


</html>



