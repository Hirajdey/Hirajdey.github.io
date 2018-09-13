<style>
    #wpforms-confirmation-2059 .wpforms-confirmation-container-full{
        padding: 5px 15px 30px 15px;
    }
    #wpforms-2059-field_0 {
        border: 1px solid #ccc !important;
    }
    #wpforms-2059 input, #wpforms-2059 textarea{
        border: none !important;
        border-bottom: 1px solid #CCC !important;
        padding-left: 1px;
    }
    .wpforms-confirmation-container-full {
        background: grey;
    }
    div.wpforms-container-full .wpforms-form input[type=checkbox], div.wpforms-container-full .wpforms-form input[type=radio]{
        float: left;
        margin: 6px 4px 0px 19px !important;
    }
    .vc_tta-panel-body li::before{
        content:" " !important;
    }
    div.wpforms-container-full{
        display:none;
    }
    .descriptiontext div.wpforms-container-full{
        display:block;
    }
    .descriptiontext div.wpforms-container-full .wpforms-form .wpforms-field{
        color: #898989;
    }
    #wpforms-confirmation-2059 p code{
        display: block !important;
        text-align: center;
        padding: 0px 0px 53px 0px;
    }
    div.wpforms-container-full .wpforms-form ul li{
        float:left;
    }
    .required{
        position: absolute;
        left: 9%;
        top: 3%;
        color: #0ec2cd;
    }
    #wpforms-2059 .wpforms-submit{
        cursor: pointer;
        font-size: 16px;
        border: none;
        float: left;
        padding: 12px;
        margin-top: 10px;
        background: linear-gradient(45deg, rgba(0,192,245,1) 0%,rgba(93,255,207,1) 100%);
        color: #FFF;
        font-weight: 600;
        text-transform: uppercase;
    }
    #management .vc_row{
        text-align: center;
    }
    .close{
        border: 1px solid #CCC;
        position: absolute;
        right: 1%;
        top: 1%;
        border-radius: 50%;
        padding: 3px 8px;
        color: #CCC;
        cursor:pointer;
    }
    .quote-text{
        cursor: pointer;
        font-size: 16px;
        border: none;
        float: left;
        padding: 12px;
        margin-top: 10px;
        background: linear-gradient(45deg, rgba(0,192,245,1) 0%,rgba(93,255,207,1) 100%);
        color: #FFF;
        font-weight: 600;
        text-transform: uppercase;
        margin-left: 42%;
    }
    .descriptiontext{
        color: #000;
        font-size: 15px;
        text-align: justify;
        margin-top: 15px;
        line-height: 1.7;
    }
    table img{
        cursor: pointer;
    }
</style>

<script>
    function show(name, scroll){ //alert(name)
        var popup = document.getElementById(name);
        popup.style.display = "block";
        popup.style.border = "1px solid #cccccc";
        popup.style.padding = "0 30px 30px 30px";
        popup.style.position = "absolute";
        popup.style.left = "22%";
        popup.style.background = "rgb(255, 255, 255)";
        if(scroll == 1)
            window.scrollBy(0,-2700);
    }
    function hide(name){
        var popup = document.getElementById(name);
        popup.style.display = "none";
    }
    function confirmation(){
        var popup = document.getElementById('success');
        popup.style.display = "block";
    }
