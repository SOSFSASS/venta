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
