$(document).ready(function(e) {
    $("#expense_processing").on("click", function (e) {
        expense_status('processing', e);
    });

    $("#expense_closed").on("click", function (e) {
        expense_status('closed', e);
    });

    $("#expense_open").on("click", function (e) {
        expense_status('open', e);
    });

    $("#expense_user_list").change(function (e) {
        change_expense_list(e);
    });

    $("#expense_accountTitle_list").change(function (e) {
        change_expense_list(e);
    });

    function change_expense_list(e) {
        $("#expense_status").val('');
        $("#expense_form").submit();
    }

    function expense_status(status, e) {
        e.preventDefault();

        var message = { processing: '精算中に変更します。Excel出力ができるようになります。よろしいですか？',
                        closed:     '一括精算します。よろしいですか？',
                        open:       '精算を却下します。よろしいですか？'};

        if(window.confirm(message[status])) {
            $("#expense_status").val(status);
            $("#expense_form").submit();
        }
    }

});
