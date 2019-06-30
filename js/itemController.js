$("#btnAddItem").click(function () {

    var customerData = $("#itemForm").serializeArray();
    $.ajax(
        {
            url: "addItem.php",
            method: "POST",
            async : true,
            data: customerData
        }
    ).done(function (res) {
        alert(res)
    })
});


$("#btnUpdateItem").click(function () {

    var customerData1 = $("#ItemForm").serializeArray();
    $.ajax(
        {
            url: "updateItem.php",
            method: "POST",
            async : true,
            data: customerData1
        }
    ).done(function (res) {
        alert(res)
    })
});
