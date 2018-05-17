@extends('layouts.template2')
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
                                        <li class="mkdf-pt-title-holder" style="background: #95B9E0;">
                                            <span class="mkdf-pt-title" style="font-size: 45px; font-family: 'Microsoft Yi Baiti'!important;">
                                                Questionario Policy di Gestione
                                            </span>
                                        </li>
                                        <li class="mkdf-pt-content-bottom">
                                            <ul>
                                                <div style="font-weight: bold; font-size: 20px">

                                                    <form class="wpcf7-form cf7_custom_style_1">

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue"></div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">

                                                                </span></div>
                                                            <div class="mkdf-grid-col-1" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap email">
                                                                    Azienda
                                                                </span></div>
                                                            <div class="mkdf-grid-col-1"><span
                                                                        class=""><input style="background-color: white; padding: 0; border: 1px solid black; width: 200px; color: black; font-weight: 400; font-family: Arial"
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
                                                            <div class="mkdf-grid-col-1" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap email">
                                                                    P.IVA
                                                                </span></div>
                                                            <div class="mkdf-grid-col-1"><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            type="tel" required name="Titolare" id="titolare" value=""  style="background-color: white; padding: 0; border: 1px solid black; width: 198px; color: black; font-weight: 400; font-family: Arial"
                                                                            class=""
                                                                            aria-invalid="false"
                                                                    /></span></div>

                                                        </div>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue"></div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">

                                                                </span></div>
                                                            <div class="mkdf-grid-col-1" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap email">
                                                                    e-mail
                                                                </span></div>
                                                            <div class="mkdf-grid-col-1"><span
                                                                        class=""><input
                                                                            type="text" required name="mail" id="mail" value="" size="28" style="background-color: white; padding: 0; border: 1px solid black; width: 200px; color: black; font-weight: 400; font-family: Arial"
                                                                            class=""
                                                                            aria-invalid=""
                                                                    /></span></div>

                                                        </div>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Trattamento effettuato da più soggetti</div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                    Esistono soggetti diversi dal titolare   che effettuano il trattamento dati?
                                                                </span></div>
                                                            <div class="mkdf-grid-col-4" style="text-align: left!important;">
                                                                <input type="radio" name="prima" value="si"/>
                                                                <label for="prima">si</label>

                                                                <input type="radio" name="prima" value="no" />
                                                                <label for="prima">no</label>
                                                            </div>
                                                        </div>
                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div class="mkdf-grid-col-1" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap email">
                                                                    numero
                                                                </span></div>
                                                            <div class="mkdf-grid-col-1"><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            type="tel" name="primanumero" id="primanumero" value="" size="4"
                                                                            class=""
                                                                            aria-invalid="false"
                                                                            /></span></div>
                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Utilizzo di strumentazioni informatiche</div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                    Esistono strumenti per l'elaborazione dei dati (computer ed altri dispositivi)
                                                                </span></div>
                                                            <div class="mkdf-grid-col-4" style="text-align: left!important;">
                                                                <input type="radio" name="seconda" value="si"/>
                                                                <label for="prima">si</label>

                                                                <input type="radio" name="seconda" value="no" />
                                                                <label for="prima">no</label>
                                                            </div>
                                                        </div>
                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div class="mkdf-grid-col-1" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap email">
                                                                    numero
                                                                </span></div>
                                                            <div class="mkdf-grid-col-1"><span
                                                                        class="wpcf7-form-control-wrap tel"><input
                                                                            type="tel" name="secondanumero" id="secondanumero" value="" size="4"
                                                                            class=""
                                                                            aria-invalid="false"
                                                                    /></span></div>
                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Siti web</div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                    La tua azienda ha uno o più siti web?
                                                                </span></div>
                                                            <div class="mkdf-grid-col-4" style="text-align: left!important;">
                                                                <input type="radio" name="terza" value="si"/>
                                                                <label for="prima">si</label>

                                                                <input type="radio" name="terza" value="no" />
                                                                <label for="prima">no</label>
                                                            </div>
                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Registro dei trattamenti</div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                    L'azienda ha almeno 250 dipendenti?
                                                                </span></div>
                                                            <div class="mkdf-grid-col-4" style="text-align: left!important;">
                                                                <input type="radio" name="quarta" value="si"/>
                                                                <label for="prima">si</label>

                                                                <input type="radio" name="quarta" value="no" />
                                                                <label for="prima">no</label>
                                                            </div>

                                                            <br>

                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                    Si effettua il trattamento non occasionale di dati personali che
ledano i dritti e le libertà dell'interessato?

                                                                </span></div>
                                                            <div class="mkdf-grid-col-4" style="text-align: left!important;">
                                                                <input type="radio" name="quinta" value="si"/>
                                                                <label for="prima">si</label>

                                                                <input type="radio" name="quinta" value="no" />
                                                                <label for="prima">no</label>
                                                            </div>

                                                            <br>

                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                    Si effettua il trattamento di categorie particolari di dati personali?

                                                                </span></div>
                                                            <div class="mkdf-grid-col-4" style="text-align: left!important;">
                                                                <input type="radio" name="sesta" value="si"/>
                                                                <label for="prima">si</label>

                                                                <input type="radio" name="sesta" value="no" />
                                                                <label for="prima">no</label>
                                                            </div>

                                                            <br>
                                                            <div class="mkdf-grid-col-12" style="margin-top: 10px; font-size: 16px; text-align: justify!important;">
                                                            Secondo l'art. 9 del Regolamento UE 2016/679 (RGPD) si definiscono categorie particolari di dati personali:
                                                            <br>•	quelli che rivelino l'origine razziale o etnica, le opinioni politiche, le convinzioni religiose o filosofiche, o l'appartenenza sindacale
                                                            <br>•	dati genetici, dati biometrici intesi a identificare in modo univoco una persona fisica
                                                            <br>•	dati relativi alla salute o all'orientamento sessuale della persona
                                                            </div>
                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Responsabile Protezione Dati (RPD)</div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                    L'attività principale consiste nel trattamento, su larga scala, di  categorie
