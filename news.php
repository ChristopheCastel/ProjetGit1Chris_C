<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="../ProjetGit1Chris_C/imgs/clip-art-avion.png" height="50px" width="50px" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown04">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">News</a></li>
                                    <li><a class="dropdown-item" href="#">A propos</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Informations</a>
                            </li>
                        </ul>
                        <form>
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
            </nav>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Informations</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                </div>
                <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </div>
            </div>
            </div>

        
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="../ProjetGit1Chris_C/imgs/pexels-athena-2996188.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="../ProjetGit1Chris_C/imgs/pexels-pixabay-207385 (2).jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="../ProjetGit1Chris_C/imgs/pexels-pixabay-335.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="../ProjetGit1Chris_C/imgs/pexels-pixabay-356830.jpg" class="d-block w-100" alt="...">
                    </div>                   
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </header>

        <main>

            <h1 class="text-center my-5">News du mois de février</h1>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    LIGUE 1. DAVID BETTONI, L'ANCIEN ADJOINT DE ZIDANE, NOUVEL ENTRAINEUR DE BORDEAUX ?
                    
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Toujours à la recherche du successeur de Vladimir Petkovic, mis à pied après la défaite à Reims (5-0) ce week-end, les Girondins de Bordeaux étudient la piste menant à David Bettoni, l’ancien adjoint de Zinedine Zidane sur le banc du Real Madrid.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    PSG : UN CADRE SE BLESSE ET DEVRAIT MANQUER LE CHOC FACE AU REAL MADRID !
                    </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><p>Mauricio Pochettino se serait bien passé de cette nouvelle. A quelques jours du choc face au Real Madrid, prévu le 15 février pour les huitièmes de finale aller de la Ligue des Champions, le Paris Saint-Germain a appris la blessure de l’un de ses joueurs. Comme confirmé par L’Équipe, Leandro Paredes souffre des adducteurs.</p>

                        <p>Le milieu de terrain argentin ne devrait pas être disponible pour la réception du Stade Rennais ce vendredi en Ligue 1. Surtout, il devrait manquer le choc face au Real Madrid. Un vrai coup dur pour le PSG, déjà amputé d’Ander Herrera dans l’entrejeu. En revanche, Wijnaldum est de retour.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    PSG : ZIDANE AURAIT POSÉ UNE PREMIÈRE CONDITION FOLLE POUR DÉBARQUER À PARIS !
                    </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><p>Dans les semaines qui viennent, l'avenir de Mauricio Pochettino du côté du PSG va forcément être un sujet épineux. Le technicien argentin voit son futur s'assombrir de semaine en semaine, un constat qui pourrait rapidement devenir évident si le PSG échouait dès les huitièmes de finale de Ligue des champions face au Real Madrid.</p>                       

                        <p><strong>Zidane voudrait CR7 avec lui à Paris !</strong>
                        Et ce d'autant plus qu'une ombre plane de manière insistante au dessus de sa tête. Zinédine Zidane, l'ancien coach du Real Madrid, est en effet annoncé avec insistance à Paris dans les prochains mois. Sauf que si l'on en croit les informations du Mirror reprises par Marca, Zizou aurait imposé une condition légendaire pour s'engager dans le club de la capitale !</p>

                        <p>En effet, l'ancien technicien du Real Madrid aurait demandé ni plus ni moins que... Cristiano Ronaldo pour son nouveau projet ! Zidane aurait évidemment un souvenir très fort de sa collaboration gagnant avec CR7 et souhaiterait compter sur lui dans son nouveau challenge. La perspective totalement folle de pouvoir aligner Cristiano Ronaldo et Lionel Messi sous le même maillot va-t-elle convaincre les dirigeants qataris se tenter d'accéder à sa demande ?</p>
                        </div>
                    </div>
                </div>
            </div>  

            

        </main>

    <footer class="bg-dark text-center text-white py-3 fixed-bottom">
            &copy; 2022 - TM - MonProjetGit - Tous droits réservés
    </footer>



        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
</html>