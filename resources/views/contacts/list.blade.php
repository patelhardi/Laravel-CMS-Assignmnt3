@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Contact Me Form</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>URL</th>
            <th>Created</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->message}}</td>
                <td>{{$contact->url}}</td>
                <td>{{$contact->created_at->format('M j, Y')}}</td>
                <td><a href="/console/contacts/edit/{{$contact->id}}">Edit</a></td>
            </tr>
        @endforeach
    </table>

</section>

@endsection
