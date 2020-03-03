<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1>新規作成画面</h1>
<p><a href="{{ route('intro.index')}}">一覧画面</a></p>


<!-- <form action="{{ route('intro.store')}}" method="POST">
    @csrf
    <p>名前：<input type="text" name="name" value="{{old('name')}}"></p>
    <p>Web：<input type="text" name="web" value="{{old('web')}}"></p>
    <p>コンテンツ：<input type="text" name="content" value="{{old('content')}}"></p>
    <p>誕生日：<input type="text" name="birth" value="{{old('birth')}}"></p>
    <input type="submit" value="登録する">
</form> -->

<div class="card">
    <div class="card-header">
        Create profile
    </div>
    <div class="card-body">
    <form action="{{ route('intro.store')}}" method="POST">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleFormControlInput1" placeholder="Yamada Taro">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Web</label>
            <input type="text" name="web" value="{{old('web')}}"class="form-control" id="exampleFormControlInput1" placeholder="example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Birth day</label>
            <input type="text"  name="birth" value="{{old('birth')}}" class="form-control" id="exampleFormControlInput1" placeholder="0000/00/00">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea  type="text" name="content" value="{{old('content')}}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input type="submit" value="登録する">
</form>
    </div>
</div>

