@extends('layouts.template2')
@section('titolo')
    Questionario Fatturazione
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
                                        <li class="mkdf-pt-title-holder">
                                            <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">
                                                Questionario Fatturazione Elettronica
                                            </span>
                                        </li>
                                        <li class="mkdf-pt-content-bottom">
                                            <ul>
                                                <div style="font-weight: bold; font-size: 20px">

                                                    <form class="wpcf7-form cf7_custom_style_1">
                                                        <input type="hidden" name="_token" id="_token"    value="{{csrf_token()}}">

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue"></div>
                                                            <div class="mkdf-grid-col-7" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">

                                                                </span></div>
                                                            <div class="mkdf-grid-col-2" style="text-align: right!important;"><span
                                                                        class="wpcf7-form-control-wrap email">
                                                                    Nome Azienda
                                                                </span></div>
                                                            <div class="mkdf-grid-col-1"><span
                                                                        class=""><input style="border-radius: 5px; background-color: white; padding: 5px; border: 1px solid black; width: 200px; color: black; font-weight: 400; font-family: Arial"
                                                                            type="text" required name="azienda" id="azienda" value=""
                                                                            class=""
                                                                            aria-invalid=""
                                                                    /></span></div>

                                                        </div>


                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue"></div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">

                                                                </span></div>
                                                            <div class="mkdf-grid-col-1" style="margin-top:5px;text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap email">
                                                                    e-mail
                                                                </span></div>
                                                            <div class="mkdf-grid-col-1"><span
                                                                        class=""><input
                                                                            type="text" required name="mail" id="mail" value="" size="28" style="background-color: white; margin-top: 5px; padding: 5px; border-radius: 5px; border: 1px solid black; width: 200px; color: black; font-weight: 400; font-family: Arial"
                                                                            class=""
                                                                            aria-invalid=""
                                                                    /></span></div>

                                                        </div>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Numero Fatture Attive Annue</div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"></div>

                                                        </div>
                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">

                                                            <div class="mkdf-grid-col-1"><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            type="text" size="4" name="fattive" id="fattive" value=""  style="background-color: white; margin-top: 5px; padding: 5px; border-radius: 5px; border: 1px solid black; color: black; font-weight: 400; font-family: Arial"
                                                                            class=""
                                                                            aria-invalid=""
                                                                    /></span></div>
                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Numero Fatture Passive Annue</div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"></div>

                                                        </div>
                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">

                                                            <div class="mkdf-grid-col-1"><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            type="text" size="4" name="fpassive" id="fpassive" value=""  style="background-color: white; margin-top: 5px; padding: 5px; border-radius: 5px; border: 1px solid black; color: black; font-weight: 400; font-family: Arial"
                                                                            class=""
                                                                            aria-invalid=""
                                                                    /></span></div>
                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">
                                                                Disponi di un Software per la creazione della Fattura Elettronica?
                                                            </div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"></div>

                                                        </div>
                                                        <div class="mkdf-grid-col-4" style="text-align: left!important;">
                                                            <input type="radio" name="software" value="si"/>
                                                            <label for="software">si</label>

                                                            <input type="radio" name="software" value="no" />
                                                            <label for="software">no</label>
                                                        </div>

                                                        <br><br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">
                                                                Sei interessato ad affidare il servizio in Outsourcing? (In questo caso dovrai fornirci le tue fatture in formato PDF)
                                                            </div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"></div>

                                                        </div>
                                                        <div class="mkdf-grid-col-4" style="text-align: left!important;">
                                                            <input type="radio" name="outsourcing" value="si"/>
                                                            <label for="outsourcing">si</label>

                                                            <input type="radio" name="outsourcing" value="no" />
                                                            <label for="outsourcing">no</label>
                                                        </div>

                                                        <br><br><br>



                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: justify!important;">

                                                                <input type="checkbox" id="consenso" name="consenso" required>Ho letto l'<a href="{{route('informativa')}}" target="_blank">Informativa</a> sulla Privacy e acconsento al trattamento dei dati personali
                                                            </div>

                                                        </div>

                                                        <div id="messquest" style="text-align:center!important; height: 70px; color: black; border-radius: 20px; padding-top: 25px; margin-top: 60px; border: 1px solid black; display: none; background-color: lightgreen">

                                                        </div>


                                                        <p style="text-align:center; margin-top: 60px">
                                                            <a title="Invia questionario" id="inviaquestionario" href="{{route('fatturarazione.inviaquestionario')}}" class="cornice mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra not-active">
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
                <div style="text-align: right; margin-top: 30px">
                    <button style="background-color: #95b9e0;" class="cornice mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" onclick="goBack()">Go Back</button>
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
                        'azienda' : jQuery('#azienda').val(),
                        'mail' : jQuery('#mail').val(),
                        'fattive' : jQuery('#fattive').val(),
                        'fpassive' : jQuery('#fpassive').val(),
                        'software' : jQuery('input[name=software]:checked').val(),
                        'outsourcing' : jQuery('input[name=outsourcing]:checked').val()
                    },
                    complete : function (resp) {
                        console.log(resp.responseText);

                        if(resp.responseText == 1){
                            jQuery("input[type='text']").val("");
                            jQuery("input[type='radio']").prop('checked', false);
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