
@extends('layouts.app')

@section('content')
<body style="background:url('/image/game.jpg'); background-repeat: no-repeat;background-size: 100% auto;">
<div class="container" style="opacity:0.7;">
    <div class="row justify-content-center">
        <div class="col-md-8">


                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif



                    @if ($errors->count() > 0)
                          <ul>
                              @foreach($errors->all() as $error)
                                  <li> * {{ $error }}</li>
                              @endforeach
                          </ul>
                      @endif
                    </div>
{!! Form::model($post,['method'=>'PATCH','route'=>['posts.update',$post->id]])!!}
    @include('posts.form')
{!!Form::close()!!}



                </div>
            </div>
        </div>
    </div>
</div>
</body>
           @endsection
