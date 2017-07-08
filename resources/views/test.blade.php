@extends('backpack::layout')

@section('header')
    <section class="content-header">
        <h1>
            Test Page<small>This shit is dope</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{ trans('backpack::base.dashboard') }}</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            HELLO
        </div>
    </div>
@endsection