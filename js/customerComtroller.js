$("#btnRegister").click(function () {

    var customerData = $("#customerForm").serializeArray();
    $.ajax(
        {
            url: "addCustomer.php",
            method: "POST",
            async : true,
            data: customerData
        }
    ).done(function (res) {
        alert(res)
    })
});


$("#btnUpdate").click(function () {

    var customerData1 = $("#customerForm").serializeArray();
    $.ajax(
        {
            url: "updateCustomer.php",
            method: "POST",
            async : true,
            data: customerData1
        }
    ).done(function (res) {
        alert(res)
    })
});
