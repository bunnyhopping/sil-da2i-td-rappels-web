<footer>
    <link rel="stylesheet" type="text/css" href="style.css">
		<h2>Site realisé par Jan Edward López Dobrusin.</h2>
	</footer>
	<script>
		$(document).ready(function() {
    // votre script
    $('dt').each(function(){
    $(this).data( "clic", { value:0 });
    });
    $('dd').each(function(){
    $(this).data( "clic", { value:0 });
    });
    function aside(){$('aside').hide(2000);}
    function figure(){$('figure').fadeOut(2000);}
    function menu(){$('nav').slideToggle(500);}
    $('#hideAside').on('click', function() {
    aside();
});
    $('#fadeImg').on('click', function() {
    figure();
});
    $('#toggleMenu').on('click', function() {
    menu();
});
    $('dt').on('mouseenter',function() {
    $(this).next().show(400);
    });
    $('dt').on('mouseleave',function() {
    $(this).next().hide(400);
    });
    $('dd').on('click',function() {
        $(this).closest("dt").css("color","red");
        console.log(JSON.stringify($(this).closest('dt')));
        $(this).data('clic').value += 1;
        console.log('clic sur cet élément : '+$(this).data('clic').value);
        if($(this).data('clic').value%2==0)
        {
            $('dt').on('mouseenter',function() {
    $(this).next().show(400);
    });
    $('dt').on('mouseleave',function() {
    $(this).next().hide(400);
    }); 
        }
        else
        {
         $(this).off("mouseleave");
         $(this).off("mouseenter");  
        }
    });
    $('dt').on('click',function() {
    $(this).data('clic').value += 1;
    console.log('clic sur cet élément : '+$(this).data('clic').value);
        if($(this).data('clic').value%2==0)
        {
            $('dt').on('mouseenter',function() {
    $(this).next().show(400);
    });
    $('dt').on('mouseleave',function() {
    $(this).next().hide(400);
    });
        }
        else
        {
                 $(this).off("mouseleave");
                 $(this).off("mouseenter");  
        }
    });
	});
</script>