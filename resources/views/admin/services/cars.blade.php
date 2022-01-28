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

            <div class="container-fluid" style="margin-top: 50px; width:80%;">
                @if(session()->has('success'))
                <div class="arlert alert-success">
                    <button class="close" type="button" data-dismiss="alert">X</button>
                    {{ session()->get('success') }}
                </div>

                @endif
                <div class="container-fluid">

                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                      Add New Car
                    </button>

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Adding a New Car</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                            <form action="{{ url('saveCar') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row ">
                                    <div class="col-md-3 mr-5">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" placeholder="Enter the title" name="title" id="title">
                                      </div>
                                      <div class="col-md-3 mr-5">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" placeholder="Enter the price" name="price" id="price">
                                      </div>
                                      <div class="col-md-3 mr-5">
                                        <label for="type">Advert type:</label>
                                        <select class="form-control" name="type" id="type">
                                          <option></option>
                                          <option>Rent</option>
                                          <option>Sale</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="form-group">
                                    <label for="details">Details:</label>
                                    <textarea class="form-control" rows="5" name="details" id="details"></textarea>
                                  </div>
                                  <div class="row">
                                    <div class="form-group mr-5">
                                        <label for="contact">Contact</label>
                                        <input type="text" class="form-control" placeholder="Enter the contact" name="contact" id="contact">
                                      </div>
                                      <div class="form-group">
                                          <label for="image">Car Image</label>
                                       <input type="file" name="image">
                                      </div>
                                  </div>

                                <button type="submit" class="btn btn-primary">Add New</button>
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
                    <h2>Cars for Rent / Sale</h2>
                    <table class="table table-hover table-responsive">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Type</th>
                          <th>Price</th>
                          <th>Description</th>
                          <th>Contact</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=0 ?>
                          @foreach ($cars as $car)
                          <?php $i++ ?>
                        <tr>
                          <td>{{ $i }}</td>
                          <td><img src="{{ asset('storage/images/cars/').$car->image }}" alt=""></td>
                          <td>{{ $car->title }}</td>
                          <td>{{ $car->type }}</td>
                          <td>{{ $car->price }}</td>
                          <td>{{ $car->details }}</td>
                          <td>{{ $car->contact }}</td>

                          <td>
                              <div class="btn-group">
                                <a class="btn btn-primary" href="{{ url('editCar', $car->id) }}">Edit</a>
                                <a href="{{ url('deleteCar',$car->id) }}" onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger">Delete</a>
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
