var PluginBabWaves = function ( canvas ) {
    if( canvas !== null ){
        const first = (canvas.hasAttribute('data-first')) ? canvas.getAttribute('data-first') : 'rgba(255,200,255,0.7)';
        const second = (canvas.hasAttribute('data-second')) ? canvas.getAttribute('data-second') : 'rgba(255,255,255,0.5)';
        const third = (canvas.hasAttribute('data-third')) ? canvas.getAttribute('data-third') : 'rgba(255,255,255,0.3)';
        const fourth = (canvas.hasAttribute('data-fourth')) ? canvas.getAttribute('data-fourth') : 'rgba(255,255,255,0.2)';

        canvas.querySelectorAll('use:nth-child(1)').forEach( function( element ) {
            element.setAttribute('fill', first);
        });
        canvas.querySelectorAll('use:nth-child(2)').forEach( function( element ) {
            element.setAttribute('fill', second);
        });
        canvas.querySelectorAll('use:nth-child(3)').forEach( function( element ) {
            element.setAttribute('fill', third);
        });
        canvas.querySelectorAll('use:nth-child(4)').forEach( function( element ) {
            element.setAttribute('fill', fourth);
        });
    }
}