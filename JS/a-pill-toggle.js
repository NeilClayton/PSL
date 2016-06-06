$(function () {
    $('#repairsalterations a').click(function (e) {
        e.preventDefault();
        $('a[href="' + $(this).attr('href') + '"]').tab('show');
    })
});