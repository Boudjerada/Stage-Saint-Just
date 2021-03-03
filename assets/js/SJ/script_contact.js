$(document).ready(function() {


	$("#div1").load(`http://localhost/ci2/index.php/MairieSJ/contact1`);
    
    $("#select1").change(function() {

        let v =$('#select1').val();

		  $("#div1").load(`http://localhost/ci2/index.php/MairieSJ/${v}`);

});

});


