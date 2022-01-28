<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RHD Admin</title>
    <!-- plugins:css -->
    @include('admin.css')

    <style>
        .title{
            style="color: black;
             padding-top:5px;
             font-size:25px;
             margin-bottom: 5px;
             /* text-align:center; */
        }
        .form-group{
            margin-right: 5px;
        }
        table{
            width: 600px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
            <!-- partial -->
            {{-- @include('admin.body') --}}

            <div class="container-fluid" style="margin-top: 50px;">
                @if(session()->has('success'))
                <div class="arlert alert-success">
                    <button class="close" type="button" data-dismiss="alert">X</button>
                    {{ session()->get('success') }}
                </div>

                @endif
                <div class="container-fluid">

                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                      Add New Opportunity
                    </button>

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Adding a New Opportunity</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                            <form class="form" action="{{ url('saveOport') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="form-group form-group-icon col-md-3">
                                          <label for="first-name">Province</label>
                                          <select class="form-control border-success" name="province" id="province">
                                              <option value=""></option>
                                              @foreach ($provinces as $province )
                                            <option value="{{ $province->name }}">
                                            {{ $province->name }}</option>
                                              @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group form-group-icon col-md-3">
                                            <label for="first-name">District</label>
                                            <select class="form-control border-success" name="district" id="district">
                                              <option value=""></option>
                                              @foreach (App\Models\District::orderBy('name')->get() as $district )
                                              <option value="{{ $district->name }}">
                                              {{ $district->name }}</option>
                                                @endforeach
                                          </select>
                                          </div>

                                        {{-- <div class="form-group form-group-icon col-md-3">
                                          <label for="last-name">Sector</label>
                                          <input type="text" class="form-control border-danger rounded-sm" name="sector" id="sector" placeholder="type your sector">
                                          <select class="form-control border-success" name="sector" id="sector">
                                            <option value=""></option>
                                        </select>
                                        </div>
                                        <div class="form-group form-group-icon col-md-3">
                                            <label for="last-name">Cell</label>
                                            <input type="text" class="form-control border-danger rounded-sm" name="cell" id="cell" placeholder="type your cell">
                                          </div> --}}
                                      </div>

                                    <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="projectinput1">Phone Number</label>
                                                    <input type="text" id="projectinput1" class="form-control" placeholder="Phone" name="phone">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="projectinput1">Email</label>
                                                    <input type="email" id="projectinput1" class="form-control" placeholder="Email" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Select the Logo</label>
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="image" name="image" >
                                                        <span class="file-custom"></span>
                                                    </label>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="projectinput8">Detais/ Services</label>
                                                <textarea id="projectinput8" rows="5" class="form-control" name="details" placeholder="About the restaurant Services"></textarea>
                                            </div>
                                        </div>

                                    </div>


                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Add New
                                    </button>

                                </div>
                            </form>
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>

                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="container mt-10">
                    <h2>Recent Published Opportunities in Districts</h2>
                    <table class="table table-hover table-responsive">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>District</th>
                          <th style="width: 50px;"!important>Opportunity Description</th>
                          <th >Phone</th>
                          <th >Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=0 ?>
                          @foreach ($opportunities as $opt)
                          <?php $i++ ?>
                        <tr>
                          <td>{{ $i }}</td>
                          {{-- <td><img src="{{ asset('storage/images/oppotunities/').$opt->image }}" alt=""></td> --}}
                          <td>{{ $opt->district }}</td>
                          <td>{{ $opt->details }}</td>
                          <td>{{ $opt->phone }}</td>
                          <td>{{ $opt->email }}</td>

                          <td>
                              <div class="btn-group">
                                <button class="btn btn-primary" href="{{ url('editOp', $opt->id) }}">Edit</button>
                                <button href="{{ url('delete',$opt->id) }}" onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger">Delete</button>
                              </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>



            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="admin/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/js/off-canvas.js"></script>
    <script src="admin/js/hoverable-collapse.js"></script>
    <script src="admin/js/template.js"></script>
    <script src="admin/js/settings.js"></script>
    <script src="admin/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="admin/js/dashboard.js"></script>
    <script src="admin/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
