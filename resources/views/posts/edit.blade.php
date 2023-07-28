@extends('admin')
@section('content')
 
<section class="content">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card ">
          <div class="card-header">
            <h3 class="card-title">Post</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          
          <form action="{{route('posts.update',$post->id)}}" method="post">
            @CSRF
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$post->title}}" placeholder="Enter title">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="body" value="{{$post->body}}" placeholder="Enter Body">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>

      </div>
</section>
@endsection