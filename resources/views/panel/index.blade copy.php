@extends('template')

@section('title', 'Dashboard')
{{-- aca se añade las demas rutas de {{ asset('css --}}
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

        {{-- TODO: es para mostrar elmensaje de confirmación --}}
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
                    <h3 class="d-flex align-items-center">&nbsp;Hola
                        {{ auth()->user()->name }},
                    </h3>&nbsp;<h6>Estas listo para administrar tu negocio</h6>
                </div>
                {{-- <div class="d-flex align-items-center">
                <div class="position-relative daterange-wraper me-2">
                    <div class="input-groupicon calender-input">
                        <input type="text" class="form-control  date-range bookingrange" placeholder="Select"
                            value="13 Aug 1992">
                    </div>
                </div>
                <button type="button" data-toggle="tooltip" class="btn btn-white-outline d-none d-md-inline-block"
                    data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Refresh"
                    data-bs-original-title="Refresh"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-rotate-ccw feather-16">
                        <polyline points="1 4 1 10 7 10"></polyline>
                        <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                    </svg></button>
                <a href="#" class="d-none d-lg-inline-block" data-bs-toggle="tooltip" data-bs-placement="top"
                    id="collapse-header" aria-label="Collapse" data-bs-original-title="Collapse"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-up feather-16">
                        <polyline points="18 15 12 9 6 15"></polyline>
                    </svg></a>
            </div> --}}
                <?php
                // Obtener la fecha y hora actual en el formato deseado
                $now = new DateTime();
                $fecha = $now->format('d M Y');
                //$hora = $now->format('H:i:s');
                ?>
                <div class="d-flex align-items-center">
                    <div class="position-relative daterange-wraper me-2">
                        <div class="input-groupicon calender-input">
                            <input type="text" class="form-control date-range bookingrange" value="<?php echo $fecha; ?>"
                                readonly>
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
            {{-- <div class="row sales-cards">
            <div class="col-xl-6 col-sm-12 col-12">
                <div class="card d-flex align-items-center justify-content-between default-cover mb-4">
                    <div>
                        <h6>Weekly Earning</h6>
                        <h3>$<span class="counters" data-count="95000.45">95000.45</span></h3>
                        <p class="sales-range"><span class="text-success"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-chevron-up feather-16">
                                    <polyline points="18 15 12 9 6 15"></polyline>
                                </svg>48%&nbsp;</span>increase compare to last week</p>
                    </div>
                    <img src="{{ asset('css/img/icons/weekly-earning.svg') }}" alt="img">
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card color-info bg-primary mb-4">
                    <img src="{{ asset('css/img/icons/total-sales.svg') }}" alt="img">
                    <h3 class="counters" data-count="10000.00">10000</h3>
                    <p>No of Total Sales</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-rotate-ccw feather-16" data-bs-toggle="tooltip" data-bs-placement="top"
                        aria-label="Refresh" data-bs-original-title="Refresh">
                        <polyline points="1 4 1 10 7 10"></polyline>
                        <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                    </svg>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card color-info bg-secondary mb-4">
                    <img src="{{ asset('css/img/icons/purchased-earnings.svg') }}" alt="img">
                    <h3 class="counters" data-count="800.00">800</h3>
                    <p>No of Total Sales</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-rotate-ccw feather-16" data-bs-toggle="tooltip" data-bs-placement="top"
                        aria-label="Refresh" data-bs-original-title="Refresh">
                        <polyline points="1 4 1 10 7 10"></polyline>
                        <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                    </svg>
                </div>
            </div>
        </div> --}}
            <div class="row sales-cards">
                <div class="col-xl-6 col-sm-12 col-12">
                    <div class="card d-flex align-items-center justify-content-between default-cover mb-4">
                        <div>
                            <h6>Weekly Earning</h6>
                            <h3>$<span class="counters" data-count="95000.45">95000.45</span></h3>
                            <p class="sales-range">
                                <span class="text-success">
                                    <i class="fas fa-chevron-up feather-16"></i> 48%&nbsp;
                                </span>
                                increase compare to last week
                            </p>
                        </div>
                        <i class="fas fa-dollar-sign fa-3x"></i>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card color-info bg-primary mb-4">
                        <i class="fas fa-cube fa-3x"></i>
                        <?php
                        use App\Models\Producto;
                        $productos = count(Producto::all());
                        //dd($clientes);
                        ?>
                        <h3 class="counters">{{ $productos }}</h3>
                        <p>Total de Productos</p>
                        <i class="fas fa-sync-alt feather-16" data-bs-toggle="tooltip" data-bs-placement="top"
                            aria-label="Refresh" data-bs-original-title="Refresh"></i>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card color-info bg-secondary mb-4">
                        <?php
                        use App\Models\Cliente;
                        $clientes = count(Cliente::all());
                        //dd($clientes);
                        ?>
                        <i class="fas fa-users fa-3x"></i>
                        <h3 class="counters">{{ $clientes }}</h3>
                        <p>Total de Clientes</p>
                        <i class="fas fa-sync-alt feather-16" data-bs-toggle="tooltip" data-bs-placement="top"
                            aria-label="Refresh" data-bs-original-title="Refresh"></i>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-4 d-flex">
                    <div class="card flex-fill default-cover w-100 mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Best Seller</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="view-all d-flex align-items-center">
                                    View All<span class="ps-2 d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-arrow-right feather-16">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless best-seller">
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-xl-8 d-flex">
                    <div class="card flex-fill default-cover w-100 mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Recent Transactions</h4>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="view-all d-flex align-items-center">
                                    View All<span class="ps-2 d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-arrow-right feather-16">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless recent-transactions">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Order Details</th>
                                            <th>Payment</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row sales-board">
                <div class="col-md-12 col-lg-7 col-sm-12 col-12">
                    <div class="card flex-fill default-cover">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Sales Analytics</h5>
                            <div class="graph-sets">
                                <div class="dropdown dropdown-wraper">
                                    <button class="btn btn-white btn-sm dropdown-toggle d-flex align-items-center"
                                        type="button" id="dropdown-sales" data-bs-toggle="dropdown"
                                        aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-calendar feather-14">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                                            </rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>2023</button>
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

                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-sm-12 col-12">

                    <div class="card default-cover">
                        <div class="card-header d-flex justify-content-between align-items-center">

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
@endpush
