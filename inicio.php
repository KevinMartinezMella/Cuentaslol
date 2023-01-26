<?php
    include 'includes/header-footer/header.php';
    include 'includes/navbar/navbar.php';
    include 'includes/carrusel/carrusel.php';
?>
<div class="container pt-5 text-center ">
    <div class="introduccion mb-5">
        <h2>Cuentas Lol: <b>Especialistas en cuentas</b></h2>
        <p class="mt-4">
            En <b>Cuentas Lol</b> somos un e-commerce especializado en venta de cuentas para <b>League of Legends</b>,
            contamos con una gran cantidad de cuentas <b>Unranked</b>, <b>Oro</b> y <b>Platino</b> al <b>mejor precio</b> del mercado.
        </p>
        <div class="pt-3">
            <button class="btn btn-danger">
                Ver Cuentas
            </button>
        </div>
    </div>
    <hr/>
    <div class="caracteristicas mt-5 mb-5">
        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Cuentas <b>Unranked</b></h3>
                    </div>
                    <div class="text-center">
                        <img class="anchoImagen" src="archivos/img/rangos/UNRANKED.png" alt="Icono Unranked">
                    </div>
                    <div class="card-body">
                        <p><b>
                            Cuentas de Nivel 30+, nunca rankeadas, con 40.000+ de escencia azul para que tengas un nuevo comienzo en
                            los campos de la justicia. SIn riesgo de baneos. Email sin verificar. Listas para rankear.
                        </b></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-block btn-info">Ver Cuentas Unranked</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Cuentas <b>Oro</b></h3>
                    </div>
                    <div class="text-center">
                        <img class="anchoImagen" src="archivos/img/rangos/GOLD.png" alt="Icono Oro">
                    </div>
                    <div class="card-body">
                        <p><b>
                            Cuentas rankeadas en elo oro, cada una es distinta, alcanza tus recompensas de final de temporada seleccionando
                            esta opcion. La skin victoriosa te espera, la cuenta es toda tuya. Email sin verificar.
                        </b></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-block btn-info">Ver Cuentas Oro</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Cuentas <b>Platino</b></h3>
                    </div>
                    <div class="text-center">
                        <img class="anchoImagen" src="archivos/img/rangos/PLATINUM.png" alt="Icono Platino">
                    </div>
                    <div class="card-body">
                        <p><b>
                            Cuentas rankeadas en elo Platino, alcanza tus recompensas de final de temporada
                            y ese marco de color cyan tan anhelado. cuentas con poco stock, compra la tuya. Email sin verificar.
                        </b></p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-block btn-info">Ver Cuentas Platino</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="precios mt-5">
        <h1 class="mb-5">Precios</h1>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Rango</th>
                                <th>Características</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tr-ancho">
                                    <img class="logo-tabla" src="archivos/img/rangos/UNRANKED.png" alt="">
                                </td>
                                <td class="text-center td-centro p-3">
                                    <ul>
                                        <li class="noLista">+40K Esencia Azul</li>
                                        <li class="noLista">Fresh MMR</li>
                                        <li class="noLista">Email sin confirmar</li>
                                    </ul>
                                </td>
                                <td class="td-centro pt-3">
                                    $3.000 CLP 
                                    <br>/ 3.74 USD
                                </td>
                            </tr>
                            <tr>
                                <td class="tr-ancho">
                                    <img class="logo-tabla" src="archivos/img/rangos/GOLD.png" alt="">
                                </td>
                                <td class="text-center td-centro p-3">
                                    <ul>
                                        <li class="noLista">Esencia Azul según cuenta</li>
                                        <li class="noLista">Cuentas sin Rango anterior</li>
                                        <li class="noLista">Email sin confirmar</li>
                                    </ul>
                                </td>
                                <td class="td-centro pt-3">
                                    $6.000 CLP 
                                    <br>/ 7.47 USD
                                </td>
                            </tr>
                            <tr>
                                <td class="tr-ancho">
                                    <img class="logo-tabla" src="archivos/img/rangos/PLATINUM.png" alt="">
                                </td>
                                <td class="text-center td-centro p-3">
                                    <ul>
                                        <li class="noLista">Esencia Azul según cuenta</li>
                                        <li class="noLista">Cuentas sin Rango anterior</li>
                                        <li class="noLista">Email sin confirmar</li>
                                    </ul>
                                </td>
                                <td class="td-centro pt-3">
                                    $10.000 CLP 
                                    <br>/ 12.45 USD
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include 'includes/header-footer/footer.php';
?>