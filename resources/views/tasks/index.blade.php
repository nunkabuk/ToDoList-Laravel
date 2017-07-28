<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>modifier tache</title>
  <link rel="stylesheet" href="/css/app.css" type="text/css"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.rawgit.com/icons8/titanic/master/dist/js/titanic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.5.9/bodymovin.min.js"></script>
  <script>
  var titanic = new Titanic({
    hover: true, // auto animated on hover (default true)
    click: true  // auto animated on click/tap (default false)
  });
  </script> -->
  <!-- </head>
    <body> -->
    @extends('layout')
    @section('content')
      <div class="afaire">
        <h1>TO DO</h1>
            @foreach($tasks as $task)
            @if ($task->do == 0)
                <li>

                    <a href="tasks/check/{{$task->id}}">{{$task->titre}}</a>
                    <a href="tasks/show/{{$task->id}}/edit"><i class="fa fa-cog" aria-hidden="true"></i></a>
                    <a href="tasks/delete/{{$task->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                
                </li>

          @elseif ($task->do == 1)
              <li>

                  <span class='titanic titanic-checkbox'style="width:30px;display:inline-block;"onclick="titanic.on(getElementById('checkbox').value)"></span>
                  {{$task->titre}}
                  <a href="tasks/show/{{$task->id}}/edit"><i class="fa fa-cog" aria-hidden="true"></i></a>
                  <a href="tasks/delete/{{$task->id}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

            </li>

    <!--Initializing-->

    <!--Clicking turns this icon on-->
    <!-- <button onclick="titanic.on(getElementById('checkbox').value)"></button></li> -->
        @endif
        @endforeach
        <a class="nvlle" href="tasks/create"><i class="fa fa-pencil-square-o stylo fa-4x" aria-hidden="true"></i></a>

    </div>
    @endsection
<!--
    </body>
</html> -->
