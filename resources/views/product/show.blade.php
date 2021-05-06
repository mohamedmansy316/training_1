@extends('layout.header')
@section('content')
@include('layout.header')
<body>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Detials</th>
        </tr>
        </thead>
        <tbody>
          
            <tr>
                <th scope="row">{{$product->id }}</th>
                <td>{{$product->product_name}}</td>
                <td>{{$product->product_details}}</td>
                <td> <a class="btn btn-succes" href="{{route('product.index')}}">Home Page</a></td>
            </tr>
    

        </tbody>
    </table>
   

</body>
</html>

@endsection
