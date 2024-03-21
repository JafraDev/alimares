$(document).ready(function(){
    dialog = $( "#dialog-form" ).dialog({
        autoOpen: false,
        height: 600,
        width: 1300,
        modal: true, 
        close: function(){ window.location.reload();}
            
    });
    editOc = (id)=>{
        $( "#dialog-form" ).load("./Pages/OcUpd.php?id="+id)
            dialog.dialog( "open" );
    }
    addOc = ()=>{
        $( "#dialog-form" ).load("./Pages/AddOc.php")
        dialog.dialog( "open" );
    }
})
