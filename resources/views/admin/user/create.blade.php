 
@extends('admin.layouts.app')


 
@section('main-content')

 <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

           <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Title</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
               
                <div class="card-body d-md-flex d-sm-flex flex-sm-column flex-md-row">
               
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Post title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter title">
                      </div>
                    
                      <div class="form-group">
                        <label for="slug">Post slug</label>
                        <input type="text" class="form-control" id="slug" placeholder="slug">
                      </div>
                  </div>


                    <div class="col-md-5 offset-md-1">
                          
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
                              
                              <br/>
                               <br/>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Publish</label>
                        </div>
                    </div>
                 </div>
               

                <!-- /.card-body -->
                  <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Write post body here
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm " data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"  style="color: #ddd;"></i></button>
               
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
              <p class="text-sm mb-0">
                Editor <a href="https://github.com/summernote/summernote">Documentation and license
                information.</a>
              </p>
            </div>
          </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

         
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>


  @endsection