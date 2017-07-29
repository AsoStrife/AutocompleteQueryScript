$(document).ready(function() {

    // The keyup event is sent to an element when the user releases a key on the keyboard
    $("#cityText").keyup(function () {
        $.ajax({
            type: "POST",
            url: "/welcome/getCity",
            data: {
                keyword: $("#cityText").val()
            },
            dataType: "json",
            success: function (data) {

                if (data.length > 0) {
                    $('#dropdownCity').empty();
                    $('#cityText').attr("data-toggle", "dropdown");
                    $('#dropdownCity').dropdown('toggle');
                }
                else if (data.length == 0) {
                    $('#cityText').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0){
                        $('#dropdownCity').append('<li role="presentation" ><a role="menuitem dropdownnameli" data-id="' + value['id'] +' "style="cursor: pointer;" class="dropdownlivalue">'+ value['city'] + '</a></li>');
                        
                    }

                });
            }
        });
    });

    $('ul#dropdownCity').on('click', 'li a', function () {
        $('#cityText').val($(this).text());
        $('#hiddenCity').val($(this).attr("data-id"));

        // DEBUG, display value on screen 
        $('#tableCityID').html( $(this).attr("data-id") );
        $('#tableCityName').html($(this).text());

        
    });


});