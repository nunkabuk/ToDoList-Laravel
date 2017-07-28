

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ToDoList</title>
  </head>
  <body>
    <form class="formulaire" action="save" method="post">
             {{ csrf_field() }}
      <label for="titre">nouvelle tache</label>
      <input type="text" name="titre" id="titre">
      <label for="cate">categories</label>
      <select class="cate" name="id_category">
        @foreach ($categories as  $category):
            <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach

      </select>

      <button type="submit" name="button">go</button>

    </form>
  </body>
</html>
