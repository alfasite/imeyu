
(function( rJq ) {
    try {
    	rJq.fn.rCheckTermsReady = function() {
            var rInit = {
                rOptions: {
                    bConsole: false
                },
                rSelf: rJq(this),
                rVars: {
                    sEvent: 'submit',
                    sElem: 'form',
                    sElemBtn: 'button, input[type="submit"], [data-checksend]',
                    sElemCheck: '[data-checkterms]',
                    sElemEvent: 'click',
                    sVers: Number(rJq.fn.jquery.replace(/\./, '')).toFixed(1),
                    bVersNew: false
                },
                checkBind: function() {
                    /*
                    rJq(document).ready(function() {
                        rJq(rInit.rVars.sElemCheck).each(function(iIndex) {
                           var rThis = rJq(this);
                           rThis.attr('data-checkinner', 'ch'+iIndex);
                            rInit.log( iIndex );
                        });
                    });
                    */
                    rInit.log( rInit.rVars.sVers );
                    if ( rInit.rVars.sVers >= 17.1 ) {
                        rInit.log( 'init:On' );
                        if ( rInit.rVars.sVers < 17.2 ) {
                            rInit.log( 'init:On < 17.2' );
                            rInit.rSelf.on(
                                rInit.rVars.sEvent,
                                rInit.checkSubmit
                            );
                            rInit.rSelf.on(
                                rInit.rVars.sElemEvent,
                                rInit.checkBox
                            );
                        }
                        else {
                            rInit.log( 'init:On >= 17.2' );
                            rJq(document).on(
                                rInit.rVars.sEvent,
                                rInit.rVars.sElem,
                                rInit.checkSubmit
                            );
                            rJq(document).on(
                                rInit.rVars.sElemEvent,
                                rInit.rVars.sElemCheck,
                                rInit.checkBox
                            );
                        }
                    }
                    else {
                        rInit.log( 'init:Live' );
                        rInit.rSelf.live(
                            rInit.rVars.sEvent,
                            rInit.checkSubmit
                        );
                        rInit.rSelf.live(
                            rInit.rVars.sElemEvent,
                            rInit.checkBox
                        );
                    }
                },
                checkBox: function( rEvent ) {
                    rInit.log( 'click' );
                    rInit.log( rEvent );
                    var rElem = rJq(this);
                    var rChecked = rInit.isCheck( rElem );
                    var rBtn = rElem.parents( rInit.rVars.sElem ).find( rInit.rVars.sElemBtn );
                    if ( rElem.is('input') && !rChecked ) {
                        rInit.log( 'addAttr' );
                        rInit.log( rBtn.attr('name') );
                        rBtn.attr('disabled', 'disabled');
                        rBtn.attr('data-disabled', 'true');
                    }
                    else {
                        rInit.log( 'removeAttr' );
                        rBtn.removeAttr('disabled');
                        rBtn.removeAttr('data-disabled');
                    }
                },
                checkSubmit: function( rEvent ) {
                    var rElem = rJq(this).find( rInit.rVars.sElemCheck );
                    var rChecked = rInit.isCheck( rElem );
                    rInit.log(rInit.rVars.sVers );
                    rInit.log([ rChecked, rEvent, rElem ]);
                    if ( rElem.is('input') && !rChecked ) {
                        rInit.log( 'stop' );
                        rEvent.preventDefault();
                        return false;
                    }
                },
                isCheck: function(rElem) {
                    var rChecked = null;
                    if ( rInit.rVars.sVers >= 16 ) {
                        rInit.log( 'prop' );
                        rChecked = rElem.prop('checked');
                        rInit.log( rChecked );
                    }
                    else {
                        rInit.log( 'attr' );
                        rChecked = rElem.attr('checked');
                    }
                    return rChecked;
                },
                checkVers: function() {
                   rInit.rVars.bVersNew = (rInit.rVars.sVers > rInit.rVars.sVersion);
                   rInit.log(rInit.rVars.sVers);
                   rInit.log(rInit.rVars.bVersNew);
                   if ( jQuery.isFunction( rInit.rSelf.live ) ) {
                        //rInit.rVars.bVersNew = false;
                   }
                },
                log: function(vData) {
                    if (rInit.rOptions.bConsole) {
                        console.log( vData );
                    }
                }
            };
            rInit.checkBind();
            rInit.log( rInit.rSelf );
    	}
        jQuery( 'form' ).rCheckTermsReady();
    }
    catch(e) {
        console.log(e);
    }
})( jQuery );