/* // $(function() {
    
    
//     var alerts = ["alert-info", "alert-success", "alert-danger", "alert-warning"];
    
//     $('form').submit( function () {
//        // e.preventDefault();
       
//        var form = $(this);
//        console.log(form);

//        const action = $('form').attr('data-controller');
//        // const email = $('#username-email').val();
//        // const password = $('#user-pass').val();
//        var data = new FormData($(this)[0]);

//        console.log(BASE+action);

//        // if (msg == "") {
//        // 	$('.msg').addClass('d-none');
//        // }
//        // console.log(data);
//        $.ajax({
//        	url:action,
//        	data:data,
//        	type:'POST',
//        	dataType:'json',
//        	processData: false,
//        	contentType: false,
//        	beforeSend: (data) => {
            
//             $('.submit .fa').addClass('fa-spinner fa-spin');    
//             $('#msg').html("Loading...");
//             $.each(alerts, (key, value)=> {
//                 $('.alert').removeClass(value);
//             });        
//         },
//         // ,error: () => {

//         //    alert("Ocorreu um erro ao carregar os dados.");
       	
//        	// }
//        	success: (data) => {
//             setTimeout(function(){
//                 $(".submit .fa").removeClass("fa-spinner fa-spin ");
                 
//                 // $(".submit .fa").removeClass("fa-times");  
//             }, 1000);

//             if(data.return){
//             	$(".submit .fa").removeClass("fa-check");
//                 $(".submit .fa").addClass("fa-times"); 
//             	$('.alert').addClass(data.return[0]);
//             	$('#msg').html(data.return[1]);
//             }

//             if(data.redirect){
//             	$(".submit .fa").removeClass("fa-times");
//             	$(".submit .fa").addClass("fa-check");
//             	window.setTimeout( () => { 
//                     window.location.href = BASE + data.redirect[0];
//             	}, data.redirect[1]);
//             }

//         }

//        });

//        return false;

//     });

    

// });
*/



$(document).ready(function () {
    
    let table = $('#dataTable').DataTable({
	    'paging'      : true,
	    'lengthChange': true,
	    'searching'   : true,
	    'ordering'    : true,
	    'info'        : true,
	    'autoWidth'   : true,
	    
	    
        lengthChange: false,
        buttons: [ 'csv', 'excel', 'pdf' ]
   
	  

      
    })
    table.buttons().container().appendTo( '#dataTable_wrapper .col-sm-6:eq(0)' )
    
   
    $('#dataTable_filter').addClass('pull-right')
    $('.dt-buttons button').addClass('btn btn-default')
    // $('#dataTable_filter label').find('Search').text('Pesquisar')

})






function pegarId (id) {
    var input = document.createElement("input");

    input.setAttribute("type", "hidden");

	input.setAttribute("name", "id");

	input.setAttribute("value", id);
		//append to form element that you want .
	document.getElementById("form").appendChild(input);

	return id 	
}

                                             

let actions = { verDebito: BASE+'debit/view', input1: BASE+'client/edit', input2: BASE+'client/delete'}

$("#input1, #input2, #verDebito").click(function() {
    $(this).closest("form").attr("action", actions[this.id])
})

$(function (){
	$(document).on('click', 'form', function() {

	    const form = $(this)
	    const data = new FormData($(this)[0])
	    const editName = document.querySelector('#editName') 
	    const editEmail = document.querySelector('#editEmail')
	    const userDel = document.querySelector('#deleteUser')
	   
	    

	    $.ajax({
	        url: BASE+'ajax/view',
	        data: data,
	        type: 'POST',
	        dataType: 'json',
	        processData: false,
	        contentType: false,
	        beforeSend: function(data)
	        {
                
	        },
	        success: function(data)
	        {   
                editName.value = data['name']
	            editEmail.value = data['email']
	            userDel.innerHTML = data['name']       

	        }
	    })
	      
	})
})





function pegarTabela(value) {

	alert(value.getAttibut('data-name'))
	alert(value.name)
}


// $(document).ready(function(){
 
	let status = document.querySelectorAll("#status")
	  
    for (i=0; i < status.length; i++){
        let element = status[i];
       
   	    switch(element.innerHTML) {
	    	case 'PAGO':
	           element.classList.toggle("label-success")
	           break;

	        case 'NAO PAGO':
	           element.classList.toggle("label-danger")
	           break;
	        
	        case 'PENDENTE':
	           element.classList.toggle("label-warning")
	           break;

	        case '':
	           element.innerHTML = 'INDEFINIDO'
	           element.classList.toggle("label-danger")
	           break;   
	}

}	

	

// })    



