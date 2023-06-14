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

    <title>Show stagiaires</title> 
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
                <div>
                    <a class="ajout-btn" href="{{route('stagiaires.create')}}">Ajouter un Stagiaire</a>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <span class="text">Liste des stagiaires</span>
                </div>

            
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom et prénom</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Sexe</th>
                        <th scope="col">Email</th>
                        <th scope="col">Filière</th>
                        <th scope="col">Classe</th>
                        <th scope="col">UserEmail</th>
                        <th scope="col">Userpassword</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $stagiaires as $stagiaire )
                            <tr>
                                <th scope="row"> {{$stagiaire->id}}</th>
                                <td>{{$stagiaire->first_name}} {{$stagiaire->last_name}} </td>
                                <td>{{$stagiaire->address}}</td>
                                <td>{{$stagiaire->phone}}</td>
                                <td>{{$stagiaire->gender}}</td>
                                <td>{{$stagiaire->email}}</td>
                                <td>{{$stagiaire->filiere}}</td>
                                <td>{{$stagiaire->classe}}</td>
                                <td>{{$stagiaire->uemail}}</td>
                                <td>{{$stagiaire->upassword}}</td>
                                <td>
                                    <a href="{{ route('stagiaires.edit', ['stagiaire' => $stagiaire->id]) }}"><i class="uil uil-edit"></i></a>
                                    <a href="{{route('stagiaires.destroy', $stagiaire)}}" onclick="return confirm('Confirmer la suppression!')"><i class="uil uil-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                </table>
            </div>
        </div>
    </section>

    <script src="{{asset('js/bootstrap.js')}}" ></script>
    <script src="{{asset('js/script.js')}}" ></script>
</body>
</html>