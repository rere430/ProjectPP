<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Connect Plus</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../assets/images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-xl-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item  dropdown d-none d-md-block">
            <a class="nav-link dropdown-toggle" id="reportDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Reports </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-file-pdf mr-2"></i>PDF </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-file-excel mr-2"></i>Excel </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-file-word mr-2"></i>doc </a>
            </div>
          </li>
          <li class="nav-item  dropdown d-none d-md-block">
            <a class="nav-link dropdown-toggle" id="projectDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Projects </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="projectDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-eye-outline mr-2"></i>View Project </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-pencil-outline mr-2"></i>Edit Project </a>
            </div>
          </li>
          <li class="nav-item nav-language dropdown d-none d-md-block">
            <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-language-icon">
                <i class="flag-icon flag-icon-us" title="us" id="us"></i>
              </div>
              <div class="nav-language-text">
                <p class="mb-1 text-black">English</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
              <a class="dropdown-item" href="#">
                <div class="nav-language-icon mr-2">
                  <i class="flag-icon flag-icon-ae" title="ae" id="ae"></i>
                </div>
                <div class="nav-language-text">
                  <p class="mb-1 text-black">Arabic</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <div class="nav-language-icon mr-2">
                  <i class="flag-icon flag-icon-gb" title="GB" id="gb"></i>
                </div>
                <div class="nav-language-text">
                  <p class="mb-1 text-black">English</p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="../../assets/images/faces/face28.png" alt="image">
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">Henry Klein</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
              <div class="p-3 text-center bg-primary">
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="../../assets/images/faces/face28.png" alt="">
              </div>
              <div class="p-2">
                <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                  <span>Inbox</span>
                  <span class="p-0">
                    <span class="badge badge-primary">3</span>
                    <i class="mdi mdi-email-open-outline ml-1"></i>
                  </span>
                </a>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                  <span>Profile</span>
                  <span class="p-0">
                    <span class="badge badge-success">1</span>
                    <i class="mdi mdi-account-outline ml-1"></i>
                  </span>
                </a>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                  <span>Settings</span>
                  <i class="mdi mdi-settings"></i>
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                  <span>Lock Account</span>
                  <i class="mdi mdi-lock ml-1"></i>
                </a>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                  <span>Log Out</span>
                  <i class="mdi mdi-logout ml-1"></i>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-email-outline"></i>
              <span class="count-symbol bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                  <p class="text-gray mb-0"> 1 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                  <p class="text-gray mb-0"> 15 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                  <p class="text-gray mb-0"> 18 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">4 new messages</h6>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count-symbol bg-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-calendar"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                  <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                  <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-link-variant"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                  <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">See all notifications</h6>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      @include('/dashboard/sidebar');
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Daftar Menu </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            {{-- Modal coyy                            --}}
            <div class="col-lg-12 grid-margin stretch-card">

              <div class="card">
                <div class="card-body">
                  {{-- <h4 class="card-title">Bordered table</h4> --}}
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data +
                  </button>

                  <!-- Modal -->
                  @include('/dashboard/tambahmenu');
                  {{-- <p class="card-description"> Add class <code>.table-bordered</code>
                    </p> --}}
                  <br>
                  <p></p>
                  <form class="forms-sample" method="POST" action="/editmenu/{{ $data->id }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Menu</label>
                      <input type="text" class="form-control" id="nama_menu" placeholder="nama menu" name="nama_menu" value="{{ $data->nama_menu }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Harga Rp. </label>
                      <input type="text" class="form-control" id="harga" placeholder="harga" name="harga" value="{{ $data->harga }}">
                    </div>
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="gambar">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Edit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Inverse table</h4>
                  <p class="card-description"> Add class <code>.table-dark</code>
                  </p>
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th> # </th>
                        <th> First name </th>
                        <th> Amount </th>
                        <th> Deadline </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> 1 </td>
                        <td> Herman Beck </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                      </tr>
                      <tr>
                        <td> 2 </td>
                        <td> Messsy Adam </td>
                        <td> $245.30 </td>
                        <td> July 1, 2015 </td>
                      </tr>
                      <tr>
                        <td> 3 </td>
                        <td> John Richards </td>
                        <td> $138.00 </td>
                        <td> Apr 12, 2015 </td>
                      </tr>
                      <tr>
                        <td> 4 </td>
                        <td> Peter Meggik </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                      </tr>
                      <tr>
                        <td> 5 </td>
                        <td> Edward </td>
                        <td> $ 160.25 </td>
                        <td> May 03, 2015 </td>
                      </tr>
                      <tr>
                        <td> 6 </td>
                        <td> John Doe </td>
                        <td> $ 123.21 </td>
                        <td> April 05, 2015 </td>
                      </tr>
                      <tr>
                        <td> 7 </td>
                        <td> Henry Tom </td>
                        <td> $ 150.00 </td>
                        <td> June 16, 2015 </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table with contextual classes</h4>
                  <p class="card-description"> Add class <code>.table-{color}</code>
                  </p>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th> # </th>
                        <th> First name </th>
                        <th> Product </th>
                        <th> Amount </th>
                        <th> Deadline </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="table-info">
                        <td> 1 </td>
                        <td> Herman Beck </td>
                        <td> Photoshop </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                      </tr>
                      <tr class="table-warning">
                        <td> 2 </td>
                        <td> Messsy Adam </td>
                        <td> Flash </td>
                        <td> $245.30 </td>
                        <td> July 1, 2015 </td>
                      </tr>
                      <tr class="table-danger">
                        <td> 3 </td>
                        <td> John Richards </td>
                        <td> Premeire </td>
                        <td> $138.00 </td>
                        <td> Apr 12, 2015 </td>
                      </tr>
                      <tr class="table-success">
                        <td> 4 </td>
                        <td> Peter Meggik </td>
                        <td> After effects </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                      </tr>
                      <tr class="table-primary">
                        <td> 5 </td>
                        <td> Edward </td>
                        <td> Illustrator </td>
                        <td> $ 160.25 </td>
                        <td> May 03, 2015 </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="footer-inner-wraper">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src={{ asset("/assets/vendors/js/vendor.bundle.base.js") }}></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src={{ asset("/assets/js/off-canvas.js") }}></script>
  <script src={{ asset("/assets/js/hoverable-collapse.js") }}></script>
  <script src={{ asset("/assets/js/misc.js") }}></script>
  <script src={{ asset("/assets/js/file-upload.js") }}></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>

</html>