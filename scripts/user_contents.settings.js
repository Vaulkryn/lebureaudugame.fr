/************************************/
/***** ↓↓ Custom File upload ↓↓ *****/
;
(function ($, window, document, undefined) {
    $('.inputUpload').each(function () {
        var $input = $(this),
            $label = $input.next('label'),
            labelVal = $label.html();

        $input.on('change', function (e) {
            var fileName = '';

            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else if (e.target.value)
                fileName = e.target.value.split('\\').pop();

            if (fileName)
                $label.find('span').html(fileName);
            else
                $label.html(labelVal);
        });
        // Firefox bug fix
        $input
            .on('focus', function () {
                $input.addClass('has-focus');
            })
            .on('blur', function () {
                $input.removeClass('has-focus');
            });
    });
})(jQuery, window, document);

/************************************************/
/***** ↓↓ Preview Multiple Files Uploads ↓↓ *****/

if ($('#imgUpload').length > 0) {
    document.querySelector("#uploads").addEventListener("change", (e) => {
        if (window.File && window.FileReader && window.FileList && window.Blob) {
            const files = e.target.files;
            const output = document.querySelector("#output");
            output.innerHTML = "";
            for (let i = 0; i < files.length; i++) {
                if (!files[i].type.match("image")) continue;
                const picReader = new FileReader();
                picReader.addEventListener("load", function (event) {
                    const picFile = event.target;
                    const div = document.createElement("div");
                    div.innerHTML = `<img class="outputImg" src="${picFile.result}" title="${picFile.name}"/>`;
                    output.appendChild(div);
                });
                picReader.readAsDataURL(files[i]);
            }
        } else {
            alert("Your browser does not support File API");
        }
    });
}

/********************************************/
/***** ↓↓ Show preview avatar upload ↓↓ *****/

var loadAvatar = function (event) {
    var output = document.getElementById('outputAvatar');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function () {
        URL.revokeObjectURL(output.src)
    }
};