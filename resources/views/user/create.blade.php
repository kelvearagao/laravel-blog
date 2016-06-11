@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Usuário</div>

                <div class="panel-body">

                    <form action="{{ url('/user') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       
                    	<div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="name" class="form-control" value="">   
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" value="">
                        </div>

                         <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label for="birth_date">Data de nascimento</label>
                            <input type="date" name="birth_date" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo">
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="is_admin" value="true"> Administrador
                        </div>

                        <button type="submit" class="btn btn-default">Salvar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection