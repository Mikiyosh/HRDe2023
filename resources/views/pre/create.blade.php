<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 leading-tight tracking-wider">
            {{ __('今期の目標') }}
        </h2>
    </x-slot>

    <!-- 上段: 私の目標 -->
   
    @if ($myLatestGoal)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
        
              <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6 p-6">
                    
                    
                
                    <table class="text-center w-full border-collapse">
                      
                        <thead>
                            <tr>
                                <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">私の目標</th>
                            </tr>
                        </thead>
                      


                        @if($myLatestAction) 
                        <tbody>
                            
                             <tr class="hover:bg-gray-lighter">
                                 
                                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                                    
                                    
                                    <h3 class="text-left text-lg text-gray-dark dark:text-gray-200 font-bold">業績目標：</h3>
                                    <div class="mb-4 border-b pb-4">
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200 font-bold">全社目標：</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">①{{ $myLatestAction->action1 }}</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">②{{ $myLatestAction->action2 }}</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">③{{ $myLatestAction->action3 }}</h3>
                                    </div>
                                    
                                    <div class="mb-4 border-b pb-4">
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200 font-bold">部門目標：</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">①{{ $myLatestAction->action4 }}</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">②{{ $myLatestAction->action5 }}</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">③{{ $myLatestAction->action6 }}</h3>
                                    </div>
                                    
                                    <div class="mb-4 border-b pb-4">
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200 font-bold">個人目標：</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">①{{ $myLatestAction->action7 }}</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">②{{ $myLatestAction->action8 }}</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">③{{ $myLatestAction->action9 }}</h3>
                                    </div>
                                </td>
                            </tr>
                            
                        </table>
                    
                     
                           <table class="text-center w-full border-collapse">  
                            
                            <tr class="hover:bg-gray-lighter">
                                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                                    <h3 class="text-left text-lg text-gray-dark dark:text-gray-200 font-bold">行動目標：</h3>
                                    <div class="mb-4 border-b pb-4">
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200 font-bold">リーダーシップ：</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">100%目標{{ $myLatestGoal->leadership1 }}</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">80%目標{{ $myLatestGoal->leadership2 }}</h3>
                                    </div>
                                    
                                    <div class="mb-4 border-b pb-4">
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200 font-bold">コミュニケーション：</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">100%目標{{ $myLatestGoal->communication1 }}</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">80%目標{{ $myLatestGoal->communication2 }}</h3>
                                    </div>
                                    
                                    <div class="mb-4 border-b pb-4">
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200 font-bold">問題解決：</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">100%目標{{ $myLatestGoal->issue1 }}</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">80%目標{{ $myLatestGoal->issue2 }}</h3>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endif
                        
                    </table>
                </div>


<form action="{{ route('pre.index') }}" method="GET" class="text-right">
    <div class="flex items-center justify-end mt-4">
        <a href="{{ url()->previous() }}" class="flex items-center">
            <x-secondary-button class="ml-3">
                {{ __('Back') }}
            </x-secondary-button>
        </a>
        
        @csrf

        <x-primary-button id="submitButton">
            {{ __('提出する') }}
        </x-primary-button>
    </div>
</form>



     
        </div>
    </div>
    @endif

 




</x-app-layout>