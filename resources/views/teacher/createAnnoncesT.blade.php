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

    <title>Créer un annonce</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <span class="logo_name">ISTA NTIC GUELMIM</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                
                <li><a href="{{route('showannoncesT')}}">
                    <i class="uil uil-comment-add"></i>
                    <span class="link-name">Annonces</span>
                </a></li>
                <li><a href="{{route('showemploisT')}}">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">Emplois du temps</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li style="margin-left: 20px">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </li>
                <li class="mode">
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
                    <span class="text">Ajouter une annonce</span>
                </div>
                <div class="bootstrap-container">
                    <div class="container">
                        <form class="row g-3" action="{{ route('createAnnoncesTpost') }}" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Nom Posteur</label>
                                <input type="text" class="form-control" name ="nomPosteur" readonly value="{{$curr_name}}" >
                              </div>
                              <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Objet</label>
                                <input type="text" class="form-control"name ="filiere"  required>
                              </div>
                              <div class="col-md-12 mt-3">
                                <div class="form-floating">
                                    <label for="floatingTextarea">Message</label>
                                    <textarea class="form-control" placeholder="Ajouter un message" name="message" required></textarea>
                                </div>
                              </div>

                            <div class="d-grid gap-2 col-6 mt-2">
                                <button class="btn btn-outline-success" type="submit">Ajouter</button>
                                <a href="{{route('showannoncesT')}}" class="btn btn-outline-danger">Annuler</a>
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


