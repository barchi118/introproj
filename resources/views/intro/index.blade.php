<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="card">
    <h5 class="card-header">Self introducted Featured</h5>
    <div class="card-body">
        <h5 class="card-title ">All profiles</h5>
        <p class="card-text "><p><a href="{{ route('intro.create') }}" class="btn btn-outline-dark">Create profile</a></p></p>
        @if ($message = Session::get('success'))
            <p>{{ $message }}</p>
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">More</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($intros as $intro)
            <tr>
                <th scope="row">{{$intro->id}}</th>
                <td>{{$intro->name}}</td>
                <td><a href="{{ route('intro.show',$intro->id)}}"  class="btn btn-outline-dark">More<a></td>
                <td><a href="{{ route('intro.edit',$intro->id)}}"  class="btn btn-outline-dark">Edit</a></td>
                <td>
                    <form action="{{ route('intro.destroy', $intro->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="" value="Delete" class="btn btn-outline-dark">
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- 参考サイトhttps://noumenon-th.net/programming/2020/01/30/laravel-crud/ -->