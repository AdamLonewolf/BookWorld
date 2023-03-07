<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookworld-Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ URL::to('css/bootstrap.min.css') }} " rel="stylesheet" />
    <link href="{{ URL::to('css/style.css') }} " rel="stylesheet" />
</head>

<body style="background: linear-gradient(to right, #76b852, #8dc26f); ">
    <form class="form-new" action="{{route('update_livre')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $books->id }}">
        <h3 class="text-center my-3">Modification d'un livre</h3>
        <div class="wrapper-bloc d-flex">
            <div class="bloc-1 p-3">
                <div class="form-group my-3">
                    <label for="name">Titre du livre</label>
                    <input type="text" class="form-control" id="titre" name="titre"
                        placeholder="Entrez le nom de l'auteur" value="{{$books->titre}}">
                </div>
                <div class="form-group my-3">
                    <label for="description">Résumé</label>
                    <textarea class="form-control" id="resume" name="resume" placeholder="Entrez le résumé de l'oeuvre..."
                        rows="3">{{$books->resume}}</textarea>
                </div>
                <div class="form-group my-3">
                    <label for="name">Prix du livre</label>
                    <input type="number" class="form-control" id="prix" name="prix"
                        placeholder="" value="{{$books->prix}}">
                </div>
                <div class="form-group  my-3">
                <label for="genre">Genre du livre</label>
                <select class="form-control" id="genre" name="genre">
                    @foreach ($genre as $g)
                    @if ($g->id == $books->genre_id)
                                <option value="{{ $g->id }}" selected>{{ $g->nom }}</option>
                            @else
                                <option value="{{ $g->id}}">{{ $g->nom }}</option>
                            @endif
                    @endforeach 
                </select>
                </div>
                <div class="form-group  my-3">
                    <label for="genre">Auteur du livre</label>
                    <select class="form-control" id="auteur" name="auteur">
                        @foreach ($auteur as $a)
                        @if ($a->id == $books->auteur_id)
                        <option value="{{ $a->id }}" selected>{{ $a->nom }}</option>
                    @else
                        <option value="{{ $a->id}}">{{ $a->nom }}</option>
                    @endif
                        @endforeach 
                    </select>
                    </div>
            <div class="form-group  my-3">
                <div class="mb-3">
                    <label for="picture" class="form-label">Upload d'image</label>
                    <input class="form-control" type="file" name="image" id="image">
                </div>
            </div>
            </div>
        </div>
        <div class="form-btn">
          <button type="submit" id="submit" name="submit" style="width:50%" class="btn-submit">Modifier un livre</button>
      </div>
    </form>
</body>

</html>