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
            @foreach ($product as $i => $item)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$item->product_name}}</td>
                <td>{{$item->product_details}}</td>
                <td> <a class="btn btn-succes" href="{{route('productShow',$item->id )}}">Show</a></td>
                <td> <a class="btn btn-primary" href="{{route('productEdit' ,$item->id)}}">Edit</a> </td>
                <td> <a class="btn btn-danger" href="{{route('productDelete', $item->id)}}">Delete</a> </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{$product->links()}}

</body>
</html>

@endsection
