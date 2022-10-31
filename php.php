<!doctype html>
    <html lang="fr">
    <head>
      <meta charset="utf-8">
      <title>Portfolio Syphax</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" href="log.png" />

    </head>
    <body>
    <header>
        <main class="main">
    <!-- Menu de navigation  -->
      <marquee>
      Etudiant en deuxième année BACHELOR DEVELOPPEMENT WEB au sein de digital campus paris.
       </marquee>
      <div id="mySidenav" class="sidenav">
        <a id="closeBtn" href="#" class="close"></a>
        <ul>
        <li><a href="index.html">Accueil</a></li>
            <li><a href="cv.html">CV Syphax</a></li>
            <li><a href="motiv.html">Contact</a></li>
            <li><a href="php.php">Contactez-moi</a></li>
        </ul>
        </ul>
      </div>
      
      <a href="#" id="openBtn">
        <span class="burger-icon">
            <img src="img/icone.png">
        </span>
      </a>
      
      <script>
        let sidenav = document.getElementById("mySidenav");
        let openBtn = document.getElementById("openBtn");
        let closeBtn = document.getElementById("closeBtn");

        openBtn.onclick = openNav;
        closeBtn.onclick = closeNav;

        function openNav() {
        sidenav.classList.add("active");
        }
        function closeNav() {
        sidenav.classList.remove("active");
        }
</script>

<div style="background-color: black"; >
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-8 m-4">
                <form action="contact.php" method="POST">
                    <div class="form-group">
                        <div class="text-center">
                            <h1 style="color:white";>Contactez-moi ! </h1>
                        </div>
                        <div class="d-flex">
                            <input type="text" name="surname" placeholder="Nom" autocomplete="off" class="form-control"/>
                            <input type="text" name="firstname" placeholder="Prénom" autocomplete="off" class="form-control"/>
                        </div>
                        <br/>
                        <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control"/>
                        <br/>
                        <textarea rows="10" name="message" placeholder="Votre message" class="form-control"></textarea>
                        <br/>
                        <button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  