<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This Is laravel homePage</h1>
    <p>Our answer is {{$marks}} </p>
    <p>Our answer is {{2+5}} </p>// 
    <p>Our answer is {{2*5}} </p>




    @if ($marks>5)
        <h1>Result greater than 5</h1>
    @elseif ($marks<5)
        <h1>Result less than 5</h1>
    @else   
        <h1>Result equal to 5</h1>
    @endif

    <img src="{{asset('images/laravel.png')}}" alt="">
    
</body>
</html>

@switch($marks)
    @case(5)
        <h1>Result is 5</h1>
        @break
    @case(10)
        <h1>Result is 10</h1>
        @break
    @default
        <h1>Result is default</h1>
@endswitch
<br>
<br>
@for ($i = 1; $i <101 ; $i++)

Count value is {{$i}}.<br>
    
@endfor