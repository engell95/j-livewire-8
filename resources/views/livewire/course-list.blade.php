<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($Course as $item)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
            <a href="{{route('course',$item)}}">
                <img src="{{$item->image}}" class="rounded-md mb-2">
                <h2 class="text-lg text-gray-600 truncate">{{$item->name}}</h2>
                <h3>{{$item->excerpt}}</h3>
                <img src="{{$item->user->avatar}}" class="rounded-full mt-4 mx-auto h-16 w-16">
            </a>
        </div>
    @endforeach
</div>
