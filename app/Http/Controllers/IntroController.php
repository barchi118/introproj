<?php

namespace App\Http\Controllers;
use App\Intro; //Intro.phpを使うため
use Illuminate\Http\Request;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intros = Intro::all();
        return view('intro.index', compact('intros'));
        //allメソッドはモデルテーブルの全レコードを結果として返します。
        //compactはwithや[]を使うのと同じ
        //でに定義した変数と同じ名前のstringをドット区切りで渡して使える
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Intro::create($request->all());
        return redirect()->route('intro.index')->with('success', '新規登録完了しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $intro = Intro::find($id);
        return view('intro.show', compact('intro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $intro = Intro::find($id);
        return view('intro.edit', compact('intro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = [
            'name' => $request->name,
            'content' => $request->content,
            'web' => $request->web,
            'birth' => $request->birth,
        ];
        Intro::where('id', $id)->update($update);
        return back()->with('success', '編集完了しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Intro::where('id', $id)->delete();
        return redirect()->route('intro.index')->with('success', '削除完了しました');
    }
}
