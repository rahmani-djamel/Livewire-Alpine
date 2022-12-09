<!DOCTYPE html>
<html>

<head>
    <title>Alp-wire</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased">
   <div>
    @livewire('welcome-page')
   </div>
  
    @livewireScripts
</body>

</html>