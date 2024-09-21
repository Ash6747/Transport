@extends('pages.layouts.main')
@push('title')
    <title>Home</title>
@endpush
@section('main-xyz')
    <h1>Home</h1>
    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">User name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Collage Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Password</th>
                    <th scope="col">access</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($admin as $admin)
                    <tr class="">
                        <td scope="row">{{ $admin->username }}</td>
                        <td scope="row">{{ $admin->email }}</td>
                        <td scope="row">{{ $admin->clgName }}</td>
                        <td scope="row">{{ $admin->contact }}</td>
                        <td scope="row">{{ $admin->password }}</td>
                        <td scope="row">{{ $admin->access }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection