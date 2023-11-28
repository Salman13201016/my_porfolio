$(document).ready(function () {
    quantity = parseInt($('.quant_input').val())
    price = parseFloat($('.price_details').text())
    $('.add_quant').click(function () {
        if (quantity == 5) {
            $('.quant_input').val(5)
        }
        else {
            quantity = (quantity) + 1
            $('.quant_input').val(quantity)
        }
    });
    $('.minus_quant').click(function () {

        if (quantity < 1) {
            $('.quant_input').val(0)
        }
        else {
            quantity = (quantity) - 1
            $('.quant_input').val(quantity)
        }
    });
    $('.add_cart_btn').click(function () {
        total_price = quantity * price
        $(".cart_count").text(quantity)
        $(".cart_t_price").text(total_price)
    });
});