<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="card">
    <div class="card-header">
        More profile
    </div>
<div class="card-body">
    <ul class="list-group">
        <li class="list-group-item list-group-item-dark">Name   {{ $intro->content }}</li>
        <li class="list-group-item ">Id   {{ $intro->id }}</li>
        <li class="list-group-item">Web   {{ $intro->web}}</li>
        <li class="list-group-item">intro   {{ $intro->content}}</li>
        <li class="list-group-item">Birth   {{ $intro->birth}}</li>
        <li class="list-group-item">Register   {{ $intro->created_at }}</li>
        <li class="list-group-item">Update    {{ $intro->updated_at }}</li>
    </ul>
    <p class="card-text nav justify-content-end"><a class="btn btn-outline-dark" href="{{ route('intro.index')}}">Show all</a></p>
</div>

