@extends('layouts.mylayout')
@extends('layouts.dashboardlayout')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid px-4 mt-2">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-folder text-black">&nbsp;</i>Documents</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <button type="button" class="btn btn-primary float-right clearfix elevation-2" data-toggle="modal" data-target="#modal-add" >
                    Add Document</i></button>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
    
        <div class="col-12">
            
            
            <div class="row">
                <div class="col-12 px-4">     
                    @if($message = Session::get('success'))    
            <div class="alert alert-success alert-auto" role="alert">{{$message}}</div>
            @endif           
                <div class="card elevation-2">
                
                    <div class="card-header p-4">
                <h3 class="card-title ">Newly Created Documents</h3>
  
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                    </div>
                </div>
                </div>
  
                <div class="card-body table-responsive p-0 elevation-2">
                <table class="table table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th>ID &nbsp;&nbsp; ↑↓</th>
                        <th>Classification &nbsp; ↑↓</th>
                        <th>Subject &nbsp;&nbsp; ↑↓</th>
                        
                        <th>Attachment &nbsp;&nbsp; ↑↓</th>
                        <th>Date Received &nbsp;&nbsp; ↑↓</th>
                        <th>Time Received &nbsp;&nbsp; ↑↓</th>
                        <th>Action &nbsp;&nbsp; ↑↓</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($documents as $document)
                            <tr>
                                <td>{{$document->id}}</td>
                                <td>{{$document->classification}}</td>
                                <td>{{$document->subject}}</td>
                                <td>{{$document->document_file}}</td>
                                <td>{{$document->date_received}}</td>
                                <td>{{$document->time_received}}</td>
                                <td>
                                    <!-------------------------------VIEW BUTTON----------------------------------->
                                    <a href="" 
                                        data-document_id="{{$document ->id}}"
                                        data-classification="{{$document ->classification}}"
                                        data-subject="{{$document ->subject}}"
                                        data-document_type="{{$document ->document_type}}"
                                        data-sender_name="{{$document ->sender_name}}"
                                        data-sender_profile="{{$document ->sender_profile}}"
                                        data-mode_of_delivery="{{$document ->mode_of_delivery}}"
                                        data-addressee="{{$document ->addressee}}"
                                        data-office_name="{{$document ->office_name}}"
                                        data-document_file="{{$document->document_file}}"
                                        data-date_received="{{$document ->date_received}}"
                                        data-time_received="{{$document ->time_received}}"
                                        data-toggle="modal" data-target="#modal-view"><i class="far fa-eye text-gray"></i>
                                    </a>
                                    <!------------------------------/VIEW BUTTON----------------------------------->
                                    
                                    <!-------------------------------EDIT BUTTON----------------------------------->
                                    <a href="" 
                                        data-document_id="{{$document ->id}}"
                                        data-classification="{{$document ->classification}}"
                                        data-subject="{{$document ->subject}}"
                                        data-document_type="{{$document ->document_type}}"
                                        data-sender_name="{{$document ->sender_name}}"
                                        data-sender_profile="{{$document ->sender_profile}}"
                                        data-mode_of_delivery="{{$document ->mode_of_delivery}}"
                                        data-addressee="{{$document ->addressee}}"
                                        data-office_name="{{$document ->office_name}}"
                                        data-document_file="{{$document->document_file}}"
                                        data-date_received="{{$document ->date_received}}"
                                        data-time_received="{{$document ->time_received}}"
                                        data-toggle="modal" data-target="#modal-edit"><i class="far fa-edit text-gray"></i>
                                    </a>
                                    <!------------------------------/EDIT BUTTON----------------------------------->
        
                                    <!-------------------------------DELETE BUTTON--------------------------------->
                                    <a href="" 
                                    data-document_id="{{$document ->id}}" 
                                    data-classification="{{$document ->classification}}"
                                    data-subject="{{$document ->subject}}"
                                    data-sender_name="{{$document ->sender_name}}"
                                    data-toggle="modal" data-target="#modal-delete"><i class="far fa-trash-alt text-red"></i></a>
                                    <!------------------------------/DELETE BUTTON--------------------------------->
        
                                </td>
                            </tr>
                        @endforeach 
                        <tbody>
                   </table>
                </div>
            </div>
            <div class="float-right ">{{$documents->links()}}</div>
            </div>

