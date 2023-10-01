<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight tracking-wider">
            {{ __('目標設定を行いましょう（業績項目）') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/12 lg:w-8/12">
            <!-- リーダーシップのボックス -->
            <div class="dark:bg-gray-800 overflow-hidden sm:rounded-lg mb-6 p-6">
                @include('common.errors')
                <form class="mb-6" action="{{ route('action.index') }}" method="POST">
                    @csrf

                    <div id="confirmationModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                        <!-- モーダルの内容 -->
                        <div class="bg-white p-6 rounded shadow-lg mx-auto relative z-10" style="max-width: 330px;">
                            <h2 class="mb-4 text-lg font-bold">客観的測定が可能な定量的な目標が設定できましたか？</h2>
                            <div class="flex justify-between">
                                <!-- YES ボタン -->
                                <button id="yesButton" class="bg-green-500 text-white rounded p-2 w-5/12">YES</button>
                                <!-- NO ボタン -->
                                <button id="noButton" class="bg-red-500 text-white rounded p-2 w-5/12 ml-2">NO</button>
                            </div>
                        </div>
                    </div>

                    <div id="confirmationModal2" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                        <!-- モーダルの内容 -->
                        <div class="bg-white p-6 rounded shadow-lg mx-auto relative z-10" style="max-width: 330px;">
                            <h2 class="mb-4 text-lg font-bold">半年後の自身または上司が測定することが可能な目標設定ですか？</h2>
                            <div class="flex justify-between">
                                <!-- YES ボタン -->
                                <button id="yesButton2" class="bg-green-500 text-white rounded p-2 w-5/12">YES</button>
                                <!-- NO ボタン -->
                                <button id="noButton2" class="bg-red-500 text-white rounded p-2 w-5/12 ml-2">NO</button>
                            </div>
                        </div>
                    </div>

                    <div id="confirmationModal3" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                        <!-- モーダルの内容 -->
                        <div class="bg-white p-6 rounded shadow-lg mx-auto relative z-10" style="max-width: 330px;">
                            <h2 class="mb-4 text-lg font-bold">自身の役割に見合った目標設定ですか？またストレッチな目標になっていますか？</h2>
                            <div class="flex justify-between">
                                <!-- YES ボタン -->
                                <button id="yesButton3" class="bg-green-500 text-white rounded p-2 w-5/12">SUBMIT</button>
                                <!-- NO ボタン -->
                                <button id="noButton3" class="bg-red-500 text-white rounded p-2 w-5/12 ml-2">NO</button>
                            </div>
                        </div>
                    </div>

                    <table id="targetElement" class="text-center w-full border-collapse">
                        <thead>
                            <tr>
                                <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">目標の確認</th>
                            </tr>
                        </thead>
                    </table>

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6 box-style">
                        <tbody>
                            @foreach ($latestgoals as $action)
                            <tr class="hover:bg-gray-lighter">
                                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                                    <x-input-label for="action1" :value="__('全社目標')" class="custom-leadership-style text-left" />
                                    <div>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">①{{$action->action1}}</h3>
                                    </div>
                                    <div>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">②{{$action->action2}}</h3>
                                    </div>
                                    <div>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">③{{$action->action3}}</h3>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </div>

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6 box-style">
                        <tbody>
                            @foreach ($latestgoals as $action)
                            <tr class="hover:bg-gray-lighter">
                                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                                    <x-input-label for="action4" :value="__('部門目標')" class="custom-leadership-style text-left" />
                                    <div>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">①{{$action->action4}}</h3>
                                    </div>
                                    <div>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">②{{$action->action5}}</h3>
                                    </div>
                                    <div>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">③{{$action->action6}}</h3>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </div>

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6 box-style">
                        <tbody>
                            @foreach ($latestgoals as $action)
                            <tr class="hover:bg-gray-lighter">
                                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                                    <x-input-label for="action7" :value="__('個人目標')" class="custom-leadership-style text-left" />
                                    <div>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">①{{$action->action7}}</h3>
                                    </div>
                                    <div>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">②{{$action->action8}}</h3>
                                    </div>
                                    <div>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">③{{$action->action9}}</h3>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                 

            
            
           
              
      <div class="flex items-center justify-end mt-4">
   <a class="flex items-center justify-end mt-4" href="{{ url()->previous() }}">
                <x-secondary-button class="ml-3">
                  {{ __('Back') }}
                </x-primary-button>
   </a>

            
            <form action="{{ route('pre.create', $action->id) }}" method="GET" class="text-left">
              @csrf
            <x-primary-button class="ml-3" id="submitButton">
           {{ __('Submit') }}
            </x-primary-button>
            </form>
        </div>



           
            </a>
            </div>
            
            </div>
        </div>
    </div>
</x-app-layout>



<style>
  #yesButton {
    background-color: navy !important;
    z-index: 9999 !important;
    position: relative;
}

  #yesButton2 {
    background-color: navy !important;
    z-index: 9999 !important;
    position: relative;
}

  #yesButton3 {
    background-color: navy !important;
    z-index: 9999 !important;
    position: relative;
}

.custom-input-style {
    line-height: 2;     /* 立幅を倍にするための値 */
}

.custom-input-style {
    line-height: 2;
    border-color:  !important; /* 濃紺の色を追加 */
}

.custom-leadership-style {
    font-size: 20px;  /* あるいは好きなサイズに変更 */
    font-weight: bold;  /* 太字にする */
    margin-bottom: 5px; 
}

body {
    font-family: 'Roboto', sans-serif;
    background-color: #f5f5f5;
}

/* テーブル */
table {
    width: 100%;
    margin-top: -10px;
    margin-bottom: 3rem;
    color: #212529;
    border-collapse: collapse;
}



table th,
table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
    background-color: #343a40;
    color: white;
}

tr:hover {
    background-color: #e8e8e8;
}

/* ラベル */
.custom-leadership-style {
    font-weight: 500;
    color: #343a40;
}

/* その他 */
h3 {
    margin-top: 0.5rem;
}

.box-style {
    margin-bottom: 20px; /* 間隔を確保 */
    border: 1px solid #e5e7eb; /* 罫線の追加 */
}



</style>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>



</script>
