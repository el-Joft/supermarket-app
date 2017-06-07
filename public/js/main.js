$(document).ready(function(){
	$('#percent').blur(function(){	
		var costPrice = $("#cost_price").val();
		var percent = $("#percent").val();

		if(percent != 0 || percent != ""){
			var percent_cal = percent/100;

			var pre_cal = percent_cal * costPrice;
			

			var total_cal = pre_cal + Math.floor(costPrice);

			

			$("#selling_price").val(total_cal);
		}
		else{
			return
		}
	   var costPrice = $("#cost_price").val();
    });
});
