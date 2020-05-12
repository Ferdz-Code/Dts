@extends('layouts.mylayout')
@extends('layouts.dashboardlayout')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="nav-icon fas fa-download">&nbsp;</i>Downloadables</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Downloadables</li>
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
            <div class="card card-success card-outline">
                <div class="card-header">
                <h3 class="card-title">Downloadables</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">

                    <div class="card-footer bg-white">

                        <ul class="mailbox-attachments d-flex align-items-stretch clearfix">

                          <li>
                            <span class="mailbox-attachment-icon">
                                <i class="far fa-file-pdf" style="color: Crimson"></i></span>
          
                            <div class="mailbox-attachment-info">
                              <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Sep2014-report.pdf</a>
                                  <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>1,245 KB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                  </span>
                            </div>
                          </li>

                          <li>
                            <span class="mailbox-attachment-icon">
                                <i class="far fa-file-word" style="color: RoyalBlue;"></i></span>
          
                            <div class="mailbox-attachment-info">
                              <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> App Description.docx</a>
                                  <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>1,245 KB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                  </span>
                            </div>
                          </li>

                          <li>
                            <span class="mailbox-attachment-icon">
                                <i class="far fa-file-excel" style="color: ForestGreen;"></i></span>
          
                            <div class="mailbox-attachment-info">
                              <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Payroll Sheets.xml</a>
                                  <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>1,245 KB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                  </span>
                            </div>
                          </li>

                          <li>
                            <span class="mailbox-attachment-icon">
                                <i class="far fa-file-powerpoint" style="color: Brown"></i></span>
          
                            <div class="mailbox-attachment-info">
                              <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Presentation.ppt</a>
                                  <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>1,245 KB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                  </span>
                            </div>
                          </li>

                          <li>
                            <span class="mailbox-attachment-icon">
                                <i class="far fa-file-image" style="color: Orange"></i></span>
          
                            <div class="mailbox-attachment-info">
                              <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> New Logo.jpg</a>
                                  <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>1,245 KB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                  </span>
                            </div>
                          </li>

                          <li>
                            <span class="mailbox-attachment-icon">
                                <i class="far fa-file-archive" style="color: DarkOrchid"></i></span>
          
                            <div class="mailbox-attachment-info">
                              <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> My Files.rar</a>
                                  <span class="mailbox-attachment-size clearfix mt-1">
                                    <span>1,245 KB</span>
                                    <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                  </span>
                            </div>
                          </li>

                        </ul>

                        <ul class="mailbox-attachments d-flex align-items-stretch clearfix">

                            <li>
                              <span class="mailbox-attachment-icon">
                                  <i class="far fa-file-pdf" style="color: Crimson"></i></span>
            
                              <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Sep2014-report.pdf</a>
                                    <span class="mailbox-attachment-size clearfix mt-1">
                                      <span>1,245 KB</span>
                                      <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                    </span>
                              </div>
                            </li>
  
                            <li>
                              <span class="mailbox-attachment-icon">
                                  <i class="far fa-file-word" style="color: RoyalBlue;"></i></span>
            
                              <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> App Description.docx</a>
                                    <span class="mailbox-attachment-size clearfix mt-1">
                                      <span>1,245 KB</span>
                                      <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                    </span>
                              </div>
                            </li>
  
                            <li>
                              <span class="mailbox-attachment-icon">
                                  <i class="far fa-file-excel" style="color: ForestGreen;"></i></span>
            
                              <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Payroll Sheets.xml</a>
                                    <span class="mailbox-attachment-size clearfix mt-1">
                                      <span>1,245 KB</span>
                                      <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                    </span>
                              </div>
                            </li>
  
                            <li>
                              <span class="mailbox-attachment-icon">
                                  <i class="far fa-file-powerpoint" style="color: Brown"></i></span>
            
                              <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Presentation.ppt</a>
                                    <span class="mailbox-attachment-size clearfix mt-1">
                                      <span>1,245 KB</span>
                                      <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                    </span>
                              </div>
                            </li>
  
                            <li>
                              <span class="mailbox-attachment-icon">
                                  <i class="far fa-file-image" style="color: Orange"></i></span>
            
                              <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> New Logo.jpg</a>
                                    <span class="mailbox-attachment-size clearfix mt-1">
                                      <span>1,245 KB</span>
                                      <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                    </span>
                              </div>
                            </li>
  
                            <li>
                              <span class="mailbox-attachment-icon">
                                  <i class="far fa-file-archive" style="color: DarkOrchid"></i></span>
            
                              <div class="mailbox-attachment-info">
                                <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> My Files.rar</a>
                                    <span class="mailbox-attachment-size clearfix mt-1">
                                      <span>1,245 KB</span>
                                      <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                                    </span>
                              </div>
                            </li>
  
                          </ul>

                          

                      </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>




    </div>
</div>

@endsection