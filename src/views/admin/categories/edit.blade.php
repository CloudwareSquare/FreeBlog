@extends('layouts.app')

@section('content')
        <section class="content-header">
            <h1><small></small></h1>
            <ol class="breadcrumb">
                <li><a href="#">  Categories </a></li>
                <li class="active"> Edit </li>
            </ol>
        </section>

        <section class="content">
            <div class="box box-warning">
                <div class="box-header bg-warning">
                    <h3 class="box-title">Edit Category #{{ $category->id }}</h3>
                    <div class="pull-right box-tools">
                        <a href="{{ url('/admin/categories') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    </div>
                </div>
                <div class="box-body">
                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ url('/admin/categories/' . $category->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}

                        @include ('admin.categories.form', ['submitButtonText' => 'Update'])

                    </form>
                </div>
            </div>
        </section>
@endsection
