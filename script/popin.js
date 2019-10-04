$(document).ready(function () {
    $('#popin-btn-open').click(function () {
            $('.pop-box').css("display", "block");
            $('.pop-background').css("display", "block");
        }
    );
    $('#popin-btn-close').click(function () {
            $('.pop-box').css("display", "none");
            $('.pop-background').css("display", "none");
        }
    );
    $('#popin-btn-ok').click(function () {
            $('.pop-box').css("display", "none");
            $('.pop-background').css("display", "none");
        }
    );
    $(document).keydown(function () {
            if (event.keyCode == 27) {
            $('.pop-box').css("display", "none");
            $('.pop-background').css("display", "none");
            }
        }
    );
    $('.pop-background').click(function () {
            $('.pop-box').css("display", "none");
            $('.pop-background').css("display", "none");
        }
    );
});