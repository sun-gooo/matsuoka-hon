/**
 * パスワード用テキストボックスの制御
 */
const txtPasswordEnable = function() {
    // alert(document.getElementById('chk_password').checked);
    if (document.getElementById('chk_password').checked){
        document.getElementById('password').disabled= false;
        document.getElementById('password_confirmation').disabled= false;
    } else {
        document.getElementById('password').disabled= true;
        document.getElementById('password_confirmation').disabled= true;
    }
}

/**
 * 削除時にチェックを行う
 */
const deletePost = function(e) {
    'use strict';
    if (confirm('本当に削除してもよろしいですか?')) { document.getElementById('delete_' + e.dataset.id).submit(); }
}

/**
 * クエリ文字列有無の判別
 */
const judgmentQuery = function() {
    var url = location.href;

    //建物管理の初期表示時は、検索結果を非表示にする
    //建物管理初期表示時は、クエリ文字は空
    if (url.match('buildings') !== null) {
        var param = location.search;

        if (param.length > 0) {
            $('#search_result').removeClass('hidden');
        }
    }
}
window.addEventListener('DOMContentLoaded', judgmentQuery());


/**
 * カンマ編集を行う
 */
let toComma = function(obj){
    if((obj.value).trim().length != 0 && !isNaN(obj.value)){
      obj.value = Number(obj.value).toLocaleString();
    }
}
   
/**
 * カンマ編集を解除する
 */
let offComma = function(obj){
    var reg = new RegExp(",", "g");
    var chgVal = obj.value.replace(reg, "");
    if(!isNaN(chgVal)){
        obj.value = chgVal;  //値セット
        obj.select();        //全選択
    }
}


/**
 * イメージファイルをクリアする
 */
let clearImageFile = function(e) {
    'use strict';
    let obj = document.getElementById('photo_file' + e.dataset.id);
    obj.value = "";
}


// $(function(){
    //drag&dropするエリアのドム
    var $dropArea = $('.js-droparea');
    //prev画面のドム
    var $inputFile = $('.js-show-image');

    $dropArea.on('dragover', function(e) {
        //余計なイベントをキャンセルする
        e.stopPropagation();
        e.preventDefault();
        $(this).css('border', '3px #ccc dashed');
    });
    $dropArea.on('dragleave', function(e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).css('border', 'none');
    });

    //画像情報が入って(changeしたら)きたら
    $dropArea.on('change', function(e) {
        $(this).css('border', 'none');
        //　files配列にファイルが入っています
        //　ファイル情報を取得
        var file = this.files[0],
        //　ファイルを読み込むFileReaderオブジェクトを変数に
        fileReader = new FileReader();

        //　読み込みが完了した際のイベントハンドラ。imgのsrcにデータをセット
        //　fileReaderの読み込みが完了した時のイベント
        fileReader.onload = function(event) {
        //　読み込んだデータをimgに設定
        //　最初非表示になってるimgを表示
            $inputFile.attr('src', event.target.result).show();

        };

        //  画像ファイル自体をデータURLとして読み込んでいる（画像のsrcへ挿入）
        fileReader.readAsDataURL(file);
    });
// })




/**
 * 
 * その２
 * 
*/
// // $(function(){
//     // ドラッグしたままエリアに乗った＆外れたとき
//     $(document).on('dragover', '#file_drag_drop_area, #file_drag_drop_area_stl', function (event) {
//         event.preventDefault();
//         $(this).css("background-color", "#999999");
//     });
//     $(document).on('dragleave', '#file_drag_drop_area, #file_drag_drop_area_stl', function (event) {
//         event.preventDefault();
//         $(this).css("background-color", "transparent");
//     });

//     // ドラッグした時
//     $(document).on('drop', '#file_drag_drop_area', function (event) {
//         let org_e = event;
//         if (event.originalEvent) {
//             org_e = event.originalEvent;
//         }

//         org_e.preventDefault();
//         file_input.files = org_e.dataTransfer.files;
//         $(this).css("background-color", "transparent");
//     });                                                                                                                                                                        
// //   });