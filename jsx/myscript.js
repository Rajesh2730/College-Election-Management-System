$(document).ready(function(){

    $("#year").blur(()=>{
        var year=$("#year").val();
        $.ajax({
            url:'./getpostings.php',
            data:{
                n_year:year
            },
            type:'POST',
            dataType:'json',
            success:function(data){
                var select=$("#posting");
                for(var i=1;i<data.length;i++){
                    select.append('<option value="'+data[i]+'">'+data[i]+'</option>');
                }
            }
    
        });
    });
  


});