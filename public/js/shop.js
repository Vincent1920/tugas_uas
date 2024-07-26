jQuery(document).ready(function($) {
    // Define DropDown constructor
    var DropDown = function (element) {
        this.dd = element;
        this.initEvents();
    };
    
    // Define DropDown prototype methods
    DropDown.prototype = {
        initEvents: function () {
            var self = this;
            
            // Toggle dropdown on click
            self.dd.on('click', function (event) {
                $(this).toggleClass('active');
                event.stopPropagation();
            });
            
            // Close all dropdowns except the one clicked
            $(document).click(function () {
                $('.wrapper-dropdown-2').not(self.dd).removeClass('active');
            });
        }
    };
    
    // Initialize dropdown menu
    $(function () {
        var dd = new DropDown($('#dd1'));
    });
});
