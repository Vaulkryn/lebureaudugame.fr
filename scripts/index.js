/*************************************************/
/***** ↓↓ Slide carousel in games_wrapper ↓↓ *****/
/**
 * @param {HTMLElement} element
 * @param {Object} options
 * @param {Object} [options.slidesVisibles=1] nombres d'éléments visibles
 * @param {boolean} [options.loop=false] boucler ou non en fin de slides
 */

/**
 * @callback moveCallBack
 * @param {number} index
 */

class Carousel {
  constructor(element, options = {}) {
    this.element = element
    this.options = Object.assign({}, {
      slidesToScroll: 1,
      slidesVisibles: 1,
      loop: false
    }, options)
    var children = [].slice.call(element.children)
    this.currentItem = 0
    this.root = this.createDivWithClass('carousel')
    this.container = this.createDivWithClass('carousel__container')
    this.root.appendChild(this.container)
    this.element.appendChild(this.root)
    this.moveCallBack = []
    this.items = children.map((child) => {
      var item = this.createDivWithClass('carousel__item')
      item.appendChild(child)
      this.container.appendChild(item)
      return item
    })
    this.setStyle()
    this.createNav()
    this.moveCallBack.forEach(callBack => callBack(0))
  }

  setStyle() {
    var ratio = this.items.length / this.options.slidesVisible
    this.container.style.width = (ratio * 100) + "%"
    this.items.length / this.options.slidesVisible
  }

  createNav() {
    var nextBtn = this.createDivWithClass('carousel__next')
    var prevBtn = this.createDivWithClass('carousel__prev')
    this.root.appendChild(nextBtn)
    this.root.appendChild(prevBtn)
    nextBtn.addEventListener('click', this.next.bind(this))
    prevBtn.addEventListener('click', this.prev.bind(this))
    if (this.options.loop === true) {
      return
    }
    this.onMove(index => {
      if (index === 0) {
        prevBtn.classList.add('carousel__prev--hidden')
      } else {
        prevBtn.classList.remove('carousel__prev--hidden')
      }
      if (this.items[this.currentItem + this.options.slidesVisible] === undefined) {
        nextBtn.classList.add('carousel__next--hidden')
      } else {
        nextBtn.classList.remove('carousel__next--hidden')
      }
    })
  }

  next() {
    this.gotoItem(this.currentItem + this.options.slidesToScroll)
  }

  prev() {
    this.gotoItem(this.currentItem - this.options.slidesToScroll)
  }

  /**
   * @param {number} index
   */

  gotoItem(index) {
    if (index < 0) {
      index = this.items.length - this.options.slidesVisible
    } else if (index >= this.items.length || this.items[this.currentItem + this.options.slidesVisible] === undefined && index > this.currentItem) {
      index = 0
    }
    var translateX = index * -100 / this.items.length
    this.container.style.transform = 'translate3d(' + translateX + '%,0,0)'
    this.currentItem = index
    this.moveCallBack.forEach(callBack => callBack(index))
  }

  /**
   * @param {moveCallBack} callBack 
   */

  onMove(callBack) {
    this.moveCallBack.push(callBack)
  }

  /**
   * @param {string} className
   * @returns {HTMLElement}
   */

  createDivWithClass(className) {
    var div = document.createElement('div')
    div.setAttribute('class', className)
    return div
  }
}

new Carousel(document.querySelector("#carusel1"), {
  slidesVisible: 3,
  loop: false
})

new Carousel(document.querySelector("#carusel2"), {
  slidesVisible: 3,
  loop: false
})

new Carousel(document.querySelector("#carusel3"), {
  slidesVisible: 3,
  loop: false
})

/*******************************************/
/***** ↓↓ Fade in/out games_wrapper ↓↓ *****/

const scrollingOptions = {
  root: null,
  rootMargin: "0px",
  threshold: 1
};

function scrollingAnimate(entries) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      // fade in observed elements that are in view
      entry.target.classList.replace('fadeOutLeft', 'fadeInLeft');
      entry.target.classList.replace('fadeOutRight', 'fadeInRight');
    } else {
      // fade out observed elements that are not in view
      entry.target.classList.replace('fadeInLeft', 'fadeOutLeft');
      entry.target.classList.replace('fadeInRight', 'fadeOutRight');
    }
  });
}

const scrolling = new IntersectionObserver(scrollingAnimate, scrollingOptions);

const fadeToLeft = document.querySelectorAll('.games_container');
const fadeToRight = document.querySelectorAll('.category_container');
fadeToLeft.forEach(el => scrolling.observe(el));
fadeToRight.forEach(el => scrolling.observe(el));

/****************************************************/
/***** ↓↓ Fade in/out randomscreenshot & img ↓↓ *****/

function containerFading() {
  var fadeInContainer = document.querySelectorAll(".reveal");
  for (var i = 0; i < fadeInContainer.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = fadeInContainer[i].getBoundingClientRect().top;
    var elementVisible = 450;
    if (elementTop < windowHeight - elementVisible) {
      fadeInContainer[i].classList.add("active");
    } else {
      fadeInContainer[i].classList.remove("active");
    }
  }
}

function imgFadingA() {
  var fadeInImgA = document.querySelectorAll(".revealImgA");
  for (var i = 0; i < fadeInImgA.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = fadeInImgA[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      fadeInImgA[i].classList.add("active");
    } else {
      fadeInImgA[i].classList.remove("active");
    }
  }
}

function imgFadingB() {
  var fadeInImgB = document.querySelectorAll(".revealImgB");
  for (var i = 0; i < fadeInImgB.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = fadeInImgB[i].getBoundingClientRect().top;
    var elementVisible = 200;
    if (elementTop < windowHeight - elementVisible) {
      fadeInImgB[i].classList.add("active");
    } else {
      fadeInImgB[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", containerFading);
window.addEventListener("scroll", imgFadingA);
window.addEventListener("scroll", imgFadingB);
containerFading();
imgFadingA();
imgFadingB();

/*************************************************/
/***** ↓↓ Show modals in randomscreenshot ↓↓ *****/

function disableScroll() {
  // Get the current page scroll position
  scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,

    // if any scroll is attempted, set this to the previous value
    window.onscroll = function () {
      window.scrollTo(scrollLeft, scrollTop);
    };
}

function enableScroll() {
  window.onscroll = function () {};
}

var modal = document.getElementById('modalBody');
var images = document.getElementsByClassName('img');
var modalImg = document.getElementById("modalImg");
for (var i = 0; i < images.length; i++) {
  var img = images[i];
  img.onclick = function (e) {
    modal.style.display = "block";
    modalImg.src = this.src;
    disableScroll()
  }
}
var closeBtn = document.getElementsByClassName("close")[0];
closeBtn.onclick = function () {
  modal.style.display = "none";
  enableScroll()
}