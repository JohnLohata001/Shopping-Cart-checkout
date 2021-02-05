$(document).ready(function() {
    $('.addPagner').click(function(event){

        event.preventDefault();
        
        $.get($(this).attr('href'),(),function (data) {
            if(data.error){
                alert(data.message);
            }else{
                if (confirm(data.message + 'Do you want to go to Cart')) {
                    location.href='pagner.php';
                }else{

                }
            }
            
        },'json');

        return false;

    });
});