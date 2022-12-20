<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            建物登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-12 mx-auto">
                            <form action="{{ route('buildings.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                {{-- 基本情報 --}}
                                <fieldset class="p-4 border-solid border-2 border-gray-200">
                                    <legend class="p-3 text-left border-slate-500 text-lg font-bold">基本情報</legend>
                                    <div class="w-full flex mx-2 py-2">
                                        <div class="w-1/3 flex">
                                            <div class="w-40 mr-2 py-2 text-right">物件No.</div>
                                            <div class="w-[calc(100%-12rem)]"><input type="text" name="txt_build_num" id="txt_build_num" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="例：0000-00000000-000"></div>
                                        </div>
                                        <div class="w-1/3 flex">
                                            <div class="w-full">
                                                <input type="checkbox" name="chk_visible" id="chk_visible" class="mr-2">
                                                <label for="chk_visible">公開する</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full flex mx-2 py-2">
                                        <div class="w-full flex">
                                            <div class="w-40 mr-2 py-2 text-right">物件名</div>
                                            <div class="w-[calc(100%-11rem)]"><input type="text" name="txt_build_nm" id="txt_build_nm" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="例：○○○○○○ハイツ"></div>
                                        </div>
                                    </div>
                                    <div class="w-full flex mx-2 py-2">
                                        <div class="w-full flex">
                                            <div class="w-40 mr-2 py-2 text-right">物件名カナ</div>
                                            <div class="w-[calc(100%-11rem)]"><input type="text" name="txt_build_nm_kana" id="txt_build_nm_kana" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"  placeholder="例：○○○○○○ハイツ"></div>
                                        </div>
                                    </div>
                                    <div class="w-full flex mx-2 py-2">
                                        <div class="w-full flex">
                                            <div class="w-40 mr-2 py-2 text-right">所在地</div>
                                            <div class="w-4 mx-2 py-2 ">〒</div>
                                            <div class="w-28 mr-4"><input type="text" id="zipcode" name="txt_zipcode" class="w-full mr-2 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="000-0000"></div>
                                            <div class="w-[calc(100%-20rem)] mx-2"><input type="text" name="txt_address1" id="txt_address1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="都道府県市区町村大字まで"></div>
                                        </div>
                                    </div>
                                    <div class="w-full flex mx-2 py-2">
                                        <div class="w-full flex">
                                            <div class="w-40 mr-2 py-2 text-right"></div>
                                            <div class="w-[calc(50%)] mx-2"><input type="text" name="txt_address2" id="txt_address2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="○○丁目"></div>
                                            <div class="w-[calc(50%)] mx-2"><input type="text" name="txt_address3" id="txt_address3" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="番地-号（ホームページには表示されません）"></div>
                                        </div>
                                    </div>
                                    <div class="w-full flex mx-2 py-2">
                                        <div class="w-full flex">
                                            <div class="w-36 mr-2 py-2 text-right">アピールポイント</div>
                                            <div class="w-[calc(100%-10rem)]"><textarea name="txt_apeal_point" id="txt_apeal_point" rows="3" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="建物のアピールポイントを入力してください。アピールポイントは物件の詳細ページに表示されます。"></textarea></div>
                                        </div>
                                    </div>

                                    <fieldset class="p-4 border-solid border-2 border-gray-200">
                                        <legend class="p-3 text-left border-slate-500 text-lg font-bold">地図</legend>
                                        <div class="w-full flex mx-2 py-2">
                                            <div class="w-1/3 flex">
                                                <div class="w-20 mr-2 py-2 text-right">緯度</div>
                                                <div class="w-[calc(100%-5rem)]"><input type="text" name="txt_latitude" id="txt_latitude" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="0.000000"></div>
                                            </div>
                                            <div class="w-1/3 flex">
                                                <div class="w-20 mr-2 py-2 text-right">経度</div>
                                                <div class="w-[calc(100%-5rem)]"><input type="text" name="txt_longitude" id="txt_longitude" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="0.000000"></div>
                                            </div>
                                            <div class="w-1/3 flex ml-6">
                                                <button type="button" class="button bg-linkbtn hover:bg-linkbtn-light text-white py-2 px-4 rounded-md">住所から算出</button>
                                            </div>
                                        </div>
                                        <div class="w-full flex mx-2 py-2">
                                            <div class="w-full flex">
                                                <div class="w-20 mr-2 py-2 text-right">URL</div>
                                                <div class="w-[calc(100%-6rem)]"><input type="text" name="txt_map_ulr" id="txt_map_ulr" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="GoogleMapのURLを入力してください"></div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset  class="my-4 p-4 border-solid border-2 border-gray-200">
                                        <legend class="p-3 text-left border-slate-500 text-lg font-bold">物件種別</legend>
                                        <div class="w-full pb-6 flex">
                                            <div class="w-20 mr-2 py-2 text-right">物件種別</div>
                                            <div>
                                                <select name="sel_property" id="sel_property" class="w-60 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                <?php /*
