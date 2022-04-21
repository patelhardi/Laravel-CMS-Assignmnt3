@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Projects</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom" style="background-color: #ffffff">
        <tr class="w3-red">
            <th></th>
            <th>Title</th>
            <th>Content</th>
            <th>Tecnology</th>
            <th>URL 1</th>
            <th>URL 2</th>
            <th>Date Created</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td>
                    @if ($project->image)
                        <img src="{{asset('storage/'.$project->image)}}" width="200">
                    @endif
                </td>
                <td>{{$project->title}}</td>
                <td>{{$project->content}}</td>
                <td>{{$project->technology}}</td>
                <td>{{$project->url1}}</td>
                <td>{{$project->url2}}</td>
                
                <td>{{$project->created_at->format('M j, Y')}}</td>
                <td><a href="/console/projects/image/{{$project->id}}">Image</a></td>
                <td><a href="/console/projects/edit/{{$project->id}}">Edit</a></td>
                <td><a href="/console/projects/delete/{{$project->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/projects/add" class="w3-button w3-green">New Project</a>

</section>

@endsection
