@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <div id="dashboard" class="w3-container w3-row">
        <div class="w3-container w3-teal w3-column w3-margin w3-padding" style="height: 80px; width: 150px; float: left; text-align: center;">
            <a href="/console/headers/list">Manage Headers</a>
        </div>
        <div class="w3-container w3-teal w3-column w3-margin w3-padding" style="height: 80px; width: 150px; float: left; text-align: center;">
            <a href="/console/abouts/list">Manage About Me</a>
        </div>
        <div class="w3-container w3-teal w3-column w3-margin w3-padding" style="height: 80px; width: 150px; float: left; text-align: center;">
            <a href="/console/skills/list">Manage Skills</a>
        </div>
        <div class="w3-container w3-teal w3-column w3-margin w3-padding" style="height: 80px; width: 150px; float: left; text-align: center;">
            <a href="/console/projects/list">Manage Projects</a>
        </div>
        <div class="w3-container w3-teal w3-column w3-margin w3-padding" style="height: 80px; width: 150px; float: left; text-align: center;">
            <a href="/console/contacts/list">Manage Contact Me</a>
        </div>
        <div class="w3-container w3-teal w3-column w3-margin w3-padding" style="height: 80px; width: 150px; float: left; text-align: center;">
            <a href="/console/types/list">Manage Types</a>
        </div>
        <div class="w3-container w3-teal w3-column w3-margin w3-padding" style="height: 80px; width: 150px; float: left; text-align: center;">
            <a href="/console/users/list">Manage Users</a>
        </div>
        <div class="w3-container w3-teal w3-column w3-margin w3-padding" style="height: 80px; width: 150px; float: left; text-align: center;">
            <a href="/console/logout"><i class="bi bi-box-arrow-left"></i>Log Out</a>
        </div>
    </div>

</section>

@endsection
