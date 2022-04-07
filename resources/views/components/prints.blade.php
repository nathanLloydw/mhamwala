

<section class="my-12 restrain mx-auto">
    <h1 class="mx-auto w-max">{{ $component['title'] }}</h1>
    <div class="my-14 mx-10 py-8 border-t border-gray-300 flex">
        @foreach (Statamic::tag('collection:artworks')->limit($component['limit'])->sort('title:desc') as $entry)
            <a href="{{$entry->permalink}}" class="w-full md:w-1/3 artwork cursor-pointer">
                <div class="m-1 flex flex-col">
                    <div class="relative pb-[300px]">
                        <div class="artwork_image artwork_img_1 absolute" style="background-image: url('{{$entry->images[0]->url}}');"></div>
                        <div class="artwork_image artwork_img_2 absolute opacity-0" style="background-image: url('https://cms.qz.com/wp-content/uploads/2018/08/gandalf-lord-of-the-rings-e1534255368438.jpg?quality=75&strip=all&w=410&h=230');"></div>
                    </div>
                    <div class="m-2 flex-auto flex flex-col">
                        <h2 class="pb-1">{{$entry->title}}</h2>
                        <h4>from {{$entry->price}}</h4>
                    </div>
                </div>
            </a>

        @endforeach
    </div>
</section>
