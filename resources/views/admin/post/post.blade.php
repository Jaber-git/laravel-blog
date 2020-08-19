 
@extends('admin.layouts.app')

@section('headSection')
 <!-- Select2 -->
 <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
 <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    
@endsection
 
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
                <h3 class="card-title">Post</h3>
              </div>

              @include('includes.messages')

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('post.store')}}" method="post">
                @csrf

                <div class="card-body d-md-flex d-sm-flex flex-sm-column flex-md-row">
               
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Post title</label>
                        <input type="text" class="form-control" id="title" name="tittle" placeholder="Enter title">
                      </div>
                    
                      <div class="form-group">
                        <label for="slug">Post slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                      </div>

                      <div class="form-group">
                        <label for="file">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile"  name="image">
                            <label class="custom-file-label" for="file" name="image">Choose file</label>
                          </div>
                          
                        </div>
                      </div>

                   </div>

                   
                    <div class="col-md-5 offset-md-1">
                          
                        
                              
                      <br/>
                              
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1"  name="status">
                          <label class="form-check-label" for="checkbox" value="1">Publish</label>
                        </div>
                        
                        <br/>
                     

                        <div class="form-group">
                          <label>Select tags</label>
                          <select class="select2 mt-2" multiple="multiple" data-placeholder="Select a State" style="width: 100%; " name="tags[]">
                            @foreach ($tags as $tag)
                          <option value="{{ $tag->id }}" >{{$tag->name}}</option>
                            @endforeach
                         
                            
                          </select>
                        </div>
                     
                        <div class="form-group" data-select2-id="29">
                          <label>select category</label>
                          <select class="select2 mt-2  " multiple="" data-placeholder="Select a State" name="categories[]" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" >{{$category->name}}</option>
                              @endforeach
                          </select>
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
                <textarea class="textarea" placeholder="Place some text here" name="content"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
             
            </div>
          </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('post.index')}}" class="btn btn-warning">Back</a>
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

  @section('footerSection')
            <!-- Select2 -->
        <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>

        <script>

        $(document).ready(function(){
          //Initialize Select2 Elements
          $('.select2').select2();
        });

      </script>

  @endsection