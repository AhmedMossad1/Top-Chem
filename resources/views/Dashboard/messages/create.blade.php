@extends('Dashboard.layout.app')

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')

    @component('Dashboard.layout.header')
        @slot('nav_title')
            {{ $pageTitle }}
        @endslot
    @endcomponent

    @component('Dashboard.shared.create' , ['pageTitle' => $pageTitle , 'pageDes' => $pageDes])
        <form action="{{ route($routeName.'.store') }}" method="POST">
            @include('Dashboard.'.$folderName.'.form')
            <button type="submit" class="btn btn-primary pull-right">Add {{ $moduleName }}</button>
            <div class="clearfix"></div>
        </form>
    @endcomponent
@endsection
