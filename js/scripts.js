$(function() {
    $('nav.mobile').click(function() {
        var listaMenu = $('nav.mobile ul');
        if (listaMenu.is(':hidden') == true) {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listaMenu.slideToggle();
        } else {
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }
    });

    if ($('target').length > 0) {
        //o elemento existe, portanto precisamos dar um scroll em algum elemento.
        var elemento = '#' + $('target').attr('target');
        var sectionSroll = $(elemento).offset().top;
        $('html,body').animate({ 'scrollTop': sectionSroll }, 1000)
    }

    dynamicLoading();

    function dynamicLoading() {
        $('[realtime]').click(function() {
            var pagina = $(this).attr('realtime');
            $('.container-principal').hide();
            $('.container-principal').load(include_path + 'pages/' + pagina + '.php');

            setTimeout(function() {
                initialize();
                addMarker(-6.218186, -36.025616, '', 'Minha casa', undefined, false);
            }, 1000);
            $('.container-principal').fadeIn(1000);

            return false;
        })
    }
});