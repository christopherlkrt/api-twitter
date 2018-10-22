<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

     <div style="text-align: center; font-size: 84px;">
       Lista de Tweets
     </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Tweetado em</th>
        <th>Conteúdo</th>
        <th>Retweets</th>
        <th>Favoritos</th>
      </tr>
    </thead>
    <tbody>
      
      <!-- Utiliza a variavel recebida do controller para imprimir os dados. -->
      @foreach($usertts as $value)
      <tr>
        <td>{{$value->screen_name}}</td>
        <td>{{$value->tweeted_at}}</td>
        <td>{{$value->content}}</td>
        <td>{{$value->rt_count}}</td>
        <td>{{$value->fav_count}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>