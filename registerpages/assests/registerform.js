$(document).ready(function() {
    $("input[name$='type']").click(function() {
        var test = $(this).val();

        // document.write(test);

        if (test=="agent"|| test=="planner") {
        	$("div.company").css("display","block");
        	$("div.language").css("display","none");
        }
        else if (test=="guide") {
        	$("div.language").css("display","block");
        	$("div.company").css("display","none");
        }
        else
        {
        	$(".company").hide();
        	$(".languages").hide();
        }
    });
});

// $(document).ready( function() {
//     	$(document).on('change', '.btn-file :file', function() {
// 		var input = $(this),
// 			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
// 		input.trigger('fileselect', [label]);
// 		});

// 		$('.btn-file :file').on('fileselect', function(event, label) {
		    
// 		    var input = $(this).parents('.input-group').find(':text'),
// 		        log = label;
		    
// 		    if( input.length ) {
// 		        input.val(log);
// 		    } else {
// 		        if( log ) alert(log);
// 		    }
	    
// 		});
// 		function readURL(input) {
// 		    if (input.files && input.files[0]) {
// 		        var reader = new FileReader();
		        
// 		        reader.onload = function (e) {
// 		            $('#img-upload').attr('src', e.target.result);
// 		        }
		        
// 		        reader.readAsDataURL(input.files[0]);
// 		    }
// 		}

// 		$("#imgInp").change(function(){
// 		    readURL(this);
// 		}); 	
// 	});



 $(document).ready( function() {
 	var btnCust = '<button type="button" class="btn btn-default" title="Add picture tags" ' + 
    'onclick="alert(\'Call your custom code here.\')">' +
    '<i class="glyphicon glyphicon-tag"></i>' +
    '</button>'; 
$("#avatar-2").fileinput({
    overwriteInitial: true,
    maxFileSize: 1500,
    showClose: false,
    showCaption: false,
    showBrowse: false,
    browseOnZoneClick: true,
    removeLabel: '',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Cancel or reset changes',
    elErrorContainer: '#kv-avatar-errors-2',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="uploads/default.jpg" alt="Your Avatar" style="width:160px"><h6 class="text-muted">Click to select</h6>',
    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});

});