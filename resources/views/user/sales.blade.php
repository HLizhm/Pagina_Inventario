<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta</title>
    <link rel="stylesheet" href="../css/user/history.css">
</head>
<body>
    <header>
        <nav class="nav">
            <div class="nav_left">
                <h2 class="text">Usuario: </h2>
            </div>
            <div>
                <ul class="nav_menu">
                    <li class="nav_item active"><a href="{{ route('Admin.Sales') }}" class="nav_link">Venta</a></li>
                    <li class="nav_item"><a href="{{ route('Admin.History') }}" class="nav_link">Historial</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="main">
        <div class="sections">
            <section id="sale" class="left-side">
                <div class="space-empty">
                    <div class="table-container">
                        <table id="productos-table">
                            <thead class="header-table">
                                <tr>
                                    <th>Unidades</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="options">
                    <div id="total-container">
                        <span class="total-label">Costo: </span><span id="total-cobrar">0</span>
                    </div>
                    <div class="sale-buttons">
                        <button class="button">Cobrar</button>
                        <button class="button">Eliminar producto</button>
                    </div>
                </div>
            </section>
            <section id="add_articulo" class="right-side">
                <h2 class="tittle">AÑADIR PRODUCTO</h2>
                <form id="product-form">
                    <input type="text" id="product-name" class="input" placeholder="Nombre" required>
                    <input type="number" id="product-price" class="input" name="precio" min="0" step="0.01" placeholder="Precio" required>
                    <input type="number" id="product-quantity" class="input" min="1" step="1" placeholder="Unidades" required>
                    <div class="botones">
                        <button type="submit" class="button">Añadir</button>
                    </div>
                </form>
            </section>
        </div>
    </main>

    <script>
        document.getElementById('product-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const name = document.getElementById('product-name').value;
            const quantity = parseFloat(document.getElementById('product-quantity').value);
            const price = parseFloat(document.getElementById('product-price').value);
            const total = (quantity * price).toFixed(2); // Calcula el total correcto
    
            const table = document.getElementById('productos-table').getElementsByTagName('tbody')[0];
            const newRow = table.insertRow();
    
            const quantityCell = newRow.insertCell(0);
            const nameCell = newRow.insertCell(1);
            const priceCell = newRow.insertCell(2);
            const totalCell = newRow.insertCell(3); // Nueva celda para 'total'
    
            quantityCell.textContent = quantity;
            nameCell.textContent = name;
            priceCell.textContent = price.toFixed(2);
            totalCell.textContent = total; // Asignar el total calculado a la celda 'total'
    
            // Actualizar el total a cobrar
            updateTotalCobrar();
    
            // Limpiar el formulario
            document.getElementById('product-form').reset();
        });
    
        function updateTotalCobrar() {
            const table = document.getElementById('productos-table').getElementsByTagName('tbody')[0];
            let totalCobrar = 0;
    
            for (let i = 0; i < table.rows.length; i++) {
                const row = table.rows[i];
                const total = parseFloat(row.cells[3].textContent);
                totalCobrar += total;
            }
    
            document.getElementById('total-cobrar').textContent = totalCobrar.toFixed(2);
        }
    </script>
</body>
</html>