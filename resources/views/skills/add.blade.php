@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Skill</h2>

    <form method="post" action="/console/skills/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title')}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="percent">Percent:</label>
            <input type="text" name="percent" id="percent" value="{{old('percent')}}" required>

            @if ($errors->first('percent'))
                <br>
                <span class="w3-text-red">{{$errors->first('percent')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="icon">Icon:</label>
            <input type="text" name="icon" id="icon" value="{{old('icon')}}" required>

            @if ($errors->first('icon'))
                <br>
                <span class="w3-text-red">{{$errors->first('icon')}}</span>
            @endif
        </div>


        <button type="submit" class="w3-button w3-green">Add Skill</button>

    </form>

    <a href="/console/skills/list">Back to Skills List</a>

</section>

@endsection