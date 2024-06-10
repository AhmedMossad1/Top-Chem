@extends('Dashboard.layout.app')
@section('title')
{{$pageTitle}}
@endsection
@section('content')
    @component('Dashboard.layout.header')
        @slot('nav_title')
        {{$pageTitle}}
        @endslot
    @endcomponent
    @component('Dashboard.shared.edit' , ['pageTitle' => $pageTitle , 'pageDes' => $pageDes])
    <div class="card-body">
        <form method="POST" action="{{route('users.update',$row->id)}}">
            @method('PUT')
        @include('Dashboard.users.form')
        <button type="submit" class="btn btn-primary pull-right"> Update </button>
        <div class="clearfix"></div>
        </form>
    </div>
    @endcomponent

@endsection
