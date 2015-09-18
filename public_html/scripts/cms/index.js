$(function () {

    $('.button-add-page-save').click(function () {
        if ($('#content_title').val() == '') {
            alert('Podaj nazwę tworzonej strony!');
            return false;
        }
        return true;
    });

    $('.button-edit-page-save').click(function () {
        if ($('#content_title').val() == '') {
            alert('Podaj nazwę tworzonej strony!');
            return false;
        }
        return true;
    });

    $(".sortable").sortable({
        placeholder: "ui-state-highlight",
        update: function () {
            var order = $('.sortable').sortable('serialize');
            $.ajax({
                url: "/cms,index,sort.html",
                data: order,
                async: false,
                success: function (data) {
                    $('#showmsg').html(data);
                }
            });
        }
    });

    $('.sortable').disableSelection();

    $('.accordion').accordion({
        active: false,
        collapsible: true,
        autoHeight: false,
        header: "> div > h3"
    }).sortable({
        axis: "y",
        handle: "h3",
        placeholder: "ui-state-highlight",
        update: function () {
            var order = $('.accordion').sortable('serialize');
            $.ajax({
                url: "/cms,index,sort.html",
                data: order,
                async: false,
                success: function (data) {
                    $('#showmsg').html(data);

                }
            });
        },
        stop: function (event, ui) {
            // IE doesn't register the blur when sorting
            // so trigger focusout handlers to remove .ui-state-focus
            ui.item.children("h3").triggerHandler("focusout");
            $('.accordion').accordion({active: false})
        }
    });
    
    $("#_start").datepicker($.datepicker.regional[ "pl" ]);
	$("#_end").datepicker($.datepicker.regional[ "pl" ]);
});