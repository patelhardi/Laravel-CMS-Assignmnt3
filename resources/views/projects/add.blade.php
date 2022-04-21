@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Project</h2>

    <form method="post" action="/console/projects/add" novalidate class="w3-margin-bottom">

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
            <label for="content">Content:</label>
            <input type="text" name="content" id="content" value="{{old('content')}}" required>

            @if ($errors->first('content'))
                <br>
                <span class="w3-text-red">{{$errors->first('content')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="technology">Technology:</label>
            <input type="text" name="technology" id="technology" value="{{old('technology')}}" required>

            @if ($errors->first('technology'))
                <br>
                <span class="w3-text-red">{{$errors->first('technology')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url">URL 1:</label>
            <input type="url" name="url1" id="url1" value="{{old('url1')}}">

            @if ($errors->first('url1'))
                <br>
                <span class="w3-text-red">{{$errors->first('url1')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url">URL 2:</label>
            <input type="url" name="url2" id="url2" value="{{old('url2')}}">

            @if ($errors->first('url2'))
                <br>
                <span class="w3-text-red">{{$errors->first('url2')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Project</button>

    </form>

    <a href="/console/projects/list">Back to Project List</a>

</section>

@endsection