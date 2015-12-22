(function($){
    $(document).ready(function(){
        $('ul.sidebar-menu li').click(function(){
            $('#page-title').html($('a',this).html());
            $('ul.sidebar-menu li').removeClass('active');
            $(this).addClass('active');            
        });
        
        $('ul.sidebar-menu li a').click(function(e){
            e.preventDefault();
            $.get($(this).attr('href'), function(response, status){
                if(status == 'success'){
                    $('#page-content').html(response);
                }
            });
        });
    });
})(jQuery);

