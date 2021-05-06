@include('layout.header')
<body>
    <div class="container">
        <form action="{{route('product.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="product_name" class="form-control" placeholder="Product Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Details</label>
                <input type="text" name="product_details" class="form-control" placeholder="Product Details">
            </div>
            <div class="form-group">
            <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
@include('layout.scripts')
</body>
</html>
