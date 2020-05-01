@extends('layouts.master')

@section('content')
    <div class="centered">



        <a href="{{ route('hug')}}">Hug</a>
        <a href="{{ route('kiss')}}">kissed</a>
        <a href="{{ route('greets')}}">Greet</a>

        <br>
    <form action="{{ route('donenice')}}" method="POST">
            <label for="select-option">I want to</label>
            <select id="select-option" name="action">
                <option value="greet">Greet</option>
                <option value="hug">Hug</option>
                <option value="kiss">Kiss</option>

1            </select>

        <input type="text" name="name"/>
        <button type="submit">submit</button>
            <input type="hidden"  value="{{ Session::token()}}"  name="_token">

        </form>

    </div>
@endsection























    {{-- <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita odio reiciendis libero aspernatur consequatur magni quos optio laboriosam repellendus iure, dolore, sapiente possimus distinctio ex similique harum ipsa hic! Nesciunt?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit qui possimus consectetur dolorum fugiat porro esse officia, perferendis iste harum exercitationem quos sequi amet eius quasi quod, laboriosam modi laudantium!
    </p>
    <ul>
        @for($i=0;$i<5;$i++)

        <li>
            {{$i+1}}
        </li>
        @endfor
    </ul> --}}
