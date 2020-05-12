@extends('layouts.mylayout')
@extends('layouts.dashboardlayout')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark ">Create User</h1>
            </div><!-- /.col -->

            <div class="col-sm-6">
                <button type="button" class="btn btn-primary float-right clearfix elevation-2" data-toggle="modal" data-target="#modal-add" >
                    Add User</i></button>
            </div><!-- /.col -->

        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
    
    <div class="container-fluid">
        
      <div class="row">

        <div class="col-md-12">
            @if($message = Session::get('success'))    
            <div class="alert alert-success alert-auto" role="alert">{{$message}}</div>
            @endif
            
            <div class="row">
            <div class="col-12">                
            <div class="card card-danger card-outline">
                
                <div class="card-header ">
                <h3 class="card-title ">Newly Created Users</h3>
  
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
                        <th>Name &nbsp; ↑↓</th>
                        <th>Email &nbsp;&nbsp; ↑↓</th>
                        <th>Created at &nbsp;&nbsp; ↑↓</th>
                        <th>Updated at &nbsp;&nbsp; ↑↓</th>
                        <th>Action &nbsp;&nbsp; ↑↓</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>
                                <td>
                                    <!-------------------------------VIEW BUTTON----------------------------------->
                                    <a href="" 
                                        data-user_id="{{$user ->id}}"
                                        data-name="{{$user ->name}}"
                                        data-email="{{$user ->email}}"
                                        data-password="{{$user ->password}}"
                                        data-toggle="modal" data-target="#modal-view"><i class="far fa-eye text-gray"></i>
                                    </a>
                                    <!------------------------------/VIEW BUTTON----------------------------------->
                                    
                                    <!-------------------------------EDIT BUTTON----------------------------------->
                                    <a href="" 
                                        data-user_id="{{$user ->id}}"
                                        data-name="{{$user ->name}}"
                                        data-email="{{$user ->email}}"
                                        data-password="{{$user ->password}}"
                                        data-toggle="modal" data-target="#modal-edit"><i class="far fa-edit text-gray"></i>
                                    </a>
                                    <!------------------------------/EDIT BUTTON----------------------------------->
        
                                    <!-------------------------------DELETE BUTTON--------------------------------->
                                    <a href="" data-user_id="{{$user ->id}}" data-toggle="modal" data-target="#modal-delete"><i class="far fa-trash-alt text-red"></i></a>
                                    <!------------------------------/DELETE BUTTON--------------------------------->
        
                                </td>
                            </tr>
                        @endforeach 
                        <tbody>
                   </table>
                </div>
            </div>
            <div class="float-right ">{{$users->links()}}</div>
            </div>
        </div>
    </div>
</section> 

<!----------------------------------------------------------ADD DOCUMENT MODAL------------------------------------------------>            
    <!-- MODAL BODY-->
        <div class="modal fade" id="modal-add">
            <div class="modal-dialog modal-s">
                <div class="modal-content">
                <!-- MODAL HEADER-->
                    <div class="modal-header">
                    <h4 class="modal-title"><i class="far fa-paper-plane"></i>&nbsp;Add User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <!-- ./MODAL HEADER-->

                    <!-- MODAL BODY-->
                    <div class="modal-body">
                    <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                    <input type="text" name="name" placeholder="" id="name" class="form-control" required>
                                </div>
                            <div class="form-group">
                            <label>Email</label>
                                <input type="email" name="email" placeholder="" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Password</label>
                                <input type="text" name="password" placeholder="" id="password" minlength="8" maxlength="12" required class="form-control">
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
            <div class="modal-dialog modal-s">
                <div class="modal-content">
                <!-- MODAL HEADER-->
                    <div class="modal-header">
                    <h4 class="modal-title"><i class="far fa-edit text-black">&nbsp;</i>Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <!-- ./MODAL HEADER-->

                    <!-- MODAL BODY-->
                    <div class="modal-body">
                    <form action="{{route('user.update','user_id')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                    <input type="text" name="name" placeholder="" id="name" required class="form-control">
                                </div>
                            <div class="form-group">
                            <label>Email</label>
                                <input type="email" name="email" placeholder="" id="email" required class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Password</label>
                                <input type="password" name="password" placeholder="" id="password" required class="form-control">
                            </div>
                                <input type="hidden" id="user_id" name="user_id">
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
                    <h4 class="modal-title"><i class="far fa-trash-alt text-black">&nbsp;</i>Delete User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <!-- ./MODAL HEADER-->

                    <!-- MODAL BODY-->
                    <div class="modal-body">
                    <form action="{{route('user.destroy','user_id')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-12">
                                <input type="hidden" id="user_id" name="user_id">
                                <p>This is permanent and cannot be undo. Are you sure?</p>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete&nbsp;<i class="far fa-trash-alt"></i></button>
                    </div>
                    </form> 
                </div>
            </div>
        </div>
    <!-- ./MODAL BODY-->    

<!----------------------------------------------------------VIEW DOCUMENT MODAL----------------------------------------------->            
    <!-- MODAL BODY-->
        <div class="modal fade" id="modal-view">
            <div class="modal-dialog modal-s">
                <div class="modal-content">
                <!-- MODAL HEADER-->
                    <div class="modal-header">
                    
                    <h4 class="modal-title"><i class="far fa-eye text-black">&nbsp;</i>View User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <!-- ./MODAL HEADER-->

                    <!-- MODAL BODY-->
                    <div class="modal-body">
                    <form action="{{route('user.show','user_id')}}" method="GET">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="" id="name" class="form-control" readonly>
                            </div>   
                            <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="" id="email" class="form-control" readonly>
                            </div>  
                            <div class="form-group">
                            <label>Password</label>
                                <input type="password" name="password" placeholder="" id="password" class="form-control" readonly>
                            </div>
                                <input type="hidden" id="user_id" name="user_id">
                        </div>    
                        </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <!--<button type="submit" class="btn btn-primary">View</button>-->
                        </div>
                    </div>
                </form> 
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
    var name = button.data('name')
    var email = button.data('email')
    var password = button.data('password')
    var user_id = button.data('user_id')

    var modal = $(this)
    
    //modal.find('.modal-title').text('Edit Document');
    modal.find('.modal-body #name').val(name);
    modal.find('.modal-body #email').val(email);
    modal.find('.modal-body #password').val(password);
    modal.find('.modal-body #user_id').val(user_id);
    });

    //------------------DELETE MODAL--------------------//  
    $('#modal-delete').on('show.bs.modal', function(event){
    
    var button = $(event.relatedTarget)
    var user_id = button.data('user_id')
    
    var modal = $(this)
    
    //modal.find('.modal-title').text('Delete Document');
    modal.find('.modal-body #user_id').val(user_id);
    });
    
    //------------------VIEW MODAL---------------------//
    $('#modal-view').on('show.bs.modal', function(event){
    
    var button = $(event.relatedTarget)
    var name = button.data('name')
    var email = button.data('email')
    var password = button.data('password')
    var user_id = button.data('user_id')
    
    var modal = $(this)
    
    //modal.find('.modal-title').text('View Document');
    modal.find('.modal-body #name').val(name);
    modal.find('.modal-body #email').val(email);
    modal.find('.modal-body #password').val(password);
    modal.find('.modal-body #user_id').val(user_id);
    });
    
</script>

@endsection