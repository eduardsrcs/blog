@extends('layouts/blog/blog')

@section('title', 'Post page')

@section('head')
  
@endsection

@section('header')
  <h1>{{$post->title}}</h1>
  <p>{{$post->title_desc}}</p>
@endsection

@section('entries')
  @if(!empty($post->pic))
    <img src="/storage/{{$post->pic}}" alt="Image" class="w3-left w3-margin-right" style="width:100%">
  @endif
  <p>{{$post->created_at}}</p>
  <p>{{$post->content}}</p>
  <a href="/posts">Back to posts</a>
@endsection

@section('aboutCard')
    <img src="/storage/uploads/avatar_g.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>My Name</b></h4>
      <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
    </div>
@endsection

@section('popPosts')

@endsection

@section('labelsTags')
  <div class="w3-container w3-padding">
        <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
        <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
        </p>
    </div>
@endsection

@section('footer')
    <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
    <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next &raquo;</button>
    <a href="/blog/tm" target="blank"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">Timer &raquo;</button></a>
    <a href="/cv" target="blank"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">My cv &raquo;</button></a>
    <a href="/posts"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">My posts &raquo;</button></a>
    <a href="/newpostform"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">New post &raquo;</button></a>
    <p>Powered by <a href="#" target="_blank">{{$initial ?? ''['user_name'] ?? 'Varius'}}</a></p>
@endsection
