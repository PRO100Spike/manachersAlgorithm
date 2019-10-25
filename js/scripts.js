//JS only
function jsOnlyColorCheangeOnGreen() {
    const td = document.getElementsByClassName('c');
    for (var i = 0; i < td.length; i++) {
        td[i].style.color = 'green';
    }
}

function jsOnlyColorCheangeOnGreenParent() {
    const td = document.getElementsByClassName('c');
    for (var i = 0; i < td.length; i++) {
        console.log(td[i].parentElement);
        td[i].parentElement.setAttribute('class', 'a');
    }
}

//jquery
function jqueryColorCheangeOnGreen() {
    $('td.c').each(function(i, elem) {
        $(elem).css('color', 'green');
        });
}

function jqueryColorCheangeOnGreenVer2() {
    $('td.c').each(function(i, elem) {
        $(elem).parent().addClass('a');
    });
}

//vue
var app = new Vue({
    el: '#t',
    data: {
        td: document.getElementsByClassName('c'),
        parenClass: 'a',
    },
    methods: {
        colorCheangeOnGreen: function () {
            for (var i = 0; i < this.td.length; i++) {
                this.td[i].style.color = 'green';
            }
        },
    },
});