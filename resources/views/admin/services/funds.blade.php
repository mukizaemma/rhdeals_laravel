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
        .title {
            style="color: black;
padding-top: 5px;
            font-size: 25px;
            margin-bottom: 5px;
            /* text-align:center; */
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
            <div class="container-fluid bg-light">
                <div class="container mt-5">
                    <h1 class="title">Add New Auction</h1>

                    <div class="row">

                        <div class="col-8">
                            @if(session()->has('success'))
                            <div class="alert alert-success">
                                <button type="submit" class="close" data-dismiss="alert">X</button>
                                {{ session()->get('success') }}
                            </div>
                            @endif

                            <form action="{{ url('/fundsSave') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-6">
                                        <label for="institution">Institution</label>
                                        <input type="text" class="form-control" placeholder="Enter the institution" name="institution" id="institution">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="image">Image</label>
                                        <input type="file" name="image">
                                    </div>
                                    <div class="col-md-6 mr-3">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" placeholder="Enter title" name="title" id="title">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="details">Funds Conditions</label>
                                        <textarea class="form-control" rows="5" name="details" id="details"></textarea>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group mr-3">
                                        <label for="date">Deadline</label>
                                        <input type="date" class="form-control" placeholder="Enter date" name="deadline" id="deadline">
                                    </div>

                                    <div class="form-group mr-5">
                                        <label for="contact">Contacts</label>
                                        <input type="text" class="form-control" placeholder="Enter the Contact" name="contact" id="contact">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Funds</button>
                            </form>
                        </div>
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