</section> 

<!----------------------------------------------------------ADD DOCUMENT MODAL------------------------------------------------>            
    <!-- MODAL BODY-->
        <div class="modal fade" id="modal-add">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <!-- MODAL HEADER-->
                    <div class="modal-header">
                    <h4 class="modal-title"><i class="far fa-paper-plane"></i>&nbsp;Add Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <!-- ./MODAL HEADER-->

                    <!-- MODAL BODY-->
                    <div class="modal-body">
                    <form action="{{route('document.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Classification*</label>
                                <input type="text" name="classification" placeholder="" id="classification" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Subject*</label>
                                <input type="text" name="subject" placeholder="" id="subject" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Document Type*</label>
                                <input type="text" name="document_type" placeholder="" id="document_type" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Office Name*</label>
                                <input type="text" name="office_name" placeholder="" id="office_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Addressee*</label>
                                <input type="text" name="addressee" placeholder="" id="addressee" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Upload*</label><br>
                                    <input type="file" name="document_file" placeholder="" id="document_file" required>
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
                            <label>Date received:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                                </div>
                                <input type="date" name="date_received"  id="date_received" placeholder="11/11/2020" class="form-control float-right">
                            </div>
                            </div>
                            <div class="form-group">
                            <label>Time received:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-clock"></i>
                                </span>
                                </div>
                                <input type="time" name="time_received" id="time_received" placeholder="10:00 AM" class="form-control float-right">
                            </div>
                            </div>
                            
                        </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</i></button>
                    <button type="submit" class="btn btn-primary">Confirm&nbsp;<i class="fas fa-check"></i></button>
                    
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
                    <h4 class="modal-title"><i class="far fa-edit text-black">&nbsp;</i>Edit Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <!-- ./MODAL HEADER-->

                    <!-- MODAL BODY-->
                    <div class="modal-body">
                    <form action="{{route('document.update','document_id')}}" method="POST" enctype="multipart/form-data">
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
                            <div class="form-group">
                            <label>Upload</label><br>
                                <input type="text" name="document_file" placeholder="" id="document_file" class="form-control">
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
                            <label>Date received:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                                </div>
                                <input type="date" name="date_received"  id="date_received" placeholder="11/11/2020" class="form-control float-right">
                            </div>
                            </div>
                            <div class="form-group">
                            <label>Time received:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-clock"></i>
                                </span>
                                </div>
                                <input type="time" name="time_received" id="time_received" placeholder="10:00 AM" class="form-control float-right">
                            </div>
                            </div>
                            
                        </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update&nbsp;<i class="far fa-edit"></i></button>
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
                    <h4 class="modal-title"><i class="far fa-trash-alt text-red">&nbsp;</i>Delete Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <!-- ./MODAL HEADER-->

                    <!-- MODAL BODY-->
                    <div class="modal-body">
                    <form action="{{route('document.destroy','document_id')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-12">
                            <p>This is permanent and cannot be undo. Are you sure?</p>
                            <div class="form-group">
                            <label>Document ID</label>
                            <input type="text" name="document_id" placeholder="" id="document_id" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                            <label>Classification</label>
                            <input type="text" name="classification" placeholder="" id="classification" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" placeholder="" id="subject" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                            <label>Sender</label>
                            <input type="text" name="sender_name" placeholder="" id="sender_name" class="form-control" readonly>
                            </div>

                        </div>
                    </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete&nbsp;<i class="fa fa-trash"></i></button>
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
                    
                    <h4 class="modal-title"><i class="far fa-eye text-black">&nbsp;</i>View Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <!-- ./MODAL HEADER-->

                    <!-- MODAL BODY-->
                    <div class="modal-body">
                    <form action="{{route('document.show','document_id')}}" method="GET" enctype="multipart/form-data">
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
                            <div class="form-group">
                            <label>Upload</label><br>
                                <input type="text" name="document_file" placeholder="" id="document_file" class="form-control" readonly>
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
                            <label>Date received:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                                </div>
                                <input type="text" name="date_received"  id="date_received" placeholder="11/11/2020" class="form-control float-right" readonly>
                            </div>
                            </div>
                            <div class="form-group">
                            <label>Time received:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-clock"></i>
                                </span>
                                </div>
                                <input type="text" name="time_received" id="time_received" placeholder="10:00 AM" class="form-control float-right" readonly>
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


