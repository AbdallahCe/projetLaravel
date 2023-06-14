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

    <title>Créer un emploi</title> 
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
                    <span class="link-name"hidden>Dark Mode</span>
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
                    <span class="text">Add emploi</span>
                </div>
                <div class="bootstrap-container">
                    <div class="container">
                        <form class="row g-3" action="{{ route('emplois.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12 my-4">
                                <select class="form-select" aria-label="type" name="type" id="typeSelect">
                                    <option selected >Choisi ici</option>
                                    <option value="teacher">Enseignant</option>
                                    <option value="classe">Classe</option>
                                    
                                </select> 
                            </div>

                            <div class="col-md-6 ">
                                <label for="inputPassword4" class="form-label">Classe </label>
                                <input type="text" class="form-control" name ="classe" required id="classeInput">
                            </div>

                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label"> Enseignant</label>
                                <input type="text" class="form-control" name ="teacher" required id="enseignantInput">
                            </div>
                            

                            <div class="col-md-12 mt-4">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02" name="image">
                                    <label class="input-group-text" for="inputGroupFile02">Importer</label>
                                </div>
                            </div>

                            <div class="d-grid gap-2 col-6 mt-2">
                                <button class="btn btn-outline-success" type="submit">Ajouter</button>
                                <a href="{{route('admindashboard.emploisTemps')}}" class="btn btn-outline-danger">Annuler</a>
                            </div>
                        </form>
                    </div> 
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                </div>

            </div>
        </div>
    </section>
    <script>
        const typeSelect = document.getElementById('typeSelect');
        const classeInput = document.getElementById('classeInput');
        const enseignantInput = document.getElementById('enseignantInput');

        typeSelect.addEventListener('change', function() {
            if (typeSelect.value === 'teacher') {
                enseignantInput.disabled = false;
                classeInput.disabled = true;
                classeInput.value = '';
            } else if (typeSelect.value === 'classe') {
                // If "Classe" is selected, enable the classe input
                classeInput.disabled = false;
                enseignantInput.disabled = true;
                enseignantInput.value='';

            }
        });
    </script>
    <script src="{{asset('js/bootstrap.js')}}" ></script>
    <script src="{{asset('js/script.js')}}" ></script>
</body>
</html>


