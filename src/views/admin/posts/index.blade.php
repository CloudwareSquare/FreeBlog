@extends('vendor.cloudware-square.blog.admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Blog Admin
            <small>Posts</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('blog/admin/posts')}}">Blog Admin</a></li>
            <li><i class="fa fa-newspaper-o"></i> Posts</li>
        </ol>
    </section>
    <section class="content">
        <div class="box" id="table_orders">
            <div class="box-header">
                <h3 class="box-title">Posts</h3>
                <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="{{ url('blog/admin/posts/create') }}" id="new_order"><i class="fa fa-plus" aria-hidden="true"></i>Nuevo Post</a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th><th>Título</th><th>Subtítlo</th><th>Categoría</th><th>Fecha Creación</th><th>Fecha Actualización</th><th>Aciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td><td>{{ $item->subtitle }}</td><td>{{ $item->category }}</td><td>{{ $item->created_at }}</td><td>{{ $item->updated_at }}</td>
                                <td>
                                    <a href="{{ url('blog/admin/posts/' . $item->id) }}" title="View Post"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                    <a href="{{ url('blog/admin/posts/' . $item->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                    <form method="POST" action="{{ url('blog/admin/posts' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $posts->appends(['search' => Request::get('search')])->render() !!} </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection
