@extends ('layout.frontend', ['title' => 'Home'])

@section ('content')


<section class="w3-padding">
        
    <h2 class="w3-text-blue">About Me!</h2>

    <p>
        Quisque felis ex, pellentesque vel elementum eu, bibendum vel massa. Donec id feugiat 
        erat. Aliquam commodo rutrum velit, vitae vestibulum purus ullamcorper vestibulum. Orci 
        varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    </p>

    <h3>My Skills</h3>

    <ul>
        <li>PHP</li>
        <li>Laravel</li>
        <li>MySQL</li>
    </ul>

</section>

<hr>


<section id="project"  class="w3-padding w3-container">
    <h2>Projects</h2>
    <div class="center">
        @foreach ($projects as $project)

            <div class="flex-container">
                @if ($project->image)
                    <div class="flex-items">
                    <img src="{{asset('storage/'.$project->image)}}" alt="" width="300" height="150">
                    </div>
                @endif
                <div class="flex-items">
                    <h3>{{$project->title}}</h3>
                    <p>{{$project->technology}}</p>
                    <p>{{$project->content}}</p>
                    @if ($project->url1)
                        <div>View Project: <a href="{{$project->url1}}">HERE</a></div>
                    @endif
                    @if ($project->url2)
                        <div>View Project: <a href="{{$project->url2}}">HERE</a></div>
                    @endif
                </div>
            </div>

         @endforeach                               
    </div>                        

</section>
<hr>

<section class="w3-padding">

    <h2 class="w3-text-blue">Contact Me</h2>

    <p>
        Phone: 111.222.3333
        <br>
        Email: <a href="mailto:email@address.com">email@address.com</a>
    </p>

</section>

@endsection
