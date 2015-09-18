$(function(){
    $('#mapContainer').hide();
    $('#mapDetails').hide();
    
    $(document).on('click', '#up', function(){
       $('#mapDetails').hide({
           duration: 2000,
           complete: function(){
               $('#mapContainer').show({
                   duration: 2000,
               });
           },
       });
       
    });
    
});