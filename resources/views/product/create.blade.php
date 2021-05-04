@include('layout.header')
<body>
    <form action="{{route('product.store')}}" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">ID</label>
            <input type="text" name="id" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" name="product_name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Details</label>
            <input type="text" name="product_details" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
        <button type="submit">Save</button>
        </div>
    </form>


@include('layout.scripts')
</body>
</html>
