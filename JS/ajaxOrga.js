$.support.cors=true;
$(document).ready(function(){
    $("#organigramme").click(function(){
        $.ajax({
            type: "GET",
            url: "PHP/organigramme.php",
            datatype: "html",
            error: function(error){alert("erreur de téléchargement du fichier PHP");},
            success: function(data){
                /*alert('Data : ' + $(""));*/
                $("#ajaxContent").html(data);
                $("#dismiss").click(function(){
                    $("#ajaxContent").empty();
                }
                );
            }
        })
    })
}
);