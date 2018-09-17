

$(document).ready(function(){
	$(".HumburgerNav").click(function(){
		$(".MainNavagation").addClass('onclickmain-navg-db').removeClass('onclickmain-navg-dn');
		$(".MainSiteWrap").addClass('main-site-wrap-width-less').removeClass('main-site-wrap-width-incrase');
		$(".HeaderMob").addClass('header-mob-dn').removeClass('header-mob-db');
		$(".SiteHeader").addClass('main-site-wrap-width-less').removeClass('main-site-wrap-width-incrase');
		$(".AddPayCreate").addClass('add-pay-create-incrase').removeClass('add-pay-create-less');
		$(".SearchIcon").addClass('search-box-incrase').removeClass('search-box-less');
		// $(".ShowCustomerDtl").addClass('customer-dtl-hide');
		// $(".LoanDetails").addClass('loan-dtl-width-incrase').removeClass('loan-dtl-width-less');
	});

	$(".CloseNavagation").click(function(){
		$(".MainNavagation").addClass('onclickmain-navg-dn');
		$(".MainSiteWrap").addClass('main-site-wrap-width-incrase');
		$(".HeaderMob").addClass('header-mob-db');
		$(".SiteHeader").addClass('main-site-wrap-width-incrase');
		$(".AddPayCreate").addClass('add-pay-create-less');
		$(".SearchIcon").addClass('search-box-less');
	});

	$(".OnClickCustomerDtl").click(function(){
		$(".ShowCustomerDtl").addClass('dblock').removeClass('dnone');
		$(".LoanDetails").addClass('dnone');

		// $(".MainNavagation").addClass('onclickmain-navg-dn');
		// $(".MainSiteWrap").addClass('main-site-wrap-width-incrase');
		// $(".HeaderMob").addClass('header-mob-db');
		// $(".SiteHeader").addClass('main-site-wrap-width-incrase');
		// $(".AddPayCreate").addClass('add-pay-create-less');
		// $(".SearchIcon").addClass('search-box-less');
	});
	$(".CloseCustomerDtl").click(function(){
		$(".ShowCustomerDtl").addClass('dnone');
		$(".LoanDetails").addClass('dblock').removeClass('dnone');
	});

	$(".OnClickCustomerDtl").click(function(){
		$(".ShowCustomerDtl").addClass('customer-dtl-show').removeClass('customer-dtl-hide');
		$(".LoanDetails").addClass('loan-dtl-width-less').removeClass('loan-dtl-width-incrase');
	});
	$(".CloseCustomerDtl").click(function(){
		$(".ShowCustomerDtl").addClass('customer-dtl-hide');
		$(".LoanDetails").addClass('loan-dtl-width-incrase').removeClass('loan-dtl-width-less');
	});
});


$(document).ready(function(){
	$("#OnClickLoanType").click(function(){
		$("#ShowDropDown").slideToggle("");
	});

	$(".ClickAddCustomer").click(function(){
		$(".AddNewCustomerPopup").addClass('addnewcustdblock').removeClass('addnewcustdnone');
		$("#SiteContLoans").addClass('addnewcustdnone').removeClass('transactiondblock');
	});
	$(".ClickCloseAddNewCst").click(function(){
		$(".AddNewCustomerPopup").addClass('addnewcustdnone');
		$("#SiteContLoans").addClass('addnewcustdblock').removeClass('addnewcustdnone');
	});

	$(".ClickAdminPop").click(function(){
		$(".AddNewAdminPopup").addClass('addnewadmindblock').removeClass('addnewadmindnone');
		$("#SettingsPage").addClass('addnewadmindnone').removeClass('transactiondblock');
	});
	$(".ClickCloseAdminPop").click(function(){
		$(".AddNewAdminPopup").addClass('addnewadmindnone');
		$("#SettingsPage").addClass('addnewadmindblock').removeClass('addnewadmindnone');
	});

	$(".ClickCoAdminPop").click(function(){
		$(".AddNewCoAdminPopup").addClass('addnewadmindblock').removeClass('addnewadmindnone');
		$("#SettingsPage").addClass('addnewadmindnone').removeClass('transactiondblock');
	});
	$(".ClickCloseCoAdminPop").click(function(){
		$(".AddNewCoAdminPopup").addClass('addnewadmindnone');
		$("#SettingsPage").addClass('addnewadmindblock').removeClass('addnewadmindnone');
	});
});

