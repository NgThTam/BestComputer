// Vue.component('new-product', {
// 	props: ['obj'],
// 	template: `
// 		<div class="card my-card-product mx-sm-auto px-2 position-relative" data-aos="zoom-in-up" data-aos-duration="1000">
// 				<a href="#"><img class="card-img-top my-img-product" :src="obj.img" alt="Card image cap"></a>
// 				<div class="card-body">
// 				  <div class="name-price d-flex justify-content-between">
// 				    <h6 class="card-title mb-0 py-2"><a class="name" href="#">{{obj.name}}</a></h6>
// 				    <span class="price-by-dolar">{{obj.price}}</span>
// 				  </div>
// 				  <p class="card-text text-muted type-pro">{{obj.type}}</p>
// 				  <div class="view-buy d-flex justify-content-end">
// 				    <div class="btn-view-buy mr-2">
// 				      <a href="shop-item.php" class="first btn btn-outline-info" role="button" aria-pressed="true">VIEW</a>
// 				    </div>
// 				    <div class="btn-view-buy">
// 				      <a href="#" class="second btn btn-outline-info" role="button" aria-pressed="true">ADD TO CART</a>
// 				    </div>
// 				  </div>
// 				</div>
// 				<div class="countdown-timer"></div>
// 		</div>
// 	`
// })

// // Khoi tao doi tuong vue

// var vue = new Vue({
// 	el: '.app',
// 	data: {
// 		listShop1: [
// 		{
// 			id: 1,
// 			img: 'assets/images/shop-1.jpg',
// 			name: 'GAMERS MOUSE',
// 			price: '$45.05',
// 			type: 'mouse'
// 		},
// 		{
// 			id: 2,
// 			img: 'assets/images/shop-2.jpg',
// 			name: 'USB 3.0 HUB',
// 			price: '$67.05',
// 			type: 'accessories'
// 		},
// 		{
// 			id: 3,
// 			img: 'assets/images/shop-3.jpg',
// 			name: 'LAPTOP POWER ADAPTER',
// 			price: '$47.05',
// 			type: 'accessories'
// 		},
// 		{
// 			id: 4,
// 			img: 'assets/images/shop-4.jpg',
// 			name: 'WI-FI ROUTER REPIETER',
// 			price: '$32.15',
// 			type: 'network'
// 		},
// 		{
// 			id: 5,
// 			img: 'assets/images/shop-5.jpg',
// 			name: '128GB SSD M.2',
// 			price: '$45.05',
// 			type: 'storage'
// 		},
// 		{
// 			id: 6,
// 			img: 'assets/images/shop-6.jpg',
// 			name: 'EXTERNAL HDD DRIVE',
// 			price: '$102.05',
// 			type: 'storage'
// 		},
// 		{
// 			id: 7,
// 			img: 'assets/images/shop-7.jpg',
// 			name: '10" OCTA CORE TABLET',
// 			price: '$145.99',
// 			type: 'tablet'
// 		},
// 		{
// 			id: 8,
// 			img: 'assets/images/shop-1.jpg',
// 			name: 'CABLE ORGANIZER',
// 			price: '$15.25',
// 			type: 'accessories'
// 		},
// 		]
// 	}
// });
// loader 
window.onload = function() {
	document.querySelector('.loader').style.display = 'none';
}
// loader
class CountDown {
  constructor(expiredDate, onRender, onComplete) {
    this.setExpireDate(expiredDate);
    this.onRender = onRender;
    this.onComplete = onComplete;
  }
  // thoi gian con lai
  setExpireDate(expiredDate) {
    this.timeRemaining = expiredDate;
    this.timeRemaining > 0 ? this.start() : this.complete();
  }
  complete() {
    if(typeof this.onComplete == 'function') {
      this.onComplete();
    }
  }
  getTime() {
    return {
      hours: Math.floor(this.timeRemaining / 1000 / 60 / 60),
      minutes: Math.floor(this.timeRemaining / 1000 / 60) % 60,
      seconds: Math.floor(this.timeRemaining / 1000) % 60
    };
  }
  update() {
    if(typeof this.onRender == 'function') {
      this.onRender(this.getTime());
    }
  }
  start() {
    this.update();
    const intervaID = setInterval(() => {
      this.timeRemaining -= 1000;
      if(this.timeRemaining >= 0) {
        this.update();
      } else {
        this.complete();
        clearInterval(intervaID);
      }
    }, 1000);
  }
}
const main = document.querySelectorAll('.countdown-timer');
const days = [1000*60*60, 1000*60*60*2, 1000*60*60*3, 1000*60*60*4, 1000*60*60*5, 1000*60*60*6, 1000*60*60*7, 1000*60*60*8];
for(let i = 0; i < main.length; i++) {
	// select elements
	const app = main[i];
	const format = (t) => {
	  return t < 10 ? '0' + t : t;
	};
	const render = (time) => {
		app.innerHTML = `
	  <div class="count-down">
	  	<span>${format(time.hours)}:${format(time.minutes)}:${format(time.seconds)}</span>
	  </div>
	  `;
	};
	const showMessage = () => {
	  app.forEach( (el) => {
			el.innerHTML = `
	  <div class="count-down">
	  	<span>Out of stock</span>
	  </div>
	  `;
		});
	};
	const day = 1000*60*60;
	const complete = () => {
	  showMessage();
	  setTimeout(() => {
	    countdownTimer.setExpireDate(days[i]);
	  }, 1000 * 60);
	};
	const countdownTimer = new CountDown(
	    days[i],
	    render,
	    complete
	);
}