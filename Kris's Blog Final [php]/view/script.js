// Il linguaggio JavaScript non è il mio forte...🤦🏻‍♂️ 


// MODAL (alla fine non ho usato Modal)
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })


// dropdown js 🤔???

$(function () {
    $("#myDropdown").hover
    
})

$().ready(function () {      
    $('#myDropdown').hover(      
        function () {          //mostra sottomenu         
            $('a', this).stop(true, true).delay(50).slideDown(100);       
},         
        function () {          //nascondi sottomenu           
            $('a', this).stop(true, true).slideUp(200);               
        
}  
);
});


