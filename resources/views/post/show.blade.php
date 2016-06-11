@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Post</div>

                <div class="panel-body">

                    <div class="row-fluid">
                        <div class="col-span-12"><h2>{{ $post->title }}</h2></div>
                    </div>

                    <div class="row-fluid">
                        <div class="col-span-12">{{ $post->content }}</div>
                    </div>

                    <div class="row-fluid">
                        <div class="col-span-12"><h4>Publicado em {{ $post->date }}</h4></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection