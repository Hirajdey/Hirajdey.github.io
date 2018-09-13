
$( function() {
	$( ".homeTab" ).tabs();
	$("#actia-banner").hide();
	$("#prima-banner").hide();
} );

var val;
$(document).ready(function() {
	$('.inputField input').focus(function () {
	    $(this).parent().addClass('active');
	    $(this).siblings('p').hide();
	    val = $(this).val();
	    $(this).val('');
	});
	$('.inputField input').blur(function () {
	    $(this).parent().removeClass('active');
	    var bla = $(this).val();
	    if ( bla == ""){
	    	$(this).siblings('p').show();
	    	$(this).val(val);
	    }
	});
	$('.inputField input.hasDropDown').focus(function () {
		$(this).siblings(".dropDown").slideDown('fast');
	});
	$('.inputField input').blur(function () {
	    $(this).siblings(".dropDown").slideUp('fast');
	});

	$('.homeTab.otherPage.common .wrapper ul li').removeClass("ui-tabs-active");
	$('.homeTab.otherPage.ngsServices .wrapper ul li').removeClass("ui-tabs-active");
	$('.homeTab.otherPage.ngsServices .wrapper ul li.tab2').addClass("ui-tabs-active");
	$('.homeTab.otherPage.common .wrapper #tabs-1').hide();
	$('.homeTab.otherPage .wrapper #tabs-1').hide();
	$(".headerMenu li a").mouseenter(function(){
 
        // Get the current title
        var title = $(this).attr("title");
 
        // Store it in a temporary attribute
        $(this).attr("tmp_title", title);
 
        // Set the title to nothing so we don't see the tooltips
        $(this).attr("title","");
         
    });
 
  $(".headerMenu li a").mouseleave(function(){
 
        // Retrieve the title from the temporary attribute
        var title = $(this).attr("tmp_title");
 
        // Return the title to what it was
        $(this).attr("title", title);
         
    });
  $('.header .mobileMenu').off('click').on('click', function(){
		$(this).siblings(".dropDown").slideToggle('fast');
	});

	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

	 // $('.inputField input').onfocus="if(this.value == 'Inquiry/Message')this.value=''" onblur="if(this.value == '')this.value='Inquiry/Message'">
        
// diagnostics Script Starts

	$(".diganosticsInnerContent .heading").off('click').on('click',function(){
		$(this).siblings(".diganosticsInnerText").slideToggle();
		// $(this).parent(".diganosticsInnerContent").toggleClass("open");
		// $(".diganosticsInnerContent").not($(this).parent(".diganosticsInnerContent")).removeClass("open");
		$(".diganosticsInnerText").not($(this).siblings(".diganosticsInnerText")).slideUp();
	});
	$(".catViewDiv a.press").off('click').on('click',function(){
		$(".catViewDiv .active").not($(this)).removeClass("active");
		$(this).parent().parent().siblings(".pressCont").slideToggle();
		$(this).toggleClass("active");
		$(this).parent().parent().siblings(".eventsCont").slideUp();
		$(this).parent().parent().siblings(".videos").slideUp();
	});
	$(".catViewDiv a.video").off('click').on('click',function(){
		$(".catViewDiv .active").not($(this)).removeClass("active");
		$(this).parent().parent().siblings(".videos").slideToggle();
		$(this).toggleClass("active");
		$(this).parent().parent().siblings(".eventsCont").slideUp();
		$(this).parent().parent().siblings(".pressCont").slideUp();
	});
	$(".catViewDiv a.event").off('click').on('click',function(){
		$(".catViewDiv .active").not($(this)).removeClass("active");
		$(this).parent().parent().siblings(".eventsCont").slideToggle();
		$(this).toggleClass("active");
		$(this).parent().parent().siblings(".videos").slideUp();
		$(this).parent().parent().siblings(".pressCont").slideUp();
	});
	/*$("#claria").click(function () {
		var host = window.location.host;

		if(host == 'localhost')
			window.location.href = "http://localhost/homepage/claria/index.php";
		else if(host == 'staging.medgenome.com')
			window.location.href = "http://staging.medgenome.com/claria/index.php";
		else
			window.location.href = "https://diagnostics.medgenome.com/claria/index.php";
	});
	$("#actia").click(function () {
		var host = window.location.host;

		if(host == 'localhost')
			window.location.href = "http://localhost/homepage/actia/cardio-genetic.html";
		else if(host == 'staging.medgenome.com')
			window.location.href = "http://staging.medgenome.com/actia/cardio-genetic.html";
		else
			window.location.href = "https://diagnostics.medgenome.com/actia/cardio-genetic.html";
	});
	$("#prima").click(function () {
		var host = window.location.host;

		if(host == 'localhost')
			window.location.href = "http://localhost/homepage/prima/somatic-cancer.html";
		else if(host == 'staging.medgenome.com')
			window.location.href = "http://staging.medgenome.com/prima/somatic-cancer.html";
		else
			window.location.href = "https://diagnostics.medgenome.com/prima/somatic-cancer.html";
	});*/
// Banner change
	$("#claria").click(function () {
		$("#claria-banner").show();

		$("#actia-banner").hide();
		$("#prima-banner").hide();

		// remove the class
		$(".tab3").removeClass("ui-tabs-tab ui-corner-top ui-state-default ui-tab inactive ui-state-hover");
		$(".tab2").removeClass("ui-tabs-tab ui-corner-top ui-state-default ui-tab inactive ui-state-hover");
	});
	$("#actia").click(function () {
		$("#actia-banner").show();

		$("#claria-banner").hide();
		$("#prima-banner").hide();

		// remove the class
		$(".tab1").removeClass("ui-tabs-tab ui-corner-top ui-state-default ui-tab inactive ui-state-hover");
		$(".tab3").removeClass("ui-tabs-tab ui-corner-top ui-state-default ui-tab inactive ui-state-hover");
	});
	$("#prima").click(function () {
		$("#prima-banner").show();

		$("#claria-banner").hide();
		$("#actia-banner").hide();

		// remove the class
		$(".tab1").removeClass("ui-tabs-tab ui-corner-top ui-state-default ui-tab inactive ui-state-hover");
		$(".tab2").removeClass("ui-tabs-tab ui-corner-top ui-state-default ui-tab inactive ui-state-hover");
	});
});




