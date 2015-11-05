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
    
    $('#stateId').change(function(){
        document.location.href = '/?stateId=' + $(this).val();
    });
    
    $('#regionId').change(function(){
        document.location.href = '/?stateId=' + $('#stateId').val() + '&regionId=' + $(this).val();
    });
    
    $('#communeId').change(function(){
        document.location.href = '/?stateId=' + $('#stateId').val() + '&regionId=' + $('#regionId').val() + '&communeId=' + $(this).val();
    });
    
    $('#cityId').change(function(){
        document.location.href = '/?stateId=' + $('#stateId').val() + '&regionId=' + $('#regionId').val() + '&communeId=' + $('#communeId').val() + '&cityId=' + $(this).val();
    });
    
});