@foreach($properties as $property)
                                                    <option value="{{ $property{'id'} }}">{{ $property{'property_name'} }}</option>
@endforeach
*/ ?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="w-full pb-6 flex">
                                            <div class="w-20 mr-2 py-2 text-right">構造</div>
                                            <div>
                                                <select name="sel_structure" id="sel_structure" class="w-60 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
<?php /*
@foreach($structures as $structure)
                                                    <option value="{{ $structure{'id'} }}">{{ $structure{'structure_name'} }}</option>
@endforeach
*/ ?>
                                                </select>

                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset  class="my-4 p-4 border-solid border-2 border-gray-200">
                                        <legend class="p-3 text-left border-slate-500 text-lg font-bold">階数・戸数</legend>
                                        <div class="w-full pb-6 flex">
                                            <div class="w-[16rem] flex">
                                                <div class="w-20 mr-2 py-2 text-right">地上</div>
                                                <div class="w-24"><input type="text" name="txt_chijo_num" id="txt_chijo_num" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right"></div>
                                                <div class="w-12 mx-2 py-2">階</div>
                                            </div>

                                            <div class="w-[16rem] flex">
                                                <div class="w-20 mr-2 py-2 text-right">地下</div>
                                                <div class="w-24"><input type="text" name="txt_chika_num" id="txt_chika_num" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right"></div>
                                                <div class="w-12 mx-2 py-2">階</div>
                                            </div>

                                            <div class="w-[16rem] flex">
                                                <div class="w-20 mr-2 py-2 text-right">総戸数</div>
                                                <div class="w-24"><input type="text" name="txt_unit_num" id="txt_unit_num" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right"></div>
                                                <div class="w-12 mx-2 py-2">戸</div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset  class="my-4 p-4 border-solid border-2 border-gray-200">
                                        <legend class="p-3 text-left border-slate-500 text-lg font-bold">完成（予定）年月日</legend>
                                        <div class="w-full pb-6 flex">
                                            <div class="w-20 mr-2 py-2 text-right">完成日</div>
                                            <div class="w-36"><input type="date" name="txt_kansei_date" id="txt_kansei_date" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right"></div>
                                        </div>
                                        <div class="w-full pb-6 flex">
                                            <div class="w-20 mr-2 py-2 text-right">入居可能日</div>
                                            <div class="w-36"><input type="date" name="txt_nyukyo_kano_date" id="txt_nyukyo_kano_date" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right"></div>
                                        </div>
                                    </fieldset>

                                    <fieldset  class="my-4 p-4 border-solid border-2 border-gray-200">
                                        <legend class="p-3 text-left border-slate-500 text-lg font-bold">交通</legend>
                                        <div class="w-full mr-4 py-2 flex justify-start">
                                            <div class="w-1/4 flex">
                                                <div class="w-20 py-2 mr-2 text-right">最寄沿線</div>
                                                {{-- <div class="w-[calc(100%-16rem)]"> --}}
                                                <div class="w-40">
                                                    <input type="text" id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                </div>
                                                <div class="w-16 flex ml-6">
                                                    <button type="button" class="button bg-linkbtn hover:bg-linkbtn-light text-white py-2 px-4 rounded-md">検索</button>
                                                </div>
                                                {{-- <div class="w-[calc(100%-16rem)]">
                                                    <input type="text" id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                </div> --}}
                                            </div>
                                            <div class="w-1/4 flex">
                                                <div class="w-20 py-2 mr-2 text-right">駅名</div>
                                                <div class="w-40">
                                                    <input type="text" id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                </div>
                                                <div class="w-16 flex ml-6">
                                                    <button type="button" class="button bg-linkbtn hover:bg-linkbtn-light text-white py-2 px-4 rounded-md">検索</button>
                                                </div>
                                            </div>
                                            <div class="w-1/2 flex">
                                                <div class="w-20 py-2 mr-2 text-right">［ 徒歩</div>
                                                <div class="w-32">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字で入力してください。" id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div class="w-16 py-2 mx-2">
                                                    <span class="w-20 mr-2">分</span>
                                                </div>
                                                <div class="w-32">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字で入力してください。"  id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div class="w-16 py-2 mx-2">
                                                    <span class="w-20 mr-2">m ]</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mb-8 mr-4 py-2 flex">
                                            <div class="w-1/4 flex">
                                                <div class="w-20 py-2 mr-2 text-right">バス停名</div>
                                                <div class="w-[calc(100%-6rem)]">
                                                    <input type="text" id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                </div>
                                            </div>
                                            <div class="w-1/2 flex">
                                                <div class="w-36 py-2 mr-2 text-right">［ バス停まで徒歩</div>
                                                <div class="w-32">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字で入力してください。" id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div class="w-16 py-2 mx-2">
                                                    <span class="w-20 mr-2">分</span>
                                                </div>
                                                <div class="w-32">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字で入力してください。"  id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div class="w-16 py-2 mx-2">
                                                    <span class="w-20 mr-2">m ]</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mr-4 py-2 flex">
                                            <div class="w-1/4 flex">
                                                <div class="w-20 py-2 mr-2 text-right">その他沿線</div>
                                                <div class="w-40">
                                                    <input type="text" id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                </div>
                                                <div class="w-16 flex ml-6">
                                                    <button type="button" class="button bg-linkbtn hover:bg-linkbtn-light text-white py-2 px-4 rounded-md">検索</button>
                                                </div>
                                            </div>
                                            <div class="w-1/4 flex">
                                                <div class="w-20 py-2 mr-2 text-right">駅名</div>
                                                <div class="w-40">
                                                    <input type="text" id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                </div>
                                                <div class="w-16 flex ml-6">
                                                    <button type="button" class="button bg-linkbtn hover:bg-linkbtn-light text-white py-2 px-4 rounded-md">検索</button>
                                                </div>
                                            </div>
                                            <div class="w-1/2 flex">
                                                <div class="w-20 py-2 mr-2 text-right">［ 徒歩</div>
                                                <div class="w-32">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字で入力してください。" id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div class="w-16 py-2 mx-2">
                                                    <span class="w-20 mr-2">分</span>
                                                </div>
                                                <div class="w-32">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字で入力してください。"  id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div class="w-16 py-2 mx-2">
                                                    <span class="w-20 mr-2">m ]</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full mr-4 py-2 flex">
                                            <div class="w-1/4 flex">
                                                <div class="w-20 py-2 mr-2 text-right">バス停名</div>
                                                <div class="w-[calc(100%-6rem)]">
                                                    <input type="text" id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                </div>
                                            </div>
                                            <div class="w-1/2 flex">
                                                <div class="w-36 py-2 mr-2 text-right">［ バス停まで徒歩</div>
                                                <div class="w-32">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字で入力してください。" id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div class="w-16 py-2 mx-2">
                                                    <span class="w-20 mr-2">分</span>
                                                </div>
                                                <div class="w-32">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字で入力してください。"  id="nearest_line1" name="nearest_line1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div class="w-16 py-2 mx-2">
                                                    <span class="w-20 mr-2">m ]</span>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </fieldset>

                                {{-- 賃貸条件 --}}
                                <fieldset class="mt-12 mb-4 p-4 border-solid border-2 border-gray-200">
                                    <legend class="p-3 text-left border-slate-500 text-lg font-bold">賃貸条件</legend>

                                    <fieldset  class="my-4 p-4 border-solid border-2 border-gray-200">
                                        <legend class="p-3 text-left border-slate-500 text-lg font-bold">費用</legend>

                                        <div class="w-full mr-4 py-2 flex">
                                            <div class="flex w-1/4">
                                                <div class="w-20 py-2 text-right mr-2">敷金</div>
                                                <div class="w-[calc(100%-10rem)] mr-2">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字でご入力ください。" id="shikikin_num" name="shikikin_num" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div>
                                                    <select name="sel_shikikin_tani" id="sel_shikikin_tani" class="w-24 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option value="1">ヶ月</option>
                                                        <option value="2">円</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="flex w-1/4 mr-2">
                                                <div class="w-20 py-2 text-right mr-2">礼金</div>
                                                <div class="w-[calc(100%-10rem)] mr-2">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字でご入力ください。" id="reikin_num" name="reikin_num" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div>
                                                    <select name="sel_reikin_tani" id="sel_reikin_tani" class="w-24 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option value="1">ヶ月</option>
                                                        <option value="2">円</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="flex w-1/2">
                                                <div class="w-20 py-2 text-right mr-2">権利金</div>
                                                <div class="w-36 mr-2">
                                                    <select name="sel_kenrikin" id="sel_kenrikin" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option value="1">なし</option>
                                                        <option value="2">権利金</option>
                                                        <option value="3">契約一時金</option>
                                                    </select>
                                                </div>
                                                <div class="w-32 mr-2">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字でご入力ください。" id="kenrikin_num" name="kenrikin_num" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div>
                                                    <select name="sel_kenrikin_tani" id="sel_kenrikin_tani" class="w-20 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option value="1">ヶ月</option>
                                                        <option value="2">円</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mr-4 py-2 flex">
                                            <div class="flex w-1/4">
                                                <div class="w-20 py-2 text-right mr-2">保証金</div>
                                                <div class="w-[calc(100%-10rem)] mr-2">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字でご入力ください。" id="hosho_num" name="hosho_num" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div>
                                                    <select name="sel_hosho_tani" id="sel_hosho_tani" class="w-24 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option value="1">ヶ月</option>
                                                        <option value="2">円</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="flex w-1/4 mr-2">
                                                <div class="w-20 py-2 text-right mr-2">解約引</div>
                                                <div class="w-[calc(100%-10rem)] mr-2">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字でご入力ください。" id="kaiyakubiki_num" name="kaiyakubiki_num" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div>
                                                    <select name="sel_kaiyakubiki_tani" id="sel_kaiyakubiki_tani" class="w-24 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option value="1">ヶ月</option>
                                                        <option value="2">円</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="flex w-1/2">
                                                <div class="w-20 py-2 text-right mr-2">償却</div>
                                                <div class="w-36 mr-2">
                                                    <select name="sel_shokyaku" id="sel_shokyaku" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option value="0">なし</option>
                                                        <option value="1">解約時</option>
                                                        <option value="2">更新時</option>
                                                        <option value="3">一年毎</option>
                                                    </select>
                                                </div>
                                                <div class="w-32 mr-2">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字でご入力ください。" id="shokyaku_num" name="shokyaku_num" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div>
                                                    <select name="sel_shokyaku_tani" id="sel_shokyaku_tani" class="w-20 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option value="1">ヶ月</option>
                                                        <option value="2">円</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="mt-12 mb-4 p-4 border-solid border-2 border-gray-200">

                                        <div class="w-full mr-4 p-2 flex">
                                            <div class="w-1/4 py-2">
                                                <input type="checkbox" id="chk_renewal" name="chk_renewal" class="mr-2 py-2">
                                                <label for="chk_renewal">更新料なし</label>
                                            </div>
                                            <div class="flex w-3/4">
                                                <div class="w-full flex">
                                                    <div class="w-28 py-2 text-right mr-2">入居者更新費用</div>
                                                    <div class="w-32 mr-2">
                                                        <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字でご入力ください。" id="nyukyo_update_cost" name="nyukyo_update_cost" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                    </div>
                                                    <div>
                                                        <select name="sel_nyukyo_update_tani" id="sel_nyukyo_update_tani" class="w-20 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                            <option value="1">ヶ月</option>
                                                            <option value="2">円</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="w-full mr-4 p-2 flex justify-start">
                                            <div class="flex w-2/5">
                                                <div class="flex w-full">
                                                    <div class="w-20 py-2 text-right mr-4">駐車場</div>
                                                    <div class="w-full mr-2 flex">
                                                        <div class="flex mr-2">
                                                            <div class="mr-2 py-2">
                                                                <input type="radio" name="radio_park" id="radio_park1" value="0" checked>
                                                            </div>
                                                            <div class="mr-2 py-2">
                                                                <label for="radio_park1">なし</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex mr-2">
                                                            <div class="mr-2 py-2">
                                                                <input type="radio" name="radio_park" id="radio_park2" value="1">
                                                            </div>
                                                            <div class="mr-2 py-2">
                                                                <label for="radio_park2">敷地内</label>
                                                            </div>
                                                        </div>
                                                        <div class="flex mr-2">
                                                            <div class="mr-2 py-2">
                                                                <input type="radio" name="radio_park" id="radio_park3" value="3">
                                                            </div>
                                                            <div class="mr-2 py-2">
                                                                <label for="radio_park3">近隣</label>
                                                            </div>
                                                            <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字でご入力ください。" id="parking_distance" name="parking_distance" class="w-32 mr-2 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                            <div class="mr-2 py-2">
                                                                <label>m</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex w-3/5">
                                                <div class="flex w-full">
                                                    <div class="w-36 py-2 text-left mr-2">駐車契約可能台数</div>
                                                    <div class="w-32 mr-2">
                                                        <select name="sel_parking_enable_num" id="sel_parking_enable_num" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                            <option value="0"></option>
                                                            <option value="1">2台可</option>
                                                            <option value="2">3台可</option>
                                                            <option value="3">4台以上可</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mr-4 p-2 flex justify-start">
                                            <div class="flex w-2/5">
                                                <div class="flex w-full">
                                                    <div class="w-20 py-2 text-right mr-2"></div>
                                                    <div class="w-32 mr-2">
                                                        <select name="sel_parking_fee_structure" id="sel_parking_fee_structure" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                            <option value="0"></option>
                                                            <option value="1">有り有料</option>
                                                            <option value="2">有り無料</option>
                                                            <option value="3">2台無料</option>
                                                            <option value="4">3台無料</option>
                                                            <option value="5">4台無料</option>
                                                            <option value="6">5台無料</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字でご入力ください。" id="parking_fee" name="parking_fee" class="w-32 mr-2 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                <div class="w-36 py-2 mr-2">円</div>
                                                <div class="flex w-1/2">
                                                    <div class="flex w-full">
                                                        <div class="w-32 mr-2">
                                                            <select name="sel_parking_tax" id="sel_parking_tax" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                                <option value="0"></option>
                                                                <option value="1">なし</option>
                                                                <option value="2">外税10%</option>
                                                                <option value="3">内税10%</option>
                                                                <option value="4">外税8%</option>
                                                                <option value="5">内税8%</option>
                                                                <option value="6">外税5%</option>
                                                                <option value="7">内税5%</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="p-4 border-solid border-2 border-gray-200">
                                        <legend class="p-3 text-left border-slate-500 text-lg font-bold">保証人・保証会社</legend>

                                        <div class="w-full mr-4 p-2 flex">
                                            <input type="checkbox" name="chk_hoshonin" id="chk_hoshonin" class="mr-2 py-2">
                                            <label for="chk_hoshonin">保証人不要</label>
                                        </div>

                                        <div class="w-full mr-4 p-2 flex">
                                            <div class="flex w-full">
                                                <div class="flex w-full">
                                                    <div class="w-20 py-2 text-right mr-2">使用契約書</div>
                                                    <div class="w-28 mr-2">
                                                        <select name="sel_shiyo_keiyaku" id="sel_shiyo_keiyaku" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                            <option value="0">当社</option>
                                                            <option value="1">管理会社</option>
                                                            <option value="2">家主</option>
                                                            <option value="3">優待賃</option>
                                                            <option value="4">その他</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mr-4 py-2 flex">
                                            <div class="flex w-1/2">
                                                <div class="w-20 py-2 text-right mr-2">保証会社名</div>
                                                <div class="w-[calc(100%-10rem)] mr-2">
                                                    <input type="text" id="company_nm" name="company_nm" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                </div>
                                            </div>

                                            <div class="flex w-1/2 mr-2">
                                                <div class="w-20 py-2 text-right mr-2">利用料</div>
                                                <div class="w-30 mr-2">
                                                    <input type="text" onfocus="offComma(this);" onblur="toComma(this);" pattern="^([1-9]\d*|0)(\.\d+)?$" title="半角英数字でご入力ください。" id="riyo_num" name="riyo_num" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                </div>
                                                <div class="mr-2">
                                                    <select name="sel_riyo_tani" id="sel_riyo_tani" class="w-20 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option value="1">なし</option>
                                                        <option value="2">円</option>
                                                    </select>
                                                </div>
                                                <div class="mr-2">
                                                    <select name="sel_riyo_tax" id="sel_riyo_tax" class="w-24 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option value="1">ヶ月</option>
                                                        <option value="2">外税10%</option>
                                                        <option value="2">内税10%</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="w-full mr-4 py-2 flex justify-start">
                                            <div class="w-20 py-2 text-right mr-2">備考</div>
                                            <div class="w-[calc(100%-6rem)] mr-2">
                                                <input type="text" id="hosho_biko" name="hosho_biko" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            </div>
                                        </div>
                                    </fieldset>


                                    <fieldset class="p-4 border-solid border-2 border-gray-200">
                                        <legend class="p-3 text-left border-slate-500 text-lg font-bold">学部・エリア</legend>

                                        <div class="w-full mr-2 flex">
                                            <input type="checkbox" name="chk_student_only" id="chk_student_only" class="mr-2">
                                            <label for="chk_student_only">学生専用</label>
                                        </div>

                                        {{-- キャンパス --}}
                                        <fieldset class="p-4 border-solid border-2 border-gray-200">
                                            <legend class="p-3 text-left border-slate-500 text-lg font-bold">キャンパス</legend>
                                            <div class="w-full mr-2 py-2 flex flex-wrap">
