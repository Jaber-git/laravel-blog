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

           <div class="card card-light">
              <div class="card-header">
                <h3 class="card-title">Category</h3>
              </div>

              @include('includes.messages')
              
    
              <!-- /.card-header -->
              <!-- form start -->
            <form role="form" action="{{route('category.update'  , $category->id)}}" method="post">
               @csrf
               @method('put')
                <div class="card-body ">
               
                  <div class=" offset-md-3 col-md-5">
                    <div class="form-group">
                        <label for="name">Category title</label>
                    <input type="text" class="form-control"  name="name" value="{{$category->name}}" id="name" placeholder="Enter tag title">
                      </div>
                    
                      <div class="form-group">
                        <label for="slug">Category slug</label>
                        <input type="text" class="form-control"  name="slug" value="{{$category->slug}}" i id="slug" placeholder="slug">
                      </div>

                      <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('category.index')}}" class="btn btn-warning">Back</a>
                     </div>
                 
                </div>

                    
               </div>

                <!-- /.card-body -->
           

                
            
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