@extends('vendor.cloudware-studio.blog.templates.template_blog')
@section('body-class','home-page')
@section('title', 'Blog Post')
@section('description','Cloudware Blog')
@section('keywords','Cloudware-studio free laravel blog')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url( 'vendor/cloudware-studio/img/home-bg.jpg') ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{$post->title}}</h1>
                        <h2 class="subheading">{{$post->subtitle}}</h2>
                        <span class="meta"># {{$post->category}}<br>
                             Escrito por
                             <a>{{$post->name}}</a>
                             el {{$post->created_at}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {!!$post->post!!}
                </div>
            </div>
        </div>
    </article>

    <hr>

@endsection


