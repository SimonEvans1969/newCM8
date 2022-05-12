<div>
    <div class="px-5 py-3 rounded shadow border border-rose-700">
        <h3 class="text-gray-700 uppercase">{{ $clubclass->name }}</h3>
        <span class="text-gray-500">{{ $clubclass->description }}</span>
        <form action="cart.store" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $clubclass->id }}" name="id">
            @if ($bookable->canBook )
                <button class="text-white bg-blue-800 rounded">Click to book</button>
            @else
                {{ $bookable->message }}
            @endif
        </form>
    </div>
</div>
