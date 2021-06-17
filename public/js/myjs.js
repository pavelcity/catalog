'use strict';

document.addEventListener('DOMContentLoaded', (e) => {
  

	// nft page - коллекция токена - заказать в модалке
	try {
		let toketNftPic = document.querySelectorAll('.toketNftPic');
		let modalNftToken = document.querySelector('.modalNftToken');
		let closeNftTokenBt = document.querySelector('.closeNftTokenBt');
		let nftModalTitle = document.querySelector('.nftModalTitle');
		let nftModalPrice = document.querySelector('.nftModalPrice');
		let zakazTokenNft = document.querySelector('.zakazTokenNft');
		let intoPicToken = document.querySelector('.intoPicToken');

		toketNftPic.forEach(bt=>{
			bt.addEventListener('click', function (e){
				e.preventDefault();
				modalNftToken.classList.add('modalNftTokenActive');
				document.body.style.overflow = 'hiiden';

				let dataTokenPic = this.getAttribute('data-tokenPic');
				intoPicToken.setAttribute('src', dataTokenPic);

				let dataTitle = this.getAttribute('data-title');
				nftModalTitle.textContent = dataTitle;

				let dataTokenprice = this.getAttribute('data-tokenprice');
				nftModalPrice.textContent = dataTokenprice + ' ETH';

				zakazTokenNft.value = dataTitle + ' | ' + dataTokenprice;
			});
		});


		closeNftTokenBt.addEventListener('click', (e)=>{
			e.preventDefault();
			modalNftToken.classList.remove('modalNftTokenActive');
			document.body.style.overflow = '';
		});

	} catch (e) {

	}






	// подарок, заказазть в модалке
	try{

		let podarok = document.querySelectorAll('.podarok');
		let modalGift = document.querySelector('.modalGift');
		let giftTitle = document.querySelector('.giftTitle');
		let giftPrice = document.querySelector('.giftPrice');
		let closeGiftBt = document.querySelector('.closeGiftBt');

		let intoPic = document.querySelector('.intoPic');
		let zakazGift = document.querySelector('.zakazGift');
		

		// #show
		podarok.forEach(gift=>{
			gift.addEventListener('click', function(e){
				e.preventDefault();
				// alert('подарок');

				let pic = this.getAttribute('data-image');
				console.log(pic);
				intoPic.setAttribute('src', pic);
				
				setTimeout((e)=>{

				modalGift.classList.add('modalGiftActive');
				document.body.style.overflow = 'hidden';


				let price = this.getAttribute('data-price');
				giftPrice.textContent = price;

				let title = this.getAttribute('data-title');
				giftTitle.textContent = title;

				zakazGift.value = title + ' | ' + price;
				},10);

				
				
				
				
				
			});

		});


		// hide
		function hideGiftModal () {
			modalGift.classList.remove('modalGiftActive');
			document.body.style.overflow = '';
		}

		closeGiftBt.addEventListener('click', (e)=>{
			e.preventDefault();
			hideGiftModal ();
		});

		modalGift.addEventListener('click', (e)=>{
			if(e.target === modalGift && modalGift.classList.contains('modalGiftActive')) {
				hideGiftModal ();
			}
		});


		document.addEventListener('keydown', (e)=>{
			if(e.code === 'Escape' &&  modalGift.classList.contains('modalGiftActive')) {
				hideGiftModal ();
			}
		});



		
				

	} catch (err) {
		
	}









	
	// липкая шапка
	try{
		let topNav = document.querySelector('.topNav');
		let topLogo = document.querySelector('.topLogo');

		window.addEventListener('scroll', () => {
			topLogo.classList.toggle('w-10', window.scrollY > 0);
		});

	} catch (err) {
		
	}







	// коллекции заказать товар
	try {
		let buyTovar = document.querySelector('.buyTovar');
		let modalBuyTovar = document.querySelector('.modalBuyTovar');
		let closeTovarBt = document.querySelector('.closeTovarBt');

		let tovarTitle = document.querySelector('.tovarTitle');
		let tovarPrice = document.querySelector('.tovarPrice');
		let zakaz = document.querySelector('.zakaz');
	
	
		// #show
		buyTovar.addEventListener('click', function(e){
			e.preventDefault();
			modalBuyTovar.classList.add('modalBuyTovarActive');
			document.body.style.overflow = 'hidden';

			let dataTitle = this.getAttribute('data-title');
			tovarTitle.textContent = dataTitle;

			let dataPrice = this.getAttribute('data-price');
			tovarPrice.textContent = dataPrice;

			zakaz.value = dataTitle + ' | ' + dataPrice;
		});
	
	


	
	
		// #close
		function closeModal () {
			modalBuyTovar.classList.remove('modalBuyTovarActive');
			document.body.style.overflow = '';
		}
	
		closeTovarBt.addEventListener('click', (e)=>{
			closeModal ();
		});
	
		modalBuyTovar.addEventListener('click', (e)=>{
			if(e.target === modalBuyTovar && modalBuyTovar.classList.contains('modalBuyTovarActive')){
				closeModal ();
			}
		});
	
	
		document.addEventListener('keydown', (e)=>{
			if(e.code === 'Escape' && modalBuyTovar.classList.contains('modalBuyTovarActive')) {
				closeModal ();
			}
		});
	} catch(err) {
		
	}

	








	// гамбургер - мобильное меню
	let humb = document.querySelector('.humb');
	let leftNav = document.querySelector('.leftNav');
	let closeLeft = document.querySelector('.closeLeft');

	// #show
	humb.addEventListener('click', (e)=> {
		e.preventDefault();

			e.preventDefault();
			leftNav.classList.add('leftNavActive');
			document.body.style.overflow = 'hidden';		
		
	});


	// #hide
	closeLeft.addEventListener('click', (e)=>{
		e.preventDefault();
		leftNav.classList.remove('leftNavActive');
		document.body.style.overflow = '';
	});
















	//  -----------
	// отправка заказа коллекции
	try {

		let collectionForm = document.querySelector('#collectionForm');
		let modalBuyTovar = document.querySelector('.modalBuyTovar');

		// #close
		function closeModalCollection () {
			modalBuyTovar.classList.remove('modalBuyTovarActive');
			document.body.style.overflow = '';
		}

		function postData(form, hidefunc) {
			form.addEventListener('submit', (e) => {

				e.preventDefault();
				alert('отправка');

				let r = new XMLHttpRequest;
				r.open('POST', '/recall.php');

				let formData = new FormData(form);

				r.send(formData);

				r.addEventListener('load', () => {
					if (r.status === 200) {
						alert('Данные отправлены');
						closeModalCollection();
						console.log('success / yes');
						form.reset();
					} else {
						alert('Упс. Ошибочка. Мы уже работаем над ее устранением');
						console.log('Упс, ошибочка');
					}
				});
			});
		}

		postData(collectionForm, closeModalCollection);

	} catch (e) {
		
	}













	//  -----------
	// отправка данных подарочный набор
	try {

		let giftForm = document.querySelector('#giftForm');
		let modalGift = document.querySelector('.modalGift');

		// #close
		function hideGiftModal () {
			modalGift.classList.remove('modalGiftActive');
			document.body.style.overflow = '';
		}

		function postData(form, hidefunc) {
			form.addEventListener('submit', (e) => {

				e.preventDefault();
				alert('отправка');

				let r = new XMLHttpRequest;
				r.open('POST', '/recall.php');

				let formData = new FormData(form);

				r.send(formData);

				r.addEventListener('load', () => {
					if (r.status === 200) {
						alert('Данные отправлены');
						hideGiftModal();
						console.log('success / yes');
						form.reset();
					} else {
						alert('Упс. Ошибочка. Мы уже работаем над ее устранением');
						console.log('Упс, ошибочка');
					}
				});
			});
		}

		postData(giftForm, hideGiftModal);

	} catch (e) {
		
	}








	//  -----------
	// nft коллекция token модалка
	try {

		let nftTokenForm = document.querySelector('#nftTokenForm');
		let modalNftToken = document.querySelector('.modalNftToken');

		// #close
		function hideNftTokenModal () {
			modalNftToken.classList.remove('modalNftTokenActive');
			document.body.style.overflow = '';
		}

		function postData(form, hidefunc) {
			form.addEventListener('submit', (e) => {

				e.preventDefault();
				alert('отправка');

				let r = new XMLHttpRequest;
				r.open('POST', '/recall.php');

				let formData = new FormData(form);

				r.send(formData);

				r.addEventListener('load', () => {
					if (r.status === 200) {
						alert('Данные отправлены');
						hideNftTokenModal();
						console.log('success / yes');
						form.reset();
					} else {
						alert('Упс. Ошибочка. Мы уже работаем над ее устранением');
						console.log('Упс, ошибочка');
					}
				});
			});
		}

		postData(nftTokenForm, hideNftTokenModal);

	} catch (e) {
		
	}



});



