<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar-class">
        <h2 class="logo-cl"><a href="#">ISTA NTIC GUELMIM</a></h2>
        <input type="checkbox" id="menu-toggler">
        <label for="menu-toggler" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z"/>
          </svg>
        </label>
        <ul class="all-links">
            <li><a href="#home">Page d'accueil</a></li>
            <li><a href="#filieres">Filières</a></li>
            <li><a href="#contact">Contactez-Nous</a></li>
            @if (Route::has('login'))
              @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
              @else
                <li><a href="{{ route('login') }}">Se Connecter</a></li>
              @endauth
            @endif
        </ul>
      </nav>
    </header>

    <section class="homepage" id="home">
      <div class="content">
        <div class="text">
          <h1>BIENVENUE</h1>
        </div>
        <a href="{{ route('login') }}">SE CONNECTER</a>
      </div>
    </section>

    <section class="filieres" id="filieres">
      <h2>Les filières disponibles</h2>
      <p>Explorer les filieres diponibles dans notre établissement</p>
      <ul class="cartes">
        <li class="carte">
          <img src="{{asset('img/digital.jpg')}}" alt="img">
          <h3>Développement Digital</h3>
          <p>
            Le tronc commun en Développement Digital est une étape importante pour acquérir les bases necessaires de l'étude, la conception, la construction, le développement, la mise au point, la maintenance et à l’amélioration des logiciels, des applications et des sites web.
            Au cours de cette étape, qui dure une année de formation professionnelle, les stagiaires suivent une formation qui a la vocation de répondre à deux types de compétences : <br>
            - Compétences transversales : Les langues ,l' entrepreneuriat,  Compétences comportementales et sociales,  Culture et techniques avancées du numérique. <br>
            - Compétences techniques : Identifier les besoins clients, Acquérir les bases de l'algorithmique, Programmer pour le web , Élaborer des composants métiers ,,, etc.
          </p>
          <button type="button"  class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#digital">
            Afficher plus
        </button>
        </li>
        <li class="carte">
          <img src="{{asset('img/gestion.jpg')}}" alt="img">
          <h3>Gestion des entreprises</h3>
          <p>
            Le tronc commun Gestion des Entreprises donne au stagiaire toutes les informations et compétences nécessaires pour découvrir le monde des metiers de gestion et du commerce, garantir sa polyvalence et infine faciliter son choix  de l'option professionnelle la plus compatible avec son profil.

          </p>
          <button type="button"  class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#gestion">
            Afficher plus
        </button>
        </li>
        <li class="carte">
          <img src="{{asset('img/digital.jpg')}}" alt="img">
          <h3>Infrastructure Digital</h3>
          <p>
            Le tronc commun en infrastructure digitale est une  étape cruciale qui vise à former des stagiares pour concevoir, administrer, optimiser, et sécuriser des architectures et infrastructures IT.
            Au cours de cette étape, qui dure une année de formation professionnelle, les stagiaires suivent une formation qui a la vocation de répondre à deux types de compétences : <br>
            - compétences transversales :Les langues ,l' entrepreneuriat,  Compétences comportementales et sociales,  Culture et techniques avancées du numérique. <br>
            - compétences techniques : Comprendre les enjeux d'un système d'information , Concevoir un réseau informatique  , Maîtriser le fonctionnement d'un système d'exploitation  , Gérer une infrastructure virtualisée ,,, etc.
                       
          </p>
          <button type="button"  class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#infra">
            Afficher plus
        </button>
        </li>
        <li class="carte">
          <img src="{{asset('img/gestion.jpg')}}" alt="img">
          <h3>Assistant Administratif option Commerce</h3>
          <p>
            Un Assistant administratif option commerce intervient dans une démarche commerciale active et qui dispose des compétences professionnelles nécessaires pour exercer les activités suivantes : la prospection, la négociation commerciale, la vente et la fidélisation de la clientèle, l’animation d’une surface de vente et les tâches de la gestion, dans le but de développer les ventes de l’entreprise. Ces activités s’exercent dans toutes les entreprises industrielles, commerciales et de service de toutes tailles afin de mettre à la disposition de la clientèle les produits/services correspondant à sa demande.
                  
          </p>
          <button type="button"  class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#commerce">
            Afficher plus
        </button>
        </li>
        <li class="carte">
          <img src="{{asset('img/enfant.jpg')}}" alt="img">
          <h3>Educateur Spécialisé dans la Petite Enfance</h3>
          <p>
            Le rôle de l’Educateur Spécialisé en Petite Enfance est d’accompagner et encadrer les enfants pour développer leurs compétences psychomotrices, linguistiques…

            C’est une fonction dans laquelle il faut être à l’écoute des enfants et de leurs familles afin de créer un champ positif favorisant le développement physique, psychomoteur, cognitif, langagier, socio-affectif et moral de l’enfant, tout en l’accompagnant dans l'exploration de son environnement.
              
            Le métier d’Educateur Spécialisé en Petite Enfance s’adresse aux candidats aimant le contact avec les enfants d’âge précoce, portant de l’intérêt au domaine de l'éducation et au processus de développement global de l'enfant.
                      
          </p>
          <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#enfant">
            Afficher plus
        </button>
        </li>
      </ul>
    </section>

