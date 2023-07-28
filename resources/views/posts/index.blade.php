@extends('admin')
@section('content')
@if ($message = Session::get('success'))
     <div class="alert alert-success alert-block" id="flashmsg">
	       <button type="button" class="close" data-dismiss="alert">×</button>	
         <strong>{{ $message }}</strong>
     </div>
@endif
<section class="container">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Posts table</h3> <br>
            @can('write post')
            <a href="{{route('posts.create')}}">
              <button class="btn btn-info"><i class="fa fa-plus"></i>Add</button>
             </a>
             @endrole
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
               
                <tr>
                  <th style="width: 10px">S.N</th>
                  <th>Title</th>
                  <th>Body</th>
                  <th>Actions</th>
                 
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
                    
               <td>{{ $loop->iteration }}</td>
                  <td>{{$post->title}}</td>
                   <td>{{$post->body}}</td>
                   <td>
                   <div class="d-flex">
                    @can ('edit post')
                    <a href="{{route('posts.edit',$post->id)}}"><button class="btn btn-warning">Edit</button></a>
                    @endrole
                    <form action="{{route('posts.destroy',$post->id)}}" method="post" class="ml-2">
                       @csrf
                       @method('DELETE')
                       <button class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
                    </form>
                  </div>
                   </td>
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>

      </div>
</section>
<script>
  setTimeout(function() {
     $('#flashmsg').remove();
  }, 3000);
</script>

@endsection