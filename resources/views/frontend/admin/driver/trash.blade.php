@extends('frontend.admin.layouts.main')
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
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="{{ route('driver.trash') }}">Trash</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">
                <h4 class="card-title">Add Row</h4>
                    
                    <a class="ms-auto" href="{{ route('driver.table') }}">
                      <button class="btn btn-primary btn-round ">
                          <i class="fas fa-table"></i>
                          Drivers Table
                      </button>
                    </a>
              </div>
            </div>
            <div class="card-body">
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
                      <th>Status</th>
                      <th style="width: 10%">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Contact No</th>
                      <th>License No</th>
                      <th>Status</th>
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
                          @if ($driver->status)
                            <a class="badge badge-success" href="{{ route('driver.status', ['id' => $driver->driver_id])}}">Active</a>
                          @else
                            <a class="badge badge-danger" href="{{ route('driver.status', ['id' => $driver->driver_id])}}">Inactive</a>
                          @endif
                        </td>
                        <td>
                            <div class="form-button-action">
                              <a href="{{ route('driver.restore', ['id' => $driver->driver_id])}}">
                                <button type="button" data-bs-toggle="tooltip" title="Restore"
                                    class="btn btn-link btn-primary btn-lg" data-original-title="Restore Task" >
                                    <i class="icon-reload"></i>
                                </button>
                              </a>
                              <a href="{{ route('driver.hardDelete', ['id' => $driver->driver_id]) }}">
                                <button type="button" data-bs-toggle="tooltip" title="Delete Permantly" 
                                    class="btn btn-link btn-danger btn-lg" data-original-title="Delete Permantly" >
                                    <i class="icon-trash"></i>
                                </button>
                              </a>
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
@push('script')
  {{-- script for data Table --}}
  <x-table-script/>
  {{-- script for data Table end --}}
@endpush