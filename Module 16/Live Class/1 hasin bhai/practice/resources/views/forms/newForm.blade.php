<x-layout title="New Form">
    <hgroup>
        <h1>New Form</h1>
        <p>How to create and handle form in laravel</p>
    </hgroup>
    <form action="{{route('newForm.post')}}" method="POST" enctype="multipart/form-data">

    @csrf
    <label>Name</label>
    <input  name="name" value="{{old('name')}}">
    <label>Email</label>
    <input  name="email" value="{{old('email')}}">
    <label>Price</label>
    <input name="price" type="number" value="{{old('price')}}">
    
    <button type="submit">Submit</button>
    </form>

    @if (session('message'))
        <p>{{session('message')}}</p>
    @endif


  @if ($errors->any())
    {{--    {{$errors->first()}}      --}}
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
    @endif

</x-layout>