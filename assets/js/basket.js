let options = $('.selection__product');
let productId = $('#product__id').data('value');
let stock = $('#product__stock');

function getChecked() {
    let thisSelect = null;
    $(options).each((key, option) => {
        if (option.checked) thisSelect = option.value;
    });

    return thisSelect;
}

function snack(text, actionText = 'TAMAM' ,color = '#fff', bgColor = '#002556') {
    Snackbar.show({
        actionText: actionText,
        text: text,
        actionTextColor: color,
        backgroundColor: bgColor
    });
}

$('#add-to-basket').on('click', () => {

    if (stock) {
        $.ajax({
            type: 'POST',
            url: './api/add-to-basket',
            traditional: true,
            data: {
                'id': productId,
                'option': getChecked()
            },
            dataType: 'JSON',

            success: response => {
                if (response.status && response.status === 'ok') {
                    $('.total__basket').text(response.cart_total_count);
                    snack(response.message);
                }else {
                    snack(response.message, 'TAMAM', '#fff', '#ff3333');
                }
            }
        })
    }else {
        snack('Eklemek istediğiniz ürün stokta yok.');
    }

});