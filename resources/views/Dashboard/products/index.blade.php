@extends('Dashboard.layout.app')
@php

@endphp
@section('title')
{{$pageTitle}}
@endsection



@section('content')
    @component('Dashboard.layout.header')
        @slot('nav_title')
        {{$pageTitle}}
        @endslot
    @endcomponent

<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header card-header-primary">
        <div class="row">
            <div class="col-md-8">
                <h4 class="card-title ">{{$pageTitle}}</h4>
                <p class="card-category"> {{$pageDes}}</p>
                @include('Dashboard.shared.search')
            </div>
            <div class="col-md-4 text-right">
                <a href="{{ route($routeName.'.create') }}" class="btn btn-white btn-round">
                    Add {{ $sModuleName }}
                </a>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                <th>
                    ID
                </th>
                <th>
                    Name
                </th>
                <th>
                    Published
                </th>
                <th>
                    Category
                </th>

                <th class="text-right">
                    Control
                </th>
                </thead>
                <tbody>
                @foreach ($rows as $row)
                <tr>
                    <td>
                        {{$row->id}}
                    </td>
                    <td>
                        {{$row->name}}
                    </td>
                    <td>
                        @if($row->published == 1)
                                published
                            @else
                                hidden
                            @endif
                    </td>
                    <td>
                        {{$row->cat->name}}
                    </td>

                    <td class="td-actions text-right">
                        @include('Dashboard.shared.buttons.edit')
                        @include('Dashboard.shared.buttons.delete')
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            {!! $rows->links() !!}
            </div>
        </div>
        </div>
    </div>

    </div>
@endsection
