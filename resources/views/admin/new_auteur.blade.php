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
    @foreach ($errors->all() as $error)
        <div>{{$error}}</div>
    @endforeach
    <form class="form-new" action="{{route('store_auteur')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3 class="text-center my-3">Enregistrer un auteur</h3>
        <div class="wrapper-bloc d-flex">
            <div class="bloc-1 p-3">
                <div class="form-group my-3">
                    <label for="name">Nom de l'auteur</label>
                    <input type="text" class="form-control" id="nom" name="nom"
                        placeholder="Entrez le nom de l'auteur" value="">
                </div>
                <div class="form-group my-3">
                    <label for="description">Biographie</label>
                    <textarea class="form-control" id="biographie" name="biographie" placeholder="Entrez la biographie de l'auteur..."
                        rows="3"></textarea>
                </div>
            <div class="form-group  my-3">
                <div class="mb-3">
                    <label for="image" class="form-label">Upload d'image</label>
                    <input class="form-control" type="file" name="image" id="image">
                </div>
            </div>
            </div>
        </div>
        <div class="form-btn">
          <button type="submit" id="submit" name="submit" style="width:50%" class="btn-submit">Enregistrer un auteur</button>
      </div>
    </form>
</body>

</html>