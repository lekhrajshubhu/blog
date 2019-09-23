@extends('master.layout')


@section('main-body')



    <!--================Hero Banner start =================-->

@include('master.include.hero-banner')


    <!--================Hero Banner end =================-->

    <!--================ Blog slider start =================-->

@include('master.include.blog-slider')
    <!--================ Blog slider end =================-->

    <!--================ Start Blog Post Area =================-->

@include('master.include.blog-post')
    <!--================ End Blog Post Area =================-->
  </main>



@endsection
