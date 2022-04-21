@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Contact</h2>

    <form method="post" action="/console/contacts/edit/{{$contact->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Name:</label>
            <input type="name" name="name" id="name" value="{{old('name', $contact->name)}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{old('email', $contact->email)}}" required>

            @if ($errors->first('email'))
                <br>
                <span class="w3-text-red">{{$errors->first('email')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="phone">Phone:</label>
            <input type="phone" name="phone" id="phone" value="{{old('phone', $contact->phone)}}" required>

            @if ($errors->first('phone'))
                <br>
                <span class="w3-text-red">{{$errors->first('phone')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="message">Message:</label>
            <input type="message" name="message" id="message" value="{{old('message', $contact->message)}}" required>

            @if ($errors->first('message'))
                <br>
                <span class="w3-text-red">{{$errors->first('message')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="url">URL:</label>
            <input type="url" name="url" id="url" value="{{old('url', $contact->url)}}">

            @if ($errors->first('url'))
                <br>
                <span class="w3-text-red">{{$errors->first('url')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Contact</button>

    </form>

    <a href="/console/contacts/list">Back to Contact List</a>

</section>

@endsection
