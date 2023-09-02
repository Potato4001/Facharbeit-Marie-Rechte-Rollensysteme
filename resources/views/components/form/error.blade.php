@props(['name'])

@error('excerpt')
    <p class="text-red-500 text-xs mt-2 font-fantasy">{{ $message }}</p>
@enderror