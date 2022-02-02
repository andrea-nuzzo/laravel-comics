@extends('layouts.base')

@section('pageTitle')
    Home
@endsection

@section('pageContent')

  <!-- //Conteiner immagini -->
  <div class="main">
      <div class="container">
          <span class="currentSeries">
            CURRENT SERIES
          </span>
          
          <!-- Le card comics derivano dal componenete card riutilizzabile -->
          <div class="comics">
              @foreach ($comics as $comic)
                  <div class="cardComic">
                      <img src="{{$comic["thumb"]}}" alt="">
                      <h5>{{$comic["title"]}}</h2>
                  </div>
              @endforeach
          </div>
      
          <div class="load">
            <span class="btnLoad">
              LOAD MORE
            </span>
          </div>
      </div>
  
@endsection

