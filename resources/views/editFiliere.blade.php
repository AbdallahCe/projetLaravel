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

    <title>Modifier Un filiere</title> 
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
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Se déconnecter</span>
                </a></li>
                <li class="mode" style="display:hidden">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
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
                    <span class="text">Modify filiere</span>
                </div>
                <div class="bootstrap-container">
                    <div class="container">
                        <form class="row g-3" action="{{ route('filieres.update', $filiere) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Code Filière</label>
                                <input type="text" class="form-control" name ="codeFiliere" value="{{ $filiere->codeFiliere }}" required>
                              </div>
                              <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Intitulé</label>
                                <input type="text" class="form-control"name ="nomFiliere" value="{{ $filiere->nomFiliere }}" required>
                              </div>

                            <div class="d-grid gap-2 col-6 mt-2">
                                <button class="btn btn-outline-success" type="submit">Modifier</button>
                                <a href="{{route('admindashboard.filieres')}}" class="btn btn-outline-danger">Annuler</a>
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


