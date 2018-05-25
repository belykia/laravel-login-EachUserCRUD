@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="/css/style.css">
  <script src="script.js"></script>
</head>
<body>
  <a href="{{ url('/posts') }}" class="btn btn-primary"><i class="fas fa-angle-left"></i></a>
  @if(Session::has('error'))
        <div class="alert alert-success" role="alert">
       <strong>ERROR404:</strong>{{Session::get('error')}}
  </div>
  @endif
</body>
</html>
@endsection
