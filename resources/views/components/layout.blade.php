<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modals with TALL Stack</title>
    @livewireStyles
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="bg-gray-300">

    {{$slot}}
    @livewireScripts
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>