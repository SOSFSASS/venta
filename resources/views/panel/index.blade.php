@extends('template')

@section('title', 'Dashboard')

@push('css')
    <style>
        .daterange-wraper {
            position: relative;
            margin-right: 10px;
        }

        .calender-input .form-control {
            background-color: #f9f9f9;
            border-radius: 5px;
            padding: 10px;
        }

        .btn-white-outline {
            border: 1px solid #ddd;
            color: #333;
        }

        .btn-white-outline:hover {
            background-color: #f1f1f1;
        }

        .icon-button {
            border: none;
            background: none;
            cursor: pointer;
        }

        .icon-button .fas {
            font-size: 24px;
        }

        .card-custom {
            margin-bottom: 20px;
        }
    </style>
@endpush

@section('content')
    @auth
        @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    });

                    Toast.fire({
                        icon: 'success',
                        title: '{{ session('success') }}'
                    });
                });
            </script>
        @endif
        <div class="content">
            <div class="welcome d-lg-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center welcome-text">
                    <h3 class="d-flex align-items-center">Hola,&nbsp;{{ auth()->user()->name }}</h3>
                    <h6>&nbsp;&nbsp;Estas listo para administrar tu negocio</h6>
                </div>
                <?php
                // Obtener la fecha y hora actual en el formato deseado
                $now = new DateTime();
                $fecha = $now->format('d M Y');
                ?>
                <div class="d-flex align-items-center">
                    <div class="position-relative daterange-wraper me-2">
                        <div class="input-groupicon calender-input">
                            <input type="text" class="form-control date-range bookingrange" value="{{ $fecha }}" readonly>
                        </div>
                    </div>
                    <div class="position-relative daterange-wraper me-2">
                        <div class="input-groupicon calender-input">
                            <input type="text" id="current-time" class="form-control date-range bookingrange" readonly>
                        </div>
                    </div>
                    <button type="button" class="btn btn-white-outline d-none d-md-inline-block" data-bs-toggle="tooltip"
                        data-bs-placement="top" aria-label="Refresh" title="Refresh">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                    <a href="#" class="d-none d-lg-inline-block" data-bs-toggle="tooltip" data-bs-placement="top"
                        id="collapse-header" aria-label="Collapse" title="Collapse">
                        <i class="fas fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="row sales-cards">
                <div class="col-xl-6 col-sm-12 col-12">
                    <div class="card d-flex align-items-center justify-content-between default-cover mb-4">
                        <div>
                            <h6>Ganancias Mensuales</h6>
                            <h3>S/. <span class="counters" id="monthly-earning">{{ number_format($monthlyEarnings, 2) }}</span></h3>
                            <p class="sales-range">
                                <span class="text-success">
                                    <i class="fas fa-chevron-up feather-16"></i> 48%&nbsp;
                                </span>
                                aumento en comparación con el mes pasado
                            </p>
                        </div>
                        <i class="fas fa-dollar-sign fa-3x"></i>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card color-info bg-primary mb-4">
                        <i class="fas fa-cube fa-3x"></i>
                        <h3 class="counters">{{ $productos }}</h3>
                        <p>Total de Productos</p>
                        <i class="fas fa-sync-alt feather-16" data-bs-toggle="tooltip" data-bs-placement="top"
                            aria-label="Refresh" data-bs-original-title="Refresh"></i>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card color-info bg-secondary mb-4">
                        <i class="fas fa-users fa-3x"></i>
                        <h3 class="counters">{{ $clientes }}</h3>
                        <p>Total de Clientes</p>
                        <i class="fas fa-sync-alt feather-16" data-bs-toggle="tooltip" data-bs-placement="top"
                            aria-label="Refresh" data-bs-original-title="Refresh"></i>
                    </div>
                </div>
            </div>
            <!-- Resto del contenido -->
            <div class="row">
                <!-- Mejor Vendedor -->
                <div class="col-sm-12 col-md-12 col-xl-4 d-flex">
                    <div class="card flex-fill default-cover w-100 mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Mejor Vendedor</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="view-all d-flex align-items-center">
                                    Ver Todo<span class="ps-2 d-flex align-items-center"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless best-seller">
                                    <tbody>
                                        @foreach ($bestSellers as $seller)
                                        <tr>
                                            <td>{{ $seller['producto'] }}</td>
                                            <td>{{ $seller['cantidad'] }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Transacciones Recientes -->
                <div class="col-sm-12 col-md-12 col-xl-8 d-flex">
                    <div class="card flex-fill default-cover w-100 mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Ventas Recientes</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="view-all d-flex align-items-center">
                                    Ver Todo<span class="ps-2 d-flex align-items-center"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless recent-transactions">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Detalles del Pedido</th>
                                            <th>Pago</th>
                                            <th>Estado</th>
                                            <th>Monto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recentTransactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->id }}</td>
                                            <td>{{ $transaction->cliente }}</td>
                                            <td>{{ $transaction->metodo_pago }}</td>
                                            <td>{{ $transaction->estado }}</td>
                                            <td>S/. {{ number_format($transaction->total, 2) }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row sales-board">
                <!-- Análisis de Ventas -->
                <div class="col-md-12 col-lg-7 col-sm-12 col-12">
                    <div class="card flex-fill default-cover">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Análisis de Ventas</h5>
                            <div class="graph-sets">
                                <div class="dropdown dropdown-wraper">
                                    <button class="btn btn-white btn-sm dropdown-toggle d-flex align-items-center"
                                        type="button" id="dropdown-sales" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fas fa-calendar-alt"></i>2023
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown-sales">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2023</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                </div>
            
                <!-- Información Adicional -->
                <div class="col-md-12 col-lg-5 col-sm-12 col-12">
                    <div class="card default-cover">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Información Adicional</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="additionalChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            
        
        </div>
    @endauth
    @guest
        <script>
            window.location.href = "{{ route('login') }}"; // Redirigir a la página de inicio de sesión
        </script>
    @endguest
@endsection

@push('js')
    <script src="{{ asset('css/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('css/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('css/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('css/plugins/apexchart/chart-data.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializar tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Actualizar hora cada segundo
            function updateTime() {
                var now = new Date();
                var hours = now.getHours();
                var minutes = String(now.getMinutes()).padStart(2, '0');
                var seconds = String(now.getSeconds()).padStart(2, '0');
                var ampm = hours >= 12 ? 'PM' : 'AM';
                hours = hours % 12;
                hours = hours ? hours : 12; // the hour '0' should be '12'
                var currentTime = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
                document.getElementById('current-time').value = currentTime;
            }

            setInterval(updateTime, 1000); // Actualizar cada segundo
            updateTime(); // Llamar inmediatamente para mostrar la hora actual al cargar la página
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function() {
            // Obtener datos de ventas y graficar
            var salesData = @json($salesData);
            var ctx = document.getElementById('salesChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: salesData.months,
                    datasets: [{
                        label: 'Ventas',
                        data: salesData.totals,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Gráfico adicional
            var ctx2 = document.getElementById('additionalChart').getContext('2d');
            new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
                        'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                    ],
                    datasets: [{
                        label: 'Ventas Mensuales',
                        data: [12, 19, 3, 5, 2, 3, 8, 5, 3, 12, 5, 6],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
@endpush
