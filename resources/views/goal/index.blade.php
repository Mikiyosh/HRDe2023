<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">

      <!-- リーダーシップのボックス -->
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6">
        @include('common.errors')
        <form class="mb-6" action="{{ route('goal.store') }}" method="POST">
          @csrf
          
          
          <x-input-label for="leadership1" :value="__('リーダーシップ')" class="custom-leadership-style" />    

          <div class="flex flex-col mb-4">    
            <x-input-label for="leadership1" :value="__('100%達成目標')" />
            <x-text-input id="leadership1" class="block mt-1 w-full custom-input-style" type="text" name="leadership1" :value="old('leadership1')" required autofocus />
            <x-input-error :messages="$errors->get('leadership1')" class="mt-2" />
          </div>

          <div class="flex flex-col mb-4">
            <x-input-label for="leadership2" :value="__('80%達成目標')" />
            <x-text-input id="leadership2" class="block mt-1 w-full custom-input-style" type="text" name="leadership2" :value="old('leadership2')" required autofocus />
            <x-input-error :messages="$errors->get('leadership2')" class="mt-2" />
          </div>
        </div>

      <!-- コミュニケーションのボックス -->
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6">
        <x-input-label for="communication1" :value="__('コミュニケーション')" class="custom-leadership-style"/>

        <div class="flex flex-col mb-4">
          <x-input-label for="communication1" :value="__('100%達成目標')" />
          <x-text-input id="communication1" class="block mt-1 w-full custom-input-style" type="text" name="communication1" :value="old('communication1')" required autofocus />
          <x-input-error :messages="$errors->get('communication1')" class="mt-2" />
        </div>

        <div class="flex flex-col mb-4">
          <x-input-label for="communication2" :value="__('80％達成目標')" />
          <x-text-input id="communication2" class="block mt-1 w-full custom-input-style" type="text" name="communication2" :value="old('communication2')" required autofocus />
          <x-input-error :messages="$errors->get('communication2')" class="mt-2" />
        </div>
      </div>

      <!-- 問題解決力のボックス -->
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6">
        <x-input-label for="issue1" :value="__('問題解決力')" class="custom-leadership-style"/>

        <div class="flex flex-col mb-4">
          <x-input-label for="issue1" :value="__('100％目標')" />
          <x-text-input id="issue1" class="block mt-1 w-full custom-input-style" type="text" name="issue1" :value="old('issue1')" required autofocus />
          <x-input-error :messages="$errors->get('issue1')" class="mt-2" />
        </div>

        <div class="flex flex-col mb-4">
          <x-input-label for="issue2" :value="__('80％目標')" />
          <x-text-input id="issue2" class="block mt-1 w-full custom-input-style" type="text" name="issue2" :value="old('issue2')" required autofocus />
          <x-input-error :messages="$errors->get('issue2')" class="mt-2" />
        </div>
        
      </div>
 

     <div class="flex items-center justify-end mt-4">
<x-primary-button class="ml-3" id="checkButton">
  {{ __('Check') }}
</x-primary-button>   
    </div>
    

    
  </div>

              
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('目標設定を行いましょう（能力行動項目）') }}
    </h2>
  </x-slot>


  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
          <table class="text-center w-full border-collapse">
            
        <table id="targetElement" class="text-center w-full border-collapse">
            <thead>
              <tr>
                <div data-url="{{ route('goal.index') }}" id="urlData">
                <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">目標の確認</th>
              </div>
              </tr>
            </thead>
        </table>

<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6 box-style">
<tbody>
  @foreach ($latestgoals as $goal)
  <tr class="hover:bg-gray-lighter">
    <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
      <x-input-label for="leadership1" :value="__('リーダーシップ')" class="custom-leadership-style text-left" />    

     <div>
      <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">100%達成目標：{{$goal->leadership1}}</p>
     </div>
      
      <div>
      <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">80%達成目標：{{$goal->leadership2}}</p>
      </div>
    </td>
  </tr>
  @endforeach
</tbody>
 </div>


<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6 box-style">
<tbody>
  @foreach ($latestgoals as $goal)
  <tr class="hover:bg-gray-lighter">
    <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
      <x-input-label for="leadership1" :value="__('コミュニケーション')" class="custom-leadership-style text-left" />    

     <div>
      <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">100%達成目標：{{$goal->communication1}}</p>
     </div>
      
      <div>
      <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">80%達成目標：{{$goal->communication2}}</p>
      </div>
    </td>
  </tr>
  @endforeach
</tbody>
</div>


<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6 box-style">
<tbody>
  @foreach ($latestgoals as $goal)
  <tr class="hover:bg-gray-lighter">
    <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
      <x-input-label for="leadership1" :value="__('問題解決')" class="custom-leadership-style text-left" />    

     <div>
      <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">100%達成目標：{{$goal->issue1}}</p>
     </div>
      
      <div>
      <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">80%達成目標：{{$goal->issue2}}</p>
      </div>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
</div>


      
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
  <button id="yesButton3" class="bg-green-500 text-white rounded p-2 w-5/12">YES</button>
  <!-- NO ボタン -->
  <button id="noButton3" class="bg-red-500 text-white rounded p-2 w-5/12 ml-2">NO</button>
</div>
  </div>
</div>

    

        
        </div>
        

      </div>
      
           <div class="flex items-center justify-end mt-4">
            <!-- 修正ボタン -->
            <form action="{{ route('goal.edit', $goal->id) }}" method="GET" class="text-left">
              @csrf
              <x-primary-button>
                <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="gray">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
              </x-primary-button>
            </form>

            <!-- Submit ボタン -->
            
            <form action="{{ route('goal.create', $goal->id) }}" method="GET" class="text-left">
              @csrf
            <x-primary-button class="ml-3" id="submitButton">
           {{ __('Submit') }}
            </x-primary-button>
            </form>
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

document.addEventListener("DOMContentLoaded", function() {
    
    const submitButton = document.getElementById("submitButton");
    const confirmationModal = document.getElementById("confirmationModal");
    const confirmationModal2 = document.getElementById("confirmationModal2");
    const confirmationModal3 = document.getElementById("confirmationModal3");
    const yesButton = document.getElementById("yesButton");
    const noButton = document.getElementById("noButton");
    const yesButton2 = document.getElementById("yesButton2");
    const noButton2 = document.getElementById("noButton2");
    const yesButton3 = document.getElementById("yesButton3");
    const noButton3 = document.getElementById("noButton3");

    submitButton.addEventListener("click", function(e) {
        e.preventDefault();  // Prevent form submission
        confirmationModal.style.display = "flex";
    });

    yesButton.addEventListener("click", function() {
        confirmationModal.style.display = "none";
        confirmationModal2.style.display = "flex";
    });

    noButton.addEventListener("click", function() {
        confirmationModal.style.display = "none";
    });

    yesButton2.addEventListener("click", function() {
        confirmationModal2.style.display = "none";
        confirmationModal3.style.display = "flex";
    });

    noButton2.addEventListener("click", function() {
        confirmationModal2.style.display = "none";
    });

    yesButton3.addEventListener("click", function() {
        confirmationModal3.style.display = "none";
        window.location.href = "/goal/create"; 
      
        // Here, you can proceed with form submission or other actions.
    });

    noButton3.addEventListener("click", function() {
        confirmationModal3.style.display = "none";
    });
});





</script>

