<html>
<head></head>
<body style="background-color: whitesmoke">
{{--<div style="background-color: white; border-bottom: 1px solid blue">
    <a class="navbar-brand" href="#">
        <img src="{{asset('img/logo2.png')}}" alt="logo" height="60">
    </a>

</div>--}}

<div>
    <h3>Cliente/Ragione/Denominazione Sociale: <span style="border: 1px solid black; border-radius: 5px; padding: 8px; background-color: white">{{$cliente}}</span></h3>
    <br>
    <h3>Indirizzo/Sede Sociale:<span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$indirizzo}}</span> </h3>
    <br>
    <h3>Indirizzo mail:<span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$mail}}</span> </h3>
    <br>
    <h3>Indirizzo mail PEC:<span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$pec}}</span>  </h3>
    <br>
    <h3>Telefono: <span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$telefono}}</span> / Fax: <span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$fax}}</span> / Cellulare: <span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$cell}}</span></h3>
    <br>
    <h3>Persona/socio di riferimento per comunicazioni aziendali: <span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$riferimento}}</span> / tel: <span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$riftel}}</span> / mail: <span style="border: 1px solid black;border-radius: 5px; padding: 8px; background-color: white">{{$rifmail}}</span></h3>
    <br>
    <h3>{{$consenso}}</h3>

</div>

</body>
</html>