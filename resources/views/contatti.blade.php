@extends('layouts.template2')
@section('titolo')
    contatti
    @stop

@section('content')
    <div class="mkdf-content">
        <div class="mkdf-content-inner">
            <div class="mkdf-full-width">
                <div class="mkdf-full-width-inner">
                    <div class="mkdf-grid-row">
                        <div class="mkdf-page-content-holder mkdf-grid-col-12">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6383.048477983116!2d11.821567258138641!3d43.46035252237936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132bed73648df36b%3A0x55db17e7301bcb62!2sCounselingsrl!5e1!3m2!1sit!2sit!4v1525646771347"  frameborder="2" style="border:0; width: 100%; height: 450px" allowfullscreen></iframe>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mkdf-row-grid-section-wrapper mkdf-content-aligment-center">
                                <div class="mkdf-row-grid-section">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1522075243296">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="mkdf-section-title-holder  "
                                                         style="text-align: center">
                                                        <div class="mkdf-st-inner">
                                                            <h3 class="mkdf-st-title">
                                                                <br> </h3>
                                                            <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                                                <div class="mkdf-separator"
                                                                     style="width: 143px;border-bottom-width: 2px"></div>
                                                            </div>
                                                            <h6 class="mkdf-st-text">
                                                                <br> </h6>
                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 52px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--<div class="mkdf-row-grid-section-wrapper ">
                                <div class="mkdf-row-grid-section">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1522075183756">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-10">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div role="form" class="wpcf7" id="wpcf7-f1608-p399-o1"
                                                         lang="en-US" dir="ltr">
                                                        <div class="screen-reader-response"></div>
                                                        <form action="/contact-us/#wpcf7-f1608-p399-o1"
                                                              method="post" class="wpcf7-form cf7_custom_style_1"
                                                              novalidate="novalidate">
                                                            <div style="display: none;">
                                                                <input type="hidden" name="_wpcf7" value="1608"/>
                                                                <input type="hidden" name="_wpcf7_version"
                                                                       value="5.0.1"/>
                                                                <input type="hidden" name="_wpcf7_locale"
                                                                       value="en_US"/>
                                                                <input type="hidden" name="_wpcf7_unit_tag"
                                                                       value="wpcf7-f1608-p399-o1"/>
                                                                <input type="hidden" name="_wpcf7_container_post"
                                                                       value="399"/>
                                                            </div>
                                                            <div>
                                                                <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                                    <div class="mkdf-grid-col-6"><span
                                                                                class="wpcf7-form-control-wrap text"><input
                                                                                    type="text" name="text" value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="First Name"/></span>
                                                                    </div>
                                                                    <div class="mkdf-grid-col-6"><span
                                                                                class="wpcf7-form-control-wrap text"><input
                                                                                    type="text" name="text" value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Last Name"/></span>
                                                                    </div>
                                                                </div>
                                                                <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                                    <div class="mkdf-grid-col-6"><span
                                                                                class="wpcf7-form-control-wrap email"><input
                                                                                    type="email" name="email"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="E-mail"/></span>
                                                                    </div>
                                                                    <div class="mkdf-grid-col-6"><span
                                                                                class="wpcf7-form-control-wrap tel"><input
                                                                                    type="tel" name="tel" value=""
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Telephone"/></span>
                                                                    </div>
                                                                </div>
                                                                <div class="mkdf-grid-row mkdf-grid-normal-gutter">
                                                                    <div class="mkdf-grid-col-12"><span
                                                                                class="wpcf7-form-control-wrap textarea"><textarea
                                                                                    name="textarea" cols="40"
                                                                                    rows="10"
                                                                                    class="wpcf7-form-control wpcf7-textarea"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Message"></textarea></span>
                                                                    </div>
                                                                </div>
                                                                <p style="text-align:center;">
                                                                    <input type="submit" value="Contact Us"
                                                                           class="wpcf7-form-control wpcf7-submit"/>
                                                                </p>
                                                            </div>
                                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                            <div class="mkdf-row-grid-section-wrapper mkdf-parallax-row-holder mkdf-content-aligment-left"
                                 data-parallax-bg-image=http://anwalt.mikado-themes.com/wp-content/uploads/2018/04/p-contact-parallax-1.jpg
                                 data-parallax-bg-speed=1 style="height: 300px!important;">
                                <div class="mkdf-row-grid-section">
                                    <div class="vc_row wpb_row vc_row-fluid call-us vc_custom_1522653893992">
                                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-0">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    {{--<div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h5><span style="color: #ffffff;">London Office</span>
                                                            </h5>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p>
                                                                <a href="https://www.google.rs/maps/place/Belgrave+Hostel,+9-13+Clapham+Rd,+London+SW9+0JD,+%D0%92%D0%B5%D0%BB%D0%B8%D0%BA%D0%B0+%D0%91%D1%80%D0%B8%D1%82%D0%B0%D0%BD%D0%B8%D1%98%D0%B0/@51.4803652,-0.1158271,17z/data=!3m1!4b1!4m5!3m4!1s0x4876048c5981fa95:0x53c97e68fe940d1c!8m2!3d51.4803619!4d-0.1136384">9
                                                                    Clapham Road, London SW9</a><br/>
                                                                <span style="color: #ffffff;">Phone: </span><a
                                                                        href="tel:0088 202 0000 001">+88 (0) 101
                                                                    0000 001</a><br/>
                                                                <span style="color: #ffffff;">Fax: </span><a
                                                                        href="tel:0088 202 0000 001">+88 (0) 101
                                                                    0000 001</a><br/>
                                                                <span style="color: #ffffff;">Email: </span><a
                                                                        href="mailto:info@example.com">info@example
                                                                    .com</a></p>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 32px"><span
                                                                class="vc_empty_space_inner"></span></div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-0">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h5><span style="color: #ffffff;">Arezzo<br/>
</span></h5>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p>
                                                                <a href="https://www.google.rs/maps/place/The+Nomad+Hotel/@40.7461394,-73.9883576,14.75z/data=!4m15!1m9!2m8!1z0KXQvtGC0LXQu9C4!3m6!1z0KXQvtGC0LXQu9C4!2z0IrRg9GY0L7RgNC6LCDQodGY0LXQtNC40ZrQtdC90LUg0JTRgNC20LDQstC1!3s0x89c24fa5d33f083b:0xc80b8f06e177fe62!4m2!1d-74.0059728!2d40.7127753!3m4!1s0x89c259a60a2beaf9:0xac8f81eb5975ef53!8m2!3d40.7449648!4d-73.9885479">
                                                                    Via Calamandrei, 257 - Arezzo</a><br/>
                                                                <span style="color: #ffffff;">Telefono: </span><a
                                                                        href="tel:0088 202 0000 001">+88 (0) 202
                                                                    0000 001</a><br/>

                                                                <span style="color: #ffffff;">Email: </span><a
                                                                        href="mailto:info@example.com">info@example
                                                                    .com</a></p>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 32px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-0">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    {{--<div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h5><span style="color: #ffffff;">Oslo Office</span>
                                                            </h5>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p>
                                                                <a href="https://www.google.rs/maps/place/Sonja+Henies+plass+2,+0185+Oslo,+%D0%9D%D0%BE%D1%80%D0%B2%D0%B5%D1%88%D0%BA%D0%B0/@59.9126053,10.7526039,17z/data=!3m1!4b1!4m5!3m4!1s0x46416e61cf400a5d:0x9c5484b2a3ecbfdd!8m2!3d59.9126026!4d10.7547925">Sonja
                                                                    Henies plass 2, 0185</a><br/>
                                                                <span style="color: #ffffff;">Phone: </span><a
                                                                        href="tel:0088 202 0000 001">+88 (0) 303
                                                                    0000 001</a><br/>
                                                                <span style="color: #ffffff;">Fax: </span><a
                                                                        href="tel:0088 202 0000 001">+88 (0) 303
                                                                    0000 001</a><br/>
                                                                <span style="color: #ffffff;">Email: </span><a
                                                                        href="mailto:info@example.com">info@example
                                                                    .com</a></p>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 32px"><span
                                                                class="vc_empty_space_inner"></span></div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-3 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-0">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    {{--<div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <h5><span style="color: #ffffff;">Zurich Office</span>
                                                            </h5>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <p>
                                                                <a href="https://www.google.rs/maps/place/Bahnhofpl.+15,+8001+Z%C3%BCrich,+Switzerland/@47.3783769,8.5384623,16.75z/data=!4m5!3m4!1s0x47900a088e98dadd:0xac7de6de7cfa2970!8m2!3d47.3774848!4d8.5401509?hl=en">Bahnhofpl.
                                                                    15, 8021</a><br/>
                                                                <span style="color: #ffffff;"> Phone: </span><a
                                                                        href="tel:0088 202 0000 001">+88 (0) 404
                                                                    0000 001</a><br/>
                                                                <span style="color: #ffffff;"> Fax: </span><a
                                                                        href="tel:0088 202 0000 001">+88 (0) 404
                                                                    0000 001</a><br/>
                                                                <span style="color: #ffffff;">Email: </span><a
                                                                        href="mailto:info@example.com">info@example
                                                                    .com</a></p>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 32px"><span
                                                                class="vc_empty_space_inner"></span></div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mkdf-row-grid-section-wrapper mkdf-content-aligment-center">
                                <div class="mkdf-row-grid-section">
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1522075243296">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="mkdf-section-title-holder  "
                                                         style="text-align: center">
                                                        <div class="mkdf-st-inner">
                                                            <h3 class="mkdf-st-title">
                                                                <br> </h3>
                                                            <div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
                                                                <div class="mkdf-separator"
                                                                     style="width: 143px;border-bottom-width: 2px"></div>
                                                            </div>
                                                            <h6 class="mkdf-st-text">
                                                                <br> </h6>
                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space" style="height: 52px"><span
                                                                class="vc_empty_space_inner"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div> <!-- close div.content_inner -->
    </div>
    @stop