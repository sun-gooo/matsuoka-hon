<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ユーザ管理
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-12 mx-auto">
                            <div class="flex flex-col text-center w-full mb-6">
                                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">ユーザ一覧</h1>
                            </div>
                            <x-flash-message status="session('status')" />
                            <div class="flex pl-4 mt-4 mb-8 lg:w-2/3 w-full mx-auto">
                                <button onclick="location.href='{{ route('users.create') }}'" class="flex ml-auto text-white bg-linkbtn border-0 py-2 px-6 focus:outline-none hover:bg-linkbtn-light rounded">新規登録</button>
                            </div>
                            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">名前</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">登録日</th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="px-4 py-3 border-b-2 border-gray-200">{{ $user->name }}</td>
                                        <td class="px-4 py-3 border-b-2 border-gray-200">{{ $user->email }}</td>
                                        <td class="px-4 py-3 border-b-2 border-gray-200">{{ $user->created_at }}</td>
                                        <td class="px-4 py-3 border-b-2 border-gray-200">
                                            <button onclick="location.href='{{ route('users.edit', ['user'=>$user->id]) }}'" class="flex ml-auto text-white bg-linkbtn border-0 py-2 px-6 focus:outline-none hover:bg-linkbtn-light rounded">編集</button>
                                        </td>
                                        <form id="delete_{{ $user->id }}"  method="post" action="{{ route('users.destroy',['user' => $user->id]) }}">
                                            @csrf
                                            @method('delete')

                                            <td class="px-4 py-3 border-b-2 border-gray-200">
                                                <a href="#" data-id="{{ $user->id }}" onclick="deletePost(this)" class="text-white bg-linkbtn border-0 py-2 px-4 focus:outline-none hover:bg-linkbtn-light rounded">削除</a>
                                            </td>
                                        </form>
                                    </tr>
                                            
                                    @endforeach

                                </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
