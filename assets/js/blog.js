// loader 
window.onload = function() {
  document.querySelector('.loader').style.display = 'none';
}
// loader
Vue.component('new-blog', {
	props: ['obj'],
	template: `
    <div class="row article-1 pb-5 mb-5" data-aos="fade-up" data-aos-duration="1000">
      <div class="col-12 position-relative px-0 py-0 not-over">
        <a href="read-more.php">
          <i class="fa fa-search position-absolute article-1-search d-none" aria-hidden="true"></i>
          <img :src="obj.img" class="img-fluid" alt="Responsive image">
        </a>
        <div class="date d-flex flex-column font-weight-bold text-white align-items-center position-absolute">
          <span class="month">{{obj.month}}</span>
          <span class="day">{{obj.day}}</span>
          <span class="year">{{obj.year}}</span>
        </div>
      </div>

      <div class="col-12 pt-5">
        <h3>
          <a href="read-more.php" class="content-link">{{obj.title}}</a>
        </h3>
        <p class="text-muted mb-4" style="font-size: 90%;">Category: 
          <a href="read-more.php" class="category-link">{{obj.c1}}</a>
          <a href="read-more.php" class="category-link">{{obj.c2}}</a>
        </p>
        <p class="text-muted" style="font-size: 90%;">
            {{obj.content}}
        </p>
        <div class="bt-article-1 d-flex justify-content-between">
          <p class="py-1 mb-0">Posted by <span>admin</span></p>
          <a href="services.php" class="btn btn-outline-info" role="button" aria-pressed="true">Read more</a>
        </div>
      </div>
    </div>
	`
})

// Khoi tao doi tuong vue
var vue = new Vue({
  el: '#at',
  data: {
    listBlog1:[
    {
      id: 1,
      img: 'assets/images/article-1.jpg',
      day: '15',
      month: 'July',
      year: '2020',
      title: 'What is BGA',
      c1: 'MICRO CHIP REPAIR,',
      c2: 'TECHNOLOGY',
      content: 'A ball grid array (BGA) is a type of surface-mount packaging (a chip carrier) used for integrated circuits. BGA packages are used to permanently mount devices such as microprocessors. A BGA can provide more interc... pins than can be put on a dual in-line or flat package. The whole bottom surface of the device can be used, instead of just the perimeter. The leads are also on average shorter than with a perimeter-only type, leading to better performance at high speeds. Soldering of BGA devices requires precise control and is usually done by automated processes. BGA devices are not suitable for socket mounting, normal distribution of letters, as opposed to using, Content here, content here, making it look like readable English.'
    },
    {
      id: 2,
      img: 'assets/images/article-2.jpg',
      day: '16',
      month: 'July',
      year: '2020',
      title: 'Calibrating the Home button in iPhone, iPad and iPod touch',
      c1: ' IPHONE,',
      c2: 'TECHNOLOGY',
      content: 'A ball grid array (BGA) is a type of surface-mount packaging (a chip carrier) used for integrated circuits. BGA packages are used to permanently mount devices such as microprocessors. A BGA can provide more interc... pins than can be put on a dual in-line or flat package. The whole bottom surface of the device can be used, instead of just the perimeter. The leads are also on average shorter than with a perimeter-only type, leading to better performance at high speeds. Soldering of BGA devices requires precise control and is usually done by automated processes. BGA devices are not suitable for socket mounting, normal distribution of letters, as opposed to using, Content here, content here, making it look like readable English.'
    },
    {
      id: 3,
      img: 'assets/images/article-3.jpg',
      day: '17',
      month: 'July',
      year: '2020',
      title: 'What is BGA',
      c1: 'BGA, THECHNOLOGY,',
      c2: 'REPLACE',
      content: 'A ball grid array (BGA) is a type of surface-mount packaging (a chip carrier) used for integrated circuits. BGA packages are used to permanently mount devices such as microprocessors. A BGA can provide more interc... pins than can be put on a dual in-line or flat package. The whole bottom surface of the device can be used, instead of just the perimeter. The leads are also on average shorter than with a perimeter-only type, leading to better performance at high speeds. Soldering of BGA devices requires precise control and is usually done by automated processes. BGA devices are not suitable for socket mounting, normal distribution of letters, as opposed to using, Content here, content here, making it look like readable English.'
    },
    
    ]
  }
});