<!-- Modal 1 Digital-->
    <div class="modal fade" id="digital" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="digital"> Développement digital </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Le tronc commun en Développement Digital est une étape importante pour acquérir les bases necessaires de l'étude, la conception, la construction, le développement, la mise au point, la maintenance et à l’amélioration des logiciels, des applications et des sites web.
                    Au cours de cette étape, qui dure une année de formation professionnelle, les stagiaires suivent une formation qui a la vocation de répondre à deux types de compétences :
                    <br>- Compétences transversales : Les langues ,l' entrepreneuriat,  Compétences comportementales et sociales,  Culture et techniques avancées du numérique.
                    <br>- Compétences techniques : Identifier les besoins clients, Acquérir les bases de l'algorithmique, Programmer pour le web , Élaborer des composants métiers ,,, etc"
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 1 Gestion-->
    <div class="modal fade" id="gestion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="gestion"> Gestion des Entreprises </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Le tronc commun Gestion des Entreprises donne au stagiaire toutes les informations et compétences nécessaires pour découvrir le monde des metiers de gestion et du commerce, garantir sa polyvalence et infine faciliter son choix  de l'option professionnelle la plus compatible avec son profil.
            </div>
        </div>
        </div>
    </div>

    <!-- Modal infra -->
    <div class="modal fade" id="infra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Infrastructure Digital</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Le tronc commun en infrastructure digitale est une  étape cruciale qui vise à former des stagiares pour concevoir, administrer, optimiser, et sécuriser des architectures et infrastructures IT.
                Au cours de cette étape, qui dure une année de formation professionnelle, les stagiaires suivent une formation qui a la vocation de répondre à deux types de compétences :
                <br>- compétences transversales :Les langues ,l' entrepreneuriat,  Compétences comportementales et sociales,  Culture et techniques avancées du numérique.
                <br>- compétences techniques : Comprendre les enjeux d'un système d'information , Concevoir un réseau informatique  , Maîtriser le fonctionnement d'un système d'exploitation  , Gérer une infrastructure virtualisée ,,, etc"
                
            </div>
        </div>
        </div>
    </div>

    <!-- Modal enfant -->
    <div class="modal fade" id="enfant" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="enfant">Educateur Spécialisé dans la Petite Enfance</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Le rôle de l’Educateur Spécialisé en Petite Enfance est d’accompagner et encadrer les enfants pour développer leurs compétences psychomotrices, linguistiques…

                C’est une fonction dans laquelle il faut être à l’écoute des enfants et de leurs familles afin de créer un champ positif favorisant le développement physique, psychomoteur, cognitif, langagier, socio-affectif et moral de l’enfant, tout en l’accompagnant dans l'exploration de son environnement.
    
                Le métier d’Educateur Spécialisé en Petite Enfance s’adresse aux candidats aimant le contact avec les enfants d’âge précoce, portant de l’intérêt au domaine de l'éducation et au processus de développement global de l'enfant."
            
            </div>
        </div>
        </div>
    </div>

    <!-- Modal commerce -->
    <div class="modal fade" id="commerce" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="commerce">Assistant Administratif option Commerce</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Un Assistant administratif option commerce intervient dans une démarche commerciale active et qui dispose des compétences professionnelles nécessaires pour exercer les activités suivantes : la prospection, la négociation commerciale, la vente et la fidélisation de la clientèle, l’animation d’une surface de vente et les tâches de la gestion, dans le but de développer les ventes de l’entreprise. Ces activités s’exercent dans toutes les entreprises industrielles, commerciales et de service de toutes tailles afin de mettre à la disposition de la clientèle les produits/services correspondant à sa demande.
                
            </div>

        </div>
        </div>
    </div>
    </div>
    </div>

    <section class="contact" id="contact">
      <h2>Contactez-Nous</h2>
      <p>Contactez-nous pour toute demande ou commentaire.</p>
      <div class="row">
        <div class="col information">
          <div class="contact-details">
            <p><i class="fas fa-map-marker-alt"></i> Bd Hassan II B.P. 127 81000 Guelmime </p>
            <p><i class="fas fa-envelope"></i> contact@ofppt.ma </p>
            <p><i class="fas fa-phone"></i> 0528872723 </p>
            <p><i class="fas fa-clock"></i> Lundi - Jeudi et Samedi: 8:30 AM - 18:30 PM</p>
            <p><i class="fas fa-clock"></i> Vendredi: 8:30 AM - 12:30 PM 14:30 PM - 17:00 PM</p>
            <p><i class="fas fa-clock"></i> Dimanche: Fermée</p>
          </div>          
        </div>
        <div class="col form">
          <form>
            <input type="text" placeholder="Nom et prénom*" required>
            <input type="email" placeholder="Adresse email*" required>
            <textarea placeholder="Message*" required></textarea>
            <button id="submit" type="submit">Envoyer</button>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <div>
        <span>ISTA NTIC GUELMIM</span>
        <span class="link">
            <a href="#">Page d'accueil</a>
        </span>
      </div>
    </footer>
    <script src="{{asset('js/bootstrap.js')}}" ></script>

  </body>
</html>
