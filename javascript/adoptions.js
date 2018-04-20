//on mundeson te perdoren me shume funksione per nje element te caktuar 
$(document).ready(function () {
    //nderrimi i background-color te pet-title
    $(".pet-title").on({
        mouseenter: function () {
            $(this).css("background-color", "#dcafaf");
            $(this).css("width", "200px");
            $(this).css("margin", "auto");
            $(this).css("border-radius", "8px");
        },
        mouseleave: function () {
            $(this).css("background-color", "#8aa2a5");
            $(this).css("width", "200px");
            $(this).css("margin", "auto");
            $(this).css("border-radius", "8px");
        },
        click: function () {
            $(this).css("background-color", "lightgray")
            $(this).css("width", "200px");
            $(this).css("margin", "auto");
            $(this).css("border-radius", "8px");
        }
    });
    //nderrimi i background-color te adoptions-title
    $(".adoptions-title").on({
        mouseenter: function () {
            $(this).css("background-color", "#dcafaf");
            $(this).css("width", "350px");
            $(this).css("margin", "auto");
            $(this).css("border-radius", "8px");
        },
        mouseleave: function () {
            $(this).css("background-color", "#8aa2a5");
            $(this).css("width", "350px");
            $(this).css("margin", "auto");
            $(this).css("border-radius", "8px");
        },
        click: function () {
            $(this).css("background-color", "lightgray")
            $(this).css("width", "350px");
            $(this).css("margin", "auto");
            $(this).css("border-radius", "8px");
        }
    });
    //funksionet show() dhe hide()
    $("#hide").click(function () {
        $("#fundi").hide("slow", function () {
            alert("The information is now hidden");
        });
    });
    $("#show").click(function () {
        $("#fundi").show("slow");
    });

    //fadeToggle
    $("#arrow").click(function () {
        $("#sponsor").fadeToggle("slow");
        $("#p-donate").fadeToggle("slow");
        $("#volunteer").fadeToggle("slow");
    });

});
