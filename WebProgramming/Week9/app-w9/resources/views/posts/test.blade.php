<!doctype html>
<html>

<head>
    <title>Laravel Test</title>
</head>

<body>

    @extends('layout.php')

    @section('content')

    <h1>Data</h1>
    @if(count($students))
    <ul>
        @Foreach($students as $student)
        <li>{{$student}}</li>
        @endforeach
    </ul>
    @endif

    @stop

</body>

</html>