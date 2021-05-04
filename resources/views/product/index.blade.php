@extends('layout.header')
@section('content')
@include('layout.header')
<body>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">detials</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i = 0;
        @endphp
            @foreach ($product as $item)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$item->id}}</td>
                <td>{{$item->product_name}}</td>
                {{-- <td> <a class="btn btn-primary" href="route{{('product.edit')}}">Edit</a> </td>
                <td> <a class="btn btn-succes" href="route{{('product.show')}}">Show</a> </td>
            <form action="{{route('product.destroy', $item->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form> --}}
            </tr>
            @endforeach

        </tbody>
    </table>
    {{$produt->links()}}

</body>
</html>

@endsection
