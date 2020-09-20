@extends('layout.master')

@section('content')


<h1>Ma reponse</h1>
<h2> Toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à
votre investissement, nous vous préparons une application toujours plus
facile à utiliser, seul ou en famille.
Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez
cette adresse:  <a href="/{{ $user->link }}"> http://127.0.0.1:8000/{{$user->link}}</a></h2>




@endsection