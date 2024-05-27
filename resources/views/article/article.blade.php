<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LISTE DES ARTICLES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
     {{-- <div class="container text-center">
      <div class="row">
        <div class="col s12"> --}}
          <h1 class="container text-center"  style="margin-top: 20px" >LISTE DES ARTICLES</h1>

          <a href="ajouter" class="btn btn-primary"> AJOUTER UN ARTICLE</a>

          @foreach ($articles as $article)
          <div class="card" style="margin-top: 50px">
            <div class="card col-">
              {{-- <img src="{{$article->image}} " class="card-img-top" alt="..."> --}}
              <div class="card-body">
                <h5 class="card-title">{{$article->nom}} </h5>
                <p class="card-text">.{{$article->description}}</p>
                <p class="card-text">.{{$article->a_la_une}}</p>
              </div>
              <div class="card-footer">
                {{-- <small class="text-body-secondary">Last updated 3 mins ago</small> --}}
                <small class="text-body-secondary">{{$article->created_at}}</small>
              </div>
              <a  href="#" class="btn btn-primary btn-lg">Modifier</a>
            <a  href="#" class="btn btn-secondary btn-lg">Supprimer</a>


            </div>

            @endforeach
            {{-- <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div> --}}
          </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
</html>