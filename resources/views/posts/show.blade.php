


@extends('layouts.app')

@section('content')


&nbsp;  &nbsp;&nbsp;<a href="{{ url('/posts') }}" class="btn btn-primary"><i class="fas fa-angle-left"></i></a>
<br><br>
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <h4>ASNumber:</h4>  {{$posts->asnumber}}
  </li>

  <li class="list-group-item d-flex justify-content-between align-items-center">
  <h4>peeringRS:</h4>   {{$posts->peeringrs}}
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
  <h4>peeringDB:</h4>   {{$posts->peeringdb}}
  </li>

<li class="list-group-item d-flex justify-content-between align-items-center">
<h4>AS-SET:</h4>   {{$posts->asset}}
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
<h4>Contact:</h4>   {{$posts->contact}}
</li>
</ul>
@endsection
