<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       

    </head>
    <body class="antialiased">
      <h1　class='title'>
          {{ $post->title }}
      </h1>
      <div class='posts'>
     
          <div class='post'>
              <h2 class='title'>{{ $post->title }}</h2>
              <p class='body'>{{ $post->body }}</p>
              <a href="">{{ $post->category->name }}</a>
          </div>

      </div>
      <div class='edit'>
          <a href="/posts/{{ $post->id }}/edit">edit</a>
      </div>
      <div class='footer'>
          <a href='/'>戻る</a>
      </div>
      
      
      
  
    </body>
</html>
