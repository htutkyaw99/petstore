<x-client.layout>
    <section>
        @if (session('cart'))
            <div class="cart-items">
                @foreach (session('cart') as $productId => $details)
                    <div class="cart-item">
                        <img src="{{ $details['thumbnail'] }}" alt="{{ $details['name'] }}">
                        <h3>{{ $details['name'] }}</h3>
                        <p>Price: ${{ number_format($details['price'], 2) }}</p>
                        <p>Quantity: {{ $details['quantity'] }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p>Your cart is empty.</p>
        @endif
    </section>
</x-client.layout>
