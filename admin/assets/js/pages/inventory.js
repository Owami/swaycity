

var BaseFormWizard = function () {
    // Init simple wizard: http://vadimg.com/twitter-bootstrap-wizard-example/
    var initWizardSimple = function () {
        jQuery('.js-wizard-simple').bootstrapWizard({
            'tabClass': '',
            'firstSelector': '.wizard-first',
            'previousSelector': '.wizard-prev',
            'nextSelector': '.wizard-next',
            'lastSelector': '.wizard-last',
            'onTabShow': function ($tab, $navigation, $index) {
                var $total = $navigation.find('li').length,
                    $current = $index + 1,
                    $percent = ($current / $total) * 100,

                    // Get core wizard elements
                    $wizard = $navigation.parents('.card'),
                    $progress = $wizard.find('.wizard-progress > .progress-bar'),
                    $btnPrev = $wizard.find('.wizard-prev'),
                    $btnNext = $wizard.find('.wizard-next'),
                    $btnFinish = $wizard.find('.wizard-finish');

                // Update progress bar if there is one
                if ($progress) {
                    $progress.css({
                        width: $percent + '%'
                    });
                }

                // If it's the last tab then hide the last button and show the finish instead
                if ($current >= $total) {
                    $btnNext.hide();
                    $btnFinish.show();
                } else {
                    $btnNext.show();
                    $btnFinish.hide();
                }
            }
        });
    };

    // Init wizards with validation: http://vadimg.com/twitter-bootstrap-wizard-example/
    var initWizardValidation = function () {
        // Get forms
        var $form1 = jQuery('.js-form1');
        var $form2 = jQuery('.js-form2');

        // Prevent forms from submitting on enter key press
        $form1.add($form2).on('keyup keypress', function (e) {
            var code = e.keyCode || e.which;

            if (code === 13) {
                e.preventDefault();
                return false;
            }
        });



        // Init form validation on the other wizard form
        var $validator2 = $form2.validate({
            errorClass: 'help-block text-right animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function (error, e) {
                jQuery(e).parents('.form-group .form-material').append(error);
            },
            highlight: function (e) {
                jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
                jQuery(e).closest('.help-block').remove();
            },
            success: function (e) {
                jQuery(e).closest('.form-group').removeClass('has-error');
                jQuery(e).closest('.help-block').remove();
            },
                        rules: {
                'validation-classic-strain': {
                    required: true,
                    minlength: 2
                },
                'validation-classic-grams': {
                    required: true,
                    minlength: 2
                },
                'validation-classic-disparity': {
                    required: true,
                    email: true
                },
                'validation-classic-cost': {
                    required: true,
                    minlength: 5
                },
                'validation-classic-cost2': {
                    required: true,
                    digits: true
                },
                'validation-classic-terms': {
                    required: true
                }
            },
            messages: {
                'validation-classic-strain': {
                    required: 'Please enter the Strain Variant',
                    minlength: ' must consist of at least 2 characters'
                },
                'validation-classic-grams': {
                    required: 'Please enter the grams',
                    minlength: 'Must be atleast 200g'
                },
                'validation-classic-disparity': {
                    required: 'Please enter the size it is sold in'
                },
                'validation-classic-cost': 'And add the cost',
                'validation-classic-terms': 'You must agree with the terms and conditions set in place when capturing!'
            }
        });

        // Init classic wizard with validation
        jQuery('.js-wizard-classic-validation').bootstrapWizard({
            'tabClass': '',
            'previousSelector': '.wizard-prev',
            'nextSelector': '.wizard-next',
            'onTabShow': function ($tab, $nav, $index) {
                var $total = $nav.find('li').length;
                var $current = $index + 1;

                // Get core wizard elements
                var $wizard = $nav.parents('.card');
                var $btnNext = $wizard.find('.wizard-next');
                var $btnFinish = $wizard.find('.wizard-finish');

                // If it's the last tab then hide the last button and show the finish instead
                if ($current >= $total) {
                    $btnNext.hide();
                    $btnFinish.show();
                } else {
                    $btnNext.show();
                    $btnFinish.hide();
                }
            },
            'onNext': function ($tab, $navigation, $index) {
                var $valid = $form1.valid();

                if (!$valid) {
                    $validator1.focusInvalid();

                    return false;
                }
            },
            onTabClick: function ($tab, $navigation, $index) {
                return false;
            }
        });

        // Init wizard with validation
        jQuery('.js-wizard-validation').bootstrapWizard({
            'tabClass': '',
            'previousSelector': '.wizard-prev',
            'nextSelector': '.wizard-next',
            'onTabShow': function ($tab, $nav, $index) {
                var $total = $nav.find('li').length;
                var $current = $index + 1;

                // Get core wizard elements
                var $wizard = $nav.parents('.card'),
                    $btnNext = $wizard.find('.wizard-next'),
                    $btnFinish = $wizard.find('.wizard-finish');

                // If it's the last tab then hide the last button and show the finish instead
                if ($current >= $total) {
                    $btnNext.hide();
                    $btnFinish.show();
                } else {
                    $btnNext.show();
                    $btnFinish.hide();
                }
            },
            'onNext': function ($tab, $navigation, $index) {
                var $valid = $form2.valid();

                if (!$valid) {
                    $validator2.focusInvalid();

                    return false;
                }
            },
            onTabClick: function ($tab, $navigation, $index) {
                return false;
            }
        });
    };

    return {
        init: function () {
            // Init simple wizard
            initWizardSimple();

            // Init wizards with validation
            initWizardValidation();
        }
    };
}();

// Initialize when page loads
jQuery(function () {
    BaseFormWizard.init();
});
