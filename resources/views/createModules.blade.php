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

    <title>Créer un module</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <span class="logo_name">ISTA NTIC GUELMIM</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-user"></i>                    
                    <span class="link-name">Enseignants</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-graduation-cap"></i>
                    <span class="link-name">Système educatif</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comment-add"></i>
                    <span class="link-name">Ajouter une annonce</span>
                </a></li>
                <li><a href="#">
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
                    <span class="text">Add module</span>
                </div>
                <div class="bootstrap-container">
                    <div class="container">
                        <form class="row g-3" action="{{ route('modules.store') }}" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Code module</label>
                                <input type="text" class="form-control" name ="codeModule" required>
                              </div>
                              <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Intitulé</label>
                                <input type="text" class="form-control"name ="nomModule" required>
                              </div>
                              <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Masse horaire</label>
                                <input type="number" class="form-control"name ="masseHoraire" step="1" min="1" max="200" required>
                              </div>                              
                              <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Coef</label>
                                <input type="number" class="form-control"name ="coef" step="1" min="1" max="3" required>
                              </div>
                            <div class="d-grid gap-2 col-6 mt-2">
                                <button class="btn btn-outline-success" type="submit">Ajouter</button>
                                <a href="{{route('admindashboard.modules')}}" class="btn btn-outline-danger">Annuler</a>
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


