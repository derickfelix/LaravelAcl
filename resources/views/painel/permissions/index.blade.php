@extends('painel.templates.template')



@section('content')
<!--Filters and actions-->
<div class="actions">
    <div class="container">
        <a class="add" href="forms">
            <i class="fa fa-plus-circle"></i>
        </a>

        <form class="form-search form form-inline">
            <input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">
            <input type="submit" name="pesquisar" value="Encontrar" class="btn btn-success">
        </form>
    </div>
</div>
<div class="clear"></div>

<div class="container">
    <h1 class="title">
        Permissions
    </h1>

    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Label</th>
            <th>Ações</th>
        </tr>

        @forelse($permissions as $permission)
        <tr>
            <td>{{$permission->id}}</td>
            <td>{{$permission->name}}</td>
            <td>{{$permission->label}}</td>
            <td>
                <a href="{{route('painel.permissions.roles', ['id' => $permission->id])}}" class="roles">
                     <i class="fa fa-lock"></i>
                </a>
                <a href="{{route('painel.permissions.edit', ['id' => $permission->id])}}" class="edit">
                    <i class="fa fa-pencil-square-o"></i>
                </a>
                <a href="{{route('painel.permissions.delete', ['id' => $permission->id])}}" class="delete">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @empty
        <tr><td colspan="90"><p>Nenhum Resultado</p></td></tr>
        @endforelse

    </table>


   {{$permissions->render()}}
</div>

@endsection