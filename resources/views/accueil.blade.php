<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NegoDevis</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--Link-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!--Link bootstrap/JQUERY/Ajax/JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Frijole&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">

</head>

<body>
    <div id="fond_head">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <h1><img class="ml-2 img-fluid mt-2" src="images/logo_negodevistest.png"  alt="Logo"></h1>
                <button class="navbar-toggler col-2" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse justify-content-lg-end" id="navbarTogglerDemo01">
                     <ul class="cssNav navbar-nav mr-5 text-center mb-2 mt-3">
                       <li class="nav-item mr-5">
                           <a class="nav-link text-white" href="/">ACCUEIL</a>
                       </li>
                       <li class="nav-item mr-5">
                               <a class="nav-link text-white" href="#">COMMENT ÇA MARCHE</a>
                       </li>
                       <li class="nav-item">
                               <a class="nav-link text-white" href="tarifs">TARIFS</a>
                       </li>
            </ul>

<ul id="buttonLogin" class="btn-group btn-group-toggle rounded-pill border border-white col-sm-3 mt-4 mr-2 ml-5 list-unstyled ">
    @guest
        <li class="nav-item">
          <a class="nav-link cssNav btn btn-link btn-sm text-white font-weight-bold" href="{{ route('login') }}">{{ __('CONNEXION') }}</a>
       </li>
         <div class="border-right border-white ml-3"></div>
              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link ml-2 cssNav btn btn-link btn-sm text-white font-weight-bold" href="{{ route('register') }}">{{ __('INSCRIPTION') }}</a>
                </li>
              @endif
              @else
<li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
           <span id="nomLogin" class="caret">{{ Auth::user()->name }}</span>
            </a>

            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="formulaire">
                            {{ __('Crée un nouveau formulaire') }}
                        </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Deconnexion') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
  </li>
@endguest
</ul>

</div>
</nav>
<hr class="my-2 bg-white">

<div id="para1">
        <img class="col-sm-6 img-responsive float-right" id="telephone_haut" src="../images/logo_telephon.png" alt="telephone">
    <h2 id="first_h2" class="text-white ml-3">NegoDevis...<br>L'application qui rend satisfaits <br> <strong class="font-weight-bold">acheteur</strong> et <strong class="font-weight-bold">vendeur</strong></h2>

      <p id="first_p" class="text-white col-6 mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est esse facere quae dolores, blanditiis mollitia at sapiente ipsam perferendis suscipit exercitationem minima quibusdam, illo.</p>
    </div>
      <a href="liste_devis"><button id="buttonLancerNego" type="button" class="btn btn-link rounded-pill border border-white text-decoration-none text-white font-weight-bold mt-5 mb-4">LANCER UNE NÉGOCIATION</button></a>

</div>

<div id="a_propos">
    <h5 class="text-center font-weight-bold mt-5"><img style="width:1%;" src="images/divide-mathematical-sign.svg" alt="slash">À propos<img style="width:1%;" src="images/divide-mathematical-sign.svg" alt="slash"></h5>
        <h3 id="negodevis_apropos" class="text-center mt-3 mb-5 titrePara">NEGODEVIS...C'EST QUOI?</h3>
        <p id="p_apropos" class="m-auto col-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur eum, laboriosam rerum repellendus eveniet pariatur aliquam dolorum nesciunt repudiandae fugiat aut iste quo repellat quidem inventore numquam perspiciatis? Consectetur veritatis esse quam atque ducimus voluptates nemo ipsa in mollitia magnam eveniet consequuntur dolor eaque a praesentium officia cupiditate ullam similique itaque, temporibus tempora minima repellendus facere cumque. Repellat incidunt, alias inventore culpa reprehenderit quaerat accusamus nam earum molestias illum minima porro quo exercitationem a sit.</p>
</div>

<div id="quatre_logo" class="d-flex col-10">
    <div id="logo_un">
        <img src="images/bonhomme.png" alt="bonhomme">
        <h5 class="couleur_titre ml-4 font-weight-bold mt-1">INTERACTIF</h5>
        <p class="col-10">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
     </div>

     <div id="logo_deux">
            <img src="images/coffre.png" alt="coffre">
            <h5 class="couleur_titre ml-4 font-weight-bold">CONFIDENTIEL</h5>
            <p class="col-10">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
         </div>

         <div id="logo_trois">
                <img src="images/cible.png" alt="cible">
                <h5 class="couleur_titre font-weight-bold ml-5">EFFICACE</h5>
                <p class="col-10">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
             </div>

             <div id="logo_quatre">
                    <img src="images/balance.png" alt="balance">
                    <h5 class="couleur_titre ml-5 font-weight-bold ">EQUILIBRÉ</h5>
                    <p class="col-10 mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                 </div>
