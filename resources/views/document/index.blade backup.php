<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document Crud</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body>

    <div class="container pt-5">
        <h2 class="alert alert-success">Document Tracking System</h2>
    </div>

    <div class="row">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add" style="margin-left:85%">
            Add Document
            </button>
        <div class="col-md-12">

            @if($message = Session::get('success'))
            <div class="alert-success">
                <p>{{$message}}</p>
            </div>
            @endif

            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Classification</th>
                        <th>Subject</th>
                    <!--<th>Document Type</th>-->
                        <th>Sender Name</th>
                    <!--<th>Sender Profile</th>-->
                    <!--<th>Mode of Delivery</th>-->
                        <th>Addressee</th>
                    <!--<th>Office Name</th>-->
                        <th>Date Received</th>
                        <th>Time Received</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($documents as $document)
                    <tr>
                        <td>{{$document->id}}</td>
                        <td>{{$document->classification}}</td>
                        <td>{{$document->subject}}</td>
                    <!--<td>{{$document->document_type}}</td>-->
                        <td>{{$document->sender_name}}</td>
                    <!--<td>{{$document->sender_profile}}</td>-->
                    <!--<td>{{$document->mode_of_delivery}}</td>-->
                        <td>{{$document->addressee}}</td>
                    <!--<td>{{$document->office_name}}</td>-->
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
                                data-date_received="{{$document ->date_received}}"
                                data-time_received="{{$document ->time_received}}"
                                data-toggle="modal" data-target="#modal-edit"><i class="far fa-edit text-gray"></i>
                            </a>
                            <!------------------------------/EDIT BUTTON----------------------------------->

                            <!-------------------------------DELETE BUTTON--------------------------------->
                            <a href="" data-document_id="{{$document ->id}}" data-toggle="modal" data-target="#modal-delete"><i class="far fa-trash-alt text-red"></i></a>
                            <!------------------------------/DELETE BUTTON--------------------------------->

                        </td>
                    </tr>
                @endforeach 
                <tbody>
            </table>
            {{$documents->links()}}
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
                    <form action="{{route('document.store')}}" method="POST">
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
                            <label>Date received:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                                </div>
                                <input type="text" name="date_received"  id="date_received" placeholder="11/11/2020" class="form-control float-right">
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
                                <input type="text" name="time_received" id="time_received" placeholder="10:00 AM" class="form-control float-right">
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
                    <h4 class="modal-title">Edit Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <!-- ./MODAL HEADER-->

                    <!-- MODAL BODY-->
                    <div class="modal-body">
                    <form action="{{route('document.update','document_id')}}" method="POST">
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
                            <label>Date received:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                                </div>
                                <input type="text" name="date_received"  id="date_received" placeholder="11/11/2020" class="form-control float-right">
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
                                <input type="text" name="time_received" id="time_received" placeholder="10:00 AM" class="form-control float-right">
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
                    <h4 class="modal-title">Delete Document</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <!-- ./MODAL HEADER-->

                    <!-- MODAL BODY-->
                    <div class="modal-body">
                    <form action="{{route('document.destroy','document_id')}}" method="POST">
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
                <h4 class="modal-title">View Document</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <!-- ./MODAL HEADER-->

                <!-- MODAL BODY-->
                <div class="modal-body">
                <form action="{{route('document.show','document_id')}}" method="GET">
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
                            <input type="text" name="time_received" id="time_received" placeholder="10:00 AM" class="form-control float-right" >
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


</body>

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
    var date_received = button.data('date_received')
    var time_received = button.data('time_received')
    var document_id = button.data('document_id')

    var modal = $(this)
    
    modal.find('.modal-title').text('Edit Document');
    modal.find('.modal-body #classification').val(classification);
    modal.find('.modal-body #subject').val(subject);
    modal.find('.modal-body #document_type').val(document_type);
    modal.find('.modal-body #sender_name').val(sender_name);
    modal.find('.modal-body #sender_profile').val(sender_profile);
    modal.find('.modal-body #mode_of_delivery').val(mode_of_delivery);
    modal.find('.modal-body #addressee').val(addressee);
    modal.find('.modal-body #office_name').val(office_name);
    modal.find('.modal-body #date_received').val(date_received);
    modal.find('.modal-body #time_received').val(time_received);
    modal.find('.modal-body #document_id').val(document_id);
    });

    //------------------DELETE MODAL--------------------//  
    $('#modal-delete').on('show.bs.modal', function(event){
    
    var button = $(event.relatedTarget)
    var document_id = button.data('document_id')
    
    var modal = $(this)
    
    modal.find('.modal-title').text('Delete Document');
    modal.find('.modal-body #document_id').val(document_id);
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
    var date_received = button.data('date_received')
    var time_received = button.data('time_received')
    var document_id = button.data('document_id')
    
    var modal = $(this)
    
    modal.find('.modal-title').text('View Document');
    modal.find('.modal-body #classification').val(classification);
    modal.find('.modal-body #subject').val(subject);
    modal.find('.modal-body #document_type').val(document_type);
    modal.find('.modal-body #sender_name').val(sender_name);
    modal.find('.modal-body #sender_profile').val(sender_profile);
    modal.find('.modal-body #mode_of_delivery').val(mode_of_delivery);
    modal.find('.modal-body #addressee').val(addressee);
    modal.find('.modal-body #office_name').val(office_name);
    modal.find('.modal-body #date_received').val(date_received);
    modal.find('.modal-body #time_received').val(time_received);
    modal.find('.modal-body #document_id').val(document_id);
    });
    
</script>
</html>
