<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Agregar Paca</title>

		<link rel="stylesheet" href="css/add_bales.css">

	</head>
	<body>
		<div class="apartado">
	        <p>Agregar paca</p>
	        <form method="post">
	            <div class="prendas">
	                <input type="text" required>
	                <label>Número de camisetas</label>
	            </div>
	            <div class="prendas">
	                <input type="text" required>
	                <label>Número de pantalones</label>
	            </div>
	            <input type="submit" value="Agregar">
	        </form>
	    </div>
	</body>
</html>