<form class="dg-form" id="trail_dg_form">
    <!-- onsubmit="return validateTrailForm()" -->

    <fieldset>
        <div id="successdisp" style="display:none;">
            <div id="successmsg"></div>
        </div>
        <!-- <section>
                                <a href="#" id="lang_en_id" onclick="changeLang('en')" style="display: none;">English</a>&nbsp;&nbsp;
                                <a href="#" id="lang_fr_id" onclick="changeLang('fr')">French</a>&nbsp;&nbsp;
                                <a href="#" id="lang_sp_id" onclick="changeLang('sp')">Spanish</a>
                            </section> -->
        <div id="formdisp">
            <div class="row">
                <section class="col col-6">
                    <label class="label" for="product">Select Product</label>
                    <label class="select">
                        <select id="product" name="product" onchange="setProductOptions()" required="">
                            <option value="">select</option>
                            <option value="1">DGMobi</option>
                            <option value="2">DGDox</option>
                            <option value="3">DGSMS</option>
                            <option value="4">DGCheck</option>
                            <option value="5">DGVFF</option>
                        </select>
                        <i></i>
                    </label>
                </section>
                <section class="col col-6">
                    <label class="label" for="name">Name</label>
                    <label class="input">
                        <i class="icon-append fa fa-user"></i>
                        <input type="text" name="name" id="name" required="">
                        <span id="divNameCheck1"></span>
                    </label>
                </section>
            </div>
            <!-- <div class="row">
                            <section class="col col-6">
                                <label class="label" id="select_rule_label">Select Regulation</label>
                                <label class="select">
                                    <select id="rule_select_id" onchange="setDeviceOptions(this.value)" required="">
                                        <option>select</option>
                                        <option value="1">49 CFR - USA</option>
                                        <option value="2">TDG - CANADA</option>
                                        <option value="3">IATA</option>
                                        <option value="4">IMDG</option>
                                    </select>
                                    <i></i>
                                </label>
                            </section> -->

            <!-- <section class="col col-6">
                                <label class="label" id="select_device_label">Select Device</label>
                                <label class="select">
                                    <select id="device_select_id" required="">
                                        <option value="" selected="">select</option>
                                        <option value="1">Mobile - iOS</option>
                                        <option value="2">Mobile - Android</option>
                                        <option value="2">WEB (Laptop/Desktop)</option>
                                    </select>
                                    <i></i>
                                </label>
                            </section> 
                        </div>-->
            <div class="row">
                <section class="col col-6">
                    <label class="label" for="email">E-mail</label>
                    <label class="input">
                        <i class="icon-append fa fa-envelope-o"></i>
                        <input type="email" name="email" id="email" required="">
                        <span id="divEmailCheck12"></span>
                    </label>
                </section>
                <section class="col col-6">
                    <label class="label" for="phone_number_trial">Phone Number</label>
                    <label class="input">
                        <i class="icon-append fa fa-phone"></i>
                        <input type="text" name="phone_number_trial" id="phone_number_trial" maxlength="15" required="">
                        <span id="divPhoneCheck12"></span>
                        <!-- Phone number format - +1 Areacode and 7 digits pattern="[7-9]{1}[0-9]{9}"-->
                    </label>
                </section>

            </div>
            <div class="row">
                <section class="col">
                    <label class="label" for="message">Message</label>
                    <label class="textarea">
                        <textarea required name="message" id="message" class="textarea"></textarea>
                    </label>
                </section>

            </div>

            <div class="row">
                <section class="">
                    <label class="checkbox">
                        <input type="checkbox" id="terms_conditions_checkbox1" required>
                        <a href="../pages/technical_eng.html" target="_blank" id="terms_anchortag1">I
                            Accept
                            Terms and Conditions</a></label>
                </section>
            </div>

            <div class="row">
                <section class="col">
                    <label class="label">
                        <span id="footer_notes_text">For volume sales – please contact</span>
                        <a href="mailto:sales@dgsmsusa.com">sales@dgsmsusa.com</a>
                    </label>
                </section>
            </div>

            <div class="form_footer">
                <!-- <p style="float:left;"><span id="footer_notes_text">For volume sales – please contact</span>
                    <a href="mailto:sales@dgsmsusa.com">sales@dgsmsusa.com</a></p> -->
                <button type="submit" class="button" id="try_now_button_text">Request</button>
                <span id="loader_span_id1"> </span>
            </div>
        </div>
    </fieldset>
</form>