$(function () {
    var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
    ];
    $("#tags").autocomplete({
        source: availableTags,
    })
});

$(document).ready(function () {
    $("#search-button").click(function () {
        $("#tags").toggle("fade");
    });
});
$(document).ready(function () {
    $("#user-img-id").click(function () {
        $(".user-menu").toggle("size");
    });
});

$(document).ready(function () {
    $('.aside-main-container').click(function () {
        $('.aside-full-container').toggle("slide");
    });
});

$(document).ready(function () {
    $('.aside-main-container2').click(function () {
        $('.aside-full-container').toggle("slide");
    });
});

$(document).ready(function () {
    $('input[type="checkbox"]').click(function () {
        if ($(this).prop("checked") == false) {
            $('.toggle-off-div').toggle("fade");
        }

    });
});

$(document).ready(function () {
    $('input[type="checkbox"]').click(function () {
        if ($(this).prop("checked") == true) {
            $('.online-contacts-div').toggle("fade");
        }
    });
});
