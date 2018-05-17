<html>
<head></head>
<body style="background-color: whitesmoke">
<div style="background-color: gray">
    <a class="navbar-brand" href="#" style="border:0;padding:0">
        <img src="{{asset('img/logo2.png')}}" alt="logo" height="60">
    </a>

</div>

<div>
    <h2>Email inviata da: {{$nomesos}} {{$cognomesos}}</h2>
    <h3>telefono: {{$telefonosos}}</h3>
    <h3>mail: {{$mailsos}}</h3>

    <br>
    <h3 style="color: blue">Per cosa ha contattato</h3>
    <h3>{{$scelta}}</h3>




</div>

</body>
</html>