particolari di dati personali o di dati relativi a condanne penali o reati?

                                                                </span></div>
                                                            <div class="mkdf-grid-col-4" style="text-align: left!important;">
                                                                <input type="radio" name="settima" value="si"/>
                                                                <label for="prima">si</label>

                                                                <input type="radio" name="settima" value="no" />
                                                                <label for="prima">no</label>
                                                            </div>

                                                            <br>
                                                            <div class="mkdf-grid-col-12" style="margin: 10px 0; font-size: 16px; text-align: justify!important;">
                                                                Per determinare se il trattamento è eseguito su larga scala vanno considerati:
                                                                <br>•	il numero di persone interessate, come numero specifico o come percentuale della popolazione di riferimento;
                                                                <br>•	il volume dei dati e / o la gamma di diversi elementi di dati in corso di elaborazione;
                                                                <br>•	la durata, o la permanenza, di elaborazione dati;
                                                                <br>•	l'estensione geografica delle attività di elaborazione.

                                                            </div>

                                                            <br>

                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                    L'attività principale consiste nel  monitoraggio regolare e sistematico
degli interessi personali su larga scala?

                                                                </span></div>
                                                            <div class="mkdf-grid-col-4" style="text-align: left!important;">
                                                                <input type="radio" name="ottava" value="si"/>
                                                                <label for="prima">si</label>

                                                                <input type="radio" name="ottava" value="no" />
                                                                <label for="prima">no</label>
                                                            </div>


                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: left!important; color: blue">Trattamento effettuato in qualità di responsabile esterno</div>
                                                            <div class="mkdf-grid-col-8" style="text-align: left!important;"><span
                                                                        class="wpcf7-form-control-wrap text">
                                                                    Si svolge il trattamento dati per c/terzi in qualità di responsabile esterno?

                                                                </span></div>
                                                            <div class="mkdf-grid-col-4" style="text-align: left!important;">
                                                                <input type="radio" name="nona" value="si"/>
                                                                <label for="prima">si</label>

                                                                <input type="radio" name="nona" value="no" />
                                                                <label for="prima">no</label>
                                                            </div>

                                                            <br>
                                                            <div class="mkdf-grid-col-12" style="margin: 10px 0; font-size: 16px; text-align: justify!important;">
                                                                Questa situazione è per quanto riguarda il conto terzi, il servizio fiscale e / o contabile, l'assistenza (anche remota) su computer di terzi, ecc. titolare del trattamento che ne ha previsto le finalità.
                                                                Ad esempio, è un responsabile esterno il commercialista che tratta i dati per conto delle aziende.

                                                            </div>


                                                        </div>

                                                        <br>

                                                        <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                            <div style="text-align: justify!important;">
                                                                Il presente questionario verrà utilizzato al solo fine di formulare un preventivo di massima non vincolante, per l’adeguamento a quanto previsto dal Regolamento UE 2016/679 obbligatorio dal 25.05.2018. I dati indicati verranno trattati in rispetto del D.lgs. 196/2003 e Regolamento UE n. 2016/679
                                                                <br>Qualora interessati,  lo stesso dovrà essere compilato ed inviato tramite il pulsante sottostante. Dopo averne preso visione vi sarà inviato un preventivo di massima e non vincolante per l’adeguamento al Regolamento UE 2016/679.

                                                            </div>

                                                        </div>

                                                        <div id="messquest" style="text-align:center!important; height: 50px; padding-top: 8px; margin-top: 60px; border: 1px solid black; display: none">

                                                        </div>


                                                        <p style="text-align:center; margin-top: 60px">
                                                            <a title="Invia questionario" id="inviaquestionario" href="{{route('sendquestionario')}}" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" style="background-color: #0077c0">
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
                    <button style="background-color: #95b9e0;" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid ombra" onclick="goBack()">Go Back</button>
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

            jQuery.ajax(
                urlmail,
                {
                    method: 'POST',
                    dataType: 'json',
                    data : {
                        '_token' : jQuery('#_token').val(),
                        'azienda' : jQuery('#azienda').val(),
                        'titolare' : jQuery('#titolare').val(),
                        'mail' : jQuery('#mail').val(),
                        'primanumero' : jQuery('#primanumero').val(),
                        'secondanumero' : jQuery('#secondanumero').val(),
                        'prima' : jQuery('input[name=prima]:checked').val(),
                        'seconda' : jQuery('input[name=seconda]:checked').val(),
                        'terza' : jQuery('input[name=terza]:checked').val(),
                        'quarta' : jQuery('input[name=quarta]:checked').val(),
                        'quinta' : jQuery('input[name=quinta]:checked').val(),
                        'sesta' : jQuery('input[name=sesta]:checked').val(),
                        'settima' : jQuery('input[name=settima]:checked').val(),
                        'ottava' : jQuery('input[name=ottava]:checked').val(),
                        'nona' : jQuery('input[name=nona]:checked').val(),
                    },
                    complete : function (resp) {
                        console.log(resp.responseText);
                        if(resp.responseText == 1){
                            jQuery('#messquest').fadeIn(2000);
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
@stop