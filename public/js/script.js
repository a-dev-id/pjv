$(function () {
    if (window.pageYOffset == 0) {
        $(".navbar").addClass("grow-menu");
    }
    $(window).scroll(function () {
        var top_offset = $(window).scrollTop();
        if (top_offset == 0) {
            $(".navbar").addClass(
                "grow-menu navbar-dark bg-dark bg-opacity-50"
            );
            $(".navbar").removeClass("navbar-light bg-white");
            $(".nav-link").addClass("text-white");
            $(".nav-link").removeClass("text-dark");
        } else {
            $(".navbar").removeClass(
                "grow-menu navbar-dark bg-dark bg-opacity-50"
            );
            $(".navbar").addClass("navbar-light bg-white");
            $(".nav-link").removeClass("text-white");
            $(".nav-link").addClass("text-dark");
        }
    });

    if (window.pageYOffset <= 800) {
        $("header").addClass("top-menu");
    }
    $(window).scroll(function () {
        var top_offset = $(window).scrollTop();
        if (top_offset <= 800) {
            $("header").addClass("top-menu");
        } else {
            $("header").removeClass("top-menu");
        }
    });
    if (window.pageYOffset <= 800) {
        $(".special-offers-link").removeClass("top");
    }
    $(window).scroll(function () {
        var top_offset = $(window).scrollTop();
        if (top_offset <= 800) {
            $(".special-offers-link").removeClass("top");
        } else {
            $(".special-offers-link").addClass("top");
        }
    });
});
setInterval(function () {
    $(".opacity-0").toggleClass("opacity-100");
}, 5000);

$("#reserveddate_enquiry").datepicker({
    format: "dd-mm-yyyy",
    startDate: "04-11-2022",
    autoclose: true,
});
$("#fromDate").datepicker({
    format: "dd-mm-yyyy",
    startDate: "04-11-2022",
    autoclose: true,
});
$("#toDate").datepicker({
    format: "dd-mm-yyyy",
    startDate: "05-11-2022",
    autoclose: true,
});
$("#fromDate, #toDate").change(function (e) {
    let str = $(this).val();
    let res = str.split("-");
    $(this)
        .closest(".col")
        .find(".datepicker-input")
        .val(res[2] + "-" + res[1] + "-" + res[0]);
});
$("#fromDate").change(function (e) {
    let str = $(this).val();
    let res = str.split("-");
    let dat = res[2] + "-" + res[1] + "-" + res[0];
    let date = new Date(dat);
    date.setDate(date.getDate() + 1);

    let dd =
        date.getDate() < 10 ? "0" + date.getDate().toString() : date.getDate();
    let mm =
        date.getMonth() < 10
            ? "0" + (date.getMonth() + 1).toString()
            : date.getMonth();
    let y = date.getFullYear();

    $("#toDate").val(dd + "-" + mm + "-" + y);
    $("#toDate")
        .closest(".col")
        .find(".datepicker-input")
        .val(y + "-" + mm + "-" + dd);

    $("#toDate").datepicker("destroy");
    $("#toDate").datepicker({
        format: "dd-mm-yyyy",
        startDate: dd + "-" + mm + "-" + y,
        autoclose: true,
    });
});
