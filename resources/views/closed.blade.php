@extends('layouts.mylayout')
@extends('layouts.dashboardlayout')

@section('content')

<!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="far fa-folder text-black">&nbsp;</i>Documents</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Closed Documents</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">                
                <div class="card card-success card-outline">
                    <div class="card-header ">
                        <h3 class="card-title ">Closed</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead class="thead-light">
                        <tr>
                            <th>ID &nbsp;&nbsp; ↑↓</th>
                            <th>Classification &nbsp; ↑↓</th>
                            <th>Subject &nbsp;&nbsp; ↑↓</th>
                            <th>Date Closed &nbsp;&nbsp; ↑↓</th>
                            <th>Time Closed &nbsp;&nbsp; ↑↓</th>
                            <th>Action &nbsp;&nbsp; ↑↓</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Closed</td>
                                <td>CSC Collaboration</td>
                                <td>12/12/2020</td>
                                <td>10:00 AM</td>
                                <td><i class="far fa-eye text-gray"></i>
                                    <i class="far fa-edit text-gray"></i>
                                    <i class="far fa-trash-alt text-red"></i>
                                </td>
                                <tr>
                                    <td>2</td>
                                    <td>Closed</td>
                                    <td>CSC Collaboration</td>
                                    <td>12/12/2020</td>
                                    <td>10:00 AM</td>
                                    <td><i class="far fa-eye text-gray"></i>
                                        <i class="far fa-edit text-gray"></i>
                                        <i class="far fa-trash-alt text-red"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Closed</td>
                                    <td>CSC Collaboration</td>
                                    <td>12/12/2020</td>
                                    <td>10:00 AM</td>
                                    <td><i class="far fa-eye text-gray"></i>
                                        <i class="far fa-edit text-gray"></i>
                                        <i class="far fa-trash-alt text-red"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Closed</td>
                                    <td>CSC Collaboration</td>
                                    <td>12/12/2020</td>
                                    <td>10:00 AM</td>
                                    <td><i class="far fa-eye text-gray"></i>
                                        <i class="far fa-edit text-gray"></i>
                                        <i class="far fa-trash-alt text-red"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Closed</td>
                                    <td>CSC Collaboration</td>
                                    <td>12/12/2020</td>
                                    <td>10:00 AM</td>
                                    <td><i class="far fa-eye text-gray"></i>
                                        <i class="far fa-edit text-gray"></i>
                                        <i class="far fa-trash-alt text-red"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Closed</td>
                                    <td>CSC Collaboration</td>
                                    <td>12/12/2020</td>
                                    <td>10:00 AM</td>
                                    <td><i class="far fa-eye text-gray"></i>
                                        <i class="far fa-edit text-gray"></i>
                                        <i class="far fa-trash-alt text-red"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Closed</td>
                                    <td>CSC Collaboration</td>
                                    <td>12/12/2020</td>
                                    <td>10:00 AM</td>
                                    <td><i class="far fa-eye text-gray"></i>
                                        <i class="far fa-edit text-gray"></i>
                                        <i class="far fa-trash-alt text-red"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Closed</td>
                                    <td>CSC Collaboration</td>
                                    <td>12/12/2020</td>
                                    <td>10:00 AM</td>
                                    <td><i class="far fa-eye text-gray"></i>
                                        <i class="far fa-edit text-gray"></i>
                                        <i class="far fa-trash-alt text-red"></i>
                                    </td>
                                </tr>
                            </tr> 
                        <tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

@endsection