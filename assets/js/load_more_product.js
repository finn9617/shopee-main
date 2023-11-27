

$(document).ready(function(){
    $(window).on('scroll',function(){
        var lastId = $('.loader').attr('id');
        console.log( $(document).height() - $(window).height())
        if(($(window).scrollTop() == $(document).height() - $(window).height()) && (lastId != 0)){
            load_more_data(lastId);
        }
    });
    function load_more_data(lastId){
        $.ajax({
                type:'GET',
                url:'/wordpress/wp-content/themes/shopee-main/backend-script.php',
                dataType:'html',
                data:{last_id:lastId},
                beforeSend:function(){
                    $('.loader').show();
                },
                success:function(data){
                    setTimeout(function() {
                    $('.loader').remove();
                    $('#load-content').append(data);
                   },1000);
                    
                }
            });
    }
}); 