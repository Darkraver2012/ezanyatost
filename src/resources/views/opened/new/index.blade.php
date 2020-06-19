@extends('layouts.opened')
@section('title', 'Главная страница')
@section('styles')
    <link href="{{ asset('/css/opened/index.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/opened/glide.core.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section class="carousel">
      <div class="set-carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
          </ol>
          <div class="carousel-inner width-inner setting-img">
            @foreach($organisations as $organisation)
            <div class="carousel-item">
            <img class="d-block" src="@if($organisation->img){{asset('storage/'.$organisation->img)}}@else{{ asset('/images/noimage.jpg') }}@endif" alt="Second slide">
              <div class="carousel-caption carousel-caption-setting">
                <h1 class="dispaly-2">{{$organisation->short_name}}</h1>
              </div>
            </div>
            @endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
      <div class="row row-sett">
        <a href="#">
          <button type="button" class="btn btn-outline-danger btn-lg btn-sett">Все учреждения</button>
        </a>
      </div>
     <section class="events section-padding-both">
        <div class="container ">
            <h2>Мероприятия</h2>
            <div class="card-deck">
                @foreach($events as $event)
                    <div class="card">
                        <div class="card-img">
                            <img class="card-img-top"
                                 src="@if($event->img){{asset('storage/'.$event->img)}}@else{{ asset('/images/noimage.jpg') }}@endif">
                        </div>
                        <div class="card-body">
                            <h5><a href="/events/{{$event->id}}" class="link-secondary">{{$event->name}}</a></h5>
                            <p class="text-muted">{{$event->organisation}}</p>
                            <span class="badge badge-primary">{{(new \DateTime($event->date))->format('d.m.Y')}}</span>
                            <p class="card-text">{{$event->content}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="full-wrapper">
                <a href="/events" class="btn btn-outline-primary">Все мероприятия...</a>
            </div>
        </div>
    </section>
      <div class="row row-sett">
        <a href="#">
          <button type="button" class="btn btn-outline-secondary">
            <i class="fas fa-angle-double-down"></i>
          </button>
        </a>
      </div>

      <div style="margin-bottom: 3%;"></div>
    

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  @endsection
