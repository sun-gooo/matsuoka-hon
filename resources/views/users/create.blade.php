<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ユーザ新規登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="lg:w-2/3 md:w-2/3 mx-auto">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                       
                        <form action="{{ route('users.store') }}" method="post">
                            @csrf
                            <div class=" -m-2">
                                <div class="p-2 mx-auto">
                                  <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">ユーザ名</label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  </div>
                                </div>
                                <div class="p-2 mx-auto">
                                  <div class="relative">
                                    <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  </div>
                                </div>
                                <div class="p-2 mx-auto">
                                    <div class="relative">
                                      <label for="password" class="leading-7 text-sm text-gray-600">パスワード</label>
                                      <input type="password" id="password"  required name="password" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                  </div>
                                </div>
                                <div class="p-2 mx-auto">
                                    <div class="relative">
                                      <label for="password_confirmation" class="leading-7 text-sm text-gray-600">パスワード確認用</label>
                                      <input type="password" id="password_confirmation"  required name="password_confirmation" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                  </div>
                                </div>
                                <div class="flex justify-center p-2 w-full mt-4">
                                  <button  type="button" onclick="location.href='{{ route('users.index') }}'" class="flex mx-auto text-white bg-linkbtn border-0 py-2 px-8 focus:outline-none hover:bg-linkbtn-light rounded text-lg">戻る</button>
                                  <button type="submit" class="flex mx-auto text-white bg-linkbtn border-0 py-2 px-8 focus:outline-none hover:bg-linkbtn-light rounded text-lg">登録</button>
                                </div>
                            </div>
                        </form>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
