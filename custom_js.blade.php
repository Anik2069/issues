<script>
    function addtoCart(element) {

        var product_id = $(element).attr("data-value");
        var quantity = $('#quantity' + product_id).val();

        var size = $('#sizeGuide' + product_id).val();
        var color = $(".image-xoxo-color").val();

        $.ajax({
            url: '/addtocart',
            data: {product_id: product_id, quantity: quantity, size: size, color: color},
            type: 'GET',
            success: function (data) {
                alert("Product is Added to Cart");
                $("#cart_data").html(data);
            }
        });
    }

    function loginModal() {
        $('#login').modal('hide');
    }

    function registrationModal() {
        $('#registration').modal('hide');
    }

    function showcart() {
        $.ajax({
            url: '/showcart',
            type: 'GET',
            success: function (data) {
                //alert("Product is Added to Cart");
                $("#cart_data").html(data);
            }
        });
    }

    function countCartData() {
        $.ajax({
            url: '/countCartData',
            type: 'GET',
            success: function (data) {
                $("#countCartItem").attr("data-cart-items", data);
            }
        });
    }

    function deleteCartItem(element) {
        var value = $(element).attr("data-id");
        $.ajax({
            url: '/deleteCartItem',
            type: 'GET',
            data: {value: value},
            success: function (data) {
                $("#cart_data").html(data);

            }
        });

    }

    function txidBox() {
        $("#txid").removeAttr("disabled");
    }

    function getProductInfo(value) {
        $.ajax({
            url: '/getProductInfo',
            data: {value: value},
            type: 'GET',
            success: function (data) {
                //$('#quick-view').modal("hide");
                //$(".modal-backdrop").remove();
                $("#modalshow").html(data);
                $('#quick-view').modal("show");
            }
        });
    }

    /* function btnSaveRegistration(){
         var formData = $("#registered_form").serialize();
         $("#registered_form").validate();
         $.ajax({
             url: '/customer_store',
             type: 'post',
             data: formData,
             success: function (data) {
                 alert("Successfully Registered !!!!");
                 location.reload();
             }
         });
     }*/
    function modalClose() {
        //  $('#quick-view').modal('hide');

    }

    function getMenu(element) {
        var data_type = $(element).attr("data-type");
        $.ajax({
            url: '/getNav',
            data: {data_type: data_type},
            type: 'GET',
            success: function (data) {
                $('#navTab').html(data);


            }
        });


    }

    function totalPriceCalculation(id, flag) {
        var quantity = $('#quantity' + id).val();
        var cart_id = $("#quantity" + id).attr("cart-id"); //product-price
        var p_price = $("#quantity" + id).attr("product-price");
        $.ajax({
            url: '/updateCartItem',
            data: {quantity: quantity, cart_id: cart_id, id: id, p_price: p_price, flag: flag},
            type: 'GET',
            dataType: "json",
            success: function (data) {
                //alert(data);
                $('#price' + cart_id).html(data.p_s_total);
                $('#sub_cart_total').html(data.final_total);
                $('#cart_total').html(data.final_total);
            }
        });


    }

    $(document).ready(function () {
        $.ajax({
            url: '/countCartData',
            type: 'GET',
            success: function (data) {
                $("#countCartItem").attr("data-cart-items", data);
            }
        });
    });


</script>
