$(document).ready(function(){
   $(document).on('click', '.ruleRegister', function(){
       if($(this).prop('checked')){
           $('.reg__form--btn').prop('disabled', false);
       }else{
           $('.reg__form--btn').prop('disabled', true);
       }
   })
});