$(document).ready(function(){
	$(".ClickloanList").click(function(){
		$(".LoanListSec").addClass('loanreportdblock').removeClass('loanreportdnone');
		$(".LoanReportSec, .LoanDefaultedSec, .LoanNewSec").addClass('loanreportdnone');
		$(".ClickloanList").addClass('paydiractive');
		$(".ClickloanReport, .ClickloanDefault, .ClickloanNew").removeClass('paydiractive');
		$(".ShowCustomerDtl").addClass('customer-dtl-hide');
		$(".LoanDetails").addClass('loan-dtl-width-incrase');
	});
	$(".ClickloanReport").click(function(){
		$(".LoanReportSec").addClass('loanreportdblock').removeClass('loanreportdnone');
		$(".LoanListSec, .LoanDefaultedSec, .LoanNewSec").addClass('loanreportdnone');
		$(".ClickloanReport").addClass('paydiractive');
		$(".ClickloanList, .ClickloanDefault, .ClickloanNew").removeClass('paydiractive');
		$(".ShowCustomerDtl").addClass('customer-dtl-hide');
		$(".LoanDetails").addClass('loan-dtl-width-incrase');
	});
	$(".ClickloanDefault").click(function(){
		$(".LoanDefaultedSec").addClass('loanreportdblock').removeClass('loanreportdnone');
		$(".LoanListSec, .LoanReportSec, .LoanNewSec").addClass('loanreportdnone');
		$(".ClickloanDefault").addClass('paydiractive');
		$(".ClickloanList, .ClickloanReport, .ClickloanNew").removeClass('paydiractive');
		$(".ShowCustomerDtl").addClass('customer-dtl-hide');
		$(".LoanDetails").addClass('loan-dtl-width-incrase');
	});
	$(".ClickloanNew").click(function(){
		$(".LoanNewSec").addClass('loanreportdblock').removeClass('loanreportdnone');
		$(".LoanListSec, .LoanReportSec, .LoanDefaultedSec").addClass('loanreportdnone');
		$(".ClickloanNew").addClass('paydiractive');
		$(".ClickloanList, .ClickloanReport, .ClickloanDefault").removeClass('paydiractive');
		$(".ShowCustomerDtl").addClass('customer-dtl-hide');
		$(".LoanDetails").addClass('loan-dtl-width-incrase');
	});
});


$(document).ready(function(){
	$("#ClickPayment").click(function(){
		$("#MainPayment").addClass('paydirdblock').removeClass('paydirdnone');
		$("#MainDetails, #MainInteractions, #MainReviews").addClass('paydirdnone');
		$("#ClickPayment").addClass('paydiractive');
		$("#ClickDetails, #ClickIntera, #ClickReviews").removeClass('paydiractive');
	});
	$("#ClickDetails").click(function(){
		$("#MainDetails").addClass('paydirdblock').removeClass('paydirdnone');
		$("#MainPayment, #MainInteractions, #MainReviews").addClass('paydirdnone');
		$("#ClickDetails").addClass('paydiractive');
		$("#ClickPayment, #ClickIntera, #ClickReviews").removeClass('paydiractive');
	});
	$("#ClickIntera").click(function(){
		$("#MainInteractions").addClass('paydirdblock').removeClass('paydirdnone');
		$("#MainPayment, #MainDetails, #MainReviews").addClass('paydirdnone');
		$("#ClickIntera").addClass('paydiractive');
		$("#ClickPayment, #ClickDetails, #ClickReviews").removeClass('paydiractive');
	});
	$("#ClickReviews").click(function(){
		$("#MainReviews").addClass('paydirdblock').removeClass('paydirdnone');
		$("#MainPayment, #MainDetails, #MainInteractions").addClass('paydirdnone');
		$("#ClickReviews").addClass('paydiractive');
		$("#ClickPayment, #ClickDetails, #ClickIntera").removeClass('paydiractive');
	});

});

