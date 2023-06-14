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

    <title>Emplois du temps</title> 
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
        

            <div class="activity">
                <div class="title">
                    <span class="text">Emplois du temps</span>
                </div>
                
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Classe</th>
                        <th scope="col">Lien</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $emplois->where('type', 'teacher')->where('teacher', $teacherName) as $emploi )
                        <tr> 
                        <th scope="row"> {{$emploi->id}}</th>
                        <td>{{$emploi->teacher}}</td>
                        <td><a href="{{ asset( $emploi->image) }}" class="btn btn-outline-success" target="_blank">Ouvrir</a></td>
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