<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($Course as $item)
        <x-course-card :item="$item" />
    @endforeach
</div>
