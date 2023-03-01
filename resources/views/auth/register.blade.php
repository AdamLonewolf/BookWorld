<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BookWorld</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{URL::to('css/bootstrap.min.css')}} " rel="stylesheet" />
        <link href="{{URL::to('css/style.css')}} " rel="stylesheet" />
        
    </head>

<body style="background-color:aquamarine">
    @if($errors->all())
    <div class="alert alert-danger alerte my-3"  role="alert">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>
    @endif
    
    <form class="form-auth" action="{{route('register')}}" method="POST">
        @csrf    
        <div class="wrapper-bloc d-flex">
            <div class="bloc-1">
                <h3 class="text-center my-2">Création d'un compte</h3>
                <h5 class="text-center">Veuillez renseigner les champs ci-dessous</h5>
            <div class="wrapper-input mt-3">
                <div class="form-group my-3">
                    <label for="name" class="my-2">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Nom d'utilisateur" >
                </div>
                <div class="form-group my-3">
                    <label for="name" class="my-2">Email</label>
                    <input type="text" class="form-control" id="email" name="email"
                        placeholder="Email">
                </div>
                <div class="form-group my-3">
                    <label for="password" class="my-2">Mot de passe</label>
                    <input type="text" class="form-control" id="password" name="password"
                        placeholder="Mot de passe">
                </div>
                <span>Vous avez déjà un compte ? <a href="{{route('login_page')}}">connectez-vous</a></span>
                <div class="form-btn">
                    <button type="submit" id="submit" name="submit" style="width:50%" class="btn-submit">Créer un compte</button>
                </div>
                        
            </div>    
            </div>
            <div class="bloc-2 p-3"></div>
        </div>
    </form>
</body>
</html>