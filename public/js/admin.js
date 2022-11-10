function txtPasswordEnable() {
    // alert(document.getElementById('chk_password').checked);
    if (document.getElementById('chk_password').checked){
        document.getElementById('password').disabled= false;
        document.getElementById('password_confirmation').disabled= false;
    } else {
        document.getElementById('password').disabled= true;
        document.getElementById('password_confirmation').disabled= true;
    }
}

function deletePost(e) {
    'use strict';
    if (confirm('本当に削除してもよろしいですか?')) { document.getElementById('delete_' + e.dataset.id).submit(); }
}
