document.addEventListener("DOMContentLoaded", function() {

    var teacher = document.querySelector('#select');

    teacher.onchange = function() {
        console.log('ok');
        this.form.submit();
    }
    var button = document.querySelectorAll('.list_data button');
    for (var i = 0; i < button.length; i++) {
        button[i].onclick = function() {
            for (var i = 0; i < button.length; i++) {
                button[i].classList.remove('buttonActive');
            }
            if (this.classList == 'buttonActive') {
                this.classList.remove('buttonActive');
            } else {
                this.classList.add('buttonActive');
            }
        }
    }
}, false)