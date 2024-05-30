<x-layout>
    <div class="container">
        <div class="row">
        <h1>Ecco i nostri generi</h1>
        @foreach($genres as $genre)
    <div class="col-4 my-2">
    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$genre['name']}}</h5>
    <p class="card-text">Numero Anime: {{$genre['count']}}</p>
    <a href="{{route('genre.anime',['id'=>$genre['mal_id']])}}" class="btn btn-primary">Vedi gli anime</a>
  </div>
</div>
    </div>
    @endforeach
        </div>
    </div>
</x-layout>