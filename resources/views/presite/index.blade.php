<html>
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119522082-3"></script>

    <meta name="description" content="Counseling - Privacy dati e sicurezza ICT">
    <meta name="keywords" content="GDPR Arezzo, GDPR consulenza Arezzo, Counseling, Counselingsrl, Counselingsrl.eu, GDPR, General Data Protection Regulation, Privacy, Arezzo, Toscana, Hardware, Software, Sicuerzza, ICT, Dati, Fattura Elettronica, Fattura Elettronica Arezzo">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div style="display: flex; justify-content: space-around; margin-top: 20px">
        <div style="display: flex">
            <img width="200" height="70" src="{{asset($logo)}}" alt="">
            <h1 style="margin-left: 30px; margin-top: 5px">Benvenuta {{$azienda}}</h1>
        </div>

        <div>
            <a href="https://login.sonoincloud.it" target="_blank" class="btn btn-primary" style="margin-top: 15px">Fattura Elettronica</a>
        </div>

        <div>
            <a href="http://portale.bluenext.it" target="_blank" class="btn btn-primary" style="margin-top: 15px">Portale B2B</a>
        </div>

        <div style="align-content: center">
            <div>
                <a href="https://www.counselingsrl.eu" target="_blank"><img width="150" src="{{asset($logo1)}}" alt=""></a>
            </div>
            <div>
                <img width="150" src="{{asset($logo2)}}" alt="">
            </div>

        </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" height="400" src="{{asset($slide[0])}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="400" src="{{asset($slide[1])}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="400" src="{{asset($slide[2])}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div style="margin-top: 15px; margin-left: 30px">
        <div style="display: flex; align-content: center">
            <h2>Adesso mi vedi solo tu...ma puoi aprire una finestra sul mondo....<a style="border: 1px solid #00dd00; border-radius: 5px; background-color: #00dd00; padding: 8px; color: white; text-decoration: none" href="https://www.counselingsrl.eu/contatti#contid">SCOPRI</a></h2>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>