@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bem vindo ao blog!</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <tbody>
                                    @foreach( $posts as $post )
                                        <tr>
                                            <td class="col-md-1">
                                                <img src="{{ asset($post->image) }}" class="img-rounded" height="50px">
                                            </td>
                                            
                                            <td class="col-md-9">
                                                <b>{{ $post->title }}</b> ({{ $post->date }}) <br>
                                                {{ str_limit($post->content, 200) }}
                                            </td>

                                            <td class="col-md-1">
                                                <a href="{{ url('post/' . $post->id) }}">Leia mais</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
