@extends('vendor.cloudware-studio.blog.admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Blog Admin
            <small>Ver Post</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('blog/admin/posts')}}">Blog Admin</a></li>
            <li><i class="fa fa-newspaper-o"></i> Ver Post</li>
        </ol>
    </section>
    <section class="content">
        <div class="box" id="">
            <div class="box-header">
                <h3 class="box-title">Ver Post</h3>
                <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="{{ url('blog/admin/posts') }}" id="new_order"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Volver</a></li>
                            <li><a href="{{ url('blog/admin/posts/' . $post->id . '/edit') }}" title="Edit Post"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a></li>
                            <li>
                                &nbsp;&nbsp;
                                <form method="POST" href="{{ url('blog/admin/posts' . '/' . $post->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn" style="background-color:transparent"  title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eliminar</button>
                                </form>
                            </li>
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
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <th>ID</th><td>{{ $post->id }}</td>
                            </tr>
                            <tr>
                                <th> Título </th><td> {{ $post->title }} </td>
                            </tr>
                            <tr>
                                <th> Subtítlo </th><td> {{ $post->subtitle }} </td>
                            </tr>
                            <tr>
                                <th> Categoria </th><td> {{ $post->category }} </td>
                            </tr>
                            <tr>
                                <th> Post </th><td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>{!! $post->post  !!}</div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection
