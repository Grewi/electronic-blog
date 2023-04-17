$(document).on('keyup', '.e-valid-input', function() {
    let el = $(this);
    let error = el.siblings('div')[0];
    let url = el.attr('data-url');

    let attrs = {};
    $.each($(this)[0].attributes, function(index, attribute) {
        attrs[attribute.name] = attribute.value;
    });
    attrs['value'] = el.val();

    $.ajax({
        url: url,
        method: 'post',
        data: attrs,
        success: function(data) {
            error.style.display = 'none';
            el.removeClass('uk-form-danger');
            el.addClass('uk-form-success');
        },
        error: function(data) {
            error.style.display = '';
            d = JSON.parse(data.responseText);
            el.removeClass('uk-form-success');
            el.addClass('uk-form-danger');
            error.innerHTML = d.value;
        },
    });
});