@foreach ($campuses as $campus)
                                                <div class="w-1/3 py-2 flex">
                                                    <input type="checkbox" name="campuses[]" value="{{ $campus['id'] }}" id="campus_{{$campus['id']}}" class="mr-2">
                                                    <label for="campus_{{$campus['id']}}">{{$campus['campus_name']}}</label>
                                                </div>
@endforeach
                                            </div>
                                        </fieldset>

                                            {{-- 学部 --}}
                                            <fieldset class="p-4 border-solid border-2 border-gray-200">
                                                <legend class="p-3 text-left border-slate-500 text-lg font-bold">学部</legend>
                                                <div class="w-full py-2 flex flex-wrap">
@foreach ($faculties as $faculty)
                                                    <div class="w-1/3 py-2 flex">
                                                        <input type="checkbox" name="faculties[]" value="{{ $faculty['id'] }}" id="faculty_{{$faculty['id']}}" class="mr-2">
                                                        <label for="faculty_{{$faculty['id']}}">{{$faculty['faculty_name']}}</label>
                                                    </div>
@endforeach
                                                </div>
                                            </fieldset>

                                    </fieldset>

                                    {{-- 門・エリア --}}
                                    <fieldset class="p-4 border-solid border-2 border-gray-200">
                                        <legend class="p-3 text-left border-slate-500 text-lg font-bold">門・エリア</legend>
                                        <div class="w-full">
                                            <div class="w-full py-2 flex flex-wrap">
