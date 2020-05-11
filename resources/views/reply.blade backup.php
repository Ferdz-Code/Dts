@extends('layouts.mylayout')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-reply text-black">&nbsp;</i>Reply</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Reply</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <section class="col-lg-7 connectedSortable ui-sortable mt-3">
              <!-- Custom tabs (Charts with tabs)-->
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
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content p-0">
               
                        <!-- textarea -->
                        <div class="form-group">
                          <label>Description:</label>
                          
                  <!-- ./MODAL BODY-->
                  <div class="modal fade" id="modal-predefined" >
                   <div class="modal-dialog">
                   <div class="modal-content">
                   <div class="modal-header">
                   <h4 class="modal-title">Predefined Reply</h4>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button></div>
                   <div class="modal-body">
  
                   <table>
                           <tbody>
                           <tr>    
                           <td><a href="#"><i class="fa fa-circle text-success"></i> Online</a></td>
                           </tr>
                           <tr>
                           <td><a href="#"><i class="fa fa-circle text-danger"></i> Busy</a></td>
                           </tr>
                           <tr>
                           <td><a href="#"><i class="fa fa-circle text-danger"></i> Do not disturb</a></td>
                           </tr>
                           <tr>
                           <td><a href="#"><i class="fa fa-circle text-warning"></i> Be right back</a></td>
                           </tr>
                           <tr>
                           <td><a href="#"><i class="fa fa-circle text-warning"></i> Off work</a></td>
                           </tr>
                           <tr>
                           <td><a href="#"><i class="fa fa-circle text-warning"></i> Away</a></td>
                           </tr>
                           </tbody>
                    </table>
  
                   </div>
                   <div class="modal-footer justify-content-between">
                   <span>Click on any predefined reply to insert it's content.</span>
                   <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                   </div>
                   </div></div>
                  </div>
                  <!-- ./MODAL BODY-->
  
                  <!-- MODAL BODY-->
                  <div class="modal fade" id="modal-edit">
                    <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                        <!-- MODAL HEADER-->
                         <div class="modal-header">
                           <h4 class="modal-title">Edit Document - <a href="#">OU2020-1120</a></h4>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                         <!-- ./MODAL HEADER-->
                         <!-- MODAL BODY-->
                         <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label>Classification</label>
                                    <select class="form-control select2bs4" style="width: 100%;">
                                      <option selected="selected">Received</option>
                                      <option>Outgoing</option>
                                      <option>Internal</option>
                                    </select>
                                  </div>
                                  <!-- /.form-group -->
                                  <!-- /.form-group -->
                                  <div class="form-group">
                                    <label>Sender's Profile</label>
                                    <select class="form-control select2bs4" style="width: 100%;">
                                      <option selected="selected">National Government Officials (NGO)</option>
                                      <option>Local Government Unit (LGU)</option>
                                      <option>Schools & Universities Commision (SUC)</option>
                                      <option>Private</option>
                                    </select>
                                  </div>
                                  <!-- /.form-group -->
                                  <!-- /.form-group -->
                                  <div class="form-group">
                                    <label>Offine Name</label>
                                    <select class="form-control select2bs4" style="width: 100%;">
                                      <option selected="selected">Anti-Red Tape Authority (ARTA)</option>
                                      <option>Bureau of Investment (BOI)</option>
                                      <option>Civil Service Commision (CSC)</option>
                                      <option>Department of Finance (DOF)</option>
                                    </select>
                                  </div>
                                  <!-- /.form-group -->
                                  <!-- /.form-group -->
                                  <div class="form-group">
                                    <label>Mode of Delivery</label>
                                    <select class="form-control select2bs4" style="width: 100%;">
                                      <option selected="selected">Courier</option>
                                      <option>E-mail</option>
                                      <option>Messenger</option>
                                      <option>Personal</option>
                                      <option>Snail mail</option>
                                    </select>
                                  </div>
                                  <!-- /.form-group -->
                                  <!-- /.form-group -->
                                  <div class="form-group">
                                  <label>Addressee</label>
                                      <input type="text" name="name" placeholder="Ferdz Gacis" id="name" class="form-control">
                                  </div>
                                  <!-- /.form-group -->
                                  <div class="form-group">
                                      <label for="exampleInputFile">Upload file</label>
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
                                <!-- /.col -->
  
                                <!-- /.form-group -->
                                <div class="col-md-6">
                                  <div class="form-group">
                                  <label>Sender's Name</label>
                                      <input type="text" name="name" placeholder="Cardo Dalisay" id="name" class="form-control">
                                  </div>
                                  <!-- /.form-group -->
                                  <!-- /.form-group -->
                                  <div class="form-group">
                                  <label>Subject</label>
                                      <input type="text" name="name" placeholder="IT Asset List" id="name" class="form-control">
                                  </div>
                                  <!-- /.form-group -->
                                  <!-- /.form-group -->
                                  <div class="form-group">
                                    <label>Document Type</label>
                                    <select class="form-control select2bs4" style="width: 100%;">
                                      <option selected="selected">Letter</option>
                                      <option>Invitation</option>
                                      <option>Magazine</option>
                                      <option>Memo</option>
                                    </select>
                                  </div>
                                  <!-- /.form-group -->
                                  <!-- Date range -->
                                  <div class="form-group">
                                    <label>Date received:</label>
  
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="far fa-calendar-alt"></i>
                                        </span>
                                      </div>
                                      <input type="text" class="form-control float-right" id="reservation" placeholder="11/11/2020">
                                    </div>
                                    <!-- /.input group -->
                                  </div>
                                  <!-- /.form group -->
  
                                  <!-- Date range -->
                                  <div class="form-group">
                                    <label>Time received:</label>
  
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="far fa-clock"></i>
                                        </span>
                                      </div>
                                      <input type="text" class="form-control float-right" id="reservation" placeholder="10:00 AM">
                                    </div>
                                    <!-- /.input group -->
                                  </div>
                                  <!-- /.form group -->
                                  
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->
                         </div>
                         <!-- ./MODAL BODY-->
                         <!-- MODAL FOOTER-->  
                         <div class="modal-footer justify-content-between">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           <button type="button" class="btn btn-primary">Save changes</button>
                         </div>
                         <!-- ./MODAL FOOTER-->
                         </div>
                     </div>
                  </div>
                  <!-- ./MODAL BODY-->
  
                  <!-- ./MODAL BODY-->
                  <div class="modal fade" id="modal-route">
                   <div class="modal-dialog modal-lg">
                   <div class="modal-content">
                   <div class="modal-header">
                   <h4 class="modal-title">Route Document -<a href="#"> OU2020-1120</a></h4>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button></div>
                   <div class="modal-body">
  
                     <div class="form-group">
                       <label>Route to:</label>
                       <select class="form-control select2bs4" style="width: 100%;">
                       <option selected="selected">Ferdinand Gacis</option>
                       <option>Marlon Aguilar</option>
                       <option>Maria Loren Ignacio</option>
                       <option>Jonar Fabula</option>
                       </select>
                     </div>
  
                      <div class="row">
                        
  
                      <div class="col-md-6">
                        
  
  
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Department:</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                      <option selected="selected">ICT</option>
                      <option>BRO</option>
                      <option>CMEO</option>
                      <option>ODDG</option>
                      <option>RMTD</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Action Needed:</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                      <option selected="selected">For Review</option>
                      <option>For Signature</option>
                      <option>For keeps</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
  
                </div>
                <!-- /.col -->
  
                <!-- /.form-group -->
                <div class="col-md-6">
                  
  
                  <!-- /.form-group -->
                  <!-- Date range -->
                  <div class="form-group">
                    <label>Date:</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservation">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
  
                  <!-- Date range -->
                  <div class="form-group">
                    <label>Time:</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-clock"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservation">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  
                </div>
                <!-- /.col -->
                
              </div>
              <!-- /.row -->
              <!-- textarea -->
              <div class="form-group">
              <label>Comments:</label>
              <textarea class="form-control" rows="3" placeholder="Enter comments here..."></textarea>
              </div>
                   
                   </div>
                   <div class="modal-footer justify-content-between">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                   <button type="button" class="btn btn-primary">Confirm</button>
                   </div>
                   </div></div>
                  </div>
                  <!-- ./MODAL BODY-->
  
                  <!-- ./MODAL BODY-->
                  <div class="modal fade" id="modal-close">
                   <div class="modal-dialog">
                   <div class="modal-content">
                   <div class="modal-header">
                   <h4 class="modal-title">Close Document</h4>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button></div>
                   <div class="modal-body">
                   <p>One fine body&hellip;</p></div>
                   <div class="modal-footer justify-content-between">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-primary">Save changes</button>
                   </div></div></div>
                  </div>
                  <!-- ./MODAL BODY-->
  
                  <!-- ./MODAL BODY-->
                  <div class="modal fade" id="modal-delete">
                   <div class="modal-dialog">
                   <div class="modal-content">
                   <div class="modal-header">
                   <h4 class="modal-title">Delete Document -<a href="#"> OU2020-1120</a></h4>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                   </button></div>
                   <div class="modal-body">
  
                   <p>Are you sure you want to delete this document?</p>
  
                   <table class="table table-sm">
  
                  <tbody>
                                  <tr>
                                      <td><b>Sender Name:</b></td>
                                      <td>Cardo Dalisay</td>
                                  </tr>
                                  <tr>
                                      <td><b>Subject:</b></td>
                                      <td>IT Collaboration</td>
                                  </tr>
                                  <tr>
                                      <td><b>Routed to:</b></td>
                                      <td>Ferdz Gacis</td>
                                  </tr>
                                  <tr>
                                      <td><b>Attachment:</b></td>
                                      <td>EODB2021.pdf</td>
                                  </tr>                 
                              </tbody>
                  </table>
  
                   </div>
                   <div class="modal-footer justify-content-between">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-danger">Delete</button>
                   </div></div></div>
                  </div>
                  <!-- ./MODAL BODY-->
  
                          <textarea class="form-control" rows="3" placeholder="Enter desciption here..."></textarea>
                        </div>
  
                        <div class="form-group">
                          <label>Action:</label>
                          <select class="form-control">
                            <option>Set to Closed</option>
                            <option>Set to Reopen</option>
                          </select>
                        </div>
  
                        <div class="form-group">
                      <label for="exampleInputFile">File upload:</label>
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
                </div><!-- /.card-body -->
            <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel
                    <i class="fas fa-times fa-fw"> </i>
                  </button>
  
                  <a href="javascript:history.back()"><button type="submit" class="btn btn-primary" >Reply
                  <i class="fas fa-reply fa-fw"> </i> 
                  </button> </a>
            <!-- ./Button --> 
               </div>
              </div>
              <!-- /.card -->
  
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable ui-sortable">
  
  <!-- Map card -->
              <div class="card mt-3">
                <div class="card-header">
                  <h3 class="card-title"><b>
                    <i class="fas fa-map-marker-alt mr-1"></i>
                    Document Profile - <a href="#">OU2020-009</a></b>
                  </h3>
                </div><!-- /.card-header -->
  
                  <div class="card-body table-responsive p-0">
                  <table class="table table-hover">
  
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
                                  <tr>
                                      <td></td>
                                      <td></td>
                                  </tr>
                                  </tbody>
                  </table>
                </div></div>
            </section>
            <!-- right col -->
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>

          <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-map-marker-alt">&nbsp;</i>Document Timeline</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


      <section class="content">
        <div class="container-fluid">
          
          <!-- Timelime example  -->
          <div class="row">
            <div class="col-md-12">
              <!-- The time line -->
              <div class="timeline">
               
                <!-- timeline time label -->
                <div class="time-label">
                  <span class="bg-red">10 May. 2020</span>
                </div>
                <!-- /.timeline-label -->

                <!-- timeline item -->
                <div>
                  <i class="fas fa-user bg-blue"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                    <h3 class="timeline-header"><a href="#">Ferdz Gacis</a></h3>
  
                    <div class="timeline-body">
                      This document is pain in the assignment of
                      please ignore this document so rude why me.
                      Can be able to get this document details so 
                      fast and urgent. Needed this be able to transfer
                      If else can you build a snowman in fireman over
                      the rainy season vegetables bahay kubo kahit munti.
                      <br><br>
                      <a href="">EODB2021.pdf</a>
                    </div>
                    <div class="timeline-footer">
                      <a class="btn btn-primary btn-sm">View</a>
                      <a class="btn btn-success btn-sm">Edit</a>
                      <a class="btn btn-danger btn-sm">Delete</a>
                    </div>
                  </div>
                </div>
                <!-- END timeline item -->

                <!-- timeline time label -->
                <div class="time-label">
                    <span class="bg-green">3 Apr. 2020</span>
                  </div>
                  <!-- /.timeline-label -->
              
                  <!-- timeline item -->
                <div>
                    <i class="fas fa-user bg-green"></i>
                    <div class="timeline-item">
                      <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                      <h3 class="timeline-header"><a href="#">Cardo Dalisay</a></h3>
    
                      <div class="timeline-body">
                        This document is pain in the assignment of
                        please ignore this document so rude why me.
                        Can be able to get this document details so 
                        fast and urgent. Needed this be able to transfer
                        If else can you build a snowman in fireman over
                        the rainy season vegetables bahay kubo kahit munti.
                        <br><br>
                        <a href="">EODB2021.pdf</a>
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-sm">View</a>
                        <a class="btn btn-success btn-sm">Edit</a>
                        <a class="btn btn-danger btn-sm">Delete</a>
                      </div>
                    </div>
                  </div>
                <!-- END timeline item -->
                
                <!-- timeline time label -->
                <div class="time-label">
                    <span class="bg-red">10 Mar. 2020</span>
                  </div>
                  <!-- /.timeline-label -->
  
                  <!-- timeline item -->
                  <div>
                    <i class="fas fa-user bg-blue"></i>
                    <div class="timeline-item">
                      <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                      <h3 class="timeline-header"><a href="#">Ferdz Gacis</a></h3>
    
                      <div class="timeline-body">
                        This document is pain in the assignment of
                        please ignore this document so rude why me.
                        Can be able to get this document details so 
                        fast and urgent. Needed this be able to transfer
                        If else can you build a snowman in fireman over
                        the rainy season vegetables bahay kubo kahit munti.
                        <br><br>
                        <a href="">EODB2021.pdf</a>
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-sm">View</a>
                        <a class="btn btn-success btn-sm">Edit</a>
                        <a class="btn btn-danger btn-sm">Delete</a>
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->
  
                  <!-- timeline time label -->
                  <div class="time-label">
                      <span class="bg-green">3 Feb. 2020</span>
                    </div>
                    <!-- /.timeline-label -->
                
                    <!-- timeline item -->
                  <div>
                      <i class="fas fa-user bg-green"></i>
                      <div class="timeline-item">
                        <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                        <h3 class="timeline-header"><a href="#">Cardo Dalisay</a></h3>
      
                        <div class="timeline-body">
                          This document is pain in the assignment of
                          please ignore this document so rude why me.
                          Can be able to get this document details so 
                          fast and urgent. Needed this be able to transfer
                          If else can you build a snowman in fireman over
                          the rainy season vegetables bahay kubo kahit munti.
                          <br><br>
                          <a href="">EODB2021.pdf</a>
                        </div>
                        <div class="timeline-footer">
                          <a class="btn btn-primary btn-sm">View</a>
                          <a class="btn btn-success btn-sm">Edit</a>
                          <a class="btn btn-danger btn-sm">Delete</a>
                        </div>
                      </div>
                    </div>
                  <!-- END timeline item -->
                
                
                
                
                <div>
                  <i class="fas fa-clock bg-gray"></i>
                </div>
              </div>
            </div>
            <!-- /.col -->
          </div>
        </div>
        <!-- /.timeline -->
  
      </section>
      


    </div>
</div>

@endsection