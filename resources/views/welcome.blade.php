<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
    </head>
    <body class="antialiased">
        @if(10 > 5)
            <p>true</p>
        @endif

        <p>{{ $nome }}</p>


        @if($nome == 'Marcos')
        <p>O nome é {{ $nome }} e tem {{ $idade }} </p>
        @else
        <p>O nome não é Marcos</p>
        @endif


        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }} </p>
            @if($i ==2)
            <p>o i é 2</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach

        @php
            $name = "Joao";
            echo $name;
        @endphp

        <!-- COMENTARIO DO HTML -->

        {{-- cOMENTÁRIO DO bLADE --}}
    </body>
</html>
