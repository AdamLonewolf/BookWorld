@extends('layout.layout')
@section('content')
@include('admin.admin_portion.header')
<div class="container">
  
    <div class="row">
        <div class="new d-flex justify-content-end align-items-center">
            <a href="{{route('new_auteur')}}" class="add-btn"><i class="bi bi-plus-lg" style="margin-right: 10px"></i>
            Nouveau
            </a>
        </div>
        <table class="table table-responsive my-5">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nom de l'auteur</th>
                    <th scope="col">Nombre de livres</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($auteur as $auteurs)
                    <tr class="elm">
                        <th scope="row">{{ $auteurs->nom}}</th>
                        <td>{{ $auteurs->oeuvres->count()}}</td>
                        <td>
                            <a href="{{route('edit_auteur', ['id'=>$auteurs->id])}}" class="modifier">
                                <i class="bi bi-pencil-square"></i>
                                Modifier
                            </a>    
                        </td>
                        <td>   
                            <form class="form-delete" action="{{route('delete_auteur')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $auteurs->id }}">
                                <button class="supprimer mx-3" style="border:none"><i class="bi bi-trash-fill"></i>Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                    </div>
            </tbody>
        </table>
        <div class="paginator">
            {{$auteur->links()}}
        </div>
    </div>
</div>


@endsection