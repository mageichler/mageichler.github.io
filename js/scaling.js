$( ".scaleUp" ).click(function() {
    if($( "#"+$(this).parent().attr('aria-label')+"" ).height() <= '1000') {
        $( "#"+$(this).parent().attr('aria-label')+"" ).height( $( "#"+$(this).parent().attr('aria-label')+"" ).height() * 1.25);
        $( "#"+$(this).parent().attr('aria-label')+"" ).width( $( "#"+$(this).parent().attr('aria-label')+"" ).width() * 1.25);
    };
});

$( ".scaleDown" ).click(function() {
    if($( "#"+$(this).parent().attr('aria-label')+"" ).height() >= '500') {
        $( "#"+$(this).parent().attr('aria-label')+"" ).height( $( "#"+$(this).parent().attr('aria-label')+"" ).height() * 0.8);
        $( "#"+$(this).parent().attr('aria-label')+"" ).width( $( "#"+$(this).parent().attr('aria-label')+"" ).width() * 0.8);
    };
});

$( ".reset" ).click(function() {
    $( "#"+$(this).parent().attr('aria-label')+"" ).height('auto');
    $( "#"+$(this).parent().attr('aria-label')+"" ).width( '100%');
});