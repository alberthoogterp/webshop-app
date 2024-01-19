@extends("layouts.shoplayout")

@section("content")
    <div class="w3-container">
        <h3>Welcome {{auth()->user()->username}}</h3>
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <input type="submit" value="Logout">
        </form>
        @foreach ($accountproducts as $product)
            <div>
                <p>{{$product->name}}</p>
            </div>
        @endforeach
    </div>
@endsection