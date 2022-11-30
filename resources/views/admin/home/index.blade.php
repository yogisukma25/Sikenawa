@extends('admin.layouts.app')

@section('main-content')

  @include('admin.layouts.partials.navbar')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
      <div class="row">
          <div class="col-7 align-self-center">
              <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Selamat Datang Jason!</h3>
              <div class="d-flex align-items-center">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb m-0 p-0">
                          <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                          </li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
      <!-- *************************************************************** -->
      <!-- Start First Cards -->
      <!-- *************************************************************** -->
      <div class="card-group">
          <div class="card border-right">
              <div class="card-body">
                  <div class="d-flex d-lg-flex d-md-block align-items-center">
                      <div>
                          <div class="d-inline-flex align-items-center">
                              <h2 class="text-dark mb-1 font-weight-medium">236</h2>
                              <span
                                  class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none">+18.33%</span>
                          </div>
                          <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Clients</h6>
                      </div>
                      <div class="ml-auto mt-md-3 mt-lg-0">
                          <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card border-right">
              <div class="card-body">
                  <div class="d-flex d-lg-flex d-md-block align-items-center">
                      <div>
                          <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                  class="set-doller">$</sup>18,306</h2>
                          <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Earnings of Month
                          </h6>
                      </div>
                      <div class="ml-auto mt-md-3 mt-lg-0">
                          <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card border-right">
              <div class="card-body">
                  <div class="d-flex d-lg-flex d-md-block align-items-center">
                      <div>
                          <div class="d-inline-flex align-items-center">
                              <h2 class="text-dark mb-1 font-weight-medium">1538</h2>
                              <span
                                  class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">-18.33%</span>
                          </div>
                          <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Projects</h6>
                      </div>
                      <div class="ml-auto mt-md-3 mt-lg-0">
                          <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-body">
                  <div class="d-flex d-lg-flex d-md-block align-items-center">
                      <div>
                          <h2 class="text-dark mb-1 font-weight-medium">864</h2>
                          <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Projects</h6>
                      </div>
                      <div class="ml-auto mt-md-3 mt-lg-0">
                          <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- *************************************************************** -->
      <!-- End First Cards -->
      <!-- *************************************************************** -->
      
      <!-- *************************************************************** -->
      <!-- Start Top Leader Table -->
      <!-- *************************************************************** -->
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <div class="d-flex align-items-center mb-4">
                          <h4 class="card-title">Notifikasi Masuk</h4>
                          <div class="ml-auto">
                              <div class="dropdown sub-dropdown">
                                  <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                      id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                      aria-expanded="false">
                                      <i data-feather="more-vertical"></i>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                      <a class="dropdown-item" href="#">Insert</a>
                                      <a class="dropdown-item" href="#">Update</a>
                                      <a class="dropdown-item" href="#">Delete</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="table-responsive">
                          <table class="table no-wrap v-middle mb-0">
                              <thead>
                                  <tr class="border-0">
                                      <th class="border-0 font-14 font-weight-medium text-muted">Team Lead
                                      </th>
                                      <th class="border-0 font-14 font-weight-medium text-muted px-2">Project
                                      </th>
                                      <th class="border-0 font-14 font-weight-medium text-muted">Team</th>
                                      <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                          Status
                                      </th>
                                      <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                          Weeks
                                      </th>
                                      <th class="border-0 font-14 font-weight-medium text-muted">Budget</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td class="border-top-0 px-2 py-4">
                                          <div class="d-flex no-block align-items-center">
                                              <div class="mr-3"><img
                                                      src="assets/images/users/widget-table-pic1.jpg"
                                                      alt="user" class="rounded-circle" width="45"
                                                      height="45" /></div>
                                              <div class="">
                                                  <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna
                                                      Gover</h5>
                                                  <span class="text-muted font-14">hgover@gmail.com</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="border-top-0 text-muted px-2 py-4 font-14">Elite Admin</td>
                                      <td class="border-top-0 px-2 py-4">
                                          <div class="popover-icon">
                                              <a class="btn btn-primary rounded-circle btn-circle font-12"
                                                  href="javascript:void(0)">DS</a>
                                              <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                                  href="javascript:void(0)">SS</a>
                                              <a class="btn btn-cyan rounded-circle btn-circle font-12 popover-item"
                                                  href="javascript:void(0)">RP</a>
                                              <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                  href="javascript:void(0)">+</a>
                                          </div>
                                      </td>
                                      <td class="border-top-0 text-center px-2 py-4"><i
                                              class="fa fa-circle text-primary font-12" data-toggle="tooltip"
                                              data-placement="top" title="In Testing"></i></td>
                                      <td
                                          class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                          35
                                      </td>
                                      <td class="font-weight-medium text-dark border-top-0 px-2 py-4">$96K
                                      </td>
                                  </tr>
                                  <tr>
                                      <td class="px-2 py-4">
                                          <div class="d-flex no-block align-items-center">
                                              <div class="mr-3"><img
                                                      src="assets/images/users/widget-table-pic2.jpg"
                                                      alt="user" class="rounded-circle" width="45"
                                                      height="45" /></div>
                                              <div class="">
                                                  <h5 class="text-dark mb-0 font-16 font-weight-medium">Daniel
                                                      Kristeen
                                                  </h5>
                                                  <span class="text-muted font-14">Kristeen@gmail.com</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-muted px-2 py-4 font-14">Real Homes WP Theme</td>
                                      <td class="px-2 py-4">
                                          <div class="popover-icon">
                                              <a class="btn btn-primary rounded-circle btn-circle font-12"
                                                  href="javascript:void(0)">DS</a>
                                              <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                                  href="javascript:void(0)">SS</a>
                                              <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                  href="javascript:void(0)">+</a>
                                          </div>
                                      </td>
                                      <td class="text-center px-2 py-4"><i
                                              class="fa fa-circle text-success font-12" data-toggle="tooltip"
                                              data-placement="top" title="Done"></i>
                                      </td>
                                      <td class="text-center text-muted font-weight-medium px-2 py-4">32</td>
                                      <td class="font-weight-medium text-dark px-2 py-4">$85K</td>
                                  </tr>
                                  <tr>
                                      <td class="px-2 py-4">
                                          <div class="d-flex no-block align-items-center">
                                              <div class="mr-3"><img
                                                      src="assets/images/users/widget-table-pic3.jpg"
                                                      alt="user" class="rounded-circle" width="45"
                                                      height="45" /></div>
                                              <div class="">
                                                  <h5 class="text-dark mb-0 font-16 font-weight-medium">Julian
                                                      Josephs
                                                  </h5>
                                                  <span class="text-muted font-14">Josephs@gmail.com</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-muted px-2 py-4 font-14">MedicalPro WP Theme</td>
                                      <td class="px-2 py-4">
                                          <div class="popover-icon">
                                              <a class="btn btn-primary rounded-circle btn-circle font-12"
                                                  href="javascript:void(0)">DS</a>
                                              <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                                  href="javascript:void(0)">SS</a>
                                              <a class="btn btn-cyan rounded-circle btn-circle font-12 popover-item"
                                                  href="javascript:void(0)">RP</a>
                                              <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                  href="javascript:void(0)">+</a>
                                          </div>
                                      </td>
                                      <td class="text-center px-2 py-4"><i
                                              class="fa fa-circle text-primary font-12" data-toggle="tooltip"
                                              data-placement="top" title="Done"></i>
                                      </td>
                                      <td class="text-center text-muted font-weight-medium px-2 py-4">29</td>
                                      <td class="font-weight-medium text-dark px-2 py-4">$81K</td>
                                  </tr>
                                  <tr>
                                      <td class="px-2 py-4">
                                          <div class="d-flex no-block align-items-center">
                                              <div class="mr-3"><img
                                                      src="assets/images/users/widget-table-pic4.jpg"
                                                      alt="user" class="rounded-circle" width="45"
                                                      height="45" /></div>
                                              <div class="">
                                                  <h5 class="text-dark mb-0 font-16 font-weight-medium">Jan
                                                      Petrovic
                                                  </h5>
                                                  <span class="text-muted font-14">hgover@gmail.com</span>
                                              </div>
                                          </div>
                                      </td>
                                      <td class="text-muted px-2 py-4 font-14">Hosting Press HTML</td>
                                      <td class="px-2 py-4">
                                          <div class="popover-icon">
                                              <a class="btn btn-primary rounded-circle btn-circle font-12"
                                                  href="javascript:void(0)">DS</a>
                                              <a class="btn btn-success text-white font-20 rounded-circle btn-circle"
                                                  href="javascript:void(0)">+</a>
                                          </div>
                                      </td>
                                      <td class="text-center px-2 py-4"><i
                                              class="fa fa-circle text-danger font-12" data-toggle="tooltip"
                                              data-placement="top" title="In Progress"></i></td>
                                      <td class="text-center text-muted font-weight-medium px-2 py-4">23</td>
                                      <td class="font-weight-medium text-dark px-2 py-4">$80K</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- *************************************************************** -->
      <!-- End Top Leader Table -->
      <!-- *************************************************************** -->
  </div>
  <!-- ============================================================== -->
  <!-- End Container fluid  -->
  <!-- ============================================================== -->
  @include('admin.layouts.partials.footer')
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

@endsection                    