function set_turbolinks_status( selector, status )
{
    if ( !selector || status === undefined )
        return;

    if ( selector[0] == '#' )
    {
        var el = document.getElementById( selector.substr(1) );
        if ( el != null )
            el.setAttribute( 'data-turbolinks', status );

        return;
    }

    if ( selector[0] == '.' )
    {
        var list = document.getElementsByClassName( selector.substr(1) );
        if ( list.length )
            for ( i = 0; i < list.length; ++i )
                list[i].setAttribute( 'data-turbolinks', status );

        return;
    }

    document.querySelectorAll( selector ).forEach( function ( el ) {
        el.setAttribute( 'data-turbolinks', status );
    });
}

document.addEventListener('turbolinks:load', function ()
{
    // everything is a turbolink

    // except the toolbar
    set_turbolinks_status( '#wpadminbar', false );
    // except anchor links
    set_turbolinks_status( 'a[href^="#"]', false );
});

