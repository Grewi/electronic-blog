$(document).ready(function () {
    $("html").on("dragover", function (e) {
        e.preventDefault();
        e.stopPropagation();
    });

    $("html").on("drop", function (e) {
        e.preventDefault();
        e.stopPropagation();
    });

    $('#drop_file_area').on('dragover', function () {
        $(this).addClass('drag_over');
        return false;
    });

    $('#drop_file_area').on('dragleave', function () {
        $(this).removeClass('drag_over');
        return false;
    });

    $('#drop_file_area').on('drop', function (e) {
        e.preventDefault();
        $(this).removeClass('drag_over');
        var formData = new FormData();
        var files = e.originalEvent.dataTransfer.files;
        for (var i = 0; i < files.length; i++) {
            formData.append('file[]', files[i]);
        }
        uploadFormData(formData);
    });

    function uploadFormData(form_data) {
        console.log(form_data);
        $.ajax({
            url: "/upload",
            method: "POST",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $('#uploaded_file').append(data);
            }
        });
    }
});