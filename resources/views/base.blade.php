<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $titre ?? 'Daaray Technologie'}}</title>

</head>
<body>

    @inject('nomObjet', 'App\Utilities\GetWeekend')
    {{ $nomObjet->getMessageBienvenu() }} <br>
    
    @yield('vitrine')

    @stack('message_js')
 








 {{-- @foreach  ($jours as $jour) 
   @if ($jour == "Mardi") 
   {{"Mardi Gran" . '-'}} 
   @else
   {{ $jour . '-'}}
   @endif 
   @endforeach --}}  
</body>
</html>

