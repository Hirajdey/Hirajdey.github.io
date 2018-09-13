<div class="form-content contact-form" ng-app="contactApp" ng-controller="contactCtrl">
    <form>
        <div class="simple-inputs">
            <input type="text" name="full-name" id="full-name-contact" placeholder="Name *" class="name" ng-model="name"/><i class=" fa fa-user"></i>
            <div ng-show="nameValid" class="contact-error-text">Name field is not valid</div>

            <input type="text" name="city" id="city-contact" placeholder="City *" class="city" ng-model="city"/><i class=" fa fa-building"></i>
            <div ng-show="cityValid" class="contact-error-text">City field is not valid</div>

            <input type="text" name="mail-address" id="mail-address-contact" placeholder="Email *" class="email" ng-model="email"/><i class=" fa fa-envelope"></i>
            <div ng-show="emailValid" class="contact-error-text">Email field is not valid</div>

            <input type="text" name="phone-number" id="phone-number-contact" placeholder="Phone Number *" class="phone" ng-model="phone"/><i class=" fa fa-phone"></i>
            <div ng-show="phoneValid" class="contact-error-text">Phone field is not valid</div>

        </div>
        <div id="mail-sent" style="display: none;">
            <div class="row">
                <div class="col-md-12 text-center text-success">Thank you for your interest in MedGenome.</div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center text-success">We are reviewing your request and will get back to you within 1 business day.</div>
            </div>
        </div>

        <div id="mail-sent-failed" style="display: none;">
            <div class="row">
                <div class="col-md-12 text-center text-danger">Sorry, Mail has not been send</div>
            </div>
        </div>
        <div class="submit-input">
            <input type="submit" ng-click="submit()" value="submit"/>
        </div>
    </form>
</div>

<!--<div class="serviceForm wrapper" ng-app="contactApp">
    <div class="leftAlign bgAlign" ng-controller="contactCtrl">
        <form novalidate>
            <div class="serviceFormCatInput">
                <div class="inputField name">
                    <input type="text" name="firstname" ng-model="name" placeholder="Name" /><p>*</p>
                    <span class="inputFieldImg"></span>
                    <div ng-show="nameValid" class="contact-error-text">Name field is not valid</div>
                </div>
                <div class="inputField email">
                    <input type="text" name="email" ng-model="email" placeholder="Email" /><p>*</p>
                    <span class="inputFieldImg"></span>
                    <div ng-show="emailValid" class="contact-error-text">Email field is not valid</div>
                </div>
                <div class="inputField organisation">
                    <input type="text" name="lastname" ng-model="city" placeholder="City" /><p>*</p>
                    <span class="inputFieldImg"></span>
                    <div ng-show="emailValid" class="contact-error-text">City field is not valid</div>
                </div>
                <div class="inputField phonenumber">
                    <input type="text" name="lastname" ng-model="phone" placeholder="Phone Number" /><p>*</p>
                    <span class="inputFieldImg"></span>
                    <div ng-show="emailValid" class="contact-error-text">Phone field is not valid</div>
                </div>

            </div>
            <div class="serviceFormCat">
                <div class="input">&nbsp;</div>
                <div class="inputThanksTextDiv" id="mail-sent" style="display: none;">
                    <span class="inputThanksText">Thank you for your interest in MedGenome.</span><br/>
                    <span class="inputThanksText">We are reviewing your request and will get back to you within 1 business day.</span>
                </div>
                <div class="inputThanksTextDiv" id="mail-sent-failed" style="display: none;">
                    <span class="inputThanksText">Sorry, Mail has not been send</span><br/>
                </div>
                <div class="submitBtn"><input ng-click="submit()" type="submit" value="Submit"/></div>
            </div>
        </form>
    </div>
</div>-->
<script src="../js/claria-contact.js"></script>