@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Project</h2>

    <form method="post" action="/console/projects/edit/{{$project->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title" style="padding-right: 60px">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title', $project->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom" >
            <label for="content" style="padding-right: 34px">Content:</label>
            <textarea name="content" id="content" required>{{old('content', $project->content)}}</textarea>

            @if ($errors->first('content'))
                <br>
                <span class="w3-text-red">{{$errors->first('content')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom" >
            <label for="technology" style="padding-right: 10px">Technology:</label>
            <input type="text" name="technology" id="technology" value="{{old('technology', $project->technology)}}" required>

            @if ($errors->first('technology'))
                <br>
                <span class="w3-text-red">{{$errors->first('technology')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom" >
            <label for="url1" style="padding-right: 53px">URL 1:</label>
            <input type="url" name="url1" id="url1" value="{{old('url1', $project->url1)}}">

            @if ($errors->first('url1'))
                <br>
                <span class="w3-text-red">{{$errors->first('url1')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url2" style="padding-right: 53px">URL 2:</label>
            <input type="url" name="url2" id="url2" value="{{old('url2', $project->url2)}}">

            @if ($errors->first('url2'))
                <br>
                <span class="w3-text-red">{{$errors->first('url2')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Project</button>

    </form>

    <a href="/console/projects/list">Back to Project List</a>

</section>

@endsection
