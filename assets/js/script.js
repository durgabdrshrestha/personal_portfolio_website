//insert this in your jquery
//control the resizing of menu and go down the content in the correct position

$("#navMenu").resize(function () {
    $('#godown').height($("#navMenu").height() + 10);
});

if ($("#navMenu").height() > $('#godown').height()) $('#godown').height($("#navMenu").height() + 10);
