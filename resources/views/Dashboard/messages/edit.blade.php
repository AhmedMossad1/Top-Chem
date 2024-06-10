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

            @include('Dashboard.'.$folderName.'.form')


    </div>
    @endcomponent

@endsection
