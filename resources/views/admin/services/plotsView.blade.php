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
    </style>
</head>

<body>
    <div class="container-scroller">
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
            <div class="container-fluid page-body-wrapper bg-light">
                <div class="container" >
                    <div class="row">
                        <div class="col-4">
                            <h1 class="title">Plots</h1>
                        </div>
                        <div class="col-4">
                            <a href="{{ url('/plots') }}" class="btn btn-primary">Add New Plot</a>
                        </div>
                    </div>

                    <div class="container-fluid mt-25">
                        <h2>List of Recent Published Plots for Sale</h2>
                        <p class="mb-25">Don't Hesitate to call the house owner if you would like to</p>

                        <table class="table table-responsive">

                          <thead>
                            <tr>
                              <th>#</th>
                              <th>image</th>
                              <th>Location</th>
                              <th>Size</th>
                              <th>Price</th>
                              <th>Details</th>
                              <th>Owner's Contact</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=0 ?>
                            @foreach ($plots as $plot)
                            <?php $i++ ?>
                            <tr>
                              <td>{{ $i }}</td>
                              <td><img src="{{ asset('/storage/images/plots/').$plot->image }}" alt="{{ $plot->title }}"></td>
                              <td>{{ $plot->location }}</td>
                              <td>{{ $plot->size }}</td>
                              <td>{{ $plot->price }}</td>
                              <td>{{ $plot->details }}</td>
                              <td>{{ $plot->contact }}</td>
                              <td>
                                <a class="btn btn-primary rounded" href="{{ url('plotEdit', $plot->id )}}">Edit</a>
                                <a href="{{ url('deletePlot',$plot->id) }}" onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger">Delete</a>
                            </td>
                            </tr>
                            @endforeach
                          </tbody>

                        </table>

                      </div>

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
