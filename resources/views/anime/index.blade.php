<x-layout>
<div class="container">
        <div class="row">
        <h1>Ecco i nostri generi</h1>
        @foreach($animes as $anime)
    <div class="col-4 my-2">
    <div class="card" style="width: 18rem;">
  <img src="{{$anime['image']}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$anime['title_en']}}</h5>
    <h6 class="card-subtitle">{{$anime['title_jp']}}</h6>
    <p class="card-text">{{Str::limit($anime['synopsis'],100)}}</p>
    <a href="{{route('anime.show',$anime['id'])}}" class="btn btn-primary">Guarda</a>
  </div>
</div>
    </div>
    @endforeach
        </div>
    </div>
</x-layout>