</script>
</head>
<body>
<div id="sam" style="display:none;z-index:999;width:55%;padding-top: 0px;box-shadow:0px 14px 35px 0px rgba(45,51,68,0.4);">

    <div class="descriptiontext">

        <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
                <div class="wpforms-container wpforms-container-full" id="wpforms-2059">
                    <form method="post" enctype="multipart/form-data" id="wpforms-form-2059" action="/ngs-services/#wpforms-2059" class="wpforms-validate wpforms-form" data-formid="2059" novalidate="novalidate">
                        <div class="wpforms-field-container">
                            <div id="wpforms-2059-field_0-container" class="wpforms-field wpforms-field-name" data-field-id="0">
                                <!--<label class="wpforms-field-label" for="wpforms-2059-field_0">First Name <span class="wpforms-required-label">*</span></label>-->
                                <input type="text" id="wpforms-2059-field_0" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][0]" required="" aria-required="true" placeholder="First Name *">
                            </div>

                            <div id="wpforms-2059-field_4-container" class="wpforms-field wpforms-field-name" data-field-id="4">
                                <!--<label class="wpforms-field-label" for="wpforms-2059-field_4">Last Name <span class="wpforms-required-label">*</span></label>-->
                                <input type="text" id="wpforms-2059-field_4" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][4]" required="" aria-required="true" placeholder="Last Name *">
                            </div>

                            <div id="wpforms-2059-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1">
                                <!--<label class="wpforms-field-label" for="wpforms-2059-field_1">Email <span class="wpforms-required-label">*</span></label>-->
                                <input type="email" id="wpforms-2059-field_1" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][1]" required="" aria-required="true" placeholder="Email *">
                            </div>
                            <div id="wpforms-2059-field_3-container" class="wpforms-field wpforms-field-name" data-field-id="3">
                                <!--<label class="wpforms-field-label" for="wpforms-2059-field_3">Phone <span class="wpforms-required-label">*</span></label>-->
                                <input type="text" id="wpforms-2059-field_3" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][3]" required="" aria-required="true" placeholder="Phone *">
                            </div>

                            <div id="wpforms-2059-field_12-container" class="wpforms-field wpforms-field-checkbox" data-field-id="12">
                                <label class="wpforms-field-label" for="wpforms-2059-field_12">Type of sequencing</label>
                                <ul id="wpforms-2059-field_12" class="">
                                    <li class="choice-1 depth-1">
                                        <input type="checkbox" id="wpforms-2059-field_12_1" name="wpforms[fields][12][]" value="WGS">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_12_1">WGS</label>
                                    </li>
                                    <li class="choice-5 depth-1">
                                        <input type="checkbox" id="wpforms-2059-field_12_5" name="wpforms[fields][12][]" value="WES">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_12_5">WES</label>
                                    </li>
                                    <li class="choice-6 depth-1">
                                        <input type="checkbox" id="wpforms-2059-field_12_6" name="wpforms[fields][12][]" value="RNA">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_12_6">RNA</label>
                                    </li>
                                    <li class="choice-2 depth-1">
                                        <input type="checkbox" id="wpforms-2059-field_12_2" name="wpforms[fields][12][]" value="miRNA">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_12_2">miRNA</label>
                                    </li>
                                    <br><br>
                                    <li class="choice-7 depth-1">
                                        <input type="checkbox" id="wpforms-2059-field_12_7" name="wpforms[fields][12][]" value="ChIP">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_12_7">ChIP</label>
                                    </li>
                                    <li class="choice-3 depth-1">
                                        <input type="checkbox" id="wpforms-2059-field_12_3" name="wpforms[fields][12][]" value="Methyl">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_12_3">Methyl</label>
                                    </li>
                                    <li class="choice-4 depth-1">
                                        <input type="checkbox" id="wpforms-2059-field_12_4" name="wpforms[fields][12][]" value="TCR">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_12_4">TCR</label>
                                    </li>
                                    <li class="choice-8 depth-1">
                                        <input type="checkbox" id="wpforms-2059-field_12_8" name="wpforms[fields][12][]" value="Single cell">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_12_8">Single cell</label>
                                    </li>
                                </ul>
                            </div>

                            <div id="wpforms-2059-field_7-container" class="wpforms-field wpforms-field-radio" data-field-id="7">
                                <label class="wpforms-field-label" for="wpforms-2059-field_7">Do you need library prep services?</label>
                                <ul id="wpforms-2059-field_7" class="">
                                    <li class="choice-2 depth-1">
                                        <input type="radio" id="wpforms-2059-field_7_2" name="wpforms[fields][7]" value="Yes">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_7_2">Yes</label>
                                    </li>
                                    <li class="choice-3 depth-1">
                                        <input type="radio" id="wpforms-2059-field_7_3" name="wpforms[fields][7]" value="No">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_7_3">No</label>
                                    </li>
                                </ul></div>

                            <div id="wpforms-2059-field_8-container" class="wpforms-field wpforms-field-radio" data-field-id="8">
                                <label class="wpforms-field-label" for="wpforms-2059-field_8">Do you need sequencing services?</label>
                                <ul id="wpforms-2059-field_8" class="">
                                    <li class="choice-1 depth-1">
                                        <input type="radio" id="wpforms-2059-field_8_1" name="wpforms[fields][8]" value="Yes">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_8_1">Yes</label>
                                    </li>
                                    <li class="choice-2 depth-1">
                                        <input type="radio" id="wpforms-2059-field_8_2" name="wpforms[fields][8]" value="No">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_8_2">No</label>
                                    </li>
                                </ul>
                            </div>

                            <div id="wpforms-2059-field_9-container" class="wpforms-field wpforms-field-radio" data-field-id="9">
                                <label class="wpforms-field-label" for="wpforms-2059-field_9">Do you need data analysis?</label>
                                <ul id="wpforms-2059-field_9" class="">
                                    <li class="choice-1 depth-1">
                                        <input type="radio" id="wpforms-2059-field_9_1" name="wpforms[fields][9]" value="Yes">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_9_1">Yes</label>
                                    </li>
                                    <li class="choice-2 depth-1">
                                        <input type="radio" id="wpforms-2059-field_9_2" name="wpforms[fields][9]" value="No">
                                        <label class="wpforms-field-label-inline" for="wpforms-2059-field_9_2">No</label>
                                    </li>
                                </ul>
                            </div>
                            <div id="wpforms-2059-field_11-container" class="wpforms-field wpforms-field-textarea" data-field-id="11">
                                <!--<label class="wpforms-field-label" for="wpforms-2059-field_11">Please include your project details?</label>-->
                                <textarea id="wpforms-2059-field_11" class="wpforms-field-medium" name="wpforms[fields][11]" placeholder="Project details"></textarea>
                            </div>
                        </div>

                        <div class="wpforms-field wpforms-field-hp" id="wpform-field-hp">
                            <label for="wpforms-field_hp" class="wpforms-field-label">Website</label>
                            <input type="text" name="wpforms[hp]" id="wpforms-field_hp" class="wpforms-field-medium">
                        </div>
                        <div class="wpforms-submit-container">
                            <input type="hidden" name="wpforms[id]" value="2059">
                            <input type="hidden" name="wpforms[author]" value="11">
                            <input type="hidden" name="wpforms[post_id]" value="377">
                            <button type="submit" name="wpforms[submit]" class="wpforms-submit " id="wpforms-submit-2059" value="wpforms-submit" data-alt-text="Sending...">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>

    <div class="close" onclick="hide('sam')">X</div>
</div>


</div>

<div class="quote-text" onclick="show('sam', 0)">Request a Quote</div>