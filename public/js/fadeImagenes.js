var images = ["Casa1.jpg", "Depto1.jpg", "Terreno1.jpg"];
    $(function () {
        var i = 0;
        $("#dvImage").css("background-image", "url({{URL::asset('img/"+images[i]+"')}}");
        setInterval(function () {
            i++;
            if (i == images.length) {
                i = 0;
            }
            $("#dvImage").fadeOut("slow", function () {
                $(this).css("background-image", "url({{URL::asset('img/"+images[i]+"')}}");
                $(this).fadeIn("slow");
            });
        }, 1000);
    });