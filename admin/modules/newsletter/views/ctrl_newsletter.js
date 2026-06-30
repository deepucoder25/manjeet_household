//blank line is required
app.controller('ctrl_newsletter',function($scope,$http){
	$http.get('login/check_valid_session').success (function(data) {if(data!=1){window.location.assign('<?=site_url("login")?>');}});
	
	$scope.loader=function(){
		$http.get("newsletter/view_data").success(function(data){
			$scope.datadb=data;
		})
	}
	$scope.loader();
	
	
	$scope.filter_new=function(){
		$scope.x={};
	}
	
	$scope.delete_data=function(id)
	{
		if(confirm("Deleting Newsletter subscriber may hamper your data associated with it."))
		{
			if(confirm("Are you Sure to DELETE ??"))
			{
				$http.get("newsletter/delete_data?id="+id).success(function(data){
					data = (data || '').toString().trim();
					console.log(data);
					if(data=="1")
					{
						messages("success", "Success!","Subscriber Deleted Successfully", 3000);
					}
					else
					{
						messages("danger", "Warning!","Subscriber not Deleted", 4000);
					}
					$scope.loader();
				})
			}
		}
	}
});