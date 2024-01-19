@extends("layouts.shoplayout")

@section("content")
<div class="w3-container">
    <h3>{{$subcategory}}</h3>
</div>
<div class="w3-container" style="display:flex; flex-wrap:wrap; align-items:flex-start;">
    @foreach ($products as $product)
    <div class="w3-card w3-hover-shadow" style="width: 400px; height:230px; overflow:hidden;">
        <a href="{{route('product', [$category,$subcategory,$product->id])}}" style="text-decoration: none">
            <header class="w3-container">
                <h3>{{$product->name}} </h3>
                <h6>{{$product->brand->name}}</h6>
                <h5>€{{$product->price}}</h5>
            </header>
            <div class="w3-container">
                <p>{{$product->description}}</p>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection