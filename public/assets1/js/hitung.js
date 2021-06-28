$(".hitung").keyup(function () {
    var total = parseInt($("#total_kotor").val())
    var potongan = parseInt($("#potongan").val())

    var bersih = total - potongan;
    $("#total").attr("value", bersih)
})

;
