<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Goal;

use Auth;

use App\Models\User;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $latestgoals = Goal::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->take(1)
        ->get();
    return response()->view('goal.index', compact('latestgoals'));
}
    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    // ログインユーザーの最新の目標
    $myLatestGoal = Goal::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->first();

    // ログインユーザー以外のユーザーの最新の目標
    $otherUsersLatestGoals = Goal::where('user_id', '!=', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->get();

    return view('goal.create', compact('myLatestGoal', 'otherUsersLatestGoals'));
}
    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
  // バリデーション
  $validator = Validator::make($request->all(), [
    'leadership1' => 'required | max:191',
    'communication1' => 'required | max:191',
    'issue1' => 'required | max:191',
    'leadership2' => 'required | max:191',
    'communication2' => 'required | max:191',
    'issue2' => 'required | max:191',

   
  ]);
  // バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('goal.index')
      ->withInput()
      ->withErrors($validator);
  }
  // create()は最初から用意されている関数
  // 戻り値は挿入されたレコードの情報
    $data = $request->merge(['user_id' => Auth::user()->id])->all();
    $result = Goal::create($data);
  // ルーティング「goal.index」にリクエスト送信（一覧ページに移動）
  return redirect()->route('goal.index');
}


    /**
     * Display the specified resource.
     */
    public function show()
    {
    $latestgoals = Goal::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->take(1)
        ->get();
    return response()->view('goal.show', compact('latestgoals'));
}


    /**
     * Show the form for editing the specified resource.
     */
public function edit($id)
{
  $goal = Goal::find($id);
  return response()->view('goal.edit', compact('goal'));
}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
  //バリデーション
  $validator = Validator::make($request->all(), [
    'leadership1' => 'required | max:191',
     ]);
  //バリデーション:エラー
  if ($validator->fails()) {
    return redirect()
      ->route('goal.edit', $id)
      ->withInput()
      ->withErrors($validator);
  return redirect()->route('goal.create');
  
  }
  //データ更新処理
  $result = Goal::find($id)->update($request->all());
  return redirect()->route('goal.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
      public function mydata()
  {
    // Userモデルに定義したリレーションを使用してデータを取得する．
    $latestgoals = Goal::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->take(1)
        ->get();
    return response()->view('goal.index', compact('latestgoals')); 
  }
  
public function timeline()
{
    $latestgoals = Goal::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->take(1)
        ->get();
    return response()->view('goal.show', compact('latestgoals'));
}
   
  
}