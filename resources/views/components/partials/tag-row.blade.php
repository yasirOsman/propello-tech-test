@props([
    'tag'  => null,
])

<div class="w-full flex py-2 border-b border-gray-100">
    <div class="w-2/3 flex items-center overflow-y-auto mr-4">{{ $tag?->name }}</div>
    <div class="w-1/3 flex items-center">{{ $tag?->created_at->format('jS M Y') }}</div>
    <div class="w-1/3 flex flex-wrap">
        <x-elements.link-button class="mr-2 my-1 w-[110px]" href="{{ route('tags.edit', ['tag' => $tag]) }}">
            Edit
        </x-elements.link-button>
        <x-elements.link-button-danger class="mr-2 my-1 w-[110px]" href="{{ route('tags.destroy', ['tag' => $tag]) }}">
            Delete
        </x-elements.link-button-danger>
    </div>
</div>
