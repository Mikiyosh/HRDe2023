<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
                    <table class="text-center w-full border-collapse">
                        <thead>
                            <tr>
                                <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">みんなの目標</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($otherUsersLatestGoals as $goal)
                            <tr class="hover:bg-gray-lighter">
                                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                                    
                                    <a href="{{ route('follow.show', $goal->user->id) }}">
                                    <h3 class="text-left font-bold text-lg text-gray-dark dark:text-gray-200">{{ $goal->user->name }}</h3>
                                    </a>
                                    
                                    <div class="">
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">リーダーシップ：{{ $goal->leadership1 }}</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">コミュニケーション：{{ $goal->communication1 }}</h3>
                                        <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">問題解決：{{ $goal->issue1 }}</h3>
                                        <!-- ここにリーダーシップに関する追加情報を表示 -->
                                    </div>
                    
                                  

                                        <a href="{{ route('goal.show',$goal->id) }}">
                                            <h3 class="text-left font-bold text-lg text-gray-800 dark:text-gray-200">{{$goal->goal}}</h3>
                                        </a>            
                                        <!-- favorite 状態で条件分岐 -->
                                        @if($goal->users()->where('user_id', Auth::id())->exists())
                                        <!-- unfavorite ボタン -->
                                        <form action="{{ route('unfavorites',$goal) }}" method="POST" class="text-left">
                                            @csrf
                                            <x-primary-button class="ml-3">
                                                <svg class="h-6 w-6 text-red-500" fill="red" viewBox="0 0 24 24" stroke="red">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                                {{ $goal->users()->count() }}
                                            </x-primary-button>
                                        </form>
                                        @else
                                        <!-- favorite ボタン -->
                                        <form action="{{ route('favorites',$goal) }}" method="POST" class="text-left">
                                            @csrf
                                            <x-primary-button class="ml-3">
                                                <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="gray">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                                {{ $goal->users()->count() }}
                                            </x-primary-button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    </x-app-layout>
