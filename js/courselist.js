$(document).ready(function(){
    $('input.compare-button').hide();
    $('*[rel=tooltip]').tooltip({placement: 'bottom'});
    
    $('input[type=checkbox]').click(function(){
       count = $("[type='checkbox']:checked").length;  
       console.log(count);
       if(count > 0){
           $('input.compare-button').show();
       }else{
           $('input.compare-button').hide();
       }
    });
});
