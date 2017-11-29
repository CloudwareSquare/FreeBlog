@extends('vendor.cloudware-studio.blog.templates.template_blog')
@section('body-class','home-page')
@section('title', 'Blog Página Principal')
@section('description','Cloudware Blog')
@section('keywords','Cloudware-studio free laravel blog')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url( 'vendor/cloudware-studio/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Cloudware Blog</h1>
                        <span class="subheading">A Blog Theme by Cloudware Studio</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div id="easyPaginate">

                    @foreach($posts AS $post)
                        <div class="post-preview">
                            <a href="{{ url('blog/post') . '/' . $post->id  }}">
                                <h2 class="post-title">
                                    {{$post->title}}
                                </h2>
                                <h3 class="post-subtitle">
                                    {{$post->subtitle}}
                                </h3>
                            </a>
                            <p class="post-meta">
                                # {{$post->category}}<br>
                                Escrito por
                                <a>{{$post->name}}</a>
                                el {{$post->created_at}}</p>
                            <hr>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <hr>

@endsection

@push('script')
    <!-- Paginator -->
    <script src="{{ url('/vendor/cloudware-studio/js/paginator.js') }}"></script>
@endpush




