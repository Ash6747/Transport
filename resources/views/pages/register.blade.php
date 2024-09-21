@extends('pages.layouts.main')
@push('title')
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
@endpush
@section('main-xyz')
    <div class="main-cont row">
        {{-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> --}}
        <section class="vh-100" style="background-color: #eee;">
            <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body ">
                        {{-- p-md-5 --}}
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
        
                        <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-4 mt-3">Sign up</p>
        
                        <form action="{{url('/register')}}" method="POST" class="mx-1 mx-md-4">
                            @csrf

                            <x-input name="name" label="Your Name" type="text" value="name" icon='<i class="fas fa-user fa-lg me-3 fa-fw"></i>'/>
                            <x-input name="email" label="Your Email" type="email" value="email" icon='<i class="fas fa-envelope fa-lg me-3 fa-fw"></i>'/>
                            <x-input name="clgName" label="Your College" type="text" value="clgName" icon='<i class="fa-solid fa-building-columns fa-lg me-3 fa-fw"></i>'/>
                            <x-input name="contact" label="Your Contact" type="tel" value="contact" icon='<i class="fa-solid fa-phone fa-lg me-3 fa-fw"></i>'/>
                            <x-input name="password" label="Password" type="password" icon='<i class="fas fa-lock fa-lg me-3 fa-fw"></i>'/>
                            <x-input name="confirm_password" label="Repeat your password" type="password" icon='<i class="fas fa-key fa-lg me-3 fa-fw"></i>'/>
        
                            <div class="form-check d-flex justify-content-center mb-5">
                                <input name="access" class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                <label class="form-check-label" for="form2Example3">
                                    I agree all statements in <a href="#!">Terms of service</a>
                                </label>
                            </div>
        
                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Register</button>
                            </div>
        
                        </form>
        
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
        
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                            class="img-fluid" alt="Sample image">
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
    </div>

@endsection
