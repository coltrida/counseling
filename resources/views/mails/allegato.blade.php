<html>
<head></head>
<body style="background-color: whitesmoke">
<div style="background-color: white; border-bottom: 1px solid blue">
    <a class="navbar-brand" href="#">
        <img src="{{asset('img/logo2.png')}}" alt="logo" height="60">
    </a>

</div>

<div>
    <h2>Email inviata dalla ditta: {{$azienda}}</h2>
    <h3>P.IVA: {{$titolare}}</h3>
    <h3>mail: {{$mail}}</h3>
    <br>
    <h3 style="color: blue">Trattamento effettuato da più soggetti</h3>
    <h3>Esistono soggetti diversi dal titolare che effettuano il trattamento dati? <span style="color: red"> {{$prima}}</span></h3>
    <h3>numero <span style="color: red"> {{$primanumero}}</span></h3>
    <br>
    <h3 style="color: blue">Utilizzo di strumentazioni informatiche</h3>
    <h3>Esistono strumenti per l'elaborazione dei dati (computer ed altri dispositivi) <span style="color: red"> {{$seconda}}</span></h3>
    <h3>numero <span style="color: red">{{$secondanumero}}</span></h3>
    <br>
    <h3 style="color: blue">Siti web</h3>
    <h3>La tua azienda ha uno o più siti web? <span style="color: red"> {{$terza}}</span></h3>
    <br>
    <h3 style="color: blue">Registro dei trattamenti</h3>
    <h3>L'azienda ha almeno 250 dipendenti? <span style="color: red">  {{$quarta}}</span></h3>
    <h3>Si effettua il trattamento non occasionale di dati personali che ledano i dritti e le libertà dell'interessato?<span style="color: red"> {{$quinta}}</span></h3>
    <h3>Si effettua il trattamento di categorie particolari di dati personali?<span style="color: red"> {{$sesta}}</span></h3>
    <br>
    <h3 style="color: blue">Responsabile Protezione Dati (RPD)</h3>
    <h3>L'attività principale consiste nel trattamento, su larga scala, di categorie particolari di dati personali o di dati relativi a condanne penali o reati?<span style="color: red"> {{$settima}}</span></h3>
    <h3>L'attività principale consiste nel monitoraggio regolare e sistematico degli interessi personali su larga scala? <span style="color: red">{{$ottava}}</span></h3>
    <br>
    <h3 style="color: blue">Responsabile Protezione Dati (RPD)</h3>
    <h3>Si svolge il trattamento dati per c/terzi in qualità di responsabile esterno? <span style="color: red"> {{$nona}}</span></h3>


</div>

</body>
</html>