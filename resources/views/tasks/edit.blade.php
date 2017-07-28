@extends('layout')
@section('content')
    <form class="formulaire" action="/tasks/update/{{$task->id}}" method="post">
                    {{ csrf_field() }}
    <label for="titre">modifier la tache:{{$task->titre}}</label>
    <input type="text" name="titre" id="titre" value="{{$task->titre}}">
    <button type="submit" name="button">go</button>
  </form>
  @endsection