@foreach ($gates as $gate)
                                                <div class="w-1/2 py-2 flex">
                                                    <input type="checkbox" name="gates[]" value="{{ $gate['id'] }}" id="gate_{{$gate['id']}}" class="mr-2 mt-2 py-2">
                                                    <label for="gate_{{$gate['id']}}" class="mr-2 py-2">{{$gate['gate_name']}}</label>
                                                    <label for="" class="mr-2 py-2">まで</label>
                                                    <input type="text" name="gate_distance_{{$gate['id']}}" id="gate_distance_{{$gate['id']}}" class="w-20 mr-2 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                    <select name="sel_gate_tani_{{ $gate['id'] }}" id="sel_gate_tani_{{ $gate['id'] }}" class="w-20 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option value="1">分</option>
                                                        <option value="2">m</option>
                                                    </select>
                                                </div>
@endforeach
                                            </div>
                                        </div>
                                    </fieldset>

                                    {{-- 建物設備 --}}
                                    <fieldset class="p-4 border-solid border-2 border-gray-200">
                                        <legend class="p-3 text-left border-slate-500 text-lg font-bold">建物設備</legend>
                                        {{-- <div class="w-full">
                                            <div class="w-full py-2 flex flex-wrap">
@foreach ($gates as $gate)
                                                <div class="w-1/2 py-2 flex">
                                                    <input type="checkbox" name="gates[]" value="{{ $gate['id'] }}" id="gate_{{$gate['id']}}" class="mr-2 mt-2 py-2">
                                                    <label for="gate_{{$gate['id']}}" class="mr-2 py-2">{{$gate['gate_name']}}</label>
                                                    <label for="" class="mr-2 py-2">まで</label>
                                                    <input type="text" name="gate_distance_{{$gate['id']}}" id="gate_distance_{{$gate['id']}}" class="w-20 mr-2 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-right">
                                                    <select name="sel_gate_tani_{{ $gate['id'] }}" id="sel_gate_tani_{{ $gate['id'] }}" class="w-20 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option value="1">m</option>
                                                        <option value="2">分</option>
                                                    </select>
                                                </div>
@endforeach
                                            </div>
                                        </div> --}}
                                    </fieldset>

                                    {{-- 外観・周辺 --}}
                                    <fieldset class="p-4 border-solid border-2 border-gray-200">
                                        <legend class="p-3 text-left border-slate-500 text-lg font-bold">外観・周辺</legend>

                                        {{-- 外観写真 --}}
                                        <fieldset class="p-4 border-solid border-2 border-gray-200">
                                            <legend class="p-3 text-left border-slate-500 text-lg font-bold">外観写真</legend>

                                            <div class="w-full text-left mb-4 font-bold">
                                                外観写真1
                                            </div>

                                            <div class="w-full flex mx-2 mb-8 p-2">
                                                <div class="w-1/6">
                                                    @if (!empty($shop->photo_file1))
                                                        <img src="{{ asset('storage/shops/' . $shop->photo_file1) }}">
                                                    @else
                                                        <img src="{{ asset('images/profile_image.png') }}">
                                                    @endif
                                                </div>

                                                <div class="w-5/6 m-2 p-2">
                                                    <div class="pb-6">
                                                        <input type="file" id="photo_file1" name="photo_file1" accept=“image/png,image/jpeg,image/jpg” onchange="previewImage(this);" class="w-2/3 p-2  bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">    
                                                        <button type="button" onclick="clearImageFile();">画像削除</button>
                                                    </div>
                                                    <div class="w-full flex mb-6">
                                                        <div class="w-28 py-2 mr-2 text-right">カテゴリ</div>
                                                        <div class="w-[calc(100%-6rem)] mr-4">
                                                            <input type="text" id="photo_category1" name="photo_category2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        </div>
                                                    </div>
                                                    <div class="w-full flex">
                                                        <div class="w-28 py-2 mr-2 text-right">写真コメント</div>
                                                        <div class="w-[calc(100%-6rem)] mr-4">
                                                            <input type="text" id="photo_category1" name="photo_category2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="w-full text-left mb-4 font-bold">
                                                外観写真2
                                            </div>

                                            <div class="w-full flex mx-2 mb-8 p-2">
                                                <div class="w-1/6">
                                                    @if (!empty($shop->photo_file1))
                                                        <img src="{{ asset('storage/shops/' . $shop->photo_file1) }}">
                                                    @else
                                                        <img src="{{ asset('images/profile_image.png') }}">
                                                    @endif
                                                </div>

                                                <div class="w-5/6 m-2 p-2">
                                                    <div class="pb-6">
                                                        <input type="file" id="photo_file2" name="photo_file2" accept=“image/png,image/jpeg,image/jpg” onchange="previewImage(this);" class="w-2/3 p-2  bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">    
                                                    </div>
                                                    <div class="w-full flex mb-6">
                                                        <div class="w-28 py-2 mr-2 text-right">カテゴリ</div>
                                                        <div class="w-[calc(100%-6rem)] mr-4">
                                                            <input type="text" id="photo_category1" name="photo_category2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        </div>
                                                    </div>
                                                    <div class="w-full flex">
                                                        <div class="w-28 py-2 mr-2 text-right">写真コメント</div>
                                                        <div class="w-[calc(100%-6rem)] mr-4">
                                                            <input type="text" id="photo_category1" name="photo_category2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w-full text-left mb-4 font-bold">
                                                外観写真3
                                            </div>

                                            <div class="w-full flex mx-2 mb-8 p-2">
                                                <div class="w-1/6">
                                                    @if (!empty($shop->photo_file1))
                                                        <img src="{{ asset('storage/shops/' . $shop->photo_file1) }}">
                                                    @else
                                                        <img src="{{ asset('images/profile_image.png') }}">
                                                    @endif
                                                </div>

                                                <div class="w-5/6 m-2 p-2">
                                                    <div class="pb-6">
                                                        <input type="file" id="photo_file3" name="photo_file3" accept=“image/png,image/jpeg,image/jpg” onchange="previewImage(this);" class="w-2/3 p-2  bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">    
                                                    </div>
                                                    <div class="w-full flex mb-6">
                                                        <div class="w-28 py-2 mr-2 text-right">カテゴリ</div>
                                                        <div class="w-[calc(100%-6rem)] mr-4">
                                                            <input type="text" id="photo_category1" name="photo_category2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        </div>
                                                    </div>
                                                    <div class="w-full flex">
                                                        <div class="w-28 py-2 mr-2 text-right">写真コメント</div>
                                                        <div class="w-[calc(100%-6rem)] mr-4">
                                                            <input type="text" id="photo_category1" name="photo_category2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w-full text-left mb-4 font-bold">
                                                外観写真4
                                            </div>

                                            <div class="w-full flex mx-2 mb-4 p-2">
                                                <div class="w-1/6">
                                                    @if (!empty($shop->photo_file1))
                                                        <img src="{{ asset('storage/shops/' . $shop->photo_file1) }}">
                                                    @else
                                                        <img src="{{ asset('images/profile_image.png') }}">
                                                    @endif
                                                </div>

                                                <div class="w-5/6 m-2 p-2">
                                                    <div class="pb-6">
                                                        <input type="file" id="photo_file4" name="photo_file4" accept=“image/png,image/jpeg,image/jpg” onchange="previewImage(this);" class="w-2/3 p-2  bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">    
                                                    </div>
                                                    <div class="w-full flex mb-6">
                                                        <div class="w-28 py-2 mr-2 text-right">カテゴリ</div>
                                                        <div class="w-[calc(100%-6rem)] mr-4">
                                                            <input type="text" id="photo_category1" name="photo_category2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        </div>
                                                    </div>
                                                    <div class="w-full flex">
                                                        <div class="w-28 py-2 mr-2 text-right">写真コメント</div>
                                                        <div class="w-[calc(100%-6rem)] mr-4">
                                                            <input type="text" id="photo_category1" name="photo_category2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w-full text-left mb-4 font-bold">
                                                外観写真5
                                            </div>

                                            <div class="w-full flex mx-2 mb-4 p-2">
                                                <div class="w-1/6">
                                                    @if (!empty($shop->photo_file1))
                                                        <img src="{{ asset('storage/shops/' . $shop->photo_file1) }}">
                                                    @else
                                                        <img src="{{ asset('images/profile_image.png') }}">
                                                    @endif
                                                </div>

                                                <div class="w-5/6 m-2 p-2">
                                                    <div class="pb-6">
                                                        <input type="file" id="photo_file4" name="photo_file4" accept=“image/png,image/jpeg,image/jpg” onchange="previewImage(this);" class="w-2/3 p-2  bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">    
                                                    </div>
                                                    <div class="w-full flex mb-6">
                                                        <div class="w-28 py-2 mr-2 text-right">カテゴリ</div>
                                                        <div class="w-[calc(100%-6rem)] mr-4">
                                                            <input type="text" id="photo_category1" name="photo_category2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        </div>
                                                    </div>
                                                    <div class="w-full flex">
                                                        <div class="w-28 py-2 mr-2 text-right">写真コメント</div>
                                                        <div class="w-[calc(100%-6rem)] mr-4">
                                                            <input type="text" id="photo_category1" name="photo_category2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--
                                            <!-- テスト -->
                                            <div class="change-image-wrap">
                                                <input type="file" name="image" class="input-image js-droparea">
                                                <img src="" class="drop-image js-show-image" alt="jsから来た画像">
                                                <img src="{{ $image_url ?? asset('images/profile_image.png') }}" alt="プロフィール画像" class="show-db-image">
                                            </div>
                                            <input type="submit" value="保存">

                                            <!-- テスト -->
                                            <div class="change-image-wrap">
                                                <input type="file" name="image" class="input-image js-droparea">
                                                <img src="" class="drop-image js-show-image" alt="jsから来た画像">
                                                <img src="{{ $image_url ?? asset('images/profile_image.png') }}" alt="プロフィール画像" class="show-db-image">
                                            </div>
                                            <input type="submit" value="保存">

                                            <!-- テスト -->
                                            <div class="change-image-wrap">
                                                <input type="file" name="image" class="input-image js-droparea">
                                                <img src="" class="drop-image js-show-image" alt="jsから来た画像">
                                                <img src="{{ $image_url ?? asset('images/profile_image.png') }}" alt="プロフィール画像" class="show-db-image">
                                            </div>
                                            <input type="submit" value="保存"> --}}

                                            
                                        </fieldset>

                                    </fieldset>


                                </fieldset>

                                <div class="w-full flex mx-2 mb-4 p-2 justify-around">
                                    <div class="w-32">
                                        <input type="reset" class="w-full mx-auto mt-16 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg" value="取消"></input>
                                    </div>
                                    <div class="w-32">
                                        <button class="w-full mx-auto mt-16 text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg text-center">登録</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
