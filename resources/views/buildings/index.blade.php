<x-app-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                建物管理
            </h2>
    </x-slot>
    
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end mb-4">
                    <button onclick="location.href='{{ route('buildings.create') }} '" class="w-40 m-3 p-3 btn bg-linkbtn text-white hover:bg-linkbtn-light rounded-full font-bold">物件新規登録</button>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 mx-auto">
                                <div class="text-center">
                                    <h2 class="sm:text-2xl text-xl font-medium title-font text-gray-900 mb-4 font-bold">
                                        建物（物件検索）
                                    </h2>
                                    <div class="w-full mx-auto overflow-auto">
                                        <form action="{{ route('buildings.index') }}" method="get">
                                            <table class="table-auto w-full text-left whitespace-no-wrap">
                                                        <td class="w-24 px-0 py-3">物件No.</td>
                                                        <td class="px-0 py-3">
                                                            <input type="text" id="build_num" name="build_num" class="w-5/6 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-24 px-0 py-3">物件名</td>
                                                        <td class="px-0 py-3">
                                                            <input type="text" id="build_name" name="build_name" class="w-5/6 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                            <span>を含む</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-24 px-0 py-3">物件名カナ</td>
                                                        <td class="px-0 py-3">
                                                            <input type="text" id="build_name_kana" name="build_name_kana" class="w-5/6 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                            <label class="">を含む</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-24 px-0 py-3">所在地</td>
                                                        <td class="px-0 py-3">
                                                            <input type="text" id="address" name="address" class="w-5/6 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                            <label class="">を含む</label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-24 px-0 py-3">写真</td>
                                                        <td class="px-0 py-3">
                                                            <div class="flex">
                                                                <div class="w-1/3">
                                                                    <span>外観写真</span>
                                                                    <input type="text" maxlength="2" id="exterior_photo_min" name="exterior_photo_min" class="w-12 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                                    <span>枚〜</span>
                                                                    <input type="text" maxlength="2" id="exterior_photo_max" name="exterior_photo_max" class="w-12 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                                    <span>枚</span>
                                                                </div>
        
                                                                <div class="w-1/3">
                                                                    <span>周辺写真</span>
                                                                    <input type="text" maxlength="2" id="naborhood_photo_min" name="naborhood_photo_min" class="w-12 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                                    <span>枚〜</span>
                                                                    <input type="text" maxlength="2" id="naborhood_photo_max" name="naborhood_photo_max" class="w-12 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                                    <span>枚</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-24 px-0 py-3">部屋登録</td>
                                                        <td class="px-0 py-3">
                                                            <div class="flex">
                                                                <div class="mr-6">
                                                                    <input type="radio" id="room1" name="room" value="1" checked>
                                                                    <label for="room1">両方</label>
                                                                </div>
                                                                <div class="mr-6">
                                                                    <input type="radio" id="room2" name="room" value="2">
                                                                    <label for="room2">あり</label>
                                                                </div>
                                                                <div class="mr-6">
                                                                    <input type="radio" id="room3" name="room" value="3">
                                                                    <label for="room3">なし</label>
                                                                </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex justify-center">
                                                <button type="submit" class="w-40 m-3 p-3 btn bg-linkbtn text-white hover:bg-linkbtn-light rounded-full font-bold">検索</button>
                                                <button type="reset" class="w-40 m-3 p-3 btn bg-linkbtn text-white hover:bg-linkbtn-light  f rounded-full font-bold">条件クリア</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
    
            <div id="search_result" class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-4 hidden">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 mx-auto">
                                <div class="text-center">
                                    <h2 class="sm:text-2xl text-xl font-medium title-font text-gray-900 mb-4 font-bold">
                                        物件一覧
                                    </h2>
                                    <div class="w-full mx-auto overflow-auto">
                                        <table class="table-auto w-full text-left whitespace-no-wrap">
                                            <thead>
                                                <tr>
                                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl text-center">編集</th>
                                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center">物件No.</th>
                                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center">最終更新日</th>
                                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center">物件名</th>
                                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center">物件カナ</th>
                                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center">登録部屋数</th>
                                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center">外観写真枚数</th>
                                                </tr>
                                            </thead>
                                            {{-- <tbody>
                                                @foreach ($search_building as $building)
                                                <tr>
                                                    <td class="px-0 py-3 flex">
                                                        <button type="button" onclick="location.href='{{route('buildings.edit',['building' => $building->id])}}'" class="flex mx-auto text-white bg-linkbtn border-0 py-2 px-4 focus:outline-none hover:bg-linkbtn-light rounded font-bold">更新</button>
                                                        <button type="button" class="flex mx-auto text-white bg-linkbtn border-0 py-2 px-4 focus:outline-none hover:bg-linkbtn-light rounded font-bold">コピー</button>
                                                        <button type="button" onclick="location.href='{{ route('buildings.rooms',['building' => $building->id])}}'" class="flex mx-auto text-white bg-linkbtn border-0 py-2 px-4 focus:outline-none hover:bg-linkbtn-light rounded font-bold">部屋</button>
                                                        <a href="{{ route('buildings.test',['build_id'=>$building->id]) }}" class="flex mx-auto text-white bg-linkbtn border-0 py-2 px-4 focus:outline-none hover:bg-linkbtn-light rounded font-bold">テスト</a>
                                                    </td>
                                                    <td class="px-0 py-3">{{ $building->build_num }}</td>
                                                    <td class="px-0 py-3">{{ $building->updated_at }}</td>
                                                    <td class="px-0 py-3">{{ $building->build_name }}</td>
                                                    <td class="px-0 py-3">{{ $building->build_name_kana }}</td>
                                                    <td class="px-0 py-3 text-center">{{ $building->room_num }}</td>
                                                    <td class="px-0 py-3 text-center">{{ $building->photo_num }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody> --}}
                                        </table>
                                      </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    