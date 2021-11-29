<script>
    // for like in product ======================================================================
    function likeProduct(productId) {
        $.ajax({
            type: "POST",
            url: "/likes/" + productId,
            data: {
                _token: "{{csrf_token()}}"
            },
            /**
             * @param data          Information about the object.
             * @param data.likes_count   Information about the object's members.
             */
            success: function (data) {
                let icon = $('#like-for-show-blade-' + productId + '>.fa-heart');
                if (icon.hasClass('like-for-show-blade')) {
                    icon.removeClass('like-for-show-blade');
                } else {
                    icon.addClass('like-for-show-blade');
                }
                $('#likes_count').text(data.likes_count)
            }
        });
    }

    // for add product in cart ======================================================================
    function addToCart(productId) {
        let quantityValue = $('#input-quantity');
        let quantity = 1;
        if (quantityValue.length) {
            quantity = quantityValue.val();
        }
        $.ajax({
            type: "POST",
            url: "/cart/" + productId,
            data: {
                _token: "{{csrf_token()}}",
                productId: productId,
                quantity: quantity,
            },
            // parseInt(product.price_with_discount).toLocaleString() to jquery for
            // toLocaleString() for format number example:100,234,345
            // product.price_with_discount use by set protected $appends in Product model
            /**
             * @param data          Information about the object.
             * @param data.cart   Information about the object's members.
             * @param data.cart.total_items   Information about the object's members.
             * @param data.cart.total_price   Information about the object's members.
             */
            success: function (data) {
                $('#product-quantity-' + productId).text('x' + quantity);
                $('.cart-totalProce').text(data.cart.total_price);
                $('#total_items').text(data.cart.total_items);
                $('#total_price').text(data.cart.total_price);
                let product = data.cart[productId]['product'];
                let productQty = data.cart[productId]['quantity'];
                if (!$('#cart-row' + product.id).length) {
                    $('#cart-table-body:last-child').append(
                        '<tr id="cart_row' + product.id + '">'
                        + '<td class="text-center"><a href="/productDetails/' + product.slug + '"> <img class="img-thumbnail" title="' + product.name + '" alt="' + product.name + '" src="' + product.image_path + '" width="40" height="40"/></a></td>'
                        + '<td class="text-left"><a href="/productDetails/' + product.slug + '"> ' + product.name + '</a></td>'
                        + '<td class="text-right">x ' + productQty + '</td>'
                        + '<td class="text-right">' + parseInt(product.price_with_discount).toLocaleString() + ' تومان</td>'
                        + '<td class="text-center"> <button class="btn btn-danger btn-xs remove" title="حذف" onClick="removeFromCart(' + product.id + ')" type="button"> <i class="fa fa-times"></i></button> </td>'
                        + '</tr>'
                    );
                }
                $('.cart-total-price').text(parseInt(data.cart.total_price).toLocaleString() + ' تومان ');
            }
        })
    }

    // for remove product in cart ======================================================================
    function removeFromCart(productId) {
        $.ajax({
            type: "delete",
            url: "/cart/" + productId,
            data: {
                _token: "{{csrf_token()}}",
                productId: productId,
            },
            /**
             * @param data          Information about the object.
             * @param data.cart   Information about the object's members.
             * @param data.cart.total_items   Information about the object's members.
             * @param data.cart.total_price   Information about the object's members.
             * @param data.cart.product.id   Information about the object's members.
             */
            success: function (data) {
                $('#total_items').text(data.cart.total_items);
                $('#total_price').text(data.cart.total_price);
                $('#cart_row' + productId).remove();
                $('#cart-index' + productId).remove();
                $('.cart-total-price').text(parseInt(data.cart.total_price).toLocaleString());
            }
        })
    }

    // for update quantity in product in cart ======================================================================
    function updateCart(productId) {
        let quantityValue = $('#input-quantity' + productId);
        let quantity = 1;
        if (quantityValue.length) {
            quantity = quantityValue.val();
        }
        $.ajax({
            type: "POST",
            url: "/cart/" + productId,
            data: {
                _token: "{{csrf_token()}}",
                productId: productId,
                quantity: quantity,
            },
            /**
             * @param data          Information about the object.
             * @param data.cart   Information about the object's members.
             * @param data.cart.total_items   Information about the object's members.
             * @param data.cart.total_price   Information about the object's members.
             */
            success: function (data) {
                $('#total_items').text(data.cart.total_items);
                $('#total_price').text(data.cart.total_price);
                let product = data.cart[productId]['product'];
                let productQty = data.cart[productId]['quantity'];
                $('.cart-total-price').text(parseInt(data.cart.total_price).toLocaleString() + ' تومان ');
                $('#totals-price-' + productId).text(parseInt(product.price_with_discount * productQty).toLocaleString());
                $('#product-quantity-' + productId).text('x' + productQty);
            }
        })
    }

    // for search in header for products ======================================================================
    function fetchCustomerData(value = '') {
        $.ajax({
            url: "/product/search",
            method: "POST",
            dataType: 'json',
            data: {
                value: value,
                _token: "{{csrf_token()}}",
            },
            /**
             * @param data          Information about the object.
             * @param data.table_data   Information about the object's members.
             * @param data.total_products   Information about the object's members.
             */
            success: function (data) {
                console.log(data.table_data.length)
                if(data.table_data.length > 0){
                    $('.list-group-item-action').css('display', 'inline-block');
                    $('div.table-responsive-action').css('display', 'inline-block');
                    $('#total_products').text(data.total_products);
                    $('.tbody').html(data.table_data);
                }else {
                    $('.list-group-item-action').css('display', 'none');
                    $('div.table-responsive-action').css('display', 'none');
                    $('.tbody').html('');
                    $('.tbody').empty();
                }
            }
        });
    }

    // for click id input search in header click ======================================================================
    $('#filter_search').on('keyup', function (e) {
        let query = $(this).val();
        fetchCustomerData(query);
    });
</script>
