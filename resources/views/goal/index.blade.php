<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('目標設定を行いましょう') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')
          <form class="mb-6" action="{{ route('goal.store') }}" method="POST">
            @csrf
            
            <div class="flex flex-col mb-4">
              <x-input-label for="leadership1" :value="__('①リーダーシップ')" />
              <x-text-input id="leadership1" class="block mt-1 w-full" type="text" name="leadership1" :value="old('leadership1')" required autofocus />
              <x-input-error :messages="$errors->get('leadership1')" class="mt-2" />
            </div>

            <div class="flex flex-col mb-4">
              <x-input-label for="communication1" :value="__('②コミュニケーション')" />
              <x-text-input id="communication1" class="block mt-1 w-full" type="text" name="communication1" :value="old('communication1')" required autofocus />
              <x-input-error :messages="$errors->get('communication1')" class="mt-2" />
            </div>

            <div class="flex flex-col mb-4">
              <x-input-label for="issue1" :value="__('③問題解決力')" />
              <x-text-input id="issue1" class="block mt-1 w-full" type="text" name="issue1" :value="old('issue1')" required autofocus />
              <x-input-error :messages="$errors->get('issue1')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ml-3">
                {{ __('Check') }}
              </x-primary-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('目標設定を行いましょう') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">目標の確認</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($latestgoals as $goal)
              <tr class="hover:bg-gray-lighter">
                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                  <h3 class="text-left font-bold text-lg text-gray-dark dark:text-gray-200">リーダーシップ：{{$goal->leadership1}}</h3>
                  <div class="flex"></div>
                </td>
              </tr>
              @endforeach
            </tbody>

            <tbody>
              @foreach ($latestgoals as $goal)
              <tr class="hover:bg-gray-lighter">
                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                  <h3 class="text-left font-bold text-lg text-gray-dark dark:text-gray-200">コミュニケーション：{{$goal->communication1}}</h3>
                  <div class="flex"></div>
                </td>
              </tr>
              @endforeach
            </tbody>

            <tbody>
              @foreach ($latestgoals as $goal)
              <tr class="hover:bg-gray-lighter">
                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                  <h3 class="text-left font-bold text-lg text-gray-dark dark:text-gray-200">問題解決力：{{$goal->issue1}}</h3>
                  <div class="flex"></div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
                    <x-primary-button class="ml-3">
              {{ __('Submit') }}
            </x-primary-button>
            </form>
          
          
          
          
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function () {
    // Checkボタンがクリックされたときに目標の確認セクションを表示
    $("#checkButton").click(function () {
      $("#goalConfirmationSection").show();

      // 目標の確認セクションにスクロール（スムーズなスクロールを使用）
      $('html, body').animate({
        scrollTop: $("#goalConfirmationSection").offset().top
      }, 10000000); // 1000ミリ秒（1秒）でスクロール完了
    });
  });
</script>