$(document).ready(function(){
$(".ClickCstBioData").click(function(){
		$(".CoverCstDtlBox").slideDown("slow");
		$(".ClickCstBioData, .GurDtlWrp").css("display", "none");
		$(".CloseCustDtlHeading").css("display", "block")
	});
	$(".CloseCustDtlHeading").click(function(){
		$(".CoverCstDtlBox").slideUp("slow");
		$(".ClickCstBioData, .GurDtlWrp").css("display", "block");
		$(".CloseCustDtlHeading").css("display", "none");
	});
	$(".ClickGurBioData").click(function(){
		$(".CoverGurDtlBox").slideDown("slow");
		$(".ClickGurBioData, .CustDtlWrap").css("display", "none");
		$(".CloseGurDtlHeading").css("display","block");
	});
	$(".CloseGurDtlHeading").click(function(){
		$(".CoverGurDtlBox").slideUp("slow");
		$(".ClickGurBioData, .CustDtlWrap").css("display","block");
		$(".CloseGurDtlHeading").css("display","none");
	});
});


$(document).ready(function(){
	$(".ClickAdmin").click(function(){
		$(".ShowAdmin").css("display","block");
		$(".ShowCoAdmin").css("display","none");
		$(".LoanDetails").addClass('loan-dtl-width-incrase');
		$(".ShowCustomerDtl").addClass('customer-dtl-hide');
		$(".ClickAdmin").css("border-bottom-color","#00793a");
		$(".ClickCoAdmin").css("border-bottom-color","#ffffff");
	});
	$(".ClickCoAdmin").click(function(){
		$(".ShowCoAdmin").css("display","block");
		$(".ShowAdmin").css("display","none");
		$(".LoanDetails").addClass('loan-dtl-width-incrase');
		$(".ShowCustomerDtl").addClass('customer-dtl-hide');
		$(".ClickCoAdmin").css("border-bottom-color","#00793a");
		$(".ClickAdmin").css("border-bottom-color","#ffffff");
	});
});

$(function() {
			$(".meter > span").each(function() {
				$(this)
					.data("origWidth", $(this).width())
					.width(0)
					.animate({
						width: $(this).data("origWidth")
					}, 1200);
			});
		});


 // TRANSACTION HISTORY SECTION