<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>


<script>



    //------------------EDIT MODAL--------------------//
    $('#modal-edit').on('show.bs.modal', function(event){
    
    var button = $(event.relatedTarget)
    var classification = button.data('classification')
    var subject = button.data('subject')
    var document_type = button.data('document_type')
    var sender_name = button.data('sender_name')
    var sender_profile = button.data('sender_profile')
    var mode_of_delivery = button.data('mode_of_delivery')
    var addressee = button.data('addressee')
    var office_name = button.data('office_name')
    var document_file = button.data('document_file')
    var date_received = button.data('date_received')
    var time_received = button.data('time_received')
    var document_id = button.data('document_id')

    var modal = $(this)
    
    //modal.find('.modal-title').text('Edit Document');
    modal.find('.modal-body #classification').val(classification);
    modal.find('.modal-body #subject').val(subject);
    modal.find('.modal-body #document_type').val(document_type);
    modal.find('.modal-body #sender_name').val(sender_name);
    modal.find('.modal-body #sender_profile').val(sender_profile);
    modal.find('.modal-body #mode_of_delivery').val(mode_of_delivery);
    modal.find('.modal-body #addressee').val(addressee);
    modal.find('.modal-body #office_name').val(office_name);
    modal.find('.modal-body #document_file').val(document_file);
    modal.find('.modal-body #date_received').val(date_received);
    modal.find('.modal-body #time_received').val(time_received);
    modal.find('.modal-body #document_id').val(document_id);
    });

    //------------------DELETE MODAL--------------------//  
    $('#modal-delete').on('show.bs.modal', function(event){
    
    var button = $(event.relatedTarget)
    var document_id = button.data('document_id')
    var classification = button.data('classification')
    var subject = button.data('subject')
    var sender_name = button.data('sender_name')
    
    var modal = $(this)
    
    //modal.find('.modal-title').text('Delete Document');
    modal.find('.modal-body #document_id').val(document_id);
    modal.find('.modal-body #classification').val(classification);
    modal.find('.modal-body #subject').val(subject);
    modal.find('.modal-body #sender_name').val(sender_name);
    });
    
    //------------------VIEW MODAL---------------------//
    $('#modal-view').on('show.bs.modal', function(event){
    
    var button = $(event.relatedTarget)
    var classification = button.data('classification')
    var subject = button.data('subject')
    var document_type = button.data('document_type')
    var sender_name = button.data('sender_name')
    var sender_profile = button.data('sender_profile')
    var mode_of_delivery = button.data('mode_of_delivery')
    var addressee = button.data('addressee')
    var office_name = button.data('office_name')
    var document_file = button.data('document_file')
    var date_received = button.data('date_received')
    var time_received = button.data('time_received')
    var document_id = button.data('document_id')
    
    var modal = $(this)
    
    //modal.find('.modal-title').text('View Document');
    modal.find('.modal-body #classification').val(classification);
    modal.find('.modal-body #subject').val(subject);
    modal.find('.modal-body #document_type').val(document_type);
    modal.find('.modal-body #sender_name').val(sender_name);
    modal.find('.modal-body #sender_profile').val(sender_profile);
    modal.find('.modal-body #mode_of_delivery').val(mode_of_delivery);
    modal.find('.modal-body #addressee').val(addressee);
    modal.find('.modal-body #office_name').val(office_name);
    modal.find('.modal-body #document_file').val(document_file);
    modal.find('.modal-body #date_received').val(date_received);
    modal.find('.modal-body #time_received').val(time_received);
    modal.find('.modal-body #document_id').val(document_id);
    });
    
</script>

@endsection