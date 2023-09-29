<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Action;

use Auth;

use App\Models\User;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $latestgoals = Action::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->take(1)
        ->get();
    return response()->view('action.index', compact('latestgoals'));
}


    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    // ログインユーザーの最新の目標
    $myLatestGoal = Action::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->first();

    // ログインユーザー以外のユーザーの最新の目標
    $otherUsersLatestGoals = Action::where('user_id', '!=', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->get();

    return view('action.create', compact('myLatestGoal', 'otherUsersLatestGoals'));
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
    $result = Action::create($data);
  // ルーティング「goal.index」にリクエスト送信（一覧ページに移動）
  return redirect()->route('action.index');
}

    /**
     * Display the specified resource.
     */
   public function show()
    {
    $latestgoals = ACtion::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->take(1)
        ->get();
    return response()->view('action.show', compact('latestgoals'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
