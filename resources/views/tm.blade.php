@extends('layouts/blog/blog')

@section('title', 'Timer page')

@section('head')
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <link rel="stylesheet" href="/assets/css/tm.css">
@endsection

@section('header')
  <h1><b>{{$initial ?? ''['header'] ?? 'Varius'}}</b></h1>
  <p>This is timer that sounds at defined time, created by <span class="w3-tag">{{$initial ?? ''['user_name'] ?? 'Varius'}}</span></p>
@endsection

@section('entries')
  <div id="app"></div>
  <script src="/assets/js/tmcomponents.js"></script>
  <script src="/assets/js/tmvue.js"></script>
@endsection

@section('aboutCard')
    <img src="/assets/img/avatar_g.jpg" style="width:100%">
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
    <p>Powered by <a href="#" target="_blank">{{$initial ?? ''['user_name'] ?? 'Varius'}}</a></p>
@endsection
