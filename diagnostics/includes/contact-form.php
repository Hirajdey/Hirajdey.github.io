<div class="serviceForm wrapper" ng-app="contactApp">
    <div class="leftAlign bgAlign" ng-controller="contactCtrl">
        <form novalidate>
            <div class="serviceFormCatInput">
                <div class="inputField name">
                    <input type="text" name="firstname" ng-model="name" placeholder="Name *" />
                    <span class="inputFieldImg"></span>
                    <div ng-show="nameValid" class="contact-error-text">Name field is not valid</div>
                </div>
                <div class="inputField email">
                    <input type="text" name="email" ng-model="email" placeholder="Email *" />
                    <span class="inputFieldImg"></span>
                    <div ng-show="emailValid" class="contact-error-text">Email field is not valid</div>
                </div>
                <div class="inputField organisation">
                    <input type="text" name="lastname" ng-model="city" placeholder="City *" />
                    <span class="inputFieldImg"></span>
                    <div ng-show="cityValid" class="contact-error-text">City field is not valid</div>
                </div>
                <div class="inputField phonenumber">
                    <input type="text" name="lastname" ng-model="phone" placeholder="Phone Number *" />
                    <span class="inputFieldImg"></span>
                    <div ng-show="phoneValid" class="contact-error-text">Phone field is not valid</div>
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
</div>
<script src="js/claria-contact.js"></script>