@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Headers</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>URL</th>
            <th>Created</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($headers as $header)
            <tr>
                <td>{{$header->title}}</td>
                <td>{{$header->url}}</td>
                <td>{{$header->created_at->format('M j, Y')}}</td>
                <td><a href="/console/headers/edit/{{$header->id}}">Edit</a></td>
                <td><a href="/console/headers/delete/{{$header->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/headers/add" class="w3-button w3-green">New Header</a>

</section>

@endsection
