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

    <title>Edit Teacher</title> 
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
                    <span class="text">Modify Teacher</span>
                </div>
                <div class="bootstrap-container">
                    <div class="container">
                        <form class="row g-3" action="{{ route('teachers.update', $teacher) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Nom</label>
                                <input type="text" class="form-control" name ="first_name" pattern="^[a-zA-Z]{3,}$" value="{{ $teacher->first_name }}">
                              </div>
                              <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Prénom</label>
                                <input type="text" class="form-control"name ="last_name" pattern="^[a-zA-Z]{3,}$" value="{{ $teacher->last_name }}">
                              </div>

                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email" required value="{{ $teacher->email }}">
                            </div>
                            <div class="col-md-6">
                              <label for="inputPassword4" class="form-label">Téléphone</label>
                              <input type="text" class="form-control" name="phone" pattern="^(06|07|05)[0-9]{8}$" value="{{ $teacher->phone }}">
                            </div>
                            <div class="col-8">
                              <label for="inputAddress" class="form-label">Adresse</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="Adresse" name="address" value="{{ $teacher->address }}">
                            </div>
                            <div class="col-4">
                                <label for="inputAddress" class="form-label">Specialité</label>
                                <input type="text" class="form-control" name="speciality" required placeholder="Ex : Développement back-end" value="{{ $teacher->speciality }}">
                              </div>
                            <div class="col-md-6">
                              <label for="inputCity" class="form-label">User Email</label>
                              <input type="email" class="form-control" name="uemail" value="{{ $teacher->uemail }}" required>
                            </div>

                            <div class="col-md-6">
                              <label for="inputZip" class="form-label">User Password</label>
                              <input type="password" class="form-control" name="upassword" value="{{ $teacher->upassword }}" minlength="8" required>
                            </div>
                            <div class="d-grid gap-2 col-6 mt-2">
                                <button class="btn btn-outline-success" type="submit">Modifier</button>
                                <a href="{{route('admindashboard')}}" class="btn btn-outline-danger">Annuler</a>
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


