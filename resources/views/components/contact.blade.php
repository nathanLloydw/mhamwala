<section class="restrain mx-auto my-14 px-10 py-12 flex justify-between flex-col h-3/5">
    <a href="mailto:{{$globals->email}}">
        <h3 class="text-3xl border-b w-min cursor-pointer {{ isset($page->contact_header->url) ? 'text-white border-white' : '' }}">{{$globals->email}}</h3>
    </a>
    <h1 class="{{ isset($page->contact_header->url) ? 'text-white' : '' }}">{{$globals->area}}</h1>
</section>