$(document).ready(function(){
	$("#ClickTransactionH").click(function(){
		$("#TransactionHistory").addClass('transactiondblock').removeClass('transactiondnone');
		$("#SiteContLoans, #SettingsPage, #HelpPage").addClass('transactiondnone');
		$("#ClickTransactionH").addClass('activelotsh');
		$("#ClickLoan, #ClickSettings, #ClickHelp").removeClass('activelotsh');
		$(".MainNavagation").addClass('onclickmain-navg-dn');
		$(".MainSiteWrap").addClass('main-site-wrap-width-incrase');
		$(".HeaderMob").addClass('header-mob-db');
		$(".SiteHeader").addClass('main-site-wrap-width-incrase');
		$(".AddPayCreate").addClass('add-pay-create-less');
		$(".SearchIcon").addClass('search-box-less');
		$(".ShowCustomerDtl").addClass('customer-dtl-hide');
		$(".LoanDetails").addClass('loan-dtl-width-incrase').removeClass('loan-dtl-width-less');
		$(".ShowCustomerDtl").addClass('dnone');
		$(".LoanDetails").addClass('dblock').removeClass('dnone');
		$(".AddNewCustomerPopup").addClass('addnewcustdnone');
		$(".AddNewAdminPopup").addClass('addnewadmindnone');
		$(".AddNewCoAdminPopup").addClass('addnewadmindnone');
	});
	$("#ClickLoan").click(function(){
		$("#SiteContLoans").addClass('transactiondblock').removeClass('transactiondnone');
		$("#TransactionHistory, #SettingsPage, #HelpPage").addClass('transactiondnone');
		$("#ClickLoan").addClass('activelotsh');
		$("#ClickTransactionH, #ClickSettings, #ClickHelp").removeClass('activelotsh');
		$(".MainNavagation").addClass('onclickmain-navg-dn');
		$(".MainSiteWrap").addClass('main-site-wrap-width-incrase');
		$(".HeaderMob").addClass('header-mob-db');
		$(".SiteHeader").addClass('main-site-wrap-width-incrase');
		$(".AddPayCreate").addClass('add-pay-create-less');
		$(".SearchIcon").addClass('search-box-less');
		$(".ShowCustomerDtl").addClass('customer-dtl-hide');
		$(".LoanDetails").addClass('loan-dtl-width-incrase').removeClass('loan-dtl-width-less');
		$(".ShowCustomerDtl").addClass('dnone');
		$(".LoanDetails").addClass('dblock').removeClass('dnone');
		$(".AddNewCustomerPopup").addClass('addnewcustdnone');
		$(".AddNewAdminPopup").addClass('addnewadmindnone');
		$(".AddNewCoAdminPopup").addClass('addnewadmindnone');
	});

	$("#ClickSettings").click(function(){
		$("#SettingsPage").addClass('transactiondblock').removeClass('transactiondnone');
		$("#TransactionHistory, #SiteContLoans, #HelpPage").addClass('transactiondnone');
		$("#ClickSettings").addClass('activelotsh');
		$("#ClickTransactionH, #ClickLoan, #ClickHelp").removeClass('activelotsh');
		$(".MainNavagation").addClass('onclickmain-navg-dn');
		$(".MainSiteWrap").addClass('main-site-wrap-width-incrase');
		$(".HeaderMob").addClass('header-mob-db');
		$(".SiteHeader").addClass('main-site-wrap-width-incrase');
		$(".AddPayCreate").addClass('add-pay-create-less');
		$(".SearchIcon").addClass('search-box-less');
		$(".ShowCustomerDtl").addClass('customer-dtl-hide');
		$(".LoanDetails").addClass('loan-dtl-width-incrase').removeClass('loan-dtl-width-less');
		$(".ShowCustomerDtl").addClass('dnone');
		$(".LoanDetails").addClass('dblock').removeClass('dnone');
		$(".AddNewCustomerPopup").addClass('addnewcustdnone');
		$(".AddNewAdminPopup").addClass('addnewadmindnone');
		$(".AddNewCoAdminPopup").addClass('addnewadmindnone');
	});
	$("#ClickHelp").click(function(){
		$("#HelpPage").addClass('transactiondblock').removeClass('transactiondnone');
		$("#TransactionHistory, #SiteContLoans, #SettingsPage").addClass('transactiondnone');
		$("#ClickHelp").addClass('activelotsh');
		$("#ClickTransactionH, #ClickLoan, #ClickSettings").removeClass('activelotsh');
		$(".MainNavagation").addClass('onclickmain-navg-dn');
		$(".MainSiteWrap").addClass('main-site-wrap-width-incrase');
		$(".HeaderMob").addClass('header-mob-db');
		$(".SiteHeader").addClass('main-site-wrap-width-incrase');
		$(".AddPayCreate").addClass('add-pay-create-less');
		$(".SearchIcon").addClass('search-box-less');
		$(".ShowCustomerDtl").addClass('customer-dtl-hide');
		$(".LoanDetails").addClass('loan-dtl-width-incrase').removeClass('loan-dtl-width-less');
		$(".ShowCustomerDtl").addClass('dnone');
		$(".LoanDetails").addClass('dblock').removeClass('dnone');
		$(".AddNewCustomerPopup").addClass('addnewcustdnone');
		$(".AddNewAdminPopup").addClass('addnewadmindnone');
		$(".AddNewCoAdminPopup").addClass('addnewadmindnone');
	});
});


function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.blah')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.blah2')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.blah3')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.blah4')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

  $( function() {
    $( "#datepicker" ).datepicker();
    $( "#chequedate" ).datepicker();
    $( "#custdate" ).datepicker();
    $( "#admdate" ).datepicker();
    $( "#coadmdate" ).datepicker();
  } );



function checkNum(){

	var tempVal = $('#targetMe').val();
		if (/^[0-9]{0,}$/.test(tempVal)){
  			$('#targetMe').css("border-color","green");
  			}
		else{
  		$('#targetMee').css("display","block");	
		}
};

function bankName(){
	var bankNameVal = $('#bankAlp').val();
		if (/^[a-z A-Z]{0,}$/.test(bankNameVal)){
  			$('#bankAlp').css("border-color","green");
  			}
		else{
  		$('#bankWrg').css("display","block");	
		}
};

function loanType(){
	var bankNameVal = $('#loanTypeCat').val();
		if (/^[a-z A-Z]{0,}$/.test(bankNameVal)){
  			$('#loanTypeCat').css("border-color","green");
  			}
		else{
  		$('#loanTypeWrg').css("display","block");	
		}
};



