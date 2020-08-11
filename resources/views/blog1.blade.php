
@extends('layouts/blog/blog')

@section('title', 'Eduards')

@section('header')
    <header class="w3-container w3-center w3-padding-32">
    <h1><b>MY BLOG</b></h1>
    <p>Welcome to the blog of <span class="w3-tag">Name</span></p>
@endsection


@section('entries')

  @foreach($posts' as $post)
      <div class="w3-card-4 w3-margin w3-white">

        @if(!empty($post->pic))
          <img src="/assets/img/{{$post->pic}}" alt="Nature" style="width:100%">
        @endif

        <div class="w3-container">
          <h3><b>{{$post->title}}</b></h3>
          <h5>{{$post->title_desc}}, <span class="w3-opacity">{{$post->create_date}}</span></h5>
        </div>

        <div class="w3-container">
          <p>{{$post->content}}</p>
          <div class="w3-row">
            <div class="w3-col m8 s12">
              <p><b><a  class="w3-button w3-padding-large w3-white w3-border" href="/blog/{{$post->id}}">READ MORE &raquo;</a></b</p>
            </div>
            <div class="w3-col m4 w3-hide-small">
              <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-tag">{{$post->comments}}</span></span></p>
            </div>
          </div>
        </div>
      </div>
        <hr>
  @endforeach

@endsection
