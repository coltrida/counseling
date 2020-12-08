@extends('layouts.template3')
@section('titolo')
    Questionario
@stop

@section('content')
    <div class="vc_row wpb_row vc_row-fluid  vc_custom_1522659030108 mkdf-content-aligment-center"
         style="background-color:rgba(194,170,128,0.08);">
        <div class="wpb_column vc_column_container vc_col-sm-12" >
            <div style="width: 80%; margin: 0 auto">
            <div class="vc_column-inner " >
                <div class="wpb_wrapper" >
                    <div class="wpb_text_column wpb_content_element " >
                        <div class="wpb_wrapper" >
                            <div class="mkdf-price-table mkdf-item-space " >
                                <div class="mkdf-pt-inner ombra">
                                    <ul>
                                        <li class="mkdf-pt-title-holder" style="background-color: white">
                                            <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">
                                                <div style="display: flex; justify-content: space-around; ">
                                                    <div>
                                                        <img width="250px" src="{{asset('img/questionarioStudioCorsetti/1.png')}}" alt="">
                                                        <div style="display: flex; justify-content: space-around; font-size: 16px; color: blue;">
                                                            <div>
                                                                Alessandro Corsetti
                                                                <br>
                                                                Commercialista
                                                                <br>
                                                                Revisore Contabile
                                                            </div>

                                                            <div>
                                                                Paolo Lazzeri
                                                                <br>
                                                                Consulente del Lavoro
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div>
                                                        <img width="180px" src="{{asset('img/questionarioStudioCorsetti/2.gif')}}" alt="">
                                                        <div style="display: flex; justify-content: space-around; font-size: 16px; color: blue;">
                                                            <div>
                                                                Alessandra Corsetti - Barbara  Sestini
                                                                <br>
                                                                Antonella Livio  - Andrea Corsetti
                                                            </div>

                                                            <div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </li>
                                        <li class="mkdf-pt-content-bottom">
                                            <h5 style="margin-top: -15px; margin-bottom: 50px">
                                                AGGIORNAMENTO ANAGRAFICHE STUDIO PER FATTURAZIONE ELETTRONICA
                                            </h5>
                                            <ul>
                                                <div style="font-weight: bold; font-size: 20px">

                                                    <form class="wpcf7-form cf7_custom_style_1">
                                                        <input type="hidden" name="_token" id="_token"    value="{{csrf_token()}}">

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Cliente/Ragione/Denominazione Sociale</div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                </span></div>

                                                        </div>
                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">

                                                            <div class="mkdf-grid-col-1"><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            style="padding: 8px"
                                                                            type="tel" name="cliente" id="cliente" value="" size="100%"
                                                                            class=""
                                                                            aria-invalid="false"
                                                                            /></span></div>
                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Indirizzo/Sede Sociale</div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                </span></div>

                                                        </div>
                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">

                                                            <div class="mkdf-grid-col-1"><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            style="padding: 8px"
                                                                            type="tel" name="indirizzo" id="indirizzo" value="" size="100%"
                                                                            class=""
                                                                            aria-invalid="false"
                                                                    /></span></div>
                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Indirizzo mail </div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                </span></div>

                                                        </div>
                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">

                                                            <div class="mkdf-grid-col-1"><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            style="padding: 8px"
                                                                            type="tel" name="mail" id="mail" value="" size="100%"
                                                                            class=""
                                                                            aria-invalid="false"
                                                                    /></span></div>
                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Indirizzo mail PEC </div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                </span></div>

                                                        </div>
                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">

                                                            <div class="mkdf-grid-col-1"><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            style="padding: 8px"
                                                                            type="tel" name="pec" id="pec" value="" size="100%"
                                                                            class=""
                                                                            aria-invalid="false"
                                                                    /></span></div>
                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Telefono - fax - cellulare </div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                </span></div>

                                                        </div>
                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">

                                                            <div class="mkdf-grid-col-1" style="display: flex"><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            style="padding: 8px"
                                                                            type="tel" name="telefono" id="telefono" value="" size="25"
                                                                            class=""
                                                                            aria-invalid="false"
                                                                    /></span><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            style="padding: 8px"
                                                                            type="tel" name="fax" id="fax" value="" size="25"
                                                                            class=""
                                                                            aria-invalid="false"
                                                                    /></span><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            style="padding: 8px"
                                                                            type="tel" name="cell" id="cell" value="" size="25"
                                                                            class=""
                                                                            aria-invalid="false"
                                                                    /></span></div>
                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Persona/socio di riferimento per comunicazioni aziendali -  telefono - mail </div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                </span></div>

                                                        </div>
                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">

                                                            <div class="mkdf-grid-col-1" style="display: flex"><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            style="padding: 8px"
                                                                            type="tel" name="riferimento" id="riferimento" value="" size="35"
                                                                            class=""
                                                                            aria-invalid="false"
                                                                    /></span><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            style="padding: 8px"
                                                                            type="tel" name="riftel" id="riftel" value="" size="25"
                                                                            class=""
                                                                            aria-invalid="false"
                                                                    /></span><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            style="padding: 8px"
                                                                            type="tel" name="rifmail" id="rifmail" value="" size="25"
                                                                            class=""
                                                                            aria-invalid="false"
                                                                    /></span></div>
                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: justify!important;">
                                                                <input type="checkbox" id="consenso" name="consenso" required>Ho letto l'informativa contenuta nella mail di provenienza
                                                            </div>

                                                        </div>

                                                        <div id="messquest" style="text-align:center!important; height: 70px; color: black; border-radius: 20px; padding-top: 25px; margin-top: 60px; border: 1px solid black; display: none; background-color: lightgreen">

                                                        </div>


                                                        <p style="text-align:center; margin-top: 60px">
                                                            <a title="Invia questionario" id="inviaquestionario" href="{{route('sendquestcorsetti')}}" class="cornice mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra not-active">
                                                                invia</a>
                                                        </p>

                                                    </form>

                                                </div>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            </div>

        </div>
    </div>
