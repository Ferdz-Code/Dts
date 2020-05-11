@extends('layouts.mylayout')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-envelope text-black">&nbsp;</i>Inbox</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Inbox</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
   <div class="col md-12"> 
    <div class="card card-primary card-outline">
        <!--<div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-edit"></i>
            Documents
          </h3>
        </div>-->
        
          <div class="card-header">
          <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">

            <li class="nav-item">
              <a class="nav-link active" id="custom-content-above-received-tab" data-toggle="pill" href="#custom-content-above-received" role="tab" aria-controls="custom-content-above-received" aria-selected="true">Received</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="custom-content-above-Outgoing-tab" data-toggle="pill" href="#custom-content-above-Outgoing" role="tab" aria-controls="custom-content-above-Outgoing" aria-selected="false">Outgoing</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="custom-content-above-internal-tab" data-toggle="pill" href="#custom-content-above-internal" role="tab" aria-controls="custom-content-above-internal" aria-selected="false">Internal</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="custom-content-above-closed-tab" data-toggle="pill" href="#custom-content-above-closed" role="tab" aria-controls="custom-content-above-closed" aria-selected="false">Closed</a>
            </li>

          </ul>
          </div>

          <!--<div class="tab-custom-content">
            <p class="lead mb-0">Custom Content goes here</p>
          </div>-->

          <div class="tab-content" id="custom-content-above-tabContent">
              
            <div class="tab-pane fade active show" id="custom-content-above-received" role="tabpanel" aria-labelledby="custom-content-above-received-tab">  
                <table class="table table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th>ID &nbsp;&nbsp; ↑↓</th>
                        <th>Classification &nbsp; ↑↓</th>
                        <th>Subject &nbsp;&nbsp; ↑↓</th>
                        <th>Date Received &nbsp;&nbsp; ↑↓</th>
                        <th>Time Received &nbsp;&nbsp; ↑↓</th>
                        <th>Action &nbsp;&nbsp; ↑↓</th>
                    </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>Received</td>
                                <td>CSC Collaboration</td>
                                <td>12/12/2020</td>
                                <td>10:00 AM</td>
                                <td><i class="far fa-eye text-gray"></i>
                                    <i class="far fa-edit text-gray"></i>
                                    <i class="far fa-trash-alt text-red"></i>
                                </td>
                                <tr>
                                    <td>2</td>
                                    <td>Received</td>
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
                                    <td>Received</td>
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
                                    <td>Received</td>
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
                                    <td>Received</td>
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
                                    <td>Received</td>
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
                                    <td>Received</td>
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
                                    <td>Received</td>
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

            <div class="tab-pane fade" id="custom-content-above-Outgoing" role="tabpanel" aria-labelledby="custom-content-above-Outgoing-tab">
                <table class="table table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th>ID &nbsp;&nbsp; ↑↓</th>
                        <th>Classification &nbsp; ↑↓</th>
                        <th>Subject &nbsp;&nbsp; ↑↓</th>
                        <th>Date Received &nbsp;&nbsp; ↑↓</th>
                        <th>Time Received &nbsp;&nbsp; ↑↓</th>
                        <th>Action &nbsp;&nbsp; ↑↓</th>
                    </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>Outgoing</td>
                                <td>CSC Collaboration</td>
                                <td>12/12/2020</td>
                                <td>10:00 AM</td>
                                <td><i class="far fa-eye text-gray"></i>
                                    <i class="far fa-edit text-gray"></i>
                                    <i class="far fa-trash-alt text-red"></i>
                                </td>
                                <tr>
                                    <td>2</td>
                                    <td>Outgoing</td>
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
                                    <td>Outgoing</td>
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
                                    <td>Outgoing</td>
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
                                    <td>Outgoing</td>
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

            <div class="tab-pane fade" id="custom-content-above-internal" role="tabpanel" aria-labelledby="custom-content-above-internal-tab">
                <table class="table table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th>ID &nbsp;&nbsp; ↑↓</th>
                        <th>Classification &nbsp; ↑↓</th>
                        <th>Subject &nbsp;&nbsp; ↑↓</th>
                        <th>Date Received &nbsp;&nbsp; ↑↓</th>
                        <th>Time Received &nbsp;&nbsp; ↑↓</th>
                        <th>Action &nbsp;&nbsp; ↑↓</th>
                    </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>Internal</td>
                                <td>CSC Collaboration</td>
                                <td>12/12/2020</td>
                                <td>10:00 AM</td>
                                <td><i class="far fa-eye text-gray"></i>
                                    <i class="far fa-edit text-gray"></i>
                                    <i class="far fa-trash-alt text-red"></i>
                                </td>
                                <tr>
                                    <td>2</td>
                                    <td>Internal</td>
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
                                    <td>Internal</td>
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
                                    <td>Internal</td>
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
                                    <td>Internal</td>
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
                                    <td>Internal</td>
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
                                    <td>Internal</td>
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

            <div class="tab-pane fade" id="custom-content-above-closed" role="tabpanel" aria-labelledby="custom-content-above-closed-tab">
                <table class="table table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th>ID &nbsp;&nbsp; ↑↓</th>
                        <th>Classification &nbsp; ↑↓</th>
                        <th>Subject &nbsp;&nbsp; ↑↓</th>
                        <th>Date Received &nbsp;&nbsp; ↑↓</th>
                        <th>Time Received &nbsp;&nbsp; ↑↓</th>
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
                            </tr> 
                        <tbody>
                </table>
            </div>

         </div>
    </div>
   </div>
</section> 


    </div>
</div>

@endsection