//Liste des contacts

$(document).ready(function() {

//Pour chargement des contacts mairies sur page initial
	$("#div1").load(`http://localhost/ci2/index.php/MairieSJ/contact1`);

//Pour chargement du contact sélectionné
    $("#select1").change(function() {

        let v =$('#select1').val();

		  $("#div1").load(`http://localhost/ci2/index.php/MairieSJ/${v}`);

});

});


