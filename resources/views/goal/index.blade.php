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

