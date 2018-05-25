@extends('layouts.app')

@section('content')
<body style="background:url('/image/fly.jpg'); background-repeat: no-repeat;background-size: 100% auto;">
@if(Session::has('success'))
      <div class="alert alert-success" role="alert">
     <strong>Success:</strong>{{Session::get('success')}}
</div>
@endif
@if(Session::has('update'))
      <div class="alert alert-success" role="alert">
     <strong>Success:</strong>{{Session::get('update')}}
</div>
@endif
@if(Session::has('suppression'))
      <div class="alert alert-success" role="alert">
     <strong>Success:</strong>{{Session::get('suppression')}}
</div>
@endif
@if(Session::has('show'))
      <div class="alert alert-success" role="alert">
     <strong>show:</strong>{{Session::get('show')}}
</div>
@endif
@if(Session::has('un'))
      <div class="alert alert-success" role="alert">
     <strong>unsuccess:</strong>{{Session::get('un')}}
</div>
@endif


<h1><span style="color:red;">BLOG</span>/POST <a href="{{ route('posts.create') }}" ><i class="fas fa-plus-circle"></i></a> </h1>
<br><br>
</div style="opacity:0.5;">
    <table class="table table-striped table-dark" style="opacity: 0.5;">
  <thead>
    <tr>
      <th scope="col">AS Number</th>
      <th scope="col">peeringRS</th>
      <th scope="col">peeringDB</th>
      <th scope="col">AS-SET</th>```
      <th scope="col">Contact</th>


    </tr>
  </thead>

  @foreach($posts as $post)
  <tbody>
    <tr>

      <th scope="row">{{$post->asnumber}}</th>
      <td>{{$post->peeringrs}}</td>
      <td>{{$post->peeringdb}}</td>
      <td>{{$post->asset}}</td>
      <td>{{$post->contact}}</td>
      <td>{{$post->created_at->diffForHumans()}}</td>

      @can('update-post', $post)

      <td>  {!! Form::open(['route' => ['posts.destroy',$post->id] ,'method'=>'DELETE','style'=>'display:inline'])!!}
            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                    {!!Form::close()!!}
        </td>

  <td>  <a href="{{route('posts.show',$post->id)}}" class="btn btn-warning"><i class="far fa-eye"></i></a></td>

    <td>  <a href="{{route('posts.edit',$post->id)}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a></td>
  @endcan

 </tr>

  </tbody>


  @endforeach
  <center>  {{ $posts->links() }}	</center>

</table>
</div>
</body>
   @endsection
