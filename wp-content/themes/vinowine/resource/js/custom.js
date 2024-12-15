/**
 * Custom JS for theme elements
 */

/**
 * Wocommerce active class for category list
 */
let vinoWineurl = window.location.href;
const vinoWinecatLink = document.querySelectorAll(
  ".wc-block-product-categories-list li a"
);
vinoWinecatLink.forEach((item) => {
  if (item.href === vinoWineurl) {
    item.classList.add("active");
  }
});

/*
    Add class in body when search clicked
*/
let vinoWinesearchBtn = document.querySelector(".search-controller svg.search");

if (vinoWinesearchBtn !== null) {
  vinoWinesearchBtn.addEventListener("click", function (e) {
    document.body.classList.remove("open-social");
    document.body.classList.add("open-search");
    document.body.addEventListener("click", function () {
      document.body.classList.remove("open-search");
    });

    let vinoWinesearchContainer = document.querySelector(".search-container");
    vinoWinesearchContainer.addEventListener("click", function (e) {
      e.stopPropagation();
    });

    var vinoWinesearchInput = document.querySelector(".wp-block-search__input");
    window.setTimeout(() => vinoWinesearchInput.focus(), 0);
  });
}

var vinoWinesearchBtnClose = document.querySelector(
  ".search-controller svg.cross"
);

if (vinoWinesearchBtnClose !== null) {
  vinoWinesearchBtnClose.addEventListener("click", function (e) {
    document.body.classList.remove("open-search");

  });
}


/*
    Add class in body when social clicked
*/
let vinoWinesocialBtn = document.querySelector(".social-controller svg.social");

if (vinoWinesocialBtn !== null) {
  vinoWinesocialBtn.addEventListener("click", function (e) {
    document.body.classList.remove("open-search");
    document.body.classList.add("open-social");
    document.body.addEventListener("click", function () {
      document.body.classList.remove("open-social");
    });

    let vinoWinesocialContainer = document.querySelector(".social-container");
    vinoWinesocialContainer.addEventListener("click", function (e) {
      e.stopPropagation();
    });

    var vinoWinesocialInput = document.querySelector(".wp-block-social__input");
    window.setTimeout(() => vinoWinesocialInput.focus(), 0);
  });
}

var vinoWinesocialBtnClose = document.querySelector(
  ".social-controller svg.cross"
);

if (vinoWinesocialBtnClose !== null) {
  vinoWinesocialBtnClose.addEventListener("click", function (e) {
    document.body.classList.remove("open-social");

  });
}

/*
    Add blinker on input field when active
*/
let vinoWineblinkerField = document.querySelector(".social-controller svg.search");

if (vinoWineblinkerField !== null) {
  vinoWineblinkerField.addEventListener("click", function () {
    var vinoWinesearchInput = document.querySelector(".wp-block-search__input");
        window.setTimeout(() => vinoWinesearchInput.focus(), 0);
  });
}