</div>

    <button id="buttonCOmmentMarche" type="button" class="btn btn-link rounded-pill text-decoration-none font-weight-bold mt-2">COMMENT ÇA MARCHE</button>

    <section id="visible" class="section hidden rules-section bg-light border border-primary rounded">
            <button id="invisible" class="text-danger float-right mr-1 mt-1">X</button>
        <div class="rules-container d-flex mt-5">
                <ul class="rules-pagination font-weight-bold">
                        <li class="rules-pagination-elmt" id="backward"> < </li>
                          </ul>
                <div id="rule-illustration" class="m-auto">
                        <img id="rule-img" alt="">
                        <div id="rule" class="text-center">
                                <h2 id="rule-title" class="font-weight-bold"></h2>
                                <p id="rule-declaration"></p>
                        </div>
                </div>
                           <ul class="rules-pagination font-weight-bold">
                             <li class="rules-pagination-elmt" id="forward"> > </li>
                                  </ul>
        </div>
                   </section>

<div id="temoignages">

  <br class="my-2">

    <h5 class="text-center font-weight-bold"><img style="width:1%;" src="images/divide-mathematical-sign.svg" alt="slash"> TÉMOIGNAGES
      <img style="width:1%;" src="images/divide-mathematical-sign.svg" alt="slash"></h5>
    <h3 id="negodevis_apropos" class="text-center mt-3 titrePara">CE QUE LES UTILISATEURS EN PENSENT ?</h3>
    <img id="twitter_temoignages" src="../images/twitter.svg" alt="logo_twitter">
    <p class="mt-4 mb-4 col-10 text-center ml-auto mr-auto font-weight-bold">''Lorem ipsum dolor sit amet consectetur adipisicing elit. At porro non optio suscipit perferendis, sapiente provident nam sit cupiditate blanditiis delectus nihil placeat aperiam odit sunt pariatur aut tempora voluptatum necessitatibus! Eaque in inventore ipsam facere quia cum tempora impedit iste unde nostrum ut earum sed sequi, laudantium temporibus architecto.</p>

<div class="d-flex justify-content-center text-center">
    <div class="mr-5 ml-5">
        <img class="border border-danger rounded-pill bg-secondary" src="images/kyle.png" alt="Kyle" height="90" width="90" aria-describedby="author_1">
        <div>
     <span>Kyle Broflovski</span><br>
      <span class="url">
       <a href="https://fr.wikipedia.org/wiki/Kyle_Broflovski">Mon Site de Cookies</a>
      </span>
    </div>
  </div>

  <div class="mr-5 ml-5">
        <img class="border border-danger rounded-pill bg-secondary" src="images/stan.png" alt="Stan" height="90" width="90" aria-describedby="author_1">
        <div>
     <span>Stan Marsh</span><br>
      <span class="url">
       <a href="https://fr.wikipedia.org/wiki/Stan_Marsh">Mon Site de Gateaux</a>
      </span>
    </div>
  </div>

  <div class="mr-5 ml-5">
        <img class="border border-danger rounded-pill bg-secondary" src="images/cartman.png" alt="Kyle" height="90" width="90" aria-describedby="author_1">
        <div>
     <span>Eric Cartman</span><br>
      <span class="url">
       <a href="https://fr.wikipedia.org/wiki/Eric_Cartman">Contre les Hippies</a>
      </span>
    </div>
  </div>

  <div class="mr-5 ml-5">
        <img class="border border-danger rounded-pill bg-secondary" src="images/kenny.png" alt="Kenny" height="90" width="90" aria-describedby="author_1">
        <div>
     <span>Kenny McCormick</span><br>
      <span class="url">
       <a href="https://fr.wikipedia.org/wiki/Kenny_McCormick">Une piece pour manger</a>
      </span>
    </div>
  </div>
</div>

</div>
<div id="screenshoot">
    <h5 class="text-center font-weight-bold mt-5 mb-2"><img style="width:1%;" src="images/divide-mathematical-sign.svg" alt="slash"> SCREENSHOOTS
        <img style="width:1%;" src="images/divide-mathematical-sign.svg" alt="slash"></h5>
        <h3 id="userThink" class="text-center mt-3 titrePara">A QUOI CA RESSEMBLE ?</h3>






</div>

