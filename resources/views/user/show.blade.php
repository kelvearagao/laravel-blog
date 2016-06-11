@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Visualizar Usuário</div>

                <div class="panel-body">

                    <div class="row">
                         <div class="col-md-2"><b>Photo</b></div>
                         <div class="col-md-10"><img src="{{ asset($user->photo) }}" class="img-rounded" height="100px"></div>   
                    </div>

                	<div class="row">
                         <div class="col-md-2"><b>Nome</b></div>
                         <div class="col-md-10">{{ $user->name }}</div>   
                    </div>

                    <div class="row">
                         <div class="col-md-2"><b>Email</b></div>
                         <div class="col-md-10">{{ $user->email }}</div>   
                    </div>

                    <div class="row">
                         <div class="col-md-2"><b>Data de nascimento</b></div>
                         <div class="col-md-10">{{ $user->birth_date }}</div>   
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection