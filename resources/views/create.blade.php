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

    <title>Admin Dashboard</title> 
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
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
                <li class="mode" style="display:hidden">
                    <a href="#">
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
                    <span class="text">Ajouter un Enseignants</span>
                </div>
                <div class="bootstrap-container">
                    <div class="container">
                        <form class="row g-3" action="{{ route('teachers.store') }}" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Nom</label>
                                <input type="text" class="form-control" name ="first_name" pattern="^[a-zA-Z]{3,}$" required>
                              </div>
                              <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Prénom</label>
                                <input type="text" class="form-control"name ="last_name" pattern="^[a-zA-Z]{3,}$" required>
                              </div>

                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="col-md-6">
                              <label for="inputPassword4" class="form-label">Téléphone</label>
                              <input type="text" class="form-control" name="phone" pattern="^(06|07|05)[0-9]{8}$">
                            </div>
                            <div class="col-8">
                              <label for="inputAddress" class="form-label">Adresse</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="Adresse" name="address">
                            </div>
                            <div class="col-4">
                                <label for="inputAddress" class="form-label">Specialité</label>
                                <input type="text" class="form-control" name="speciality" required placeholder="Ex : Développement back-end">
                              </div>
                            <div class="col-md-6">
                              <label for="inputCity" class="form-label">User Email</label>
                              <input type="email" class="form-control" name="uemail" required>
                            </div>

                            <div class="col-md-6">
                              <label for="inputZip" class="form-label">User Password</label>
                              <input type="password" class="form-control" name="upassword" minlength="8" required>
                            </div>
                            <div class="d-grid gap-2 col-6 mt-2">
                                <button class="btn btn-outline-success" type="submit">Ajouter</button>
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


