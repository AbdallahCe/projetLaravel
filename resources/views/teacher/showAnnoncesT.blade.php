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

    <title>Annonces</title> 
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
                <div>
                    <a class="ajout-btn" href="{{route('createAnnoncesTget')}}">Add annonce</a>
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <span class="text">Les Annonces</span>
                </div>

                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom Posteur</th>
                        <th scope="col">Objet</th></th>
                        <th scope="col">Message</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $annonces as $annonce )
                            <tr>
                                <th scope="row"> {{$annonce->id}}</th>
                                <td>{{$annonce->nomPosteur}}</td>
                                <td>{{$annonce->filiere}}</td>
                                <td>{{$annonce->message}}</td>
                                <td>
                                    <a href="{{ route('annonces.edit', ['annonce' => $annonce->id]) }}"><i class="uil uil-edit"></i></a>
                                    <a href="{{route('annonces.destroy', $annonce)}}" onclick="return confirm('Confirmer la suppression!')"><i class="uil uil-trash-alt"></i></a>
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