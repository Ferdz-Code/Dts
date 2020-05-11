@extends('layouts.mylayout')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
      <div class="col-sm-6">
      <h1 class="m-0 text-dark"><i class="far fa-folder text-black">&nbsp;</i>Reply</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Reply to Documents</li>
      </ol>
      </div><!-- /.col -->
  </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
<!------------------------------------------------------LEFT DIV---------------------------------------------------------------->
      <!-- left column -->
      <div class="col-md-8">
        <!-- general form elements -->
        <div class="card">
          <div class="card-header ui-sortable-handle" style="cursor: move;">
            <h3 class="card-title">
              <i class="fas fa-reply mr-1"></i>
              Reply to Document
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <button type="button" class="btn btn-default btn-sm" data-original-title="Edit Ticket"
                  data-toggle="modal" data-target="#modal-predefined">
                  Predefined Reply
                  </button>
                  <button type="button" class="btn btn-default btn-sm" data-original-title="Edit Ticket"
                  data-toggle="modal" data-target="#modal-edit">
                  <i class="fa fa-edit"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" data-original-title="Edit Ticket"
                  data-toggle="modal" data-target="#modal-route">
                  <i class="fa fa-reply"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" data-original-title="Edit Ticket"
                  data-toggle="modal" data-target="#modal-close">
                  <i class="fa fa-times"></i>
                  </button>	
                  <button type="button" class="btn btn-default btn-sm" data-original-title="Edit Ticket"
                  data-toggle="modal" data-target="#modal-delete">
                  <i class="fa fa-trash"></i>
                  </button>	
                </li>
              </ul>
            </div>
          </div>
          <!-- /.card-header -->

          <!-- form start -->
          <form role="form">
            <div class="card-body">
              <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" rows="3" placeholder="Enter comments here..."></textarea>
              </div>
              <div class="form-group">
                <label for="">Action</label>
                <select class="form-control">
                  <option>Set to Closed</option>
                  <option>Set to Reopen</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="button" class="btn btn-secondary">Cancel<i class="fas fa-times fa-fw"> </i></button>
              <button type="submit" class="btn btn-primary" >Reply<i class="fas fa-reply fa-fw"> </i> </button>
           </div>

          </form><!-- /.form-->
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (left) -->
<!------------------------------------------------------RIGHT DIV--------------------------------------------------------------->
      <!-- right column -->
      <div class="col-md-4">
        <!-- general form elements disabled -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-map-marker-alt mr-1"></i>Document Profile</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-sm">
              <tbody>
                <tr>
                  <td><b>Date / Time Created:</b></td>
                  <td>Jan/12/2019 - 10:00 AM</td>
                </tr>
                <tr>
                  <td><b>Sender Name:</b></td>
                  <td>Cardo Dalisay</td>
              </tr>
              <tr>
                  <td><b>Sender Profile:</b></td>
                  <td>LGU</td>
              </tr>
              <tr>
                  <td><b>Office Name:</b></td>
                  <td>PhilHealth</td>
              </tr>
              <tr>
                  <td><b>Subject</b></td>
                  <td>IT Asset List</td>
              </tr>
              <tr>
                  <td><b>Document Type:</b></td>
                  <td>Memo</td>
              </tr>
              <tr>
                  <td><b>Mode of Delivery</b></td>
                  <td>Courier</td>
              </tr>
              <tr>
                  <td><b>Classification:</b></td>
                  <td>Outgoing</td>
              </tr>

                <th><i class="fas fa-map-marker-alt mr-1"></i>Route Details</th>
                <th></th>
              <tr>
                <td><b>Date/Time Routed:</b></td>
                <td>Jan/12/2019 - 10:00 AM</td>
              </tr>
              <tr>
                <td><b>Routed to:</b></td>
                <td>Marlon Aguilar</td>
              </tr>
              <tr>
                <td><b>Required Action:</b></td>
                <td>For Signature</td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!--/.col (right) -->
 <!------------------------------------------------------BUTTOM DIV------------------------------------------------------------->
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
          <h1 class="m-0 text-dark"><i class="far fa-clock mr-2"></i>Timeline</h1>
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
<!------------------------------------------------------TIMELINE---------------------------------------------------------------->      
      <div class="col-12">                
        <div class="timeline">

          <div class="time-label">
            <span class="bg-primary">10 Feb. 2014</span>
          </div>

          <div>
            <i class="fas fa-user bg-blue"></i>
            <div class="timeline-item">
              <span class="time"><i class="fas fa-clock"></i> 12:05</span>
              <h3 class="timeline-header"><a href="#">Ferdz Gacis [ADMIN]</a> routed you a document</h3>

              <div class="timeline-body">
                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                quora plaxo ideeli hulu weebly balihoo...
              </div>
              <div class="timeline-footer">
                <a class="btn btn-primary btn-sm">Edit</a>
                <a class="btn btn-danger btn-sm">Delete</a>
              </div>
            </div>
          </div>

          <div class="time-label">
            <span class="bg-success">3 Jan. 2014</span>
          </div>

          <div>
            <i class="fas fa-user bg-green"></i>
            <div class="timeline-item">
              <span class="time"><i class="fas fa-clock"></i> 12:05</span>
              <h3 class="timeline-header"><a href="#">Marlon Aguilar</a> inserted a comment</h3>

              <div class="timeline-body">
                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                quora plaxo ideeli hulu weebly balihoo...
              </div>
              <div class="timeline-footer">
                <a class="btn btn-primary btn-sm">Edit</a>
                <a class="btn btn-danger btn-sm">Delete</a>
              </div>
            </div>
          </div>

          <div class="time-label">
            <span class="bg-primary">3 Jan. 2014</span>
          </div>

          <div>
            <i class="fas fa-user bg-blue"></i>
            <div class="timeline-item">
              <span class="time"><i class="fas fa-clock"></i> 12:05</span>
              <h3 class="timeline-header"><a href="#">Ferdz Gacis [ADMIN]</a> route you a document</h3>

              <div class="timeline-body">
                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                quora plaxo ideeli hulu weebly balihoo...
              </div>
              <div class="timeline-footer">
                <a class="btn btn-primary btn-sm">Edit</a>
                <a class="btn btn-danger btn-sm">Delete</a>
              </div>
            </div>
          </div>

          <div class="time-label">
            <span class="bg-success">3 Jan. 2014</span>
          </div>
          
          <div>
            <i class="fas fa-user bg-green"></i>
            <div class="timeline-item">
              <span class="time"><i class="fas fa-clock"></i> 12:05</span>
              <h3 class="timeline-header"><a href="#">Marlon Aguilar</a> inserted a comment</h3>

              <div class="timeline-body">
                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                quora plaxo ideeli hulu weebly balihoo...
              </div>
              <div class="timeline-footer">
                <a class="btn btn-primary btn-sm">Edit</a>
                <a class="btn btn-danger btn-sm">Delete</a>
              </div>
            </div>
          </div>

          <div>
            <i class="fas fa-clock bg-gray"></i>
          </div>
        </div>
      </div>
<!------------------------------------------------------MAIN DIV---------------------------------------------------------------->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->



@endsection