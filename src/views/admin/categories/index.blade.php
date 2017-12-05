@extends('layouts.app')

@section('content')
          <section class="content-header">
                <h1><small></small></h1>
                <ol class="breadcrumb">
                    <li class="active">Categories</li>
                </ol>
            </section>

            <section class="content">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Categories</h3>
                        <div class="pull-right box-tools">
                            <a href="{{ url('/admin/categories/create') }}" class="btn btn-success btn-sm" title="Add New Category">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <button type="button" class="btn btn-default btn-sm" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <form method="GET" action="{{ url('/admin/categories') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <br>
                        <br>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th><th>Name</th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $item)
                                <tr>
                                    <td>{{ $loop->iteration or $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a href="{{ url('/admin/categories/' . $item->id) }}" title="View Category"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/admin/categories/' . $item->id . '/edit') }}" title="Edit Category"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/admin/categories' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-xs" title="Delete Category" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $categories->appends(['search' => Request::get('search')])->render() !!} </div>

                    </div>
                </div>

            </section>
@endsection
