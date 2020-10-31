$(document).ready(function(){
    $("#sel_category").change(function(){
        var categoryId = $(this).val();
        if(categoryId>0){
            $.ajax({
                url: 'getUsers.php',
                type: 'post',
                data: {depart:categoryId},
                dataType: 'json',
                success:function(response){
                    var len = response.length;
                    $("#sel_subcategory").empty();
                    for( var i = 0; i<len; i++){
                        var id = response[i]['id'];
                        var name = response[i]['name'];
                        $("#sel_subcategory").append("<option value='"+id+"'>"+name+"</option>");
                        }
                    }
             });
        }

    });
});

$('').click(function(){

})
Object
var cho = {
    ten:'len',
    tuoi:10
}