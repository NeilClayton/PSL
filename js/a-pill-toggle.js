$(function () {
    $('.tab-content a').click(function (e) {
        e.preventDefault();
        $('a[href="' + $(this).attr('href') + '"]').tab('show');
    })
});

function activaTab(tab){
    $('.nav-pills a[href="#' + tab + '"]').tab('show');
}
function cleanTab() {
    activaTab('clean');
}
function repairsTab() {
    activaTab('repairs');
}
function installationTab() {
    activaTab('installations');
}
function restTab() {
    activaTab('restoration');
}