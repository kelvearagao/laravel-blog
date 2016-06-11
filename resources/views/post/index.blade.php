@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>

                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-12">
					       <a href="{{ url('post/create') }}" class="btn btn-default">Criar post</a>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Imagem</th>
                                        <th>Título</th>
                                        <th>Conteúdo</th>
                                        <th>Data de publicação</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach( $posts as $post )
                                        <tr>
                                            <td><img src="{{ asset($post->image) }}" class="img-rounded" height="50px"></td>
                                            <td>{{ $post->title }}</td>
                                            <td class="col-md-6">{{ str_limit($post->content, 200) }}</td>
                                            <td class="col-md-2">{{ $post->date }}</td>
                                            <td>
                                                {{-- Visualizar post --}}
                                                <a href="{{ url('post/'.$post->id) }}" title="visualizar">
                                                    <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
                                                </a> 

                                                {{-- Editar post--}}
                                                <a href="{{ url('post/'.$post->id.'/edit') }}" title="editar">
                                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                </a>

                                                {{-- Remover post --}}
                                                <form action="{{ url('post/'.$post->id) }}" method="post" style="display: inline">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button type="submit" class="btn btn-link" 
                                                        style="margin: 0px; padding: 0px; with: auto; display: inline;">
                                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                    </button>
                                                </form> 
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