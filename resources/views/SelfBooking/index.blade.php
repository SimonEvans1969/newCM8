<x-public-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Self-booking Classes') }}
</h2>
</x-slot>

@foreach( $clubclasses as $clubclass )
    <x-self-booking.class-panel :class_id="$clubclass->id" />
@endforeach
</x-public-layout>
