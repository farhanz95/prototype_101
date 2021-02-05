function update_tasks(updateUrl) {
    // reload the role select field
    $.ajax({
    	type: 'get',
    	url: updateUrl,
    	data: {
    		"ajax" : "1"
    	},
    	success: function(resp) {
    		console.log(resp);
    		$("#task-list").replaceWith( resp );
    	},
    	error: function() {

    	}
    });
}

function revoke(url, updateUrl) {
	// var role = "#role-" + role_name;
	if(!confirm('Are you sure you want to delete this item?')) return false;
	var th = this,
	afterDelete = function(){};
	$('#tasks-grid').yiiGridView('update', {
		type: 'POST',
		url: url,
		success: function(data) {
			$('#tasks-grid').yiiGridView('update');
			afterDelete(th, true, data);
			update_tasks(updateUrl);
		},
		error: function(XHR) {
			return afterDelete(th, false, XHR);
		}
	});
	// $.ajax({
	// 	type: 'get',
	// 	url: url,
	// 	success: function(resp) {
	// 		$('div').remove(role);
	// 		update_tasks(updateUrl);
	// 	},
	// 	error: function() {
	// 	}
	// });        
}

function assign(url, updateUrl) {
	var data = new Array;
	$("input[name='ItemChildren[child][]']:checked").each(function() {
	  data.push($(this).val());
	});
	$.ajax({
		type: 'get',
		url: url, 
	    data: {
	    	"role" : data,
	    	"ajax" : "1"
	    },
	    success: function(resp) {
	    	console.log(resp);
	    	// $("div.tasks").replaceWith(resp);
	    	$('#tasks-grid').yiiGridView('update', {
                data: $(this).serialize()
            });
	    	update_tasks(updateUrl);
	    },
	    error: function() {
		// FIXME display error message
        }
    });        
}