$(document).ready(function() {
    $( ".champ" ).draggable({
        helper: "clone",
        revert: "invalid",
        zIndex: 100,
        opacity: "dragOpacity",
        cursor: "pointer"
    }).css({
        'top': -3,
        'left': -1
    });

    $( ".spot" ).droppable({
        accept: ".champ",
        greedy: true,
        drop: function( event, ui ) {

            if($(this).children().length > 0){
                $(this).children().remove();
                calculateComp();
            }

            if($(ui.draggable).parent().is('#champions')){
                ui.draggable.clone().appendTo($(this)).draggable({
                    containment: "#composition",
                    revert: "invalid",
                    zIndex: 100,
                    opacity: "dragOpacity",
                    cursor: "pointer"
                }).css({
                    'top': -3,
                    'left': -1,
                    'zIndex': 75
                });
                calculateComp();
            }else{
                ui.draggable.clone().appendTo($(this)).draggable({
                    containment: "#composition",
                    revert: "invalid",
                    zIndex: 100,
                    opacity: "dragOpacity",
                    cursor: "pointer"
                }).css({
                    'top': -3,
                    'left': -1,
                    'zIndex': 75
                });

                $(ui.draggable).remove();
                calculateComp();
            }

        }
    });

    $( "#composition").droppable({
        accept: ".champ",
        drop : function( event, ui ) {
            if(!$(ui.draggable).parent().is('#champions')){
                $(ui.draggable).draggable("destroy").remove();
                calculateComp();
            }
        }
    });

    $('#clear').click(function(){
        $(".group .champ").each(function(){ $(this).remove() });
        calculateComp();
    });
});

function calculateComp()
{
    let group = [];
    $(".group .champ").each(function(){
        let champ = {'champ': $(this).data('champ'), 'spec': $(this).data('spec')};
        group.push(champ);
    });

    $.ajax({
        method: "POST",
        url: "Endpoint.php",
        data: { type: "calculateComp", comp: group }
    }).done(function( data ) {
        let info = JSON.parse(data);

        $.each(info.buffs, function(key, value){
            appendData(key, value, true);
        });

        $.each(info.counts, function(key, value){
            appendData(key, value, false);
        });

        $.each(info.setup, function(key, value){
            appendData(key, value, false);
        });

    });
}

function appendData(id, number, color)
{
    console.log(id);
    let spanEl = $('#'+id);
    if(color){
        if(number > 0){
            spanEl.parent().css({'color': 'green'})
        }else{
            spanEl.parent().css({'color': '#7e7e7e'})
        }
    }
    spanEl.html(number);
}