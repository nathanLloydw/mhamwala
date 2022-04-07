@extends('layouts.base')

@section('content')

        @if(isset($page->contact_header->url))
            <div class="relative h-full">
                <div class="w-full h-full bg-cover bg-no-repeat bg-center absolute top-0 left-0 -z-50" style="background-image: url('{{$page->contact_header->url}}');"></div>
        @endif

        @include('navigations.primary_navigation')

        @if(isset($components))
            @foreach($components as $component)
                @include('components/' . $component['type'])
            @endforeach
        @endif

        @if(isset($page->contact_header->url))
            </div>
        @endif

        @include('navigations.secondary_navigation')

@endsection
