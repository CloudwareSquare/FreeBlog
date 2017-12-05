@extends('vendor.cloudware-square.blog.admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Blog Admin
            <small>Editar Posts</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('blog/admin/posts')}}">Blog Admin</a></li>
            <li><i class="fa fa-newspaper-o"></i> Editar Post</li>
        </ol>
    </section>
    <section class="content">
        <div class="box" id="table_orders">
            <div class="box-header">
                <h3 class="box-title">Editar Post #{{ $post->id }}</h3>
                <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="{{ url('blog/admin/posts') }}" id="new_order"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="panel-body">
                    <br />
                    <br />
                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ url('blog/admin/posts/' . $post->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include ('admin.posts.form', ['submitButtonText' => 'Guardar'])

                    </form>
                </div>
            </div>
        <!-- /.box-body -->
        </div>
    </section>
@endsection