<footer id="footer" class="mt-5">
        <br class="my-1">
    <a class="ml-4" href="https://fr.wikipedia.org/wiki/Facebook"><img src="images/icons8-facebook-entouré-50.png" alt="Facebook"></a>
    <a class="ml-4" href="https://fr.wikipedia.org/wiki/Twitter"><img src="images/icons8-twitter-entouré-50.png" alt="Twitter"></a>
    <a class="ml-4" href="https://fr.wikipedia.org/wiki/LinkedIn"><img src="images/icons8-linkedin-entouré-50.png" alt="Linkedin"></a>
    <hr class="mt-4 mb-4 col-11 bg-dark">
    <p class="font-weight-bold">&#9400; Copyright</p>
</footer>




<!--JS POPUP-->
<script>
    let jsRuleTitleContent = document.getElementById("rule-title");
    let jsRuleContent = document.getElementById("rule-declaration");
    let jsRuleImg = document.getElementById("rule-img");
    let jsLinkBackward = document.getElementById("backward");
    let jsLinkForward = document.getElementById("forward");;
    let commentMarche = document.getElementById("buttonCOmmentMarche");
    let fermerVisible = document.getElementById("invisible");
    let affichage = document.getElementsByClassName("section.hidden");

    let countTitles = 0;
    let countRules = 0;
    let countPictures = 0;

    console.log(jsRuleTitleContent);
    console.log(jsRuleContent);
    console.log(jsRuleImg);

    //******Array's linked to the rules of negotiation *//

    let titles =
    [
        "PRISE DE CONTACT ENTRE ACHETEUR ET VENDEUR",
        "INTEGRER LE DEVIS INITIAL",
        "REMPLIR LE FORMULAIRE ET INDIQUER LE PRIX SOUHAITE",
        "RECEVOIR UN EMAIL, INDIQUER SON PRIX ET L'EFFORT",
        "ENCASTORE CALCUL LE MEILLEUR PRIX",
        "VALIDATION DE L'OFFRE D'ENCASTORE"
    ];

    let rules =
    [
        "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, nostrum? Dicta blanditiis ipsam fugiat nisi?",
        "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, nostrum? Dicta blanditiis ipsam fugiat nisi?",
        "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, nostrum? Dicta blanditiis ipsam fugiat nisi?",
        "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, nostrum? Dicta blanditiis ipsam fugiat nisi?",
        "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, nostrum? Dicta blanditiis ipsam fugiat nisi?",
        "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, nostrum? Dicta blanditiis ipsam fugiat nisi?"
    ];

    let pictures =
    [
        "images/image_exemple1.png",
        "images/image_exemple2.png",
        "images/image_exemple3.png",
        "images/image_exemple4.png",
        "images/image_exemple5.png",
        "images/image_exemple6.png"
    ];

    console.log(titles);
    console.log(rules);


    //******Function's declarations******//

    commentMarche.addEventListener("click", affiche);
    fermerVisible.addEventListener("click", cache);

    function affiche(){
        let Affiche = document.getElementById("visible");
    Affiche.style.visibility = "visible";//l'#id menu sera visible
    Affiche.style.opacity = "1";//l'#id menu sera opac
    }

    function cache(){
        let Affiche = document.getElementById("visible");
    Affiche.style.visibility = "";//l'#id menu sera visible
    Affiche.style.opacity = "";//l'#id menu sera opac
    }


    function goForward() // arrays' indexes incrementing, it displays the valor associated to the index
    {
        if (countTitles < 5)
        {
            jsRuleTitleContent.textContent = titles[countTitles +=1];
            jsRuleContent.textContent = rules[countRules +=1];
            jsRuleImg.setAttribute("src", pictures[countPictures +=1]);
        }
    }

    function goBackward() // arrays' indexes decrementing, it displays the valor associated to the index
    {
        if (countTitles > 0)
        {
            jsRuleTitleContent.textContent = titles[countTitles -=1];
            jsRuleContent.textContent = rules[countRules -=1];
            jsRuleImg.setAttribute("src", pictures[countPictures -=1]);

        }
    }

    function goShortfor() //Display the first rule
    {
        jsRuleTitleContent.textContent = titles[5];
        jsRuleContent.textContent = rules[5];
        jsRuleImg.setAttribute("src", pictures[5]);
    }

    function goShortback() //Display the last rule
    {
        jsRuleTitleContent.textContent = titles[0];
        jsRuleContent.textContent = rules[0];
        jsRuleImg.setAttribute("src", pictures[0]);
    }


    //******* Auto-display of the first rule when the page is open ******//
    goShortback();

    //******* Functions' calls for each click on the pagination's links ********//

    jsLinkForward.addEventListener("click", goForward);
    jsLinkBackward.addEventListener("click", goBackward);
    </script>

</body>
</html>
