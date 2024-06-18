<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Historial</title>

    <link rel="stylesheet" href="../css/user/history.css">
</head>
<body>
    <header>
        <nav class="nav">
            <div class="nav_left">Usuario: </div>
            <div class="nav_right">
                <ul class="nav_menu">
                    <li class="nav_item"><a href="{{ route('Admin.Sales') }}" class="nav_link">Venta</a></li>
                    <li class="nav_item active"><a href="{{ route('Admin.History') }}" class="nav_link">Historial</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="main">
        <div class="sections">
            <section id="historial" class="side-left">
                <div class="botones-historial">
                    <button class="button2">HOY</button>
                    <button class="button2">ESTA SEMANA</button>
                    <button class="button2">ESTE MES</button>
                    <button class="button2">TODO</button>
                </div>
                <div class="space">
                    <div class="table-container2">
                        <table id="historial-table">
                            <thead class="header-table">
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Importe</th>
                                    <th>Prendas</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section id="prendas-vendidas" class="side-right">
                <h2 class="tittle2">CANTIDAD DE PRENDAS VENDIDAS</h2>
                <div class="space">
                    <div class="table-container2">
                        <table id="prendas-table">
                            <thead class="header-table2">
                                <tr>
                                    <th>Prendas</th>
                                    <th>Unidades</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>
</html>