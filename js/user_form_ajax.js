function update_roles(updateUrl) {
    // reload the role select field
    $.ajax({
    	type: 'get',
    	url: updateUrl,
    	data: {
    		"ajax" : "1"
    	},
    	success: function(resp) {
    		console.log(resp);
    		$("#role_list").replaceWith( resp );
    	},
    	error: function() {

    	}
    });
}

function revoke(url, role_name, updateUrl) {
	var role = "#role-" + role_name;
	$.ajax({
		type: 'get',
		url: url,
		success: function(resp) {
			$('div').remove(role);
			update_roles(updateUrl);
		},
		error: function() {
		}
	});        
}

function assign(url, updateUrl) {
	$.ajax({
		type: 'get',
		url: url, 
	    data: {
	    	"role" : $("#User_role").val(),
	    	"ajax" : "1"
	    },
	    success: function(resp) {
	    	console.log(resp);
	    	$("div.roles").append(resp);
	    	update_roles(updateUrl);
	    },
	    error: function() {
		// FIXME display error message
        }
    });        
}
