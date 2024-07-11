@extends('template')

@section('title', 'Pos')
<meta name="csrf-token" content="{{ csrf_token() }}">

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('css/template/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template/pos.css') }}">
@endpush

@section('content')

    <div class="page-wrapper pos-pg-wrapper full-width">
        <div class="content pos-design p-0">
            {{-- <div class="btn-row d-sm-flex align-items-center">
                    <a href="javascript:void(0);" class="btn btn-secondary mb-xs-3" data-bs-toggle="modal"
                        data-bs-target="#orders"><span class="me-1 d-flex align-items-center"><i
                                data-feather="shopping-cart" class="feather-16"></i></span>Todas Las Ventas</a>
                    <a href="javascript:void(0);" class="btn btn-info"><span
                            class="me-1 d-flex align-items-center"><i data-feather="rotate-cw"
                                class="feather-16"></i></span>Recargar</a>
                    <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#recents"><span class="me-1 d-flex align-items-center"><i
                                data-feather="refresh-ccw" class="feather-16"></i></span>Transacciones</a>
                </div> --}}
            <!-- HTML para el campo de búsqueda -->
            <div class="row align-items-start pos-wrapper mt-2">
                <div class="col-md-12 col-lg-8">
                    <div class="row mb-4 align-items-center" style="margin: 10px">
                        <div class="col-md-6">
                            <!-- Campo de búsqueda estándar con botón -->
                            <div class="input-group">
                                <input type="text" id="searchInput" class="form-control"
                                    placeholder="Buscar por código o nombre">
                                <button id="buscarBtn" class="btn btn-primary" type="button">Buscar</button>
                            </div>
                        </div>
                        <div class="col-auto">
                            <!-- Switch para habilitar/deshabilitar el escáner de códigos de barras -->
                            <div class="form-check form-switch d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" id="barcodeSwitch">
                                <label class="form-check-label ms-2 mb-0" for="barcodeSwitch">Buscar por código de
                                    barras</label>
                            </div>
                        </div>
                        <!-- Contenedor para el escáner de códigos de barras (reemplazado por un input) -->
                        <div class="col-auto" id="barcodeScanner" style="display: none;">
                            <input type="text" id="scannerInput" class="form-control" placeholder="Código Escaneado">
                        </div>
                    </div>
                    <div class="pos-categories tabs_wrapper mb-12" style="margin-top: -5px">
                        <h5>Categorias</h5>
                        {{-- <p>Selecciona tus productos</p> --}}
                        <ul class="tabs owl-carousel pos-category">
                            <li id="all">
                                <h6><a href="javascript:void(0);">Todas las Categorías</a></h6>
                                <span id="totalProductos">0 Productos</span>
                            </li>
                            @foreach ($categorias as $categoria)
                                <li id="categoria-{{ $categoria->id }}" class="categoria-item"
                                    data-id="{{ $categoria->id }}">
                                    <h6><a href="javascript:void(0);">{{ $categoria->nombre }}</a></h6>
                                    <span>{{ $categoria->productos_count }} Productos</span>
                                </li>
                            @endforeach
                        </ul>


                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-3">Lista de Productos</h5>
                        </div>

                        <div class="pos-products">
                            <div class="tab_content" data-tab="headphones">
                                <div class="row">
                                    <div id="resultadoProductos">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 ps-0">
                    <aside class="product-order-list">
                        <div class="head d-flex align-items-center justify-content-between w-100">
                            <?php
                             use App\Models\Venta;
                             //use Milon\Barcode\DNS1D; 

                                // Contar el número total de ventas
                                $ventasCount = Venta::count();

                                // Generar el número de venta formateado
                                $numeroVenta = str_pad($ventasCount + 1, 6, '0', STR_PAD_LEFT);

                                // Generar el código de barras para la venta
                                //$barcode = DNS1D::getBarcodePNG($numeroVenta, 'C128', 2, 50);
                            ?>
                            <div class="d-flex align-items-center">
                                <span class="badge bg-info d-inline-block mb-0" style="color: #fff">Venta N°: #{{ $numeroVenta }}</span>
                            </div>
                            <div class>
                                <a class="confirm-text" href="javascript:void(0);"><i data-feather="trash-2"
                                        class="feather-16 text-danger"></i></a>
                                <a href="javascript:void(0);" class="text-default"><i data-feather="more-vertical"
                                        class="feather-16"></i></a>
                            </div>
                        </div>
                        <div class="customer-info block-section">
                            <h6>Agregar Cliente</h6>
                            <div class="input-block d-flex align-items-center">
                                <form class="mb-4" id="searchForm">
                                    <div class="flex-grow-1">
                                        <div class="input-group">
                                            <input type="text" id="searchInputcliente" class="form-control"
                                                name="search" placeholder="Buscar cliente...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit">Buscar</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="input-block">
                                <div id="resultsContainer" class="customer-info block-section">

                                </div>
                            </div>
                        </div>
                        <div class="product-added block-section">
                            <div class="head-text d-flex align-items-center justify-content-between">
                                <h6 class="d-flex align-items-center mb-0">Productos Agregados <span class="count">0</span>
                                </h6>

                                <a href="javascript:void(0);" class="d-flex align-items-center text-danger"><span
                                        class="me-1"><i data-feather="x" class="feather-16"></i></span>Limpiar</a>
                            </div>
                            <div class="product-wrap">

                                <div class="carrito-container">
                                    <!-- Aquí se añadirán dinámicamente los productos del carrito -->
                                </div>


                            </div>
                        </div>
                        <div class="block-section">
                            <div class="container mt-5">
                                <div class="selling-info">
                                    <div class="row justify-content-end align-items-center">
                                        <div class="col-auto">
                                            <label class="text-light bg-secondary fw-semibold">Agregar Descuento</label>
                                        </div>
                                        <div class="col-auto">
                                            <div class="qty-item d-flex align-items-center">
                                                <button type="button" class="btn btn-outline-secondary btn-sm mr-2"
                                                    id="descuento-minus" aria-label="minus">-</button>
                                                <input type="text"
                                                    class="form-control form-control-sm text-center mx-2"
                                                    id="descuento-input" name="qty" value="0"
                                                    style="width: 60px;">
                                                <button type="button" class="btn btn-outline-secondary btn-sm ml-2"
                                                    id="descuento-plus" aria-label="plus">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-total">
                                <table class="table table-responsive table-borderless">
                                    <tr>
                                        <td>Sub Total</td>
                                        <td class="text-end" id="subTotal">S/. 00.00</td>
                                    </tr>
                                    <tr>
                                        <td class="danger">Descuento</td>
                                        <td class="danger text-end" id="descuento">S/. 00.00</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td class="text-end" id="total">S/. 00,00</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="d-grid btn-block">
                            <a class="btn btn-secondary" id="total-button">
                                Seguir con la compra de : S/. 00.00
                            </a>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalCompra" tabindex="-1" aria-labelledby="modalCompraLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Método de Pago</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-7">
                            <div class="mb-3 row fw-600 fs-6">
                                <label for="p_pedido" class="col-sm-4 col-form-label d-flex justify-content-between">Total
                                    Pedido
                                    <span>S/.</span></label>
                                <div class="col-sm-4">
                                    <input type="text" readonly
                                        class="form-control-plaintext not-spin text-end fw-600 fs-6" id="p_pedido"
                                        value="0.00">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="efectivo" class="col-sm-4 col-form-label">Efectivo</label>
                                <div class="input-group-no-width col-sm-5">
                                    <!-- <input type="number" class="form-control" id="p_contado"> -->
                                    <input type="text" class="form-control calculator-input" name="efectivo"
                                        id="efectivo" value="0">
                                    <button type="button" class="btn btn-blue calculator-button"><i
                                            class="fa-solid fa-calculator"></i></button>
                                </div>
                            </div>
                            <div hidden class="mb-3 row">
                                <label for="p_credito" class="col-sm-4 col-form-label">Crédito</label>
                                <div class="input-group-no-width col-sm-5">
                                    <input disabled type="text" class="form-control calculator-input" id="p_credito"
                                        value="0">
                                    <button disabled type="button" class="btn btn-blue calculator-button"><i
                                            class="fa-solid fa-calculator"></i></button>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="yape" class="col-sm-4 col-form-label">Yape</label>
                                <div class="input-group-no-width col-sm-5">
                                    <input type="text" class="form-control calculator-input" name="yape"
                                        id="yape" value="0">
                                    <button type="button" class="btn btn-blue calculator-button"><i
                                            class="fa-solid fa-calculator"></i></button>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="plin" class="col-sm-4 col-form-label">Plin</label>
                                <div class="input-group-no-width col-sm-5">
                                    <input type="text" class="form-control calculator-input" name="plin"
                                        id="plin" value="0">
                                    <button type="button" class="btn btn-blue calculator-button"><i
                                            class="fa-solid fa-calculator"></i></button>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="deposito" class="col-sm-4 col-form-label">Depósito</label>
                                <div class="input-group-no-width col-sm-5">
                                    <input type="text" class="form-control calculator-input" name="deposito"
                                        id="deposito" value="0">
                                    <button type="button" class="btn btn-blue calculator-button"><i
                                            class="fa-solid fa-calculator"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="teclado">

                                <h6>TECLADO</h6>

                                <div class="row">
                                    <button type="button" class="design">1</button>
                                    <button type="button" class="design">2</button>
                                    <button type="button" class="design">3</button>
                                    <button type="button" class="design not" id="backspace"><i
                                            class="fa-solid fa-delete-left"></i></button>
                                </div>
                                <div class="row">
                                    <button type="button" class="design">4</button>
                                    <button type="button" class="design">5</button>
                                    <button type="button" class="design">6</button>
                                </div>
                                <div class="row">
                                    <button type="button" class="design">7</button>
                                    <button type="button" class="design">8</button>
                                    <button type="button" class="design">9</button>
                                </div>
                                <div class="row">
                                    <button type="button" class="design">0</button>
                                    <button type="button" class="design">00</button>
                                    <button type="button" class="design">.</button>
                                </div>
                                <div class="row">
                                    <button type="button" class="design not two" id="allClear">BORRAR TODO</button>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="mb-0 row fw-600 fs-6">
                                <label for="p_tpagado"
                                    class="col-sm-4 col-form-label d-flex justify-content-between">Total Pagado
                                    <span>S/.</span></label>
                                <div class="col-sm-4">
                                    <input type="text" readonly
                                        class="form-control-plaintext not-spin text-end fw-600 fs-6" name="ipagado"
                                        id="p_tpagado" value="0.00">
                                </div>
                            </div>
                            <div class="row fw-600 fs-17">
                                <label for="p_vuelto" id="text_vuelto"
                                    class="col-sm-4 col-form-label d-flex justify-content-between">Vuelto
                                    <span>S/.</span></label>
                                <div class=" col-sm-4">
                                    <input type="text" readonly
                                        class="form-control-plaintext not-spin text-end fw-600 fs-17" id="p_vuelto"
                                        value="0.00">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-end">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-blue" id="btn_realizarpago">Realizar Pago</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal para mostrar la lista de productos del carrito -->
    <div class="modal fade" id="modalCarrito" tabindex="-1" aria-labelledby="modalCarritoLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCarritoLabel">Detalle de Venta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="card-body">
                        <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto">
                            <thead class="thead-secondary">
                                <tr>
                                    <th>Num</th>
                                    <th>Imagen</th>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Subtotal Unitario</th>
                                </tr>
                            </thead>
                            <tbody id="tablaProductosCarrito">

                            </tbody>
                        </table>

                        <div class="mt-4">
                            <label for="vent_coment"
                                class="form-label text-muted text-uppercase fw-semibold">Comentario</label>
                            <textarea class="form-control alert alert-info" id="vent_coment" name="vent_coment" placeholder="Comentario"
                                rows="4" required=""></textarea>
                        </div>

                        <div class="modal-footer justify-content-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-blue" id="btn_realizarCompra">Realizar Compra</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="modal fade modal-default" id="print-receipt" aria-labelledby="print-receipt">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-end">
                <button type="button" class="close p-0" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="icon-head text-center">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('css/img/logo3.png') }}" alt
                            width="100" height="30" alt="Receipt Logo">
                    </a>
                </div>
                <div class="text-center info">
                    <h6>Dreamguys Technologies Pvt Ltd.,</h6>
                    <p class="mb-0">Phone Number: +1 5656665656</p>
                    <p class="mb-0">Email: <a
                            href="https://dreamspos.dreamstechnologies.com/cdn-cgi/l/email-protection#a2c7dac3cfd2cec7e2c5cfc3cbce8cc1cdcf"><span
                                class="__cf_email__"
                                data-cfemail="dabfa2bbb7aab6bf9abdb7bbb3b6f4b9b5b7">[email&#160;protected]</span></a>
                    </p>
                </div>
                <div class="tax-invoice">
                    <h6 class="text-center">Tax Invoice</h6>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="invoice-user-name"><span>Name: </span><span>John Doe</span></div>
                            <div class="invoice-user-name"><span>Invoice No: </span><span>CS132453</span></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="invoice-user-name"><span>Customer Id: </span><span>#LL93784</span></div>
                            <div class="invoice-user-name"><span>Date: </span><span>01.07.2022</span></div>
                        </div>
                    </div>
                </div>
                <table class="table-borderless w-100 table-fit">
                    <thead>
                        <tr>
                            <th># Item</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th class="text-end">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1. Red Nike Laser</td>
                            <td>$50</td>
                            <td>3</td>
                            <td class="text-end">$150</td>
                        </tr>
                        <tr>
                            <td>2. Iphone 14</td>
                            <td>$50</td>
                            <td>2</td>
                            <td class="text-end">$100</td>
                        </tr>
                        <tr>
                            <td>3. Apple Series 8</td>
                            <td>$50</td>
                            <td>3</td>
                            <td class="text-end">$150</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table class="table-borderless w-100 table-fit">
                                    <tr>
                                        <td>Sub Total :</td>
                                        <td class="text-end">$700.00</td>
                                    </tr>
                                    <tr>
                                        <td>Discount :</td>
                                        <td class="text-end">-$50.00</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping :</td>
                                        <td class="text-end">0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Tax (5%) :</td>
                                        <td class="text-end">$5.00</td>
                                    </tr>
                                    <tr>
                                        <td>Total Bill :</td>
                                        <td class="text-end">$655.00</td>
                                    </tr>
                                    <tr>
                                        <td>Due :</td>
                                        <td class="text-end">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Total Payable :</td>
                                        <td class="text-end">$655.00</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center invoice-bar">
                    <p>**VAT against this challan is payable through central registration. Thank you for your
                        business!</p>
                    <a href="javascript:void(0);">
                        <img src="https://dreamspos.dreamstechnologies.com/html/template/assets/img/barcode/barcode-03.jpg"
                            alt="Barcode">
                    </a>
                    <p>Sale 31</p>
                    <p>Thank You For Shopping With Us. Please Come Again</p>
                    <a href="javascript:void(0);" class="btn btn-primary">Print Receipt</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="modal fade modal-default" id="print-receipt" aria-labelledby="print-receipt">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-end">
                <button type="button" class="close p-0" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="icon-head text-center">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('css/img/logo3.png') }}" width="100" height="30" alt="Sofsas tec">
                    </a>
                </div>
                <div class="text-center info">
                    <h6>Dreamguys Technologies Pvt Ltd.,</h6>
                    <p class="mb-0">Phone Number: +1 5656665656</p>
                    <p class="mb-0">Email: <a href="mailto:sofsas@example.com">sofsas@example.com</a></p>
                </div>
                <div class="tax-invoice">
                    <h6 class="text-center">Ticket de venta</h6>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="invoice-user-name"><span>Cliente: </span><span id="receipt-cliente"></span></div>
                            <div class="invoice-user-name"><span>Documento: </span><span id="receipt-documento"></span></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="invoice-user-name"><span>Email: </span><span id="receipt-email"></span></div>
                            <div class="invoice-user-name"><span>Fecha: </span><span id="receipt-fecha"></span></div>
                        </div>
                    </div>
                </div>
                <table class="table-borderless w-100 table-fit">
                    <thead>
                        <tr>
                            <th># Productos</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th class="text-end">SubTotal</th>
                        </tr>
                    </thead>
                    <tbody id="receipt-items">
                        <!-- Aquí se llenan los productos -->
                    </tbody>
                    <tfoot>
                        <td colspan="4">
                                <tr>
                                    <td colspan="3" class="text-end">Sub Total :</td>
                                    <td class="text-end" id="receipt-subtotal">S/. 0.00</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-end">IGV (18%) :</td>
                                    <td class="text-end" id="receipt-igv">S/. 0.00</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-end">Total :</td>
                                    <td class="text-end" id="receipt-total">S/. 0.00</td>
                                </tr>
                        </td>
                    </tfoot>
                </table>
                <div class="text-center invoice-bar">
                    <p id="receipt-comentario"></p> 
                    <a href="javascript:void(0);">
                        <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($numeroVenta, 'C128', 2, 50) }}"
                        alt="${$numeroVenta}">
                    </a>
                    <p class="codigo-barras">{{ $numeroVenta }}</p>
                    <p>Gracias por comprar con nosotros, Por favor, vuelva otra vez</p>
                    <a href="javascript:void(0);" class="btn btn-primary"> Imprimir Recibo</a>
                </div>
            </div>
        </div>
    </div>