@stop

@section('fondo')
<script>
    jQuery('document').ready(function () {

        jQuery('#inviaquestionario').on('click', function (ele) {
            ele.preventDefault();
            var urlmail =   jQuery(this).attr('href');

            jQuery('#messquest').fadeIn(1000);
            jQuery('#messquest').html("Invio in corso... Attendere");

            jQuery.ajax(
                urlmail,
                {
                    method: 'POST',
                    dataType: 'json',
                    data : {
                        '_token' : jQuery('#_token').val(),
                        'cliente' : jQuery('#cliente').val(),
                        'indirizzo' : jQuery('#indirizzo').val(),
                        'mail' : jQuery('#mail').val(),
                        'pec' : jQuery('#pec').val(),
                        'telefono' : jQuery('#telefono').val(),
                        'fax' : jQuery('#fax').val(),
                        'cell' : jQuery('#cell').val(),
                        'riferimento' : jQuery('#riferimento').val(),
                        'riftel' : jQuery('#riftel').val(),
                        'rifmail' : jQuery('#rifmail').val()
                    },
                    complete : function (resp) {
                        console.log(resp.responseText);

                        if(resp.responseText == 1){
                            jQuery("input[type='tel']").val("");
                            jQuery('#consenso').prop('checked', false);
                            /*jQuery('#messquest').fadeIn(2000);*/
                            jQuery('#messquest').html("Questionario inviato");
                            jQuery('#messquest').fadeOut(4000);

                        } else {
                            var cc = JSON.parse(resp.responseText);
                            if(cc.errors.content){
                                jQuery('#mess').html(cc.errors.content + " <br> messaggio non inviato");
                            }
                            if(cc.errors.mailfrom){
                                jQuery('#mess').html(cc.errors.mailfrom + " <br> messaggio non inviato");
                            }
                            jQuery('#messquest').css("height", 80);
                            jQuery('#messquest').fadeIn(2000);
                            jQuery('#messquest').fadeOut(3000);
                        }
                    }
                }
            )
        });
    });
</script>

<script>

    $("#consenso").change(function() {
        if(this.checked) {
            $("#inviaquestionario").removeClass('not-active');
        }else{
            $("#inviaquestionario").addClass('not-active');
        }
    });

</script>
@stop