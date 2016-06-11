@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Usuários</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                           <a href="{{ url('user/create') }}" class="btn btn-default">Adicionar Usuário</a>
                        </div>
                    </div>

                    <br>

                	<table class="table table-bordered">
                		<thead>
                			<tr>
                				<th>Foto</th>
                				<th>Nome</th>
                				<th>Email</th>
                				<th>Data de nascimento</th>
                				<th>Ação</th>
                			</tr>
                		</thead>

                		<tbody>
	                		@foreach( $users as $user )
		                    	<tr>
		                    		<td><img src="{{ asset($user->photo) }}" class="img-rounded" height="50px"></td>
		                    		<td>{{ $user->name }}</td>
		                    		<td>{{ $user->email }}</td>
		                    		<td>{{ $user->birth_date }}</td>
		                    		<td>
		                    			{{-- Visualizar usuário --}}
		                    			<a href="{{ url('user/'.$user->id) }}" title="visualizar">
		                    				<span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
		                    			</a> 

		                    			{{-- Editar usuário--}}
		                    			<a href="{{ url('user/'.$user->id.'/edit') }}" title="editar">
		                    				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
		                    			</a>

		                    			{{-- Remover usuário --}}
		                    			<form action="{{ url('user/'.$user->id) }}" method="post" style="display: inline">
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
@endsection