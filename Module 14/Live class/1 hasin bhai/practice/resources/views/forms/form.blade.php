<x-layout>
    <x:slot:title>
        Forms
    </x:slot:title>

    <hgroup>
        <h1>Form Examples</h1>
        <p>How to create and handle form in laravel</p>
    </hgroup>

    <form method="POST" action="{{route('form.post')}}" enctype="multipart/form-data">
        @csrf
        <label for="name">User Name</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email" >
        <label>Profile Image</label>
        <input type="file" name="image">

        <button type="submit">Submit</button>

        <p>
            @if(session('image'))
                <img src="{{session('image')}}" alt="">
            @endif
        </p>


        <p>
             @if($errors->any())
            <p>{{ $errors->first() }}</p>
            @endif
        </p>



    </form>

</x-layout>
