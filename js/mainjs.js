$(document).ready(function(){
	$("#apptfor").change(function(){
		var dokid = $("#apptfor").val();
		var gethtml = getTime(dokid);
		$('#timediv').show();
		$('#timediv').html('');
		$('#timediv').html(gethtml);
	})
	
});

function saveChart(email){
	var formData = getchartvalue();
	$.ajax({
		type: "POST",
		url: "savechart.php",
		data: {
			formData : formData,
			patientId: $("#patientId").val(),
			savechart: '1',
			emailFlag: email
		},
		success: function(retdata){
			var jsonObj = $.parseJSON(retdata);
			if(jsonObj.status =="success"){
				window.location.href = "/Get-Healthier-Life/patients.php";
			}
		},
		error : function(XMLHttpRequest, textStatus, errorThrown) {
				//alert(errorThrown)
		}
	});	
}

function getchartvalue(){
	var returnobj ={}
	$(".container textarea").each(function(){
		tarea = this
		returnobj[tarea.id] = encodeURIComponent(tarea.value);
	});
	return returnobj;
}

function getTime(dokid){
	var htmlstr = "";
	switch (dokid) {
	  case "dt.eshasinghal@gmail.com":
		htmlstr+="<table border='1' style='width: 100%;'>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"11:00\")'>11:00 AM</td><td onclick='gettime(\"11:30\")'>11:30 AM</td><td onclick='gettime(\"12:00\")'>12:00 PM</td><td onclick='gettime(\"12:30\")'>12:30 PM</td><td onclick='gettime(\"12:45\")'>12:45 PM</td>"+
			"</tr>"+
			
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"05:00\")'>05:00 PM</td><td onclick='gettime(\"05:30\")'>05:30 PM</td><td onclick='gettime(\"06:00\")'>06:00 PM</td><td onclick='gettime(\"06:30\")'>06:30 PM</td><td onclick='gettime(\"06:45\")'>06:45 PM</td>"+
			"</tr>"+
		"</table>";
		break;
	  case "mail4ankitgarg@gmail.com":
		htmlstr+="<table border='1'>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"10:00\")'>10:00</td><td onclick='gettime(\"11:00\")' >11:00</td><td onclick='gettime(\"12:00\")'>12:00</td>"+
			"</tr>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"01:00\")'>01:00</td><td onclick='gettime(\"02:00\")'>02:00</td><td onclick='gettime(\"03:00\")'>03:00</td>"+
			"</tr>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"04:00\")'>04:00</td><td onclick='gettime(\"05:00\")'>05:00</td><td onclick='gettime(\"06:00\")'>06:00</td>"+
			"</tr>"+
		"</table>";
		break;
	  case "3":
		htmlstr+="<table border='1'>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"10:00\")'>10:00</td><td onclick='gettime(\"11:00\")' >11:00</td><td onclick='gettime(\"12:00\")'>12:00</td>"+
			"</tr>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"01:00\")'>01:00</td><td onclick='gettime(\"02:00\")'>02:00</td><td onclick='gettime(\"03:00\")'>03:00</td>"+
			"</tr>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"04:00\")'>04:00</td><td onclick='gettime(\"05:00\")'>05:00</td><td onclick='gettime(\"06:00\")'>06:00</td>"+
			"</tr>"+
		"</table>";
		break;
	  case "4":
		htmlstr+="<table border='1'>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"10:00\")'>10:00</td><td onclick='gettime(\"11:00\")' >11:00</td><td onclick='gettime(\"12:00\")'>12:00</td>"+
			"</tr>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"01:00\")'>01:00</td><td onclick='gettime(\"02:00\")'>02:00</td><td onclick='gettime(\"03:00\")'>03:00</td>"+
			"</tr>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"04:00\")'>04:00</td><td onclick='gettime(\"05:00\")'>05:00</td><td onclick='gettime(\"06:00\")'>06:00</td>"+
			"</tr>"+
		"</table>";
		break;
	  case "5":
		htmlstr+="<table border='1'>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"10:00\")'>10:00</td><td onclick='gettime(\"11:00\")' >11:00</td><td onclick='gettime(\"12:00\")'>12:00</td>"+
			"</tr>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"01:00\")'>01:00</td><td onclick='gettime(\"02:00\")'>02:00</td><td onclick='gettime(\"03:00\")'>03:00</td>"+
			"</tr>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"04:00\")'>04:00</td><td onclick='gettime(\"05:00\")'>05:00</td><td onclick='gettime(\"06:00\")'>06:00</td>"+
			"</tr>"+
		"</table>";
		break;
		case "6":
		htmlstr+="<table border='1'>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"10:00\")'>10:00</td><td onclick='gettime(\"11:00\")' >11:00</td><td onclick='gettime(\"12:00\")'>12:00</td>"+
			"</tr>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"01:00\")'>01:00</td><td onclick='gettime(\"02:00\")'>02:00</td><td onclick='gettime(\"03:00\")'>03:00</td>"+
			"</tr>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(\"04:00\")'>04:00</td><td onclick='gettime(\"05:00\")'>05:00</td><td onclick='gettime(\"06:00\")'>06:00</td>"+
			"</tr>"+
		"</table>";
		break;
	  default:
		htmlstr+="<table border='1'>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(10:00)'>10:00</td><td onclick='gettime(11:00)' >11:00</td><td onclick='gettime(12:00)'>12:00</td>"+
			"</tr>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(01:00)'>01:00</td><td onclick='gettime(02:00)'>02:00</td><td onclick='gettime(03:00)'>03:00</td>"+
			"</tr>"+
			"<tr colspan='3'>"+
				"<td onclick='gettime(04:00)'>04:00</td><td onclick='gettime(05:00)'>05:00</td><td onclick='gettime(06:00)'>06:00</td>"+
			"</tr>"+
		"</table>";
	}
	return htmlstr;
 }
 
 
 
 function gettime(thistime){
	 $("#aaptime").val('');
	 $("#aaptime").val(thistime);
	 $('#timediv').hide();
 }
 
 
 function submitform(){
	$.ajax({ 
		type: "POST",
		url: 'sendMail.php',
		data: 'name='+$('#name').val()+'&phone='+$('#phone').val()+'&email='+$('#email').val()+'&selecteddoctor='+$('#apptfor').val()+'&apptfor='+$("#apptfor option:selected").text()+'&aaptime='+$('#aaptime').val()+'&queries='+$('#queries').val(),
		success: function(msg){

					alert(msg);
					$('#name').val('');
					$('#phone').val('');
					$('#email').val('');
					$('#apptfor').val('');
					$('#aaptime').val('');
					$('#queries').val('');
		},
		error : function(XMLHttpRequest, textStatus, errorThrown) {
				//alert(errorThrown)
		}
	});
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 