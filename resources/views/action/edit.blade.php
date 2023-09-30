<!-- resources/views/tweet/edit.blade.php -->

<x-app-layout>
  
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('目標の修正') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
    
    



<div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">           
    <h2 class="text-xl font-semibold mb-2">前期のあなたの目標</h2>
    
    <div class="flex items-center">
        <x-label for="action1" :value="__('①')" class="mr-2"/>
        <p id="action1" class="block w-full">{{ $preData->action1 }}</p>
    </div>
</div>







  @include('common.errors')

  <form class="mb-6" action="{{ route('action.update',$action->id) }}" method="POST">
            @method('put')
            @csrf
            
  <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">           
  <h2 class="text-xl font-semibold mb-2">全社目標</h2>
　

  @include('common.errors')

  <form class="mb-6" action="{{ route('action.update',$action->id) }}" method="POST">
            @method('put')
            @csrf
　
　<div class="flex items-center">
    <x-input-label for="action1" :value="__('①')" class="mr-2"/>
    <x-text-input id="action1" class="block w-full" type="text" name="action1" value="{{$action->action1}}" required autofocus />
　</div>
  　<x-input-error :messages="$errors->get('action1')" class="mt-2" />
　
　<div class="flex items-center">
    <x-input-label for="action2" :value="__('②')" class="mr-2"/>
    <x-text-input id="action2" class="block w-full" type="text" name="action2" value="{{$action->action2}}" required autofocus />
　</div>
  　<x-input-error :messages="$errors->get('action2')" class="mt-2" />
            
　<div class="flex items-center">
    <x-input-label for="action3" :value="__('③')" class="mr-2"/>
    <x-text-input id="action3" class="block w-full" type="text" name="action3" value="{{$action->action3}}" required autofocus />
　</div>
  　<x-input-error :messages="$errors->get('action3')" class="mt-2" />
　</div>

　 
  <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">           
  <h2 class="text-xl font-semibold mb-2">部門目標</h2>
　
　<div class="flex items-center">
    <x-input-label for="action4" :value="__('①')" class="mr-2"/>
    <x-text-input id="action4" class="block w-full" type="text" name="action4" value="{{$action->action4}}" required autofocus />
　</div>
  　<x-input-error :messages="$errors->get('action4')" class="mt-2" />

　<div class="flex items-center">
    <x-input-label for="action5" :value="__('②')" class="mr-2"/>
    <x-text-input id="action5" class="block w-full" type="text" name="action5" value="{{$action->action5}}" required autofocus />
　</div>
  　<x-input-error :messages="$errors->get('action5')" class="mt-2" />
　
　<div class="flex items-center">
    <x-input-label for="action6" :value="__('③')" class="mr-2"/>
    <x-text-input id="action6" class="block w-full" type="text" name="action6" value="{{$action->action6}}" required autofocus />
　</div>
  　<x-input-error :messages="$errors->get('action6')" class="mt-2" />
　</div>


  <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">           
  <h2 class="text-xl font-semibold mb-2">個人目標</h2>
　
　<div class="flex items-center">
    <x-input-label for="action7" :value="__('①')" class="mr-2"/>
    <x-text-input id="action7" class="block w-full" type="text" name="action7" value="{{$action->action7}}" required autofocus />
　</div>
  　<x-input-error :messages="$errors->get('action7')" class="mt-2" />
　
　<div class="flex items-center">
    <x-input-label for="action8" :value="__('②')" class="mr-2"/>
    <x-text-input id="action8" class="block w-full" type="text" name="action8" value="{{$action->action8}}" required autofocus />
　</div>
  　<x-input-error :messages="$errors->get('action2')" class="mt-2" />
　
　<div class="flex items-center">
    <x-input-label for="action9" :value="__('③')" class="mr-2"/>
    <x-text-input id="action9" class="block w-full" type="text" name="action9" value="{{$action->action9}}" required autofocus />
　</div>
  　<x-input-error :messages="$errors->get('action9')" class="mt-2" />
</div>　




  

            
            <div class="flex items-center justify-end mt-4">
              <a href="{{ url()->previous() }}">
                <x-secondary-button class="ml-3">
                  {{ __('Back') }}
                </x-primary-button>
              </a>
              
              <x-primary-button class="ml-3">
                {{ __('Update') }}
              </x-primary-button>
            </div>
</form>
          
          

    </div>
  </div>
</x-app-layout>