</div>









@endsection

@push('js')
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/jquery.slimscroll.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/owlcarousel/owl.carousel.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/select2/js/select2.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>

    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/sweetalert/sweetalert2.all.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/plugins/sweetalert/sweetalerts.min.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/theme-script.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/html/template/assets/js/script.js" type="f9c26173027f4618d2102fe7-text/javascript"></script>
    <script src="https://dreamspos.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="f9c26173027f4618d2102fe7-|49" defer></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quagga/dist/quagga.min.js"></script>

    <script>
        $(document).ready(function() {
            // Variable global para mantener los productos cargados
            var productos = [];

            // Variable para mantener los productos en el carrito
            var carrito = [];

            // Cargar todos los productos al inicio
            loadAllProducts();

            // Agregar un controlador de eventos de clic a los elementos <li> con la clase .categoria-item
            $('.categoria-item').on('click', function() {
                var categoriaId = $(this).data('id');
                loadProducts(categoriaId);
            });

            // Controlador de evento para el elemento "Todas las Categorías"
            $('#all').on('click', function() {
                loadAllProducts();
            });

            // Evento para el botón de búsqueda
            $('#buscarBtn').on('click', function() {
                realizarBusqueda();
            });
            // Evento para el decuento 
            $('#descuento-input').on('input', function() {
                calcularTotalCarrito();
            });

            // Evento para el switch de códigos de barras
            $('#barcodeSwitch').on('change', function() {
                if ($(this).is(':checked')) {
                    // Mostrar el contenedor del escáner de códigos de barras
                    $('#barcodeScanner').show();
                } else {
                    // Ocultar el contenedor del escáner de códigos de barras
                    $('#barcodeScanner').hide();
                }
            });

            // Función para realizar la búsqueda de productos
            function realizarBusqueda() {
                var query = $('#searchInput').val();
                var barcodeSearch = $('#barcodeSwitch').is(':checked') ? 1 : 0;

                $.ajax({
                    type: 'POST',
                    url: '{{ route('buscarProductos') }}', // Ruta a la que envías la solicitud POST
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        query: query,
                        barcodeSearch: barcodeSearch
                    },
                    dataType: 'json',
                    success: function(response) {
                        console.log(response)
                        displayProducts(response);

                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        Swal.fire({
                            icon: 'info',
                            title: 'Producto no encontrado',
                            text: 'Registrar producto',
                            html: '<div style="text-align: center;">' +
                                '<p>Por favor agrega uno.</p>' +
                                '<a style="text-align: center; width: 130px; height: 40px; "  href="{{ route('producto.create') }}" class="btn btn-primary">' +
                                'Registrar' +
                                '</a>' +
                                '</div>',
                            showCloseButton: true,
                            showConfirmButton: false
                        });
                    }
                });
            }



            // Controlador de evento para el formulario de búsqueda de clientes
            $('#searchForm').on('submit', function(event) {
                event.preventDefault();
                var search = $('#searchInputcliente').val();

                // Validar que se haya ingresado algo en el campo de búsqueda
                if (search.trim() !== '') {
                    searchClientes(search);
                } else {
                    // Mostrar mensaje de error o manejar según sea necesario
                    $('#resultsContainer').empty(); // Vaciar resultados anteriores
                    Swal.fire({
                        icon: 'warning',
                        title: 'Ingresa datos Válidos',
                        text: 'Por favor ingresa un término de búsqueda válido.'
                    });
                }
            });

            // Función para buscar clientes
            function searchClientes(search) {
                $.ajax({
                    url: '{{ route('buscarCliente') }}', // Ruta Laravel para buscar clientes
                    method: 'GET',
                    data: {
                        search: search
                    },
                    success: function(response) {
                        $('#resultsContainer').empty();
                        if (response && response.length > 0) {
                            // Tomar solo el primer cliente (el más relevante)
                            var cliente = response[0];
                            if (cliente && cliente.nombre && cliente.apellido && cliente.documento &&
                                cliente.correo) {
                                // Concatenamos nombre y apellido
                                var nombreCompleto = cliente.nombre + ' ' + cliente.apellido;
                                $('#resultsContainer').append(
                                    '<div class="form-group">' +
                                    '<label for="client-nombre-completo">Nombre Completo:</label>' +
                                    '<input type="text" id="client-nombre-completo" class="form-control" value="' +
                                    nombreCompleto + '" readonly>' +
                                    '</div>' +
                                    '<div class="form-group">' +
                                    '<label for="client-tipo_identificacion">Tipo de Documento:</label>' +
                                    '<input type="text" id="client-tipo_identificacion" class="form-control" value="' +
                                    cliente.tipo_identificacion + '" readonly>' +
                                    '</div>' +
                                    '<div class="form-group">' +
                                    '<label for="client-documento">Documento:</label>' +
                                    '<input type="text" id="client-documento" class="form-control" value="' +
                                    cliente.documento + '" readonly>' +
                                    '</div>' +
                                    '<div class="form-group">' +
                                    '<label for="client-correo">Correo:</label>' +
                                    '<input type="email" id="client-correo" class="form-control" value="' +
                                    cliente.correo + '" readonly>' +
                                    '</div>'
                                );
                            } else {
                                // Mostrar mensaje de error si el cliente encontrado no tiene todas las propiedades requeridas
                                // $('#resultsContainer').append('<p>Cliente encontrado no tiene datos válidos.</p>');
                                Swal.fire({
                                    icon: 'info',
                                    title: 'No se encontraron clientes',
                                    html: '<div style="text-align: center;">' +
                                        '<p>Por favor agrega uno.</p>' +
                                        '<a style="text-align: center; width: 130px; height: 40px; "  href="{{ route('cliente.create') }}" class="btn btn-primary">' +
                                        ' Crear Cliente' +
                                        '</a>' +
                                        '</div>',
                                    showCloseButton: true,
                                    showConfirmButton: false
                                });
                            }
                        } else {
                            // Mostrar SweetAlert2 con mensaje y botón para crear un cliente
                            Swal.fire({
                                icon: 'info',
                                title: 'No se encontraron clientes',
                                html: '<div style="text-align: center;">' +
                                    '<p>Por favor agrega uno.</p>' +
                                    '<a style="text-align: center; width: 130px; height: 40px; "  href="{{ route('cliente.create') }}" class="btn btn-primary">' +
                                    ' Crear Cliente' +
                                    '</a>' +
                                    '</div>',
                                showCloseButton: true,
                                showConfirmButton: false
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        $('#resultsContainer').empty();
                        $('#resultsContainer').append(
                            '<p>Ocurrió un error al realizar la búsqueda.</p>');
                    }
                });
            }


            // Función para cargar todos los productos
            function loadAllProducts() {
                $.ajax({
                    type: 'GET',
                    url: '/productos/todos', // Ruta a tu endpoint para obtener todos los productos
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        productos = data; // Asigna los productos al array global
                        displayProducts(productos);
                        updateTotalProductos(productos
                        .length); // Actualizar el número total de productos

                    },
                    error: function(error) {
                        console.error("Error al obtener todos los productos:", error);
                    }
                });
            }

            // Función para cargar productos por categoría
            function loadProducts(categoriaId) {
                $.ajax({
                    type: 'GET',
                    url: '/productos/categoria/' + categoriaId,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        productos = data; // Asigna los productos al array global
                        displayProducts(productos);
                        updateTotalProductos(productos
                        .length); // Actualizar el número total de productos
                    },
                    error: function(error) {
                        console.error("Error al obtener productos por categoría:", error);
                    }
                });
            }



            // Función para mostrar productos en la interfaz
            function displayProducts(products) {
                var productsHtml = '';

                products.forEach(function(product) {
                    productsHtml += `
                    <div class="col-sm-2 col-md-6 col-lg-3 col-xl-3 pe-2">
                        <div class="product-info default-cover card">
                            <a class="img-bg">
                                <img src="{{ asset('storage/product/') }}/${product.imagen}" alt="${product.nombre}">
                                <span><i data-feather="check" class="feather-16"></i></span>
                            </a>
                            <h6 class="cat-name"><a>${product.categoria.nombre}</a></h6>
                            <h6 class="product-name"><a>${product.nombre}</a></h6>
                            <div class="d-flex align-items-center justify-content-between price">
                                <span>${product.stock} UND</span>
                                <p>S/.${product.costo_venta}</p>
                            </div>
                            <button style="margin-top: 10px;" class="btn btn-primary btn-sm agregar-al-carrito" data-producto-id="${product.id}">
                            Agregar al carrito
                        </button>
                        </div>
                    </div>
                `;
                });

                $('.pos-products .row').html(productsHtml);

                // Agregar evento para el botón "Agregar al carrito"
                $('.agregar-al-carrito').on('click', function() {
                    var productId = $(this).data('producto-id');
                    // Reproducir sonido
                    var audio = new Audio('{{ asset('sound/add.mp3') }}');
                    audio.play();
                    /**************************************************/
                    agregarAlCarrito(productId);
                });

                // Actualizar íconos de Feather
                feather.replace();

                // Re-inicializar tooltips de Bootstrap
                $('[data-bs-toggle="tooltip"]').tooltip();
                // Destruir tooltips existentes
                $('[data-bs-toggle="tooltip"]').tooltip('dispose');

            }


            function agregarAlCarrito(productId) {
                // Buscar el producto en el array global de productos
                var productToAdd = productos.find(function(product) {
                    return product.id === productId;
                });

                if (productToAdd) {
                    // Verificar si el producto ya está en el carrito
                    var existingProduct = carrito.find(function(item) {
                        return item.id === productId;
                    });

                    if (existingProduct) {
                        // Si el producto ya está en el carrito, incrementar la cantidad
                        existingProduct.cantidad++;
                    } else {
                        // Si el producto no está en el carrito, agregarlo con cantidad inicial 1
                        productToAdd.cantidad = 1; // Agregar la propiedad cantidad al producto
                        carrito.push(productToAdd);
                    }

                    console.log('Producto añadido al carrito:', productToAdd);

                    // Actualizar la interfaz del carrito
                    actualizarInterfazCarrito();
                }
            }

            // Función para actualizar la interfaz del carrito
            function actualizarInterfazCarrito() {
                // Vaciar el contenido anterior del contenedor del carrito
                $('.carrito-container').empty();

                // Contador de productos en el carrito
                var totalProductos = 0;

                // Recorrer el array de productos en el carrito
                carrito.forEach(function(product) {
                    // Generar el HTML para cada producto del carrito
                    var productHtml = `
                <div class="product-list d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center product-info" data-bs-toggle="modal" data-bs-target="#products">
                        <a href="javascript:void(0);" class="img-bg">
                            <img src="{{ asset('storage/product/') }}/${product.imagen}" alt="${product.nombre}">
                        </a>
                        <div class="info">
                            <span>${product.codigo}</span>
                            <h6><a href="javascript:void(0);">${product.nombre}</a></h6>
                            <p>S/.${product.costo_venta}</p>
                        </div>
                    </div>
                    <div class="qty-item text-center">
                        <a href="javascript:void(0);" class="dec d-flex justify-content-center align-items-center"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Disminuir" data-product-id="${product.id}">
                            <i data-feather="minus-circle" class="feather-14"></i>
                        </a>
                        <input type="text" class="form-control text-center qty-input" name="qty" value="${product.cantidad}">
                        <a href="javascript:void(0);" class="inc d-flex justify-content-center align-items-center"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Aumentar" data-product-id="${product.id}">
                            <i data-feather="plus-circle" class="feather-14"></i>
                        </a>
                    </div>
                    <div class="d-flex align-items-center action">
                        <a class="btn-icon edit-icon me-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-product">
                            <i data-feather="edit" class="feather-14"></i>
                        </a>
                        <a class="btn-icon delete-icon confirm-text" href="javascript:void(0);" data-product-id="${product.id}">
                            <i data-feather="trash-2" class="feather-14"></i>
                        </a>
                    </div>
                </div>
                `;

                    // Agregar el producto al contenedor del carrito
                    $('.carrito-container').append(productHtml);

                    // Incrementar el contador de productos visibles
                    totalProductos++;
                });

                // Actualizar íconos de Feather
                feather.replace();
                // Re-inicializar tooltips de Bootstrap
                $('[data-bs-toggle="tooltip"]').tooltip();

                // Destruir tooltips existentes
                $('[data-bs-toggle="tooltip"]').tooltip('dispose');
                // Actualizar el contador de productos en la interfaz
                $('.count').text(totalProductos);

                // Agregar eventos para modificar la cantidad desde el carrito
                $('.qty-item .inc').on('click', function() {
                    var productId = $(this).data('product-id');
                    incrementarCantidad(productId);
                });

                $('.qty-item .dec').on('click', function() {
                    var productId = $(this).data('product-id');
                    decrementarCantidad(productId);
                });

                // Evento para eliminar un producto del carrito
                $('.delete-icon').on('click', function() {
                    var productId = $(this).data('product-id');
                    eliminarProductoDelCarrito(productId);
                });

                // Calcular y actualizar el total del carrito
                calcularTotalCarrito();
            }

            // Función para incrementar la cantidad de un producto en el carrito
            function incrementarCantidad(productId) {
                var product = carrito.find(function(item) {
                    return item.id === productId;
                });

                if (product) {
                    product.cantidad++;
                    actualizarInterfazCarrito();
                }
            }

            // Función para decrementar la cantidad de un producto en el carrito
            function decrementarCantidad(productId) {
                var product = carrito.find(function(item) {
                    return item.id === productId;
                });

                if (product && product.cantidad > 1) {
                    product.cantidad--;
                    actualizarInterfazCarrito();
                }
            }

            // Función para eliminar un producto del carrito
            function eliminarProductoDelCarrito(productId) {
                carrito = carrito.filter(function(product) {
                    return product.id !== productId;
                });

                actualizarInterfazCarrito();
            }


            // Función para actualizar el número total de productos mostrado
            function updateTotalProductos(total) {
                $('#totalProductos').text(total + ' Productos');
            }


            // Función para mostrar el modal con los detalles de la compra
            function mostrarModalCompra() {
                // Obtener el valor del total desde el botón
                var totalText = $('#total-button').text();
                var match = totalText.match(/S\/\. ((?:\d+\.\d+)|(?:0\.00))/);
                //VERIFICA SI HAY PRODUCTOS RECIEN TE MUESTRA EL MODAL
                if (!match) {
                    // Reproducir sonido
                    var audio = new Audio('{{ asset('sound/error.mp3') }}');
                    audio.play();
                    /**************************************************/
                    Swal.fire({
                        title: "Error",
                        text: 'No se pudo obtener el total de la compra.',
                        icon: "error",
                        timer: 2000,
                        showConfirmButton: false
                    });
                    return;
                }

                var total = match[1];

                // Verificar si el total es "0.00"
                if (parseFloat(total) === 0) {
                    // Reproducir sonido
                    var audio = new Audio('{{ asset('sound/error.mp3') }}');
                    audio.play();
                    /**************************************************/
                    Swal.fire({
                        title: "No Tienes productos agregados",
                        text: 'La Venta no puede ser 0.',
                        icon: "warning",
                        timer: 2000,
                        showConfirmButton: false
                    });
                    return;
                }

                // Actualizar el valor del input en el modal
                $('#p_pedido').val(total);

                // Abrir el modal de compra si todo está correcto
                $('#modalCompra').modal('show');
            }


            // Evento click en el botón total-button para mostrar el modal
            $('#total-button').on('click', function() {

                mostrarModalCompra();
            });

            // Función para calcular el total del carrito
            function calcularTotalCarrito() {
                var subTotal = 0;
                carrito.forEach(function(product) {
                    subTotal += product.costo_venta * product.cantidad;
                });

                // Obtener el descuento desde el input, asegurando que sea un número y manejando NaN
                var descuentoPorcentaje = parseFloat($('#descuento-input').val()) || 0;
                var descuento = (subTotal * descuentoPorcentaje) / 100;
                var total = subTotal - descuento;

                $('#subTotal').text('S/. ' + subTotal.toFixed(2));
                $('#descuento').text('S/. ' + descuento.toFixed(2));
                $('#total').text('S/. ' + total.toFixed(2));

                // Actualizar el texto del botón con el total
                $('#total-button').text('Seguir con la compra de : S/. ' + total.toFixed(2));
                $('#totalpagar').val(total.toFixed(2));
            }

            $('#descuento-plus').on('click', function() {
                var descuentoInput = $('#descuento-input');
                var descuento = parseFloat(descuentoInput.val()) || 0;
                descuentoInput.val(descuento + 1);
                calcularTotalCarrito();
            });

            $('#descuento-minus').on('click', function() {
                var descuentoInput = $('#descuento-input');
                var descuento = parseFloat(descuentoInput.val()) || 0;
                if (descuento > 0) {
                    descuentoInput.val(descuento - 1);
                }
                calcularTotalCarrito();
            });



            /* ---------------------------------------------------------------- */
            //                    FUNCION FORMATO NUMEROS

            function formatNumber(number) {
                var parts = number.toFixed(2).split(".");
                parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                return parts.join(".");
            }

            /* ---------------------------------------------------------------- */
            //                   FUNCIONES INPUT METODO PAGO

            let currentInput = null;

            // Al hacer clic en un boton de la calculadora, se enfoca en el input correspondiente.
            $(".calculator-button").click(function() {
                // Encuentra el input relacionado al botón clickeado.
                const inputId = $(this).siblings(".calculator-input").attr("id");
                currentInput = $("#" + inputId);

                // Coloca el foco en el input.
                currentInput.focus();
            });

            $(".calculator-input").click(function() {
                currentInput = $(this);
            });

            /* ---------------------------------------------------------------- */
            //                       FUNCIONES TECLADO

            $(".design").click(function() {
                // console.log('this', $(this).text());

                // console.log('cuurr', currentInput.val());
                if (currentInput) {
                    const buttonText = $(this).text();
                    const inputValue = currentInput.val();

                    if (inputValue == 0) {
                        currentInput.val(buttonText);

                    } else if (buttonText === "." && inputValue.includes(".")) {
                        // Evitar agregar más de un punto decimal.
                        currentInput.val(inputValue);

                    } else {
                        // currentInput.val(inputValue + buttonText);
                        // Controlar la cantidad de decimales permitidos.
                        const decimalIndex = inputValue.indexOf(".");
                        if (decimalIndex !== -1 && inputValue.length - decimalIndex > 2) {
                            // Si ya hay dos decimales, no permitir más.
                            currentInput.val(inputValue);
                        } else {
                            currentInput.val(inputValue + buttonText);
                        }
                    }

                    calcularPago();
                }

            });

            //Backspace
            $('#backspace').click(function() {

                if (currentInput) {
                    var value = currentInput.val();
                    if (!(parseInt(parseFloat(value)) == 0 && value.length == 1)) {
                        currentInput.val(value.slice(0, value.length - 1));
                    }
                    if (value.length == 1 || value.length == 0) {
                        currentInput.val("0");
                    }
                    calcularPago();
                }

            });

            // All Clear
            $("#allClear").click(function() {
                // $("#expression").val("0");
                // $("#result").val("0");
                if (currentInput) {
                    currentInput.val("0");

                    calcularPago();
                }
            });

            /* ---------------------------------------------------------------- */
            //                    MOSTRAR MODAL METODO DE PAGO

            $('#btn_metodopago').click(function() {

                var totalpedido = $('#totalpagar').val().replace(',', '');
                //Llena el tipo de pago
                $('#p_pedido').val(totalpedido);
                $('#efectivo').val(parseFloat(totalpedido).toFixed(2));

                setTimeout(function() {
                    $('#efectivo').focus();
                }, 500);

                currentInput = $('#efectivo');
                calcularPago();

            })


            /* ---------------------------------------------------------------- */
            //                      FUNCION CALCULAR PAGO

            // Variable global para almacenar los datos del método de pago
            var metodoPago = {};

            function calcularPago() {

                var p_pedido = parseFloat($('#p_pedido').val());

                var efectivo = parseFloat($('#efectivo').val());
                // var p_credito = parseFloat( $('#p_credito').val() || 0 );

                var yape = parseFloat($('#yape').val() || 0);
                var plin = parseFloat($('#plin').val() || 0);

                var deposito = parseFloat($('#deposito').val() || 0);

                var totalpagado = efectivo + yape + plin + deposito;

                $('#p_tpagado').val(formatNumber(totalpagado));

                var totalvuelto = 0;

                totalvuelto = totalpagado - p_pedido

                if (totalpagado > p_pedido) {

                    $('#text_vuelto').html('Vuelto <span>S/.</span>');
                    $('#text_vuelto').css('color', 'green');
                    $('#p_vuelto').css('color', 'green');

                } else if (totalpagado == p_pedido) {

                    $('#text_vuelto').html('Completo <span>S/.</span>');
                    $('#text_vuelto').css('color', 'blue');
                    $('#p_vuelto').css('color', 'blue');

                } else {

                    totalvuelto = p_pedido - totalpagado

                    $('#text_vuelto').html('Falta <span>S/.</span>');
                    $('#text_vuelto').css('color', 'red');
                    $('#p_vuelto').css('color', 'red');
                }

                // console.log('vuelto1', totalvuelto);
                $('#p_vuelto').val(formatNumber(totalvuelto));

                // Almacenar los datos del método de pago en la variable global
                metodoPago = {
                    efectivo: efectivo > 0 ? efectivo : undefined,
                    yape: yape > 0 ? yape : undefined,
                    plin: plin > 0 ? plin : undefined,
                    deposito: deposito > 0 ? deposito : undefined
                };


                // Retornar true si el pago es suficiente, false si falta o es incorrecto
                return totalpagado >= p_pedido;


            }

            /* ---------------------------------------------------------------- */
            //                   EVENTO INPUT CALCULAR PAGO

            $('.calculator-input').on('input', calcularPago);

            /* ---------------------------------------------------------------- */
            //                  LIMPIAR MODAL METODO DE PAGO
            //// Limpia el método de pago cuando el modal se oculta
            function limpiarMetodoPago() {

                $('#p_pedido').val(0);

                $('#efectivo').val(0);
                $('#yape').val(0);
                $('#plin').val(0);
                $('#deposito').val(0);

                $('#p_tpagado').val(0);

                $('#text_vuelto').html('Vuelto <span>S/.</span>');
                $('#p_vuelto').val(0);

            }
            /* ---------------------------------------------------------------- */
            //                     CERRAR MODAL METODO DE PAGO

            $('#modalCompra').on('hidden.bs.modal', function() {
                limpiarMetodoPago();
            });


            $('#btn_realizarpago').on('click', function() {


                // Calcular el pago y verificar si es suficiente
                var pagoSuficiente = calcularPago();

                // Si el pago es suficiente, mostrar el modal de carrito
                if (pagoSuficiente) {
                    //Se Cierra el modal anterior
                    $('#modalCompra').modal('hide');
                    // Limpiar tabla de productos en el modal de carrito
                    $('#tablaProductosCarrito').empty();

                    var subtotal = 0;
                    var descuento = 0; // Inicializar el descuento en 0
                    var igv = 0; // Inicializar el IGV en 0
                    var total = 0;

                    // Recorrer el carrito para construir las filas de la tabla
                    carrito.forEach(function(product, index) {
                        var costoVenta = parseFloat(product.costo_venta);
                        if (!isNaN(costoVenta)) {
                            costoVenta = costoVenta.toFixed(2);
                        } else {
                            costoVenta = '0.00'; // O un valor por defecto
                        }
                        var subtotalUnitario = (costoVenta * product.cantidad).toFixed(2);
                        subtotal += parseFloat(subtotalUnitario);

                        var filaHtml = `
                        <tr>
                            <td>${index + 1}</td>
                            <td><img src="{{ asset('storage/product/') }}/${product.imagen}" alt="${product.nombre}" style="width: 50px;"></td>
                            <td>${product.codigo}</td>
                            <td style="max-width: 500px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">${product.nombre}</td>
                            <td>S/. ${costoVenta}</td>
                            <td class="text-center">${product.cantidad}</td>
                            <td class="text-end">S/. ${subtotalUnitario}</td>
                        </tr>
                    `;
                        $('#tablaProductosCarrito').append(filaHtml);
                    });

                    // Obtener el descuento desde el input, asegurando que sea un número y manejando NaN
                    var descuentoPorcentaje = parseFloat($('#descuento-input').val()) || 0;
                    descuento = (subtotal * descuentoPorcentaje) / 100;

                    // Subtotal antes de aplicar descuento (costo_venta * cantidad de cada producto)
                    var subtotalSinDescuento = 0;
                    carrito.forEach(function(product) {
                        var costoVenta = parseFloat(product.costo_venta);
                        subtotalSinDescuento += costoVenta * product.cantidad;
                    });

                    // Aplicar el descuento al subtotal calculado con costo_venta
                    subtotal -= descuento;

                    // Calcular el IGV (18% del subtotal antes de aplicar el descuento)
                    igv = subtotal * 0.18;

                    // Calcular el total (subtotal + IGV)
                    total = subtotal;

                    // Agregar filas de subtotal, descuento, IGV y total al final de la tabla
                    $('#tablaProductosCarrito').append(`
                    <tr>
                        <td colspan="6" class="text-end">Sub Total</td>
                        <td class="text-end">S/. ${subtotalSinDescuento.toFixed(2)}</td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-end text-danger">Descuento</td>
                        <td class="text-end text-danger">S/. ${descuento.toFixed(2)}</td>
                    </tr>
                    <tr>
                        <td colspan="6" class="text-end">IGV (18%)</td>
                        <td class="text-end">S/. ${igv.toFixed(2)}</td>
                    </tr>
                    <tr class="border-top border-top-dashed fs-15">
                        <th scope="row" colspan="6" class="text-end"><h3>Total</h3></th>
                        <th class="text-end"><h1>S/. ${total.toFixed(2)}</h1></th>
                    </tr>
                `);

                    // Mostrar el modal de carrito
                    $('#modalCarrito').modal('show');
                } else {
                    // Reproducir sonido
                    var audio = new Audio('{{ asset('sound/error.mp3') }}');
                    audio.play();
                    /**************************************************/
                    // Calcular cuánto falta para completar el pago
                    var totalPedido = parseFloat($('#p_pedido').val());
                    var efectivo = parseFloat($('#efectivo').val() || 0);
                    var yape = parseFloat($('#yape').val() || 0);
                    var plin = parseFloat($('#plin').val() || 0);
                    var deposito = parseFloat($('#deposito').val() || 0);
                    var totalPagado = efectivo + yape + plin + deposito;
                    var falta = totalPedido - totalPagado;

                    // Mostrar mensaje de error con cantidad que falta
                    Swal.fire({
                        title: "Ingresa el monto del PEDIDO",
                        text: `Falta S/. ${falta.toFixed(2)} para completar el pago.`,
                        icon: "warning",
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            });




            // // Evento para realizar la compra
            // $('#btn_realizarCompra').on('click', function() {
            //     // Aquí puedes agregar la lógica para procesar la compra
            //     // Por ejemplo, enviar los datos del pedido al servidor
            //     console.log('Compra realizada');

            //     // Cerrar modal de carrito después de realizar la compra
            //     $('#modalCarrito').modal('hide');

            //     // Mostrar modal para imprimir el recibo
            //     $('#print-receipt').modal('show');
            // });


            // Evento para realizar la compra
            $('#btn_realizarCompra').on('click', function() {
                // Recopilar datos de los productos en el carrito
                var productos = carrito.map(function(product) {
                    return {
                        id: product.id,
                        nombre: product.nombre,
                        cantidad: product.cantidad,
                        costo_venta: product.costo_venta
                    };
                });

                // Filtrar los métodos de pago para eliminar los que tienen un valor undefined
                var metodoPagoFiltrado = {};
                for (var key in metodoPago) {
                    if (metodoPago[key] !== undefined) {
                        metodoPagoFiltrado[key] = metodoPago[key];
                    }
                }

                // Datos del cliente
                var cliente = {
                    nombre_completo: $('#client-nombre-completo').val(),
                    tipo_identificacion: $('#client-tipo_identificacion').val(),
                    documento: $('#client-documento').val(),
                    correo: $('#client-correo').val()
                };

                // Comentario del pedido
                var comentario = $('#vent_coment').val();

                // Datos del pedido
                var pedido = {
                    cliente: cliente.nombre_completo,
                    documento: cliente.documento,
                    correo: cliente.correo,
                    subtotal: parseFloat($('#subTotal').text().replace('S/. ', '')),
                    igv: parseFloat($('#subTotal').text().replace('S/. ', '')) * 0.18,
                    total: parseFloat($('#total').text().replace('S/. ', '')),
                    comentario: comentario,
                    metodo_pago: metodoPagoFiltrado,
                    productos: productos
                };

                // Mostrar los datos del pedido en la consola
                console.log('Datos del pedido:', pedido);

                // Enviar los datos del pedido al servidor mediante AJAX
                $.ajax({
                    url: '{{ route('ventas.store') }}', // Ruta al controlador que procesa el pedido
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: JSON.stringify(pedido),
                    contentType: 'application/json',
                    success: function(response) {
                        console.log('Compra realizada:', response);
                        // Aquí puedes agregar lógica adicional, como mostrar una notificación de éxito

                        // Cerrar modal de carrito después de realizar la compra
                        $('#modalCarrito').modal('hide');

                         // Actualizar el modal de impresión del recibo con los datos del pedido
                        actualizarModalRecibo(pedido);


                        // Mostrar modal para imprimir el recibo
                        $('#print-receipt').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error al realizar la compra:', error);
                        // Aquí puedes agregar lógica adicional para manejar errores, como mostrar una notificación de error
                        Swal.fire({
                            title: "Error",
                            text: 'Ocurrió un error al procesar la compra. Por favor, inténtelo de nuevo.',
                            icon: "error",
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                });
            });

               // Función para actualizar el modal de impresión del recibo
               function actualizarModalRecibo(pedido) {
                $('#receipt-cliente').text(pedido.cliente);
                $('#receipt-documento').text(pedido.documento);
                $('#receipt-email').text(pedido.correo);
                $('#receipt-fecha').text(new Date().toLocaleDateString());

                var productosHtml = '';
                pedido.productos.forEach(function(producto, index) {
                    productosHtml += `
                        <tr>
                            <td>${index + 1}. ${producto.nombre}</td>
                            <td>S/.${parseFloat(producto.costo_venta).toFixed(2)}</td>
                            <td>${producto.cantidad}</td>
                            <td class="text-end">S/.${(producto.costo_venta * producto.cantidad).toFixed(2)}</td>
                        </tr>
                    `;
                });

                $('#receipt-items').html(productosHtml);

                var igv = pedido.igv.toFixed(2);
                var total = pedido.total.toFixed(2);

                $('#receipt-subtotal').text(`S/. ${pedido.subtotal.toFixed(2)}`);
                $('#receipt-igv').text(`S/. ${igv}`);
                $('#receipt-total').text(`S/. ${total}`); 
                 // Mostrar el comentario
               $('#receipt-comentario').text(pedido.comentario);
             
            }

        });
    </script>
@endpush
