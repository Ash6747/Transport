@extends('admin.layouts.main')
@push('title')
    <title>Create Driver</title>
@endpush
@section('main-admin')
<div class="page-header">
    <h3 class="fw-bold mb-3">Forms</h3>
    <ul class="breadcrumbs mb-3">
      <li class="nav-home">
        <a href="#">
          <i class="icon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="icon-arrow-right"></i>
      </li>
      <li class="nav-item">
        <a href="#">Forms</a>
      </li>
      <li class="separator">
        <i class="icon-arrow-right"></i>
      </li>
      <li class="nav-item">
        <a href="#">Basic Form</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <form action="{{ $url }}" method="post">
          @csrf
          <div class="card-header">
            <div class="card-title">{{ $title }}</div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4 col-lg-4">
                      <label for="fName">First Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="fName"
                        placeholder="Enter Name"
                        name="fName"
                        value=""
                      />
                      {{-- <small id="fNameMessage" class="form-text text-muted"
                        >We'll never share your email with anyone
                        else.</small
                      > --}}
                    </div>
                    <div class="col-md-4 col-lg-4">
                      <label for="mName">Middle Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="mName"
                        placeholder="Enter Name"
                        name="mName"
                      />
                      {{-- <small id="mNameMessage" class="form-text text-muted"
                        >We'll never share your email with anyone
                        else.</small
                      > --}}
                    </div>
                    <div class="col-md-4 col-lg-4">
                      <label for="lName">Last Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="lName"
                        placeholder="Enter Name"
                        name="lName"
                      />
                      {{-- <small id="lNameMessage" class="form-text text-muted"
                        >We'll never share your email with anyone
                        else.</small
                      > --}}
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="contact">Contact Number</label>
                  <input
                    type="tel"
                    class="form-control"
                    id="contact"
                    placeholder="Contact"
                    name="driverContactNo"
                    {{ $driver->contact_no }}
                  />
                </div>

                <div class="form-group">
                  <label for="license">License Number</label>
                  <input
                    type="text"
                    class="form-control"
                    id="license"
                    placeholder="License"
                    name="driverLicenseNo"
                    value="{{ $driver->license_number }}"
                  />
                </div>

              </div>
              <div class="col-md-6 col-lg-6">

                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea 
                  class="form-control" 
                  name="driverAddress" 
                  id="address" 
                  rows="8"
                  value="{{ $driver->address }}"
                  ></textarea>
                </div>
                
              </div>
            </div>
          </div>
          <div class="card-action">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{ route('driver.table') }}" class="btn btn-danger">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection