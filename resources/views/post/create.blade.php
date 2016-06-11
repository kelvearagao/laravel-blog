@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Criar Posts</div>

                <div class="panel-body">
                    <form action="{{ url('/post') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       
                        <div class="form-group">
                            <label for="name">Título</label>
                            <input type="text" name="title" class="form-control" value="">   
                        </div>

                        <div class="form-group">
                            <label for="email">Conteúdo</label>
                            <textarea name="content" class="form-control" rows="5"></textarea> 
                        </div>

                        <div class="form-group">
                            <label for="image">Imagem</label>
                            <input type="file" name="image">
                        </div>

                        <button type="submit" class="btn btn-default">Salvar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection