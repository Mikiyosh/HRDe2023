<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Models\Pre;
use Auth;
use App\Models\User;

class PreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $latestGoalsForPre = Pre::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->take(1)
        ->get(); // ここで get() を使ってコレクションを取得
    
    return view('pre.index', compact('latestGoalsForPre'));
}

    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    // ログインユーザーの最新の目標
    $myLatestAction = Pre::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->first();

    // ログインユーザー以外のユーザーの最新の目標
    $otherUsersLatestActions = Pre::where('user_id', '!=', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->get();

   return view('pre.create', compact('myLatestGoal', 'otherUsersLatestGoals','myLatestAction'));

}
    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
  // バリデーション
  $validator = Validator::make($request->all(), [
    'action1' => 'required | max:191',
    'action2' => 'required | max:191',
    'action3' => 'required | max:191',
    'action4' => 'required | max:191',
    'action5' => 'required | max:191',
    'action6' => 'required | max:191',
    'action7' => 'required | max:191',
    'action8' => 'required | max:191',
    'action9' => 'required | max:191',

   
  ]);
  // バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('action.index')
      ->withInput()
      ->withErrors($validator);
  }
  // create()は最初から用意されている関数
  // 戻り値は挿入されたレコードの情報
    $data = $request->merge(['user_id' => Auth::user()->id])->all();
    $result = Pre::create($data);
  // ルーティング「goal.index」にリクエスト送信（一覧ページに移動）
  return redirect()->route('pre.create');
}

    /**
     * Display the specified resource.
     */
   public function show()
    {
    $latestgoals = Pre::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->take(1)
        ->get();
    return response()->view('pre.show', compact('latestgoals'));
}

    /**
     * Show the form for editing the specified resource.
     */
// PreController.php の edit メソッド
// PreController.php

public function edit($id)
{
    // プレデータを取得
    $preData = Pre::find($id);

    // データが存在しない場合のエラーハンドリング
    if (!$preData) {
        abort(404); // もしくは適切なエラーページにリダイレクト
    }

    // ビューにデータを渡す
    return view('action.edit', compact('preData'));
}




    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
  //バリデーション
  $validator = Validator::make($request->all(), [
    'action1' => 'required | max:191',
     ]);
  //バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('action.edit', $id)
      ->withInput()
      ->withErrors($validator);
  return redirect()->route('action.edit', $id);
  
  }
  //データ更新処理
    $data = $request->merge(['user_id' => Auth::user()->id])->all();
    $result = Pre::create($data);
  return redirect()->route('action.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
