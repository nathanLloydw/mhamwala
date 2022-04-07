<section class="w-full py-8 px-10 flex justify-between restrain mx-auto">
    <img class="w-28 h-28" src='{{$globals->logo->url}}'>
    <div class="flex font-CodePro font-light tracking-wide">
        @foreach (Statamic::tag('nav:primary_navigation') as $entry)
            @if($entry['is_current'])
                <a class="items-center m-auto mx-6 border-b
                        {{ isset($page->contact_header->url) ? 'text-white border-white' : 'border-gray-500' }}"
                   href="{{ $entry['permalink'] }}">{{ $entry['title'] }}</a>
            @else
                <a class="items-center m-auto mx-6
                        {{ isset($page->contact_header->url) ? 'text-white' : '' }}"
                   href="{{ $entry['permalink'] }}">{{ $entry['title'] }}</a>
            @endif
        @endforeach

        @if($globals->instagram)
            <a class="items-center m-auto mx-6 text-black" href="{{$globals->instagram}}">
                <i class="fa-brands fa-instagram
                        {{ isset($page->contact_header->url) ? 'text-white' : '' }}">
                </i>
            </a>
        @endif

    </div>
</section>