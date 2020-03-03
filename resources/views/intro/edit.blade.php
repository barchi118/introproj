<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h1>編集画面</h1>
<p><a href="{{ route('intro.index')}}">一覧画面</a></p>

@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif

<!-- <form action="{{ route('intro.update',$intro->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>タイトル：<input type="text" name="name" value="{{ $intro->name }}"></p>
    <p>著者：<input type="text" name="web" value="{{ $intro->web }}"></p>
    <p>著者：<input type="text" name="content" value="{{ $intro->content }}"></p>
    <p>著者：<input type="text" name="birth" value="{{ $intro->birth }}"></p>
    <input type="submit" value="編集する">
</form> -->

<div class="card">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
    <form action="{{ route('intro.update',$intro->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ $intro->name }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Web</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="web" value="{{ $intro->web }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Birth day</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="birth" value="{{ $intro->birth }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Self introduction</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" value="{{ $intro->content }}"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-dark">Submit</button>
    </form>
    </div>
</div>