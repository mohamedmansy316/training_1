@include('layout.header')
<body>
    <div class="container">
        <form action="{{route('productUpdate', $product->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" value="{{$product->product_name}}" name="product_name" class="form-control" placeholder="Product Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Details</label>
                <input type="text" value="{{$product->product_details}}" name="product_details" class="form-control" placeholder="Product Details">
            </div>
            <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
@include('layout.scripts')
</body>
</html>
