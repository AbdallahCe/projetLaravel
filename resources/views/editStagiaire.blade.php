<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admindb.css') }}">
    <!----===== Iconscout CSS ===== -->
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Modifier Un Stagiaire</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <span class="logo_name">ISTA NTIC GUELMIM</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="{{route('admindashboard')}}">
                    <i class="uil uil-user"></i>                    
                    <span class="link-name">Enseignants</span>
                </a></li>
                <li><a href="{{route('admindashboard.stagiaires')}}">
                    <i class="uil uil-graduation-cap"></i>
                    <span class="link-name">Stagiaires</span>
                </a></li>
                <li><a href="{{route('admindashboard.filieres')}}">
                    <i class="uil uil-cell"></i>
                    <span class="link-name">Filières</span>
                </a></li>
                <li><a href="{{route('admindashboard.modules')}}">
                    <i class="uil uil-book"></i>                    
                    <span class="link-name">Modules</span>
                </a></li>
                <li><a href="{{route('admindashboard.annonces')}}">
                    <i class="uil uil-comment-add"></i>
                    <span class="link-name">Ajouter une annonce</span>
                </a></li>
                <li><a href="{{route('admindashboard.emploisTemps')}}">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">Emplois du temps</span>
                </a>
                </li>
            </ul>
            
            <ul class="logout-mode">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
                    <span class="link-name" hidden>Dark Mode</span>
                </a> </li>
                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <span class="text">Modify stagiaire</span>
                </div>
                <div class="bootstrap-container">
                    <div class="container">
                        <form class="row g-3" action="{{ route('stagiaires.update', $stagiaire) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Nom</label>
                                <input type="text" class="form-control" name ="first_name" value="{{ $stagiaire->first_name }}">
                              </div>
                              <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Prénom</label>
                                <input type="text" class="form-control"name ="last_name" value="{{ $stagiaire->last_name }}">
                              </div>

                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email" value="{{ $stagiaire->email }}">
                            </div>
                            <div class="col-md-6">
                              <label for="inputPassword4" class="form-label">Téléphone</label>
                              <input type="text" class="form-control" name="phone" value="{{ $stagiaire->phone }}">
                            </div>
                            <div class="col-6">
                              <label for="inputAddress" class="form-label">Adresse</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="Adresse" name="address" value="{{ $stagiaire->address }}">
                            </div>
                            <div class="col-3">
                                <label for="inputAddress" class="form-label">Filière</label>
                                <input type="text" class="form-control" name="filiere" value="{{ $stagiaire->filiere }}">
                            </div>
                            <div class="col-3">
                                <label for="inputAddress" class="form-label">Classe</label>
                                <input type="text" class="form-control" name="classe" value="{{ $stagiaire->classe }}">
                            </div>

                            <div class="col-4">
                                <label for="inputAddress" class="form-label">CEF</label>
                                <input type="text" class="form-control" name="cef" value="{{ $stagiaire->cef }}">
                            </div>

                            <div class="col-4">
                                <label for="inputAddress" class="form-label">Sexe</label>
                                <input type="text" class="form-control" name="gender" value="{{ $stagiaire->gender }}">
                            </div>


                            <div class="col-2">
                                <label for="inputAddress" class="form-label">Date de naissance</label>
                                <input type="text" class="form-control" name="birthday" value="{{ $stagiaire->birthday }}">
                            </div>
                            <div class="col-2">
                                <label for="inputAddress" class="form-label">Lieu de naissance</label>
                                <input type="text" class="form-control" name="birthPlace" value="{{ $stagiaire->birthPlace }}">
                            </div>

                            <div class="col-md-6">
                              <label for="inputCity" class="form-label">User Email</label>
                              <input type="email" class="form-control" name="uemail" value="{{ $stagiaire->uemail }}">
                            </div>

                            <div class="col-md-6">
                              <label for="inputZip" class="form-label">User Password</label>
                              <input type="password" class="form-control" name="upassword" value="{{ $stagiaire->upassword }}">
                            </div>
                            <div class="d-grid gap-2 col-6 mt-2">
                                <button class="btn btn-outline-success" type="submit">Modifier</button>
                                <a href="{{route('admindashboard.stagiaires')}}" class="btn btn-outline-danger">Annuler</a>
                            </div>
                        </form>
                    </div> 
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('js/bootstrap.js')}}" ></script>
    <script src="{{asset('js/script.js')}}" ></script>
</body>
</html>


