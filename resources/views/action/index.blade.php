<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">

      <!-- リーダーシップのボックス -->
      <div class="dark:bg-gray-800 overflow-hidden sm:rounded-lg mb-6 p-6">
        @include('common.errors')
        <form class="mb-6" action="{{ route('action.store') }}" method="POST">
          @csrf
          
          

          
      <!-- 全社目標のボックス -->
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6">
        <x-input-label for="action1" :value="__('全社目標')" class="custom-leadership-style"/>

        <div class="flex flex-col mb-4">
          <x-input-label for="action1" :value="__('アクションプラン①')" />
          <x-text-input id="action1" class="block mt-1 w-full custom-input-style" type="text" name="action1" :value="old('action1')" required autofocus />
          <x-input-error :messages="$errors->get('action1')" class="mt-2" />
        </div>

        <div class="flex flex-col mb-4">
          <x-input-label for="action2" :value="__('アクションプラン②')" />
          <x-text-input id="action2" class="block mt-1 w-full custom-input-style" type="text" name="action2" :value="old('action2')" required autofocus />
          <x-input-error :messages="$errors->get('action2')" class="mt-2" />
        </div>
           
        <div class="flex flex-col mb-4">
          <x-input-label for="action3" :value="__('アクションプラン③')" />
          <x-text-input id="action3" class="block mt-1 w-full custom-input-style" type="text" name="action3" :value="old('action3')" required autofocus />
          <x-input-error :messages="$errors->get('action3')" class="mt-2" />
        </div>
      </div>

      <!-- コミュニケーションのボックス -->
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6">
        <x-input-label for="action4" :value="__('部門目標')" class="custom-leadership-style"/>

        <div class="flex flex-col mb-4">
          <x-input-label for="action4" :value="__('アクションプラン①')" />
          <x-text-input id="action4" class="block mt-1 w-full custom-input-style" type="text" name="action4" :value="old('action4')" required autofocus />
          <x-input-error :messages="$errors->get('action4')" class="mt-2" />
        </div>

        <div class="flex flex-col mb-4">
          <x-input-label for="action5" :value="__('アクションプラン②')" />
          <x-text-input id="action5" class="block mt-1 w-full custom-input-style" type="text" name="action5" :value="old('action5')" required autofocus />
          <x-input-error :messages="$errors->get('action5')" class="mt-2" />
        </div>
           
        <div class="flex flex-col mb-4">
          <x-input-label for="action6" :value="__('アクションプラン③')" />
          <x-text-input id="action6" class="block mt-1 w-full custom-input-style" type="text" name="action6" :value="old('action6')" required autofocus />
          <x-input-error :messages="$errors->get('action6')" class="mt-2" />
        </div>
      </div>

      <!-- 問題解決力のボックス -->
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6">
        <x-input-label for="issue1" :value="__('個人目標')" class="custom-leadership-style"/>

        <div class="flex flex-col mb-4">
          <x-input-label for="action7" :value="__('アクションプラン①')" />
          <x-text-input id="action7" class="block mt-1 w-full custom-input-style" type="text" name="action7" :value="old('action7')" required autofocus />
          <x-input-error :messages="$errors->get('action7')" class="mt-2" />
        </div>

        <div class="flex flex-col mb-4">
          <x-input-label for="action8" :value="__('アクションプラン②')" />
          <x-text-input id="action8" class="block mt-1 w-full custom-input-style" type="text" name="action8" :value="old('action8')" required autofocus />
          <x-input-error :messages="$errors->get('action8')" class="mt-2" />
        </div>

        <div class="flex flex-col mb-4">
          <x-input-label for="action9" :value="__('アクションプラン③')" />
          <x-text-input id="action9" class="block mt-1 w-full custom-input-style" type="text" name="action9" :value="old('action9')" required autofocus />
          <x-input-error :messages="$errors->get('action9')" class="mt-2" />
        </div>
      </div>
 

<div class="flex items-center justify-end mt-4">
<x-primary-button class="ml-3" id="submitButton">
 {{ __('Next') }}
</x-primary-button>
</div>

</form>
        </div>
      </div>
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

    let clickedOnce = false;
    let submitted = false;

    submitButton.addEventListener("click", function(e) {
        e.preventDefault();  // Prevent form submission
        if (!clickedOnce) {
            confirmationModal.style.display = "flex";
            clickedOnce = true;
        }
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
        if (!submitted) {
            // フォーム送信
            const form = document.getElementById("yourFormIdOrClassName");
            form.submit();
            submitted = true;
        }
    });

    noButton3.addEventListener("click", function() {
        confirmationModal3.style.display = "none";
    });
});

console.log("Submit button clicked");

</script>






</script>

