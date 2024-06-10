
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
    @component('Dashboard.shared.edit' , ['pageTitle' => $pageTitle , 'pageDes' => $pageDes])
    {{-- @foreach($errors->all() as $error)
    <div style="color: red;">{{$error}}</div>
    @endforeach --}}
    <form  action="{{ route($routeName.'.update' ,$row->id)}}" method="POST" enctype="multipart/form-data" >
        {{ method_field('put') }}
        @include('Dashboard.'.$folderName.'.form')
        <button type="submit" class="btn btn-primary pull-right">Update {{ $moduleName }}</button>
        <div class="clearfix"></div>
        </form>
        @slot('md4')

            <img src="{{ url('uploads/'.$row->image) }}" width="250">
        @endslot
    @endcomponent






@endsection
