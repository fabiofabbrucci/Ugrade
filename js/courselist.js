$(document).ready(function(){
    $('input.compare-button').hide();
    $('*[rel=tooltip]').tooltip({placement: 'bottom'});
    
    $('input[type=checkbox]').click(function(){
       count = $("[type='checkbox']:checked").length;  
       if(count > 4){
           alert('You can select only 4 course');
           $(this).attr('checked', false);
       }else if(count > 0){
           $('input.compare-button').show();
       }else{
           $('input.compare-button').hide();
       }
    });
});
