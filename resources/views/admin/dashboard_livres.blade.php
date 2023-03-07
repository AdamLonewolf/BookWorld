@extends('layout.layout')
@section('content')
@include('admin.admin_portion.header')
<div class="container">
    <div class="row">
        <div class="new d-flex justify-content-end align-items-center">
            <a href="{{route('new_livre')}}" class="add-btn"><i class="bi bi-plus-lg" style="margin-right: 10px"></i>
            Nouveau
            </a>
        </div>
        <table class="table table-responsive my-5">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="elm">
                        <th scope="row">{{ $book->titre}}</th>
                        <td>{{ $book->auteur->nom }}</td>
                        <td>{{ $book->prix }}</td>
                        <td>{{ $book->genre->nom }}</td>
                        <td>
                            <a href="{{route('edit_livre', ['id'=>$book->id])}}" class="btn-modifier">
                                <i class="bi bi-pencil-square"></i>
                                Modifier
                            </a>
                        </td>
                        <td> 
                            <form class="form-delete" action="{{route('delete_livre')}}" method="post">
                                @csrf
                                  <input type="hidden" name="id" value="{{ $book->id }}">
                                  <button class="btn-supprimer mx-3" style="border:none"><i class="bi bi-trash-fill"></i> Supprimer</button>
                               </form>
                        </td>
                    </tr>
                @endforeach
                    </div>
            </tbody>
        </table>
        <div class="d-flex justify-content-center align-items-center paginator">
            {{$books->links()}}
        </div>
    </div>
</div>


@endsection