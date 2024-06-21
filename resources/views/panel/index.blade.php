@extends('template')

@section('title', 'Dashboard')
{{-- aca se añade las demas rutas de {{ asset('css --}}
@push('css')
@endpush
@section('content')
    <div class="content">
        <div class="welcome d-lg-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center welcome-text">
                <h3 class="d-flex align-items-center"><img src="{{ asset('css/img/icons/hi.svg') }}" alt="img">&nbsp;Hola
                    John Smilga,
                </h3>&nbsp;<h6>here's what's happening with your store today.</h6>
            </div>
            <div class="d-flex align-items-center">
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
            </div>
        </div>
        <div class="row sales-cards">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-rotate-ccw feather-16" data-bs-toggle="tooltip"
                        data-bs-placement="top" aria-label="Refresh" data-bs-original-title="Refresh">
                        <polyline points="1 4 1 10 7 10"></polyline>
                        <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                    </svg>
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
                                View All<span class="ps-2 d-flex align-items-center"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right feather-16">
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
                                View All<span class="ps-2 d-flex align-items-center"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-arrow-right feather-16">
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
@endsection

@push('js')
    <script src="{{ asset('css/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('css/js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('css/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('css/plugins/apexchart/chart-data.js') }}"></script>
@endpush
