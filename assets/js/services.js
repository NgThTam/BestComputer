// loader 
window.onload = function() {
	document.querySelector('.loader').style.display = 'none';
}
// loader
Vue.component('new-product', {
	props: ['obj'],
	template: `
    <div class="card my-card-product mx-sm-auto" data-aos="zoom-in-up" data-aos-duration="1000">
      <a href="read-more.php"><img class="card-img-top my-img-product" :src="obj.img" alt="Card image cap"></a>
      <div class="card-body">
        <h6 class="card-title"><a href="read-more.php">{{obj.title}}</a></h6>
        <p class="card-text text-muted">{{obj.content}}</p>
        <div class="read-more-product d-flex justify-content-end">
          <a href="read-more.php" class="btn btn-outline-info" role="button" aria-pressed="true">Read more</a>
        </div>
      </div>
    </div>
	`
})

// Khoi tao doi tuong vue
var vue = new Vue({
	el: '.app',
	data: {
		listNew1: [
		{
			id: 1,
			img: 'assets/images/mac-4.png',
			title: 'Laptop Apple MacBook Pro 2018',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 2,
			img: 'assets/images/dell-2.png',
			title: 'Laptop Dell Inspiron 7373-TI501OW',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 3,
			img: 'assets/images/asus-3.png',
			title: 'Laptop ASUS ZenBook UX430UA',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 4,
			img: 'assets/images/acer-2.png',
			title: 'Laptop Acer Swift 3 SF314',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 5,
			img: 'assets/images/mac-3.png',
			title: 'MacBook Air 2017 128GB (MQD32SA/A)',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 6,
			img: 'assets/images/asus-2.png',
			title: 'Laptop Asus Vivobook S533EQ',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 7,
			img: 'assets/images/mac-4.png',
			title: 'Laptop Apple MacBook Pro 2018',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 8,
			img: 'assets/images/dell-2.png',
			title: 'Laptop Dell Inspiron 7373-TI501OW',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 9,
			img: 'assets/images/asus-3.png',
			title: 'Laptop ASUS ZenBook UX430UA',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 10,
			img: 'assets/images/acer-2.png',
			title: 'Laptop Acer Swift 3 SF314',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 11,
			img: 'assets/images/mac-3.png',
			title: 'MacBook Air 2017 128GB (MQD32SA/A)',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 12,
			img: 'assets/images/asus-2.png',
			title: 'Laptop Asus Vivobook S533EQ',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		]
	}
});


// Khoi tao doi tuong vue
var vue = new Vue({
	el: '.app2',
	data: {
		listNew2: [
		{
			id: 1,
			img: 'assets/images/mac-1.png',
			title: 'MacBook Air 2017 128GB (MQD32SA/A)',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 2,
			img: 'assets/images/mac-2.png',
			title: 'MacBook Air M1 256GB Yellow',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 3,
			img: 'assets/images/mac-3.png',
			title: 'Laptop Apple MacBook Pro 2018',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 4,
			img: 'assets/images/mac-4.png',
			title: 'Laptop APPLE MacBook Pro 2020',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 5,
			img: 'assets/images/mac-1.png',
			title: 'MacBook Air M1 256GB Silver',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 6,
			img: 'assets/images/mac-2.png',
			title: 'MacBook Air M1 256GB Black',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 7,
			img: 'assets/images/mac-1.png',
			title: 'MacBook Air 2017 128GB (MQD32SA/A)',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 8,
			img: 'assets/images/mac-2.png',
			title: 'MacBook Air M1 256GB Yellow',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 9,
			img: 'assets/images/mac-3.png',
			title: 'Laptop Apple MacBook Pro 2018',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 10,
			img: 'assets/images/mac-4.png',
			title: 'Laptop APPLE MacBook Pro 2020',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 11,
			img: 'assets/images/mac-1.png',
			title: 'MacBook Air M1 256GB Silver',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 12,
			img: 'assets/images/mac-2.png',
			title: 'MacBook Air M1 256GB Black',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		]
	}
});

// Khoi tao doi tuong vue
var vue = new Vue({
	el: '.app3',
	data: {
		listNew3: [
		{
			id: 1,
			img: 'assets/images/asus-1.png',
			title: 'Asus ZenBook UX371EA-HL701TS',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 2,
			img: 'assets/images/asus-2.png',
			title: 'Laptop Asus Zenbook UX363EA',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 3,
			img: 'assets/images/asus-3.png',
			title: 'Laptop Asus Vivobook S533EQ',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 4,
			img: 'assets/images/asus-4.png',
			title: 'Laptop ASUS VivoBook S14',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 5,
			img: 'assets/images/asus-5.png',
			title: 'Laptop ASUS ZenBook UX430UA',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 6,
			img: 'assets/images/asus-6.png',
			title: 'Laptop ASUS ZenBook 13 UX331UN',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 7,
			img: 'assets/images/asus-1.png',
			title: 'Asus ZenBook UX371EA-HL701TS',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 8,
			img: 'assets/images/asus-2.png',
			title: 'Laptop Asus Zenbook UX363EA',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 9,
			img: 'assets/images/asus-3.png',
			title: 'Laptop Asus Vivobook S533EQ',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 10,
			img: 'assets/images/asus-4.png',
			title: 'Laptop ASUS VivoBook S14',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 11,
			img: 'assets/images/asus-5.png',
			title: 'Laptop ASUS ZenBook UX430UA',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 12,
			img: 'assets/images/asus-6.png',
			title: 'Laptop ASUS ZenBook 13 UX331UN',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		]
	}
});

// Khoi tao doi tuong vue
var vue = new Vue({
	el: '.app4',
	data: {
		listNew4: [
		{
			id: 1,
			img: 'assets/images/dell-1.png',
			title: 'Laptop Dell Inspiron 7373-TI501OW',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 2,
			img: 'assets/images/dell-2.png',
			title: 'Laptop Dell Vostro 5370-V5370A',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 3,
			img: 'assets/images/dell-3.png',
			title: 'Laptop Dell Inspiron 5584-N5I5413W',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 4,
			img: 'assets/images/dell-4.png',
			title: 'Laptop Dell G5 15 5500',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 5,
			img: 'assets/images/dell-5.png',
			title: 'Laptop Dell Inspiron 7570-782P81',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 6,
			img: 'assets/images/dell-1.png',
			title: 'Laptop Dell Vostro 5570-GT537A',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 7,
			img: 'assets/images/dell-1.png',
			title: 'Laptop Dell Inspiron 7373-TI501OW',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 8,
			img: 'assets/images/dell-2.png',
			title: 'Laptop Dell Vostro 5370-V5370A',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 9,
			img: 'assets/images/dell-3.png',
			title: 'Laptop Dell Inspiron 5584-N5I5413W',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 10,
			img: 'assets/images/dell-4.png',
			title: 'Laptop Dell G5 15 5500',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 11,
			img: 'assets/images/dell-5.png',
			title: 'Laptop Dell Inspiron 7570-782P81',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 12,
			img: 'assets/images/dell-1.png',
			title: 'Laptop Dell Vostro 5570-GT537A',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		]
	}
});


// Khoi tao doi tuong vue
var vue = new Vue({
	el: '.app5',
	data: {
		listNew5: [
		{
			id: 1,
			img: 'assets/images/acer-1.png',
			title: 'Acer Swift 3 SF315-52G-87N4',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 2,
			img: 'assets/images/acer-2.png',
			title: 'Laptop Acer Aspire E5-575-35M7',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 3,
			img: 'assets/images/acer-3.png',
			title: 'Laptop Acer Spin 5 SP513-52N-556V',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 4,
			img: 'assets/images/acer-4.png',
			title: 'Laptop Acer Swift 3 SF315-52',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 5,
			img: 'assets/images/acer-5.png',
			title: 'Laptop Acer Aspire 3 A315',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 6,
			img: 'assets/images/acer-6.png',
			title: 'Laptop Acer Swift 3 SF314',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 7,
			img: 'assets/images/acer-1.png',
			title: 'Acer Swift 3 SF315-52G-87N4',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 8,
			img: 'assets/images/acer-2.png',
			title: 'Laptop Acer Aspire E5-575-35M7',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 9,
			img: 'assets/images/acer-3.png',
			title: 'Laptop Acer Spin 5 SP513-52N-556V',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 10,
			img: 'assets/images/acer-4.png',
			title: 'Laptop Acer Swift 3 SF315-52',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 11,
			img: 'assets/images/acer-5.png',
			title: 'Laptop Acer Aspire 3 A315',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		{
			id: 12,
			img: 'assets/images/acer-6.png',
			title: 'Laptop Acer Swift 3 SF314',
			content: 'The internal 512 GB PCIe(R) NVMe(TM) M.2 SSD, and higher bandwidth, speed and efficiency with 16 GB DDR4-2666 SDRAM...'
		},
		]
	}
});