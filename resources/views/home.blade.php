<h1>Our Product Batches</h1>

@if($batches->count() >0)
    @foreach($batches as $batch)
        <h2>{{ $batch->name }} ({{ $batch->launch_date }})</h2>

        @if($batch?->products)
            @foreach($batch->products as $product)
                <div style="border:1px solid #ccc; margin:10px; padding:10px;">
                    <h3>{{ $product->name }}</h3>

                    @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" width="150">
                    @endif

                    <p>{{ $product->description }}</p>

                    @if($product->certificate)
                        <a href="{{ asset('storage/'.$product->certificate) }}" target="_blank">
                            View Certificate
                        </a>
                    @endif
                </div>
            @endforeach
        @endif
    @endforeach
@endif
