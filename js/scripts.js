/**
 * Created by sirius on 30.05.2016.
 */
$(function() {
    $("#startgame").click(function( event ) {
        // event.preventDefault();
        document.location.href =  $('#baseUrl').val() + '/play';
    });

    $("#resulttbl").click(function( event ) {
        // event.preventDefault();
        $("#startresultsview" ).show();
        $("#starttext" ).hide();
    });

    // Диалог при выигрыше
    if ( $("#dialog").attr('data-result') == "win" ) {

        $("#dialog" ).dialog({
            modal: true,
            width: 800,
            buttons: {
                "Да!": function () {
                    $.ajax({
                        'url': $('#baseUrl').val() + '/site/ajaxSaveResult',
                        'type': 'post',
                        'data': 'name=' + $('#username').val() + '&time=' + $('#usertime').val(),
                        'success': function(data){
                            document.location.href = '?action=newGame';
                        },
                        'error': function(request, status, error){
                            $('#resultsview').html('ajax: server error: ' + error);
                        }
                    });
                },
                "Не сохраянять": function () {
                    $(this).dialog("close");
                    document.location.href = '?action=newGame';
                }
            },
            close: function( event, ui ) {
                document.location.href = '?action=newGame';
            }
        });
    }
    else if ( $("#dialog").attr('data-result') == "loose" ) {

        // Диалог при пригрыше
        $("#dialog" ).dialog({
            modal: true,
            width: 800,
            buttons: {
                "Закрыть": function () {
                    $(this).dialog("close");
                    document.location.href = '?action=newGame';
                }
            },
            close: function( event, ui ) {
            document.location.href = '?action=newGame';
        }
        });

    }

});