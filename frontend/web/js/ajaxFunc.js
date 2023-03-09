$(document).ready (function () {
    $("select[name=departure]").bind("change", function () {
        $("select[name='arrival']").empty();
        $.get(
            "sity", {departure: $("select[name='departure']").val()},function(data){
                data = JSON.parse(data);

                for (var id in data) {
                    $("select[name='arrival']").append($("<option value='"+ id +
                        "'>"+data[id]+"</option>"));
                }
            });
    });
});

$('#btn').on('click', function() {
    $.ajax({
            url: '/',
            data: {
                departure: $("#departure").val(),
                arrival: $("#arrival").val(),
                weight: $("#weight").val(),
            },
            type:'POST',
            beforeSend: function(){
                $("#result_calculate").text("Ожидание данных....");
                setTimeout(() => {  $("#result_calculate").text(" "); }, 2000);
                // $("#information").text("Результат");
            },
            success: function(res) {
                // console.log(res);
                $("#result_calculate").html(res);
            },
            error: function() {
                alert('Error!');
            }
        }
    );
});
$('body').on('input', '.input-range', function(){
    var value = this.value.replace(/[^0-9]/g, '');
    if (value < $(this).data('min')) {
        this.value = $(this).data('min');
    } else if (value > $(this).data('max')) {
        this.value = $(this).data('max');
    } else {
        this.value = value;
    }
});