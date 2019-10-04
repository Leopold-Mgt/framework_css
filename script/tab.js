$(document).ready(function () {
    $('.tab-pane-1').click(function () {
            $('.tab-content-1').css("display", "flex");
            $('.tab-content-2').css("display", "none");
            $('.tab-content-3').css("display", "none");
            $('.tab-pane-1').removeClass('btn-light-active').addClass('btn-light');
            $('.tab-pane-2').removeClass('btn-light').addClass('btn-light-active');
            $('.tab-pane-3').removeClass('btn-light').addClass('btn-light-active');
        }
    );
    $('.tab-pane-2').click(function () {
            $('.tab-content-1').css("display", "none");
            $('.tab-content-2').css("display", "flex");
            $('.tab-content-3').css("display", "none");
            $('.tab-pane-1').removeClass('btn-light').addClass('btn-light-active');
            $('.tab-pane-2').removeClass('btn-light-active').addClass('btn-light');
            $('.tab-pane-3').removeClass('btn-light').addClass('btn-light-active');
        }
    );
    $('.tab-pane-3').click(function () {
            $('.tab-content-1').css("display", "none");
            $('.tab-content-2').css("display", "none");
            $('.tab-content-3').css("display", "flex");
            $('.tab-pane-1').removeClass('btn-light').addClass('btn-light-active');
            $('.tab-pane-2').removeClass('btn-light').addClass('btn-light-active');
            $('.tab-pane-3').removeClass('btn-light-active').addClass('btn-light');
        }
    );
    $('.tab-pane-31').click(function () {
            $('.tab-content-31').css("display", "flex");
            $('.tab-content-32').css("display", "none");
            $('.tab-content-33').css("display", "none");
            $('.tab-pane-31').removeClass('btn-light-active').addClass('btn-light');
            $('.tab-pane-32').removeClass('btn-light').addClass('btn-light-active');
            $('.tab-pane-33').removeClass('btn-light').addClass('btn-light-active');
        }
    );
    $('.tab-pane-32').click(function () {
            $('.tab-content-31').css("display", "none");
            $('.tab-content-32').css("display", "flex");
            $('.tab-content-33').css("display", "none");
            $('.tab-pane-31').removeClass('btn-light').addClass('btn-light-active');
            $('.tab-pane-32').removeClass('btn-light-active').addClass('btn-light');
            $('.tab-pane-33').removeClass('btn-light').addClass('btn-light-active');
        }
    );
    $('.tab-pane-33').click(function () {
            $('.tab-content-31').css("display", "none");
            $('.tab-content-32').css("display", "none");
            $('.tab-content-33').css("display", "flex");
            $('.tab-pane-31').removeClass('btn-light').addClass('btn-light-active');
            $('.tab-pane-32').removeClass('btn-light').addClass('btn-light-active');
            $('.tab-pane-33').removeClass('btn-light-active').addClass('btn-light');
        }
    );
});