		

(function(){

	var $requestHttpURL = 'data/header.json'; 

		var $request = new XMLHttpRequest();

			$request.open('GET', $requestHttpURL);
			$request.responseType = 'json';
			$request.send();

			$request.onload = function(){
				var $siteHeaderData = $request.response; 
				siteHeaderFun($siteHeaderData);
			}

			function siteHeaderFun (headerObj) { 

				let $siteLogo = document.querySelector('.site-logo img');
					$siteLogo.setAttribute('src', headerObj.siteLogo);

				let $contactUs = document.querySelector('.contact-us');

					let $contBtnLink = headerObj['contactBtn'];

					for (let contBtn of $contBtnLink){
						let $aTag = document.createElement('a');
							$aTag.setAttribute('href', '#'+contBtn.replace(/ +/g, "").toLowerCase());

							$span = document.createElement('span');
							$aTag.appendChild($span).textContent = contBtn;
							$contactUs.appendChild($aTag);
					}
				
				let $siteNav = document.querySelector('.site-nav ul');
				let $sectionsCont = document.querySelector('.sections-container');
					let $navLink = headerObj.navLink;

					// console.log($navLink);

					for (let link of $navLink){
						// console.log(link.secHed);

						let $listItem = document.createElement('li');
						let $aTag = document.createElement('a');
							$aTag.setAttribute('href', '#'+link.secHed.replace(/ +/g, "").toLowerCase());

							$listItem.appendChild($aTag).textContent = link.secHed;
							$siteNav.appendChild($listItem);

							let $sectionElmt = document.createElement('section');
								
								function setAttributes(el, attrs) {
  								for (var key in attrs) {
    								el.setAttribute(key, attrs[key]);
  								}
								}

								setAttributes($sectionElmt, {
									'id': link.secHed.replace(/ +/g, "").toLowerCase(), 
									'class': 'site-section' +" "+ link.secHed.replace(/ +/g, "").toLowerCase(),
									'style': 'background-color :'+link.bgcolor 
								});


						let $container = document.createElement('div');
								$container.setAttribute('class','container');
						let $heading = document.createElement('h2');
						let prg = document.createElement('p');

						$sectionElmt.appendChild($container);
						$container.appendChild($heading).textContent = link.secHed;
						$sectionsCont.appendChild($sectionElmt);
						
						$container.appendChild(prg).textContent = link.text;

					}

					if($navLink.length > 6){
						$siteNav.className = "_ifnavlink";
					}
			}

})();


(function(){

	let $hamBtn = document.querySelector('.hamburger');

		$hamBtn.onclick = function(){
			let $nav = document.querySelector('.site-nav');

    	if ($nav.style.display == 'none' || $nav.style.display=='') {
    		$nav.style.display = 'block';
    		this.classList.add('_hamrot');
    	}
    	else {
    		$nav.style.display = 'none';	
    		this.classList.remove('_hamrot');
    	}
		}

})();


(function(){

	let $siteHeader = document.querySelector('.site-header');

		var myScrollFunc = function () {
			var y = window.scrollY;
			if (y >= 700) {
			    $siteHeader.classList.add('_stikyheader');
			} else {
			    $siteHeader.classList.remove('_stikyheader');
			}
		};

		window.addEventListener("scroll", myScrollFunc);

})();
						

// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function (e) {
//         e.preventDefault();

//         document.querySelector(this.getAttribute('href')).scrollIntoView({
//             behavior: 'smooth'
//         });
//     });
// });




    























