<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Self-booking Classes') }}
</h2>
</x-slot>

@foreach( $clubclasses as $clubclass )
    <x-self-booking.club-class :class_id="{{ $clubclass->id }}"
@endforeach
</x-app-layout>
