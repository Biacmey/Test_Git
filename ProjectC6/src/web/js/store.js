$(function () {
    document.getElementById("total").innerHTML = "共" + (0 * 299) + "元";

    $(".add-plus-input .add").click(function () {
        var x = document.getElementById("see").value;
        var $num = $(this).next(".num");
        var number = $num.attr("value");
        if (number > 0) $num.attr("value", parseInt(number) - 1);
        var $num = $(this).next(".num");
        var number = $num.attr("value");
        var count = number;
        if (x == 1 || x == 2) {
            document.getElementById("total").innerHTML = "共" + (count * 299) + "元";
        }



    });
    $(".add-plus-input .plus").click(function () {
        var x = document.getElementById("see").value;
        var $num = $(this).prev(".num");
        var number = $num.attr("value");
        $num.attr("value", parseInt(number) + 1);
        var $num = $(this).prev(".num");
        var number = $num.attr("value");
        var count = number;
        if (x == 1 || x == 2) {
            document.getElementById("total").innerHTML = "共" + (count * 299) + "元";
        }


    });

    $(".add-plus-input .plus").click(function () {
        var x = document.getElementById("see").value;
        var $num = $(this).prev(".num");
        var number = $num.attr("value");
        var count = number;
        if (x == 1 || x == 2) {
            document.getElementById("total").innerHTML = "共" + (count * 299) + "元";
        }


    });
})
function select() {
    var x = document.getElementById("see").value;
    var y = document.getElementById("numm").value;
    if (x == 4) {
        document.getElementById("seex").innerHTML = "&nbsp&nbsp已經賣完囉";
        document.getElementById("total").innerHTML = "賣完了";
    }
    else if (x == 3) {
        document.getElementById("seex").innerHTML = "&nbsp&nbsp目前缺貨中";
        document.getElementById("total").innerHTML = "缺貨中";
    }
    else {
        document.getElementById("seex").innerHTML = " ";
        document.getElementById("total").innerHTML = "共" + (y * 299) + "元";
    }
}