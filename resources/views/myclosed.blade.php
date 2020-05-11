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
                <li class="breadcrumb-item active">My Closed Inbox</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
    
    <div class="container-fluid">
        
      <div class="row">

        <div class="col-md-12">

            
            <div class="row">
            <div class="col-12">                
            <div class="card card-warning card-outline">
                
                <div class="card-header ">
                <h3 class="card-title ">My Closed</h3>
  
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

<!----------------------------------------------------------ADD DOCUMENT MODAL------------------------------------------------>            
    <!-- MODAL BODY-->
        <div class="modal fade" id="modal-add">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <!-- MODAL HEADER-->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <!-- ./MODAL HEADER-->

                    <!-- MODAL BODY-->
                    <div class="modal-body">
                    <form action="#" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Classification</label>
                                <input type="text" name="classification" placeholder="" id="classification" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Subject</label>
                                <input type="text" name="subject" placeholder="" id="subject" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Document Type</label>
                                <input type="text" name="document_type" placeholder="" id="document_type" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Office Name</label>
                                <input type="text" name="office_name" placeholder="" id="office_name" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Addressee</label>
                                <input type="text" name="addressee" placeholder="" id="addressee" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Sender's Name</label>
                                <input type="text" name="sender_name" placeholder="" id="sender_name" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Sender's Profile</label>
                                <input type="text" name="sender_profile" placeholder="" id="sender_profile" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Mode of Delivery</label>
                                <input type="text" name="mode_of_delivery" placeholder="" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Date Closed:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                                </div>
                                <input type="date" name="date_Closed"  id="date_Closed" placeholder="11/11/2020" class="form-control float-right">
                            </div>
                            </div>
                            <div class="form-group">
                            <label>Time Closed:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-clock"></i>
                                </span>
                                </div>
                                <input type="time" name="time_Closed" id="time_Closed" placeholder="10:00 AM" class="form-control float-right">
                            </div>
                            </div>
                            
                        </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form> 
                </div>
                </div>
        </div>
    <!-- ./MODAL BODY-->

<!----------------------------------------------------------EDIT DOCUMENT MODAL----------------------------------------------->            
    <!-- MODAL BODY-->
        <div class="modal fade" id="modal-edit">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <!-- MODAL HEADER-->
                    <div class="modal-header">
                    <h4 class="modal-title"><i class="far fa-edit text-black"></i>Edit Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <!-- ./MODAL HEADER-->

                    <!-- MODAL BODY-->
                    <div class="modal-body">
                    <form action="#" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Classification</label>
                                <input type="text" name="classification" placeholder="" id="classification" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Subject</label>
                                <input type="text" name="subject" placeholder="" id="subject" class="form-control">
                            </div>
                                <input type="hidden" id="document_id" name="document_id">
                            <div class="form-group">
                            <label>Document Type</label>
                                <input type="text" name="document_type" placeholder="" id="document_type" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Office Name</label>
                                <input type="text" name="office_name" placeholder="" id="office_name" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Addressee</label>
                                <input type="text" name="addressee" placeholder="" id="addressee" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Sender's Name</label>
                                <input type="text" name="sender_name" placeholder="" id="sender_name" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Sender's Profile</label>
                                <input type="text" name="sender_profile" placeholder="" id="sender_profile" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Mode of Delivery</label>
                                <input type="text" name="mode_of_delivery" placeholder="" id="mode_of_delivery" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Date Closed:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                                </div>
                                <input type="date" name="date_Closed"  id="date_Closed" placeholder="11/11/2020" class="form-control float-right">
                            </div>
                            </div>
                            <div class="form-group">
                            <label>Time Closed:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-clock"></i>
                                </span>
                                </div>
                                <input type="time" name="time_Closed" id="time_Closed" placeholder="10:00 AM" class="form-control float-right">
                            </div>
                            </div>
                            
                        </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form> 
                </div>
                </div>
        </div>
    <!-- ./MODAL BODY-->

<!----------------------------------------------------------DELETE DOCUMENT MODAL--------------------------------------------->            
    <!-- MODAL BODY-->
        <div class="modal fade" id="modal-delete">
            <div class="modal-dialog modal-s">
                <div class="modal-content">
                <!-- MODAL HEADER-->
                    <div class="modal-header">
                    <h4 class="modal-title"><i class="far fa-trash-alt text-red"></i>Delete Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <!-- ./MODAL HEADER-->

                    <!-- MODAL BODY-->
                    <div class="modal-body">
                    <form action="#" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                                <input type="hidden" id="document_id" name="document_id">
                                <p>Are you sure you want to delete this document?</p>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                    </form> 
                </div>
            </div>
        </div>
    <!-- ./MODAL BODY-->    

<!----------------------------------------------------------VIEW DOCUMENT MODAL----------------------------------------------->            
    <!-- MODAL BODY-->
    <div class="modal fade" id="modal-view">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <!-- MODAL HEADER-->
                <div class="modal-header">
                
                <h4 class="modal-title"><i class="far fa-eye text-black"></i>View Document</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <!-- ./MODAL HEADER-->

                <!-- MODAL BODY-->
                <div class="modal-body">
                <form action="#" method="GET">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Classification</label>
                            <input type="text" name="classification" placeholder="" id="classification" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                        <label>Subject</label>
                            <input type="text" name="subject" placeholder="" id="subject" class="form-control" readonly>
                        </div>
                            <input type="hidden" id="document_id" name="document_id">
                        <div class="form-group">
                        <label>Document Type</label>
                            <input type="text" name="document_type" placeholder="" id="document_type" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                        <label>Office Name</label>
                            <input type="text" name="office_name" placeholder="" id="office_name" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                        <label>Addressee</label>
                            <input type="text" name="addressee" placeholder="" id="addressee" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Sender's Name</label>
                            <input type="text" name="sender_name" placeholder="" id="sender_name" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                        <label>Sender's Profile</label>
                            <input type="text" name="sender_profile" placeholder="" id="sender_profile" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                        <label>Mode of Delivery</label>
                            <input type="text" name="mode_of_delivery" placeholder="" id="mode_of_delivery" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                        <label>Date Closed:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                            </span>
                            </div>
                            <input type="text" name="date_Closed"  id="date_Closed" placeholder="11/11/2020" class="form-control float-right" readonly>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Time Closed:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-clock"></i>
                            </span>
                            </div>
                            <input type="text" name="time_Closed" id="time_Closed" placeholder="10:00 AM" class="form-control float-right" readonly>
                        </div>
                        </div>
                        
                    </div>
                    </div>
                    
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!--<button type="submit" class="btn btn-primary">View</button>-->
                </div>
            </form> 
            </div>
            </div>
    </div>
<!-- ./MODAL BODY-->


    </div>
</div>

@endsection