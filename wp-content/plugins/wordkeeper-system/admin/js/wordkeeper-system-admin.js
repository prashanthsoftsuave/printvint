(function($) {
    'use strict';
    $(function() {
        $('#purge-all').click(function(e) {
            $('#purge').val($(this).attr('id'));
            $('#purge-form').submit();
        });
        $('#settings-submit').click(function(e) {
            $('#settings-form').submit();
        });
        $('#optimization-submit').click(function(e) {
            $('#optimization-form').submit();
        });
        $('#security-submit').click(function(e) {
            $('#security-form').submit();
        });
        $('#staging-submit').click(function(e) {
            $('#staging-form').submit();
        });
        $('#imageoptimize-submit').click(function(e) {
            $('#optimization-form').submit();
        });

		$(document).on('click', '.nav-tab-wrapper a', function() {
		    $('.wk-nav-tab a').removeClass('nav-tab-active');
		    $(this).addClass('nav-tab-active');
		    $('section').hide();
		    $('section').eq($(this).index()).show();
		    return false;
		});
		
	    $('.vrazer-tooltip').each(function(index, $jqObj) {
	        var tooltip = $(this).data('tooltip');
	        var btnfix = $(this).attr('type');
	        if (tooltip) {
	            var btnfixClass = '';
	            if (btnfix != 'undefined' && btnfix == 'button') {
	                btnfixClass = 'btn-fix';
	            }
	            var html = '<a href="#" class="tooltip ' + btnfixClass + '">?<span><b></b>' + tooltip + '</span></a>';
	            var present = $(this).next().length;
	            if (present) {
	                $(this).next().before(html);
	            } else {
	                $(this).after(html);
	            }
	        }
	    });

	    $("#db-optimize").on("click", function(e) {
	        if ($(this).prop("checked")) {
	            $("#child > input").prop("disabled", false);
	        } else {
	            $("#child > input").prop("disabled", true);
	        }
	    });
	});	
})(jQuery);