@extends("layouts.shoplayout")

@section("content")
<div class="w3-container" style="display:flex; align-items:center">
    <div class="w3-container" style="width:500px;">
        <h3>{{$product->name}}</h3>
        <h6>{{$product->brand->name}}</h6>
        <p>{{$product->description}}</p>
    </div>
    <div class="w3-container">
        <form action="{{route('buy')}}" method="POST">
            @csrf
            <input hidden name="productId" value="{{$product->id}}">
            <input type="submit" value="Buy">
        </form> 
    </div>
    <h5>€{{$product->price}}</h5>
</div>
@endsection