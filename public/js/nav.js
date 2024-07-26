jQuery(document).ready(function ($) {
    var DropDown = function (element) {
        this.dd = element;
        this.initEvents();
    };

    DropDown.prototype = {
        initEvents: function () {
            var self = this;

            self.dd.on('click', function (event) {
                $(this).toggleClass('active');
                event.stopPropagation();
            });

            $(document).click(function () {
                $('.wrapper-dropdown-3', ).not(self.dd).removeClass('active');
            });
        }
    };

    $(function () {
        var dd = new DropDown($('#dd2'));
    });
});