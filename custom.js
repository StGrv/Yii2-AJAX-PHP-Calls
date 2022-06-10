function removeShopDelivery(id) {
    $.ajax({
        url: '/ajax/removeshopdelivery',
        method: "POST",
        data: {id: id},
        success: function (data) {
            let result = JSON.parse(data);
            if (result['message']) {
                alert(result['message']);
            }
        }
    });
}
