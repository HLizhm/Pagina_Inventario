<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Agregar Paca</title>

		<link rel="stylesheet" href="../css/administrator/add_bales.css">

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

	    <div class="scrollable-table" id="lista-pacas">
        <table>
            <thead>
                <tr>
                    <th colspan="3">Lista de pacas</th>
                </tr>
                <tr>
                    <td>No.</td><td>Contenido</td><td>Estado</td>
                </tr>
            </thead>
            <tbody>
            	<tr>
            	    <td>1</td>
            	    <td>30 Camisetas, 20 Blusas, 20 Pantalones, 20 Shorts</td>
            	    <td>Vendido</td>
            	</tr>
            	<tr>
            	    <td>2</td>
            	    <td>40 Camisetas, 29 Blusas, 32 Pantalones, 28 Shorts</td>
            	    <td>Por vender</td>
            	</tr>
            	    <td>3</td>
            	    <td>41 Camisetas, 30 Blusas, 33 Pantalones, 29 Shorts</td>
            	    <td>Por vender</td>
            	</tr>
            	<tr>
            	    <td>4</td>
            	    <td>42 Camisetas, 31 Blusas, 34 Pantalones, 30 Shorts</td>
            	    <td>Por vender</td>
            	</tr>
            	<tr>
            	    <td>5</td>
            	    <td>43 Camisetas, 32 Blusas, 35 Pantalones, 31 Shorts</td>
            	    <td>Por vender</td>
            	</tr>
            	<tr>
            	    <td>6</td>
            	    <td>44 Camisetas, 33 Blusas, 36 Pantalones, 32 Shorts</td>
            	    <td>Por vender</td>
            	</tr>
            </tbody>
        </table>
    </div>
</body>
</html>