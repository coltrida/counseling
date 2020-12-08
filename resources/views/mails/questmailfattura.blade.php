<html>
<head></head>
<body style="background-color: whitesmoke">
{{--<div style="background-color: white; border-bottom: 1px solid blue">
    <a class="navbar-brand" href="#">
        <img src="{{asset('img/logo2.png')}}" alt="logo" height="60">
    </a>

</div>--}}

<div>
    <h3>Nome Azienda: <span style="border: 1px solid black; border-radius: 5px; padding: 8px; background-color: white">{{$azienda}}</span></h3>
    <br>
    <h3>e-mail:<span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$mail}}</span> </h3>
    <br>
    <h3>Numero Fatture Attive Annue:<span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$fattive}}</span> </h3>
    <br>
    <h3>Numero Fatture Passive Annue:<span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$fpassive}}</span>  </h3>
    <br>
    <h3>Disponi di un Software per la creazione della Fattura Elettronica? <span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$software}}</span></h3>
    <br>
    <h3>Sei interessato ad affidare il servizio in Outsourcing? (In questo caso dovrai fornirci le tue fatture in formato PDF)<span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$outsourcing}}</span></h3>
    <br>
    <h3>{{$consenso}}</h3>

</div>

</body>
</html>