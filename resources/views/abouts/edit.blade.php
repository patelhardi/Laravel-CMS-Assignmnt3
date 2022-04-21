@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit About Me</h2>

    <form method="post" action="/console/abouts/edit/{{$about->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title', $about->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="content1">Content1:</label>
            <textarea name="content1" id="content1" required>{{old('content1', $about->content1)}}</textarea>

            @if ($errors->first('content1'))
                <br>
                <span class="w3-text-red">{{$errors->first('content1')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="content2">Content2:</label>
            <textarea name="content2" id="content2" required>{{old('content2', $about->content2)}}</textarea>

            @if ($errors->first('content2'))
                <br>
                <span class="w3-text-red">{{$errors->first('content2')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url">URL:</label>
            <input type="url" name="url" id="url" value="{{old('url', $about->url)}}">

            @if ($errors->first('url'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit About Me</button>

    </form>

    <a href="/console/abouts/list">Back to About Me List</a>

</section>

@endsection
