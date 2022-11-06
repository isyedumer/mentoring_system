@extends('admin.layout')

@section('login_requests_active', 'active')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">List of Login requests</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
                            <li class="breadcrumb-item active">Teachers</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Teacher Name</th>
                                            <th>Member Since</th>
                                            <th>Earned</th>
                                            <th class="text-center">Account Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
                                                    <a href="profile.html">James Amen</a>
                                                </h2>
                                            </td>
                                            <td>Maths</td>

                                            <td>14 Jan 2019 <br><small>02.59 AM</small></td>

                                            <td>$3100.00</td>

                                            <td>
                                                <div class="status-toggle d-flex justify-content-center">
                                                    <input type="checkbox" id="status_1" class="check" checked>
                                                    <label for="status_1" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Jessica Fogarty</a>
                                                </h2>
                                            </td>
                                            <td>Business Maths</td>

                                            <td>11 Jun 2019 <br><small>4.50 AM</small></td>

                                            <td>$5000.00</td>

                                            <td>
                                                <div class="status-toggle d-flex justify-content-center">
                                                    <input type="checkbox" id="status_2" class="check" checked>
                                                    <label for="status_2" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-17.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Jose Anderson</a>
                                                </h2>
                                            </td>
                                            <td>Algebra</td>

                                            <td>4 Jan 2018 <br><small>9.40 AM</small></td>

                                            <td>$3300.00</td>

                                            <td>
                                                <div class="status-toggle d-flex justify-content-center">
                                                    <input type="checkbox" id="status_3" class="check" checked>
                                                    <label for="status_3" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Sofia Brient</a>
                                                </h2>
                                            </td>
                                            <td>Integrated Sum</td>

                                            <td>5 Jul 2019 <br><small>12.59 AM</small></td>

                                            <td>$3500.00</td>

                                            <td>
                                                <div class="status-toggle d-flex justify-content-center">
                                                    <input type="checkbox" id="status_4" class="check" checked>
                                                    <label for="status_4" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-14.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Marvin Campbell</a>
                                                </h2>
                                            </td>
                                            <td>Flow chart</td>

                                            <td>24 Jan 2019 <br><small>02.59 AM</small></td>

                                            <td>$3700.00</td>

                                            <td>
                                                <div class="status-toggle d-flex justify-content-center">
                                                    <input type="checkbox" id="status_5" class="check" checked>
                                                    <label for="status_5" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/profiles/avatar-18.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Vern Campbell</a>
                                                </h2>
                                            </td>
                                            <td>Basic Calculation</td>

                                            <td>23 Mar 2019 <br><small>02.50 PM</small></td>

                                            <td>$4000.00</td>

                                            <td>
                                                <div class="status-toggle d-flex justify-content-center">
                                                    <input type="checkbox" id="status_6" class="check" checked>
                                                    <label for="status_6" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/user/user7.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Linda Tobin</a>
                                                </h2>
                                            </td>
                                            <td>Maths</td>

                                            <td>14 Dec 2018 <br><small>01.59 AM</small></td>

                                            <td>$2000.00</td>

                                            <td>
                                                <div class="status-toggle d-flex justify-content-center">
                                                    <input type="checkbox" id="status_7" class="check" checked>
                                                    <label for="status_7" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                            class="avatar-img rounded-circle"
                                                            src="assets/img/user/user8.jpg" alt="User Image"></a>
                                                    <a href="profile.html">Paul Richard</a>
                                                </h2>
                                            </td>
                                            <td>Math Grade II</td>

                                            <td>11 Jan 2019 <br><small>02.59 AM</small></td>

                                            <td>$3000.00</td>

                                            <td>
                                                <div class="status-toggle d-flex justify-content-center">
                                                    <input type="checkbox" id="status_8" class="check" checked>
                                                    <label for="status_8" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
