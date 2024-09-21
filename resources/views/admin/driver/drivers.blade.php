@extends('admin.layouts.main')
@push('title')
    <title>Driver</title>
@endpush
@section('main-admin')
<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Table</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="{{ url('/') }}">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="{{ route('driver.table') }}">Drivers</a>
          </li>
          {{-- <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="{{ route('driver.table') }}">Table</a>
          </li> --}}
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">
                <h4 class="card-title">Add Row</h4>
                    <button
                    class="btn btn-primary btn-round ms-auto"
                    data-bs-toggle="modal"
                    data-bs-target="#addRowModal"
                    >
                        <i class="fa fa-plus"></i>
                        Add Driver
                    </button>
              </div>
            </div>
            <div class="card-body">
              <!-- Modal -->
              <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header border-0">
                      <h5 class="modal-title">
                        <span class="fw-mediumbold"> New</span>
                        <span class="fw-light"> Driver </span>
                      </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="small">
                        Add a new driver using this form, make sure you
                        fill them all
                      </p>
                      <form action="{{ url('/drivers') }}" method="POST">
                        @csrf
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group form-group-default">
                              <label>Name</label>
                              <input id="addName" type="text" class="form-control" name="driverName" placeholder="fill name" />
                            </div>
                          </div>
                          <div class="col-md-6 pe-0">
                            <div class="form-group form-group-default">
                              <label>Contact</label>
                              <input id="addPosition" type="text" class="form-control" name="driverContactNo" placeholder="fill contact no" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group form-group-default">
                              <label>License</label>
                              <input id="addOffice" type="text" class="form-control" name="driverLicenseNo" placeholder="fill license no"/>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Address</label>
                                <textarea class="form-control" name="driverAddress" id="address" rows="3"></textarea>
                              </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Add
                        </button>
                      </form>
                    </div>
                    <div class="modal-footer border-0">
                      
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <table
                  id="add-row"
                  class="display table table-striped table-hover"
                >
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Contact No</th>
                      <th>License No</th>
                      <th style="width: 10%">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Contact No</th>
                      <th>License No</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($drivers as $driver)
                        <tr>
                        <td>{{ $driver->driver_name }}</td>
                        <td>{{ $driver->contact_no }}</td>
                        <td>{{ $driver->license_number }}</td>
                        <td>
                            <div class="form-button-action">
                            <button type="button" data-bs-toggle="tooltip" title="Edit"
                                class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task" >
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" data-bs-toggle="tooltip" title="Remove" 
                                class="btn btn-link btn-danger" data-original-title="Remove" >
                                <i class="fa fa-times"></i>
                            </button>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div >
</div>
@endsection