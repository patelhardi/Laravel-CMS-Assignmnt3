@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage About Me</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Title</th>
            <th>Content1</th>
            <th>Content2</th>
            <th>URL</th>
            <th>Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($abouts as $about)
            <tr>
                <td>
                    @if ($about->image)
                        <img src="{{asset('storage/'.$about->image)}}" width="200">
                    @endif
                </td>
                <td>{{$about->title}}</td>
                <td>{{$about->content1}}</td>
                <td>{{$about->content2}}</td>
                <td>{{$about->url}}</td>
                <td>{{$about->created_at->format('M j, Y')}}</td>
                <td><a href="/console/abouts/image/{{$about->id}}">Image</a></td>
                <td><a href="/console/abouts/edit/{{$about->id}}">Edit</a></td>
            </tr>
        @endforeach
    </table>

</section>

@endsection
