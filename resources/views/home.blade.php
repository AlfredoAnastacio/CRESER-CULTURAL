@extends('admin.layout')

@section('content')
    <div class="content container-fluid content-wrap">
        <h4 class="mb-3">Overview</h4>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-primary">
                                <i class="feather-user-plus"></i>
                            </span>
                            <div class="dash-count">
                                <h5 class="dash-title">Doctors</h5>
                                <div class="dash-counts">
                                    <p>4505</p>
                                </div>
                            </div>
                        </div>
                        <p class="trade-level mb-0"><span class="text-danger me-1"><i class="fas fa-caret-down me-1"></i>1.15%</span> last week</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-blue">
                                <i class="feather-users"></i>
                            </span>
                            <div class="dash-count">
                                <h5 class="dash-title">Patients</h5>
                                <div class="dash-counts">
                                    <p>2000</p>
                                </div>
                            </div>
                        </div>
                        <p class="trade-level mb-0"><span class="text-success me-1"><i class="fas fa-caret-up me-1"></i>4.5%</span> last week</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-warning">
                                <img src="{{ asset('assets/img/calendar.png') }}" alt="User Image">
                            </span>
                            <div class="dash-count">
                                <h5 class="dash-title">Appointment</h5>
                                <div class="dash-counts">
                                    <p>4500</p>
                                </div>
                            </div>
                        </div>
                        <p class="trade-level mb-0"><span class="text-success me-1"><i class="fas fa-caret-up me-1"></i>9.65%</span> last week</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-danger">
                                <img src="{{ asset('assets/img/Chat.png') }}" alt="User Image">
                            </span>
                            <div class="dash-count">
                                <h5 class="dash-title">Revenue</h5>
                                <div class="dash-counts">
                                    <p>$62523</p>
                                </div>
                            </div>
                        </div>
                        <p class="trade-level mb-0"><span class="text-danger me-1"><i class="fas fa-caret-up me-1"></i>40.5%</span> last week</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Appointments -->
            <div class="col-xl-7 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="card-title">Appointments</h5>
                            </div>
                            <div class="col-auto d-flex">
                                <select class="select">
                                    <option>2022</option>
                                    <option>2022</option>
                                </select>
                                <div class="ms-2">
                                    <select class="select">
                                        <option>Select Type</option>
                                        <option>Video</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="sales_chart"></div>
                    </div>
                </div>
            </div>
            <!-- /Appointments -->

            <!-- Income Report -->
            <div class="col-xl-5 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="card-title">Income Report</h5>
                            </div>
                            <div class="col-auto d-flex">
                                <select class="select">
                                    <option>Monthly</option>
                                    <option>Weekly</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-end w-100">
                            <div class="income-rev">Total Revenue : <span>$451254K</span></div>
                        </div>
                        <div id="income-report"></div>
                    </div>
                </div>
            </div>
            <!-- /Income Report -->
        </div>

        <div class="row">
            <!-- Recent Activities -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header border-bottom-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="card-title">Recent Patient Activity</h5>
                            </div>
                            <div class="col-auto d-flex">
                                <div class="bookingrange btn btn-white btn-sm">
                                    <div class="cal-ico">
                                        <span>Select Date</span>
                                        <i class="feather-chevron-down ms-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-borderless hover-table">
                                <thead class="thead-light">
                                    <tr>
                                       <th>ID</th>
                                       <th>Patient</th>
                                       <th>Disease</th>
                                       <th>Member since </th>
                                       <th>Status</th>
                                       <th class="text-right"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#4546</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html"><img class="avatar avatar-img" src="{{ asset('assets/img/avatar-07.jpg') }}" alt="User Image"></a>
                                                <a href="#" class="user-name">Bess Twishes <span class="text-muted">Male, 40 Years Old</span></a>
                                            </h2>
                                        </td>
                                        <td><span class="disease-name">Allergies & Asthma</span></td>
                                        <td>
                                            <span class="text-yellow user-name">New Patient</span>
                                            <span class="d-block">23 Nov 2020</span>
                                        </td>
                                        <td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Enabled</span></td>
                                        <td class="text-right">
                                            <i class="feather-chevron-right"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#8774</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html"><img class="avatar avatar-img" src="{{ asset('assets/img/avatar-04.jpg') }}" alt="User Image"></a>
                                                <a href="#" class="user-name">Bess Twishes <span class="text-muted">Female,30 Years Old</span></a>
                                            </h2>
                                        </td>
                                        <td><span class="disease-name">Sleep Problem</span></td>
                                        <td>
                                            <span class="text-danger user-name">Old Patient</span>
                                            <span class="d-block">23 Nov 2020</span>
                                        </td>
                                        <td><span class="badge bg-badge-grey text-danger"><i class="fas fa-circle me-1"></i> Disabled</span></td>
                                        <td class="text-right">
                                            <i class="feather-chevron-right"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#4546</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html"><img class="avatar avatar-img" src="{{ asset('assets/img/avatar-02.jpg') }}" alt="User Image"></a>
                                                <a href="#" class="user-name">Abdul Aziz Lazis <span class="text-muted">Male, 25 Years Old</span></a>
                                            </h2>
                                        </td>
                                        <td><span class="disease-name">Tooth Pain</span></td>
                                        <td>
                                            <span class="text-danger user-name">Old Patient</span>
                                            <span class="d-block">23 Nov 2020</span>
                                        </td>
                                        <td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Enabled</span></td>
                                        <td class="text-right">
                                            <i class="feather-chevron-right"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#4546</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html"><img class="avatar avatar-img" src="{{ asset('assets/img/avatar-05.jpg') }}" alt="User Image"></a>
                                                <a href="#" class="user-name">Alex Siauw <span class="text-muted">Male, 29 Years Old</span></a>
                                            </h2>
                                        </td>
                                        <td><span class="disease-name">Pain  on knee</span></td>
                                        <td>
                                            <span class="text-yellow user-name">New Patient</span>
                                            <span class="d-block">23 Nov 2020</span>
                                        </td>
                                        <td><span class="badge bg-badge-grey text-success"><i class="fas fa-circle me-1"></i> Enabled</span></td>
                                        <td class="text-right">
                                            <i class="feather-chevron-right"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Recent Activities -->

            <!-- Top Doctors -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">Top Doctors</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table doc-table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a class="avatar-pos avatar-online" href="profile.html"><img class="avatar avatar-img" src="{{ asset('assets/img/avatar-05.jpg') }}" alt="User Image"></a>
                                                <a href="#" class="user-name"><span class="text-muted">Dr. Rayan</span> <span class="tab-subtext">Gyanoclogist</span></a>
                                            </h2>
                                        </td>
                                        <td><span class="table-rating"><i class="fas fa-star me-2"></i> 4.5</span></td>
                                        <td class="text-right"><span class="text-muted">200 Patients</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a class="avatar-pos avatar-online" href="profile.html"><img class="avatar avatar-img" src="{{ asset('assets/img/avatar-10.jpg') }}" alt="User Image"></a>
                                                <a href="#" class="user-name"><span class="text-muted">Dr. Bea</span> <span class="tab-subtext">Dentist</span></a>
                                            </h2>
                                        </td>
                                        <td><span class="table-rating"><i class="fas fa-star me-2"></i> 4.9</span></td>
                                        <td class="text-right"><span class="text-muted">180 Patients</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a class="avatar-pos avatar-offline" href="profile.html"><img class="avatar avatar-img" src="{{ asset('assets/img/avatar-11.jpg') }}" alt="User Image"></a>
                                                <a href="#" class="user-name"><span class="text-muted">Dr. Monroe</span> <span class="tab-subtext">Hair Specialities</span></a>
                                            </h2>
                                        </td>
                                        <td><span class="table-rating"><i class="fas fa-star me-2"></i> 4.8</span></td>
                                        <td class="text-right"><span class="text-muted">160 Patients</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a class="avatar-pos avatar-offline" href="profile.html"><img class="avatar avatar-img" src="{{ asset('assets/img/avatar-13.jpg') }}" alt="User Image"></a>
                                                <a href="#" class="user-name"><span class="text-muted">Dr. Lester</span> <span class="tab-subtext">Orthopaedics</span></a>
                                            </h2>
                                        </td>
                                        <td><span class="table-rating"><i class="fas fa-star me-2"></i> 4.7</span></td>
                                        <td class="text-right"><span class="text-muted">140 Patients</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a class="empty-user" href="profile.html"><i class="feather-user"></i> </a>
                                                <a href="#" class="user-name"><span class="text-muted">Dr. Clint</span> <span class="tab-subtext">Neurology</span></a>
                                            </h2>
                                        </td>
                                        <td><span class="table-rating"><i class="fas fa-star me-2"></i> 4.6</span></td>
                                        <td class="text-right"><span class="text-muted">120 Patients</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Top Doctors -->




        </div>

    </div>
@endsection
