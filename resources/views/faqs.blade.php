@extends('layouts.mylayout')
@extends('layouts.dashboardlayout')

@section('content')

<!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid px-4 mt-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0 text-dark"><i class="far fa-question-circle text-black">&nbsp;</i>Faqs</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Faqs</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-4">                
                <div class="card elevation-2">
                    <div class="card-header p-4">
                        <h3 class="card-title">Frequently Asked Questions</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                  
                                    <div class="card  collapsed-card mt-3">
                                        <div class="card-header bg-light">1. Why do I need to create a document?
                                        <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                                        </div>
                                        </div>
                                        <div class="card-body">
                                        • Set the addressee<br>
                                        • Select Classifications 
                                        </div>
                                    </div>
            
                                    <div class="card  collapsed-card">
                                        <div class="card-header bg-light">2. How to edit a document?
                                        <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                                        </div>
                                        </div>
                                        <div class="card-body">
                                        • Set the addressee<br>
                                        • Select Classifications 
                                        </div>
                                    </div>
            
                                    <div class="card  collapsed-card">
                                        <div class="card-header bg-light">3. How to delete a document?
                                        <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                                        </div>
                                        </div>
                                        <div class="card-body">
                                        • Set the addressee<br>
                                        • Select Classifications 
                                        </div>
                                    </div>
            
                                    <div class="card  collapsed-card">
                                        <div class="card-header bg-light">4. How to route a document?
                                        <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                                        </div>
                                        </div>
                                        <div class="card-body">
                                        • Set the addressee<br>
                                        • Select Classifications 
                                        </div>
                                    </div>
            
                                    <div class="card  collapsed-card">
                                        <div class="card-header bg-light">5. How to reply to a document?
                                        <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                                        </div>
                                        </div>
                                        <div class="card-body">
                                        • Set the addressee<br>
                                        • Select Classifications 
                                        </div>
                                    </div>
            
                                    <div class="card  collapsed-card">
                                        <div class="card-header bg-light">6. How to closed a document?
                                        <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                                        </div>
                                        </div>
                                        <div class="card-body">
                                        • Set the addressee<br>
                                        • Select Classifications 
                                        </div>
                                    </div>
            
                                    <div class="card  collapsed-card">
                                        <div class="card-header bg-light">7. How to insert predefined replies?
                                        <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                                        </div>
                                        </div>
                                        <div class="card-body">
                                        • Set the addressee<br>
                                        • Select Classifications 
                                        </div>
                                    </div>
            
                                </div>
                        </div>
                        <!-- /.card -->
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section> 

@endsection