/* ============= Script For New Test List Date:20-07-2018 ================ */


$(document).ready(function() {



	/*================================================
    =           Script For Select Option             =
    ================================================*/

    $('select.rw-select-box').each(function(){
      var $this = $(this), numberOfOptions = $(this).children('option').length;

      $this.addClass('select-hidden');
      $this.wrap('<div class="select"></div>');
      $this.after('<div class="select-styled"></div>');

      var $styledSelect = $this.next('div.select-styled');
      $styledSelect.text($this.children('option').eq(0).text());

      var $list = $('<ul />', {
          'class': 'select-options'
      }).insertAfter($styledSelect);

      for (var i = 0; i < numberOfOptions; i++) {
          $('<li />', {
              text: $this.children('option').eq(i).text(),
              rel: $this.children('option').eq(i).val()
          }).appendTo($list);
      }

      var $listItems = $list.children('li');

      $styledSelect.click(function(e) {
          e.stopPropagation();
          $('div.select-styled.active').not(this).each(function(){
              $(this).removeClass('active').next('ul.select-options').hide();
          });
          $(this).toggleClass('active').next('ul.select-options').toggle();
      });

      $listItems.click(function(e) {
          e.stopPropagation();
          $styledSelect.text($(this).text()).removeClass('active');
          $this.val($(this).attr('rel'));
          $this.trigger('change');
          $list.hide();
          //console.log($this.val());
      });

      $(document).click(function() {
          $styledSelect.removeClass('active');
          $list.hide();
      });

    });

  /*=====  End of Script For Select Option   ====*/


 // alert('Yes i can do it'); 

 		var completTestlistDataUrl;

 		if(window.location.pathname == '/diagnostics/complete-testlist.php'){
 			completTestlistDataUrl = 'testlistdata/complete-testlist.json'; 
 			console.log('CmpleteTestList');
 		}

 		if(window.location.pathname == '/diagnostics/claria-testlist.php'){
 			completTestlistDataUrl = 'testlistdata/claria-testlist.json'; 
 			console.log('Claria');
 		}

 		if(window.location.pathname == '/diagnostics/actia-testlist.php'){
 			completTestlistDataUrl = 'testlistdata/actia-testlist.json'; 
 			console.log('Actia');
 		}

 		if(window.location.pathname == '/diagnostics/prima-testlist.php'){
 			completTestlistDataUrl = 'testlistdata/prima-testlist.json'; 
 			console.log('Actia');
 		}


	$.ajax({
	  	url: completTestlistDataUrl,
	  	dataType: 'json',
	  	success: function(dataObj) {
	    	const listData = dataObj['testlistData'];
	    	
	    	const listDataWrap = document.querySelector('.listoftestData');     
	    	

	    	for(var i = 0; i < listData.length; i++){

	    		const testItem = document.createElement('li');
	    					testItem.setAttribute('class', 'testitem');

	    			const checkBox = document.createElement('div');
	    						checkBox.setAttribute('class','orderCheck');
	    						
	    			testItem.appendChild(checkBox);
	    			const checkLabel = document.createElement('label');
	    						checkLabel.setAttribute('class','testCheck');
	    						checkBox.appendChild(checkLabel);
	    			const checkInput = document.createElement('input');
	    						checkInput.setAttribute('type','checkbox');

	    						checkLabel.appendChild(checkInput);
	    			const checkSpan = document.createElement('span');
	    						checkSpan.setAttribute('class','label-text');
	    						checkLabel.appendChild(checkSpan);
	    		
	    			const tCode = document.createElement('div');
	    						tCode.setAttribute('class', 'tcode');

	    			const diseaseCategory = document.createElement('div');
	    						diseaseCategory.setAttribute('class', 'disease-category');
	    			
	    			const teSt = document.createElement('div');
	    						teSt.setAttribute('class', 'test');

	    			const meThod = document.createElement('div');
	    						meThod.setAttribute('class', 'tmethod');
						
						const preferredSampletype = document.createElement('div');
	    						preferredSampletype.setAttribute('class', 'preferred-sampletype');
						
						const tAt = document.createElement('div');
	    						tAt.setAttribute('class', 'tat');

						const geneList = document.createElement('div');
	    						geneList.setAttribute('class', 'genelist');

	    						const geneListOut = document.createElement('div');
	    									geneListOut.setAttribute('class', 'genelistout');
	    									const geneListClose = document.createElement('span');
	    												geneListClose.setAttribute('class','geneclose');

	    				
	    				var showSelectedItem = document.querySelector('.cartCount');
	    					

	    						checkInput.onclick = function(){

	    							if(checkInput.checked){
	    								// acTion.setAttribute('style','background-color:#F68E56; color:#fff !important; border-color:#F68E56;');
	    								testItem.setAttribute('trgt_list','orderList');
	    								showSelectedItem.value++;

	    							}else{
	    								// acTion.removeAttribute('style');
	    								testItem.removeAttribute('trgt_list');
	    								showSelectedItem.value--;
	    							}
				
	    						}

	    				
	    				const removeList = document.createElement('div');
	    							removeList.setAttribute('class', 'removelist');

	    							removeList.onclick = function(){
	    								this.parentNode.style.display = 'none';
	    								if(checkInput.checked){
	    									checkInput.checked = false;
	    									testItem.removeAttribute('trgt_list');	
	    									// acTion.removeAttribute('style');
	    									showSelectedItem.value--;
	    								}
	    							}            

	    				// testItem.appendChild(slNo).textContent = listData[i].slno;
	    				testItem.appendChild(tCode).textContent = listData[i].tcode;			
	    				// testItem.appendChild(seGment).textContent = listData[i].segment;
	    				testItem.appendChild(diseaseCategory).textContent = listData[i].diseasecategory;
	    				testItem.appendChild(teSt).textContent = listData[i].test;
	    				testItem.appendChild(meThod).textContent = listData[i].tmethod;
	    				testItem.appendChild(preferredSampletype).textContent = listData[i].preferredsampletype;
	    				testItem.appendChild(tAt).textContent = listData[i].tat;
	    				testItem.appendChild(geneList).textContent = listData[i].genelist;
	    				// testItem.appendChild(acTion).textContent = listData[i].taction;
	    				testItem.appendChild(removeList).textContent = 'Remove';

	    				listDataWrap.appendChild(testItem);
	    				// listDataWrap.appendChild(testItem).textContent = listData[i];
	    				geneList.appendChild(geneListOut).textContent = listData[i].viewlist;
	    				geneListOut.appendChild(geneListClose);


							(function(){

								const listDataSearch = document.querySelector('.searchAll');

		    				listDataSearch.onkeyup = function(){
		    					
		    					var serchinput, filter, table, tr, td, i;

									  serchinput = document.querySelector(".searchAllInput");
									  filter = serchinput.value.toUpperCase();
									  table = document.querySelector(".dataTable");
									  tr = table.querySelectorAll("li");
									  for (i = 0; i < tr.length; i++) {
									    td = tr[i];
									    if (td) {
									      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
									        tr[i].style.display = "grid";
									      } else {
									        tr[i].style.display = "none";
									      }
									    }       	
									  }
									}

								})();
								
					} //list Items For Loops		    	
	    	

	    		(function(){
						//Script For Ppaginatin 

								var pageList = new Array();
								var currentPage = 1;
								var numberPerPage = 5;
								var events = Array.prototype.slice.call(document.querySelectorAll(".listoftestData .testitem"));
									
								function getNumberOfPages() {
								  return Math.ceil(events.length / numberPerPage);
								}

								function nextPage() {
								  currentPage += 1;
								  loadList();
								}

								function previousPage() {
								  currentPage -= 1;
								  loadList();
								}

								function loadList() {
								  var begin = ((currentPage - 1) * numberPerPage);
								  var end = begin + numberPerPage;
								  for (i = 0; i < pageList.length; i++) {
								    pageList[i].style.display = 'none'; // make the old list invisible
								  }
								  pageList = events.slice(begin, end);
								  drawList();
								  check();
								}	
									
								function drawList() {
								  for (i = 0; i < pageList.length; i++) {
								    pageList[i].style.display = 'grid';
								  }
								}

								var pgNext = document.getElementById("next");
								var pgPrevious = document.getElementById("previous");

								function check() {
								  pgNext.disabled = currentPage == numberOfPages ? true : false;
								  pgPrevious.disabled = currentPage == 1 ? true : false;
					
								}

								function load() {
								  loadList();
								}

								var numberOfPages = getNumberOfPages();
								window.onload = load;		

								var rowsOf = document.querySelector('#rowsof');
										rowsOf.setAttribute('value', events.length);					
  							
  							var pageOf = document.querySelector('#pageof');
  							var pageCount = document.querySelector('#pageCount');

  							var pageCountVal = events.length / numberPerPage;
								if (!Number.isInteger(pageCountVal)){
										var pageCountFnlVal =	pageCountVal+1;
										pageCount.textContent = parseInt(pageCountFnlVal);
								}

  							pgPrevious.onclick = function(){
									previousPage();
									pageOf.value --;

									if(pageOf.value == 1){
										this.style.opacity = '0.4';
									}else{
										pgNext.style.opacity = '1';
									}
								}

								pgNext.onclick = function(){
									nextPage();
									pageOf.value ++;

									if(pageOf.value == pageCount.textContent){
										this.style.opacity = '0.4';
									}else{
										pgPrevious.style.opacity = '1';
									}
								}


						})();


						(function(){
							// Script For your test order

									const searchDownloadHide = document.querySelector('.search-download-row');
									const pressHeadingHide = document.querySelector('.pressHeading');
									// const actionBtnHide = document.querySelectorAll('.taction');
									const testFilterHide = document.querySelector('.testFilterbyCat');
									const paginagionHide = document.querySelector('.pagination-wrap');

									const testConfirmShowUp = document.querySelector('#testConfirmUp');
									const testConfirmShowDwn = document.querySelector('#testConfirmDwn');
									const yourTestOrderShow = document.querySelector('.yourtest-order-row');
									const removeList = document.querySelectorAll('.removelist');

									const textCheckInput = document.querySelectorAll('.testCheck input');


							const testOrderBtnUp = document.querySelector('#testOrderBtnUp');
							const testOrderBtnDwn = document.querySelector('#testOrderBtnDwn');
							const testItem = document.querySelectorAll('.testitem');

							const downloadBtnRow = document.querySelector('.testPageHeading-row');
							const thRow = document.querySelector('.testDatahead');

							
							testOrderBtnUp.onclick = function(){

								for(var i = 0; i < testItem.length; i++){
										
										 const orderItems = testItem[i].getAttribute('trgt_list');
										 const thisAttr = this.getAttribute('trgt_orderlist');

										 if(thisAttr == orderItems){

										 		testItem[i].style.display = "grid";

										 }else{
										 		testItem[i].style.display ="none"; 

										 }

									}

									listDataWrap.classList.add("addfor-grid-col");

									searchDownloadHide.classList.add("orderaction");

									thRow.classList.add("confaddTestDatahead");

									pressHeadingHide.style.display = 'none';
									
									paginagionHide.style.display = 'none';
									this.style.display = 'none';
									downloadBtnRow.style.display = 'none';

									testConfirmShowUp.style.display = 'block';
									testConfirmShowDwn.style.display = 'block';

									yourTestOrderShow.style.display = 'grid';
									testOrderBtnDwn.style.display = 'none';

									for(var rv = 0; rv < removeList.length; rv++){
										removeList[rv].style.display = 'block';
									}

									for(var tc = 0; tc < textCheckInput.length; tc++){
									 textCheckInput[tc].disabled = true;
									}
							}


							testOrderBtnDwn.onclick = function(){
								for(var i = 0; i < testItem.length; i++){
										
										 const orderItems = testItem[i].getAttribute('trgt_list');
										 const thisAttr = this.getAttribute('trgt_orderlist');

										 if(thisAttr == orderItems){

										 	testItem[i].style.display = "grid";

										 }else{
										 		testItem[i].style.display ="none"; 
										 }

									}

									listDataWrap.classList.add("addfor-grid-col");

									searchDownloadHide.classList.add("orderaction");
									
									thRow.classList.add("confaddTestDatahead");

									pressHeadingHide.style.display = 'none';

									paginagionHide.style.display = 'none';
									this.style.display = 'none';
									downloadBtnRow.style.display = 'none';

									testOrderBtnUp.style.display = 'none';
									testConfirmShowDwn.style.display = 'block';
									testConfirmShowUp.style.display = 'block';
									yourTestOrderShow.style.display = 'grid';
								
									for(var rv = 0; rv < removeList.length; rv++){
										removeList[rv].style.display = 'block';
									}

									for(var tc = 0; tc < textCheckInput.length; tc++){
									 textCheckInput[tc].disabled = true;
									}
							}




							const backToTestPage = document.querySelector('.backtoTestCatBtn');

							backToTestPage.onclick = function(){

								for(var i = 0; i < testItem.length; i++){

										 const orderItems = testItem[i].getAttribute('trgt_list');
										 const thisAttr = this.getAttribute('trgt_orderlist');

										 if(!thisAttr == orderItems){
										 		// console.log(orderItems);	
										 		testItem[i].style.display = "grid";
										 		// testItem[i].removeAttribute('style');

										 }else{
										 		// testItem[i].parentNode.removeChild(testItem[i]);
										 		testItem[i].style.display = "grid"
										 }
								}


									listDataWrap.classList.remove("addfor-grid-col");
									searchDownloadHide.classList.remove("orderaction");
									thRow.classList.remove("confaddTestDatahead");

									pressHeadingHide.style.display = 'block';
									
									paginagionHide.style.display = 'block';
									testOrderBtnUp.style.display = 'block';									
									

									downloadBtnRow.style.display = 'grid';
									testOrderBtnDwn.style.display = 'block';

									testConfirmShowUp.style.display = 'none';
									testConfirmShowDwn.style.display = 'none';
									yourTestOrderShow.style.display = 'none';
									

									for(var rv = 0; rv < removeList.length; rv++){
										removeList[rv].style.display = 'none';
									}
							
									for(var tc = 0; tc < textCheckInput.length; tc++){
									 textCheckInput[tc].disabled = false;
									}

							}
											const viewListClick = $('.genelist');
											const viewListOUT = $('.genelistout');
											const closeViewListOut = $('.geneclose');
											viewListClick.click(function(){
												$(this).children().toggleClass('genelistoutAdd');
											});

						})();

						(function(){

							const testOrderConfirmUp = document.querySelector('#testConfirmUp');
							const testOrderConfirmDwn = document.querySelector('#testConfirmDwn');
							const orderConfirmForm = document.querySelector('.confirm-order-form-wrap');

							const mdgTestListContainerWrap = document.querySelector('.mdg-testlist-wrap');


							testOrderConfirmUp.onclick = function(){

								mdgTestListContainerWrap.style.display = 'none';

								orderConfirmForm.style.display = 'block';

								const takeSelectedData = document.querySelectorAll('.testitem');

								const patientOrdercontent = document.querySelector('#patientOrderContent');
								const clinicianOrderContent = document.querySelector('#clinicianOrderContent');

								for(var i = 0; i < takeSelectedData.length; i++){

									if(takeSelectedData[i].hasAttribute('trgt_list')){
										 
										const selectedTestContentCode = takeSelectedData[i].querySelectorAll('div')[1].textContent;
										const selectedTestContentTest = takeSelectedData[i].querySelectorAll('div')[3].textContent;

											const spanElementClinician = document.createElement('span');
											const spanElementPatient = document.createElement('span');

											clinicianOrderContent.appendChild(spanElementClinician).textContent ='Code :' + ' ' + selectedTestContentCode + ' , ' + 'Test :' + ' ' + selectedTestContentTest; 
								
											patientOrdercontent.appendChild(spanElementPatient).textContent ='Code :' + ' ' + selectedTestContentCode + ' , ' + 'Test :' + ' ' + selectedTestContentTest;

									}
								}	

									const removeChildFromYourOrder = document.querySelector('.goBack');
									removeChildFromYourOrder.onclick = function(){
										clinicianOrderContent.textContent = "";
										patientOrdercontent.textContent = "";

										mdgTestListContainerWrap.style.display = 'block';
										orderConfirmForm.style.display = 'none';
									}

									const orderEditA = document.querySelector('#orderEditA');
									orderEditA.onclick = function(){
										clinicianOrderContent.textContent = "";
										patientOrdercontent.textContent = "";

										mdgTestListContainerWrap.style.display = 'block';
										orderConfirmForm.style.display = 'none';	
									}
									const orderEditB = document.querySelector('#orderEditB');
									orderEditB.onclick = function(){
										clinicianOrderContent.textContent = "";
										patientOrdercontent.textContent = "";

										mdgTestListContainerWrap.style.display = 'block';
										orderConfirmForm.style.display = 'none';	
									}
 							}

 							testOrderConfirmDwn.onclick = function(){

								mdgTestListContainerWrap.style.display = 'none';

								orderConfirmForm.style.display = 'block';

								const takeSelectedData = document.querySelectorAll('.testitem');

								const patientOrdercontent = document.querySelector('#patientOrderContent');
								const clinicianOrderContent = document.querySelector('#clinicianOrderContent');

								for(var i = 0; i < takeSelectedData.length; i++){

									if(takeSelectedData[i].hasAttribute('trgt_list')){
										 
										const selectedTestContentCode = takeSelectedData[i].querySelectorAll('div')[1].textContent;
										const selectedTestContentTest = takeSelectedData[i].querySelectorAll('div')[3].textContent;
									

											const spanElementClinician = document.createElement('span');
											const spanElementPatient = document.createElement('span');

											clinicianOrderContent.appendChild(spanElementClinician).textContent ='Code :' + '   ' + selectedTestContentCode + ' , ' + 'Test :' + '   ' + selectedTestContentTest; 
								
											patientOrdercontent.appendChild(spanElementPatient).textContent ='Code :' + '   ' + selectedTestContentCode + ' , ' + 'Test :' + '   ' + selectedTestContentTest;
								
									}
								}	

									const removeChildFromYourOrder = document.querySelector('.goBack');
									removeChildFromYourOrder.onclick = function(){
										clinicianOrderContent.textContent = "";
										patientOrdercontent.textContent = "";

										mdgTestListContainerWrap.style.display = 'block';
										orderConfirmForm.style.display = 'none';
									}

									const orderEditA = document.querySelector('#orderEditA');
									orderEditA.onclick = function(){
										clinicianOrderContent.textContent = "";
										patientOrdercontent.textContent = "";

										mdgTestListContainerWrap.style.display = 'block';
										orderConfirmForm.style.display = 'none';	
									}
									const orderEditB = document.querySelector('#orderEditB');
									orderEditB.onclick = function(){
										clinicianOrderContent.textContent = "";
										patientOrdercontent.textContent = "";

										mdgTestListContainerWrap.style.display = 'block';
										orderConfirmForm.style.display = 'none';	
									}
 							}
							
						})();


	  	}, 

	 	statusCode: {
	    	404: function() {
	      	alert('There was a problem with the server.  Try again soon!');
	    	}
	  	}
	});


	(function(){

		const confirmFormNavClick = document.querySelectorAll('.confirm-form-nav span');
		const confirmFormBox = document.querySelectorAll('.confirm_form_box');

		// console.log(confirmFormNavClick);

		for(var nv = 0; nv < confirmFormNavClick.length; nv++){

				confirmFormNavClick[nv].onclick = function(){

					var navClickAttr = this.getAttribute('filter_form');

					for(var fb = 0; fb < confirmFormBox.length; fb++){

						var cnfFormAttr = confirmFormBox[fb].getAttribute('trgt_form');

							if(navClickAttr == cnfFormAttr){
								confirmFormBox[fb].style.display = 'block';
							}else{
								confirmFormBox[fb].style.display = 'none';
							}
					}
				}
		}

	})();


									(function(){

										function sortTable(f,n){
											var rows = $('.dataTable li').get();

											rows.sort(function(a, b) {

												var A = getVal(a);
												var B = getVal(b);

												if(A < B) {
													return -1*f;
												}
												if(A > B) {
													return 1*f;
												}
												return 0;
											});

											function getVal(elm){
												var v = $(elm).children('div').eq(n).text().toUpperCase();
												if($.isNumeric(v)){
													v = parseInt(v,10);
												}
												return v;
											}

											$.each(rows, function(index, row) {
												$('.dataTable').append(row);
											});
										}
										var f_sl = 1;
										var f_nm = 1;
										$(".tathead").click(function(){
										    f_sl *= -1;
										    var n = $(this).prevAll().length;
										    sortTable(f_sl,n);
										});
										$(".dchead").click(function(){
										    f_nm *= -1;
										    var n = $(this).prevAll().length;
										    sortTable(f_nm,n);
										});

										$(".testhead").click(function(){
										    f_nm *= -1;
										    var n = $(this).prevAll().length;
										    sortTable(f_nm,n);
										});
										
										$(".psthead").click(function(){
										    f_nm *= -1;
										    var n = $(this).prevAll().length;
										    sortTable(f_nm,n);
										});

								})();


});	
	


/* =============End Script Of New Test List Date:20-07-2018 ================ */


