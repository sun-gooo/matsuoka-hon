<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            キャンペーン
        </h2>
    </x-slot>

    {{-- 店舗に関するもの、キャンペーン等に関するものはこの画面で管理する --}}


    <div class="py-12">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-12 mx-auto">
                            <div class="flex flex-col text-center w-full mb-6">
                                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">キャンペーン</h1>
                            </div>
                            <x-flash-message status="session('status')" />

                            <form action="{{ route('shops.store') }}" method="post">
                                @csrf

                                @foreach ($promotions as $promotion)
                                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                    <div class="flex flex-wrap -m-2">
                                        {{-- <div class="p-2">
                                            <label class="leading-7 text-gray-600 text-right">{{ $promotion->promotion_name }}</label>
                                        </div> --}}
                                        <div class=" p-2 ">
                                            <div class="relative">
                                                <input type="checkbox" id="chk_{{ $promotion->id }}" name="chk_{{ $promotion->id }}" class="mr-2" @if($promotion->visible_flg) checked @endif>
                                                <label for="chk_{{ $promotion->id }}" class="leading-7 text-gray-600">{{ $promotion->promotion_name }}をトップページに表示する</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="flex justify-center p-2 w-full mt-4">
                                    <button type="reset" class="flex mx-auto text-white bg-linkbtn border-0 py-2 px-8 focus:outline-none hover:bg-linkbtn-light rounded text-lg">取消</button>
                                    <button type="submit" class="flex mx-auto text-white bg-linkbtn border-0 py-2 px-8 focus:outline-none hover:bg-linkbtn-light rounded text-lg">登録</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
