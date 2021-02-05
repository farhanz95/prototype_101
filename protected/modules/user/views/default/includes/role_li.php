<?php
echo "<div id=\"role-" . $assignment->itemname. "\">" . "<div class=\"form-group\"><div class=\"form-control-static col-lg-3\">&nbsp;<i class=\"fa fa-caret-right\"></i>&nbsp;&nbsp;&nbsp;" .  
	$assignment->itemname . "</div><div class=\"col-lg-9\">" . 
	" <input class=\"revoke btn btn-default\" type=\"button\" " . 
		"onClick=\"revoke('" .
			Yii::app()->controller->createUrl("/user/default/revokeRole",
                        	array("id" => $user->id,
                                	"role_name"=>$assignment->itemname,
                                        "ajax"=>1)) . "', '" . 
			$assignment->itemname . "', '" . 
			Yii::app()->controller->createUrl("/user/default/reloadRoles",
                        	array("id" => $user->id)) . 
			"')\" " . 
		"value=\"Buang Jawatan\" " .
	"/></div></div>" .
     "</div>";

