@props(['category'])
<form action="/categories/{{ $category->id }}" method="POST" >
    @csrf
    @method('DELETE')
    <button class="bg-red-400 text-white rounded py-2 px-4 hover:bg-red-500">
        {{ $slot }}
    </button>
</form>
