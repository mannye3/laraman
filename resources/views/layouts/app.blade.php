<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'LaraMan')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>

<body>
	@include('inc.navbar')
	<br>
	<br>
	<br>
	<div class="container">
    @include('inc.messages')
   	@yield('content')

   	</div>


    </body>
</html>