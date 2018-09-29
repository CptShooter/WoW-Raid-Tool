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

            }

        }
    });

    $( "#composition").droppable({
        accept: ".champ",
        drop : function( event, ui ) {
            if(!$(ui.draggable).parent().is('#champions')){
                $(ui.draggable).draggable("destroy").remove();
            }
        }
    });

    $('#clear').click(function(){
        //$(".group .champ").each(function(){ $(this).remove() });
        calculateComp();
    });
});

function calculateComp()
{
    var group = [];
    $(".group .champ").each(function(){
        group.push($(this).data('class'));
    });

    
    console.log(group);
}