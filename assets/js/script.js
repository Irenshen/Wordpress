document.addEventListener("DOMContentLoaded", function () {
  //animation
  AOS.init();
  
  //burder
  const burger = document.querySelector(".burger");
  const headerClose = document.querySelector(".header-close");
  const menuWrap = document.querySelector(".menu-wrap");
  const body = document.body;

  burger.addEventListener("click", () => {
    menuWrap.classList.add("menu-active");
    body.classList.add("modal-open");
  });

  headerClose.addEventListener("click", () => {
    menuWrap.classList.remove("menu-active");
    body.classList.remove("modal-open");
  });

  // menu-mobile
  if (window.innerWidth <= 500) {
    const headerLinks = document.querySelectorAll("header a");
    headerLinks.forEach((link) => {
      link.addEventListener("click", () => {
        menuWrap.classList.remove("menu-active");
        body.classList.remove("modal-open");
      });
    });
  }

  //header-fixed-active (background)
  !(function () {
    const e = document.querySelector(".header");
    window.onscroll = () => {
      window.pageYOffset > 50
        ? e.classList.add("header-active")
        : e.classList.remove("header-active");
    };
  })();
});

$(document).ready(function () {
  $(".custom-tab").click(function () {
    $(this)
      .addClass("active")
      .siblings()
      .removeClass("active")
      .parent(".custom-tabs-wrap")
      .next(".custom-tabs-content-wrap")
      .find(".custom-tabs-content")
      .removeClass("opened")
      .eq($(this).index())
      .addClass("opened");
  });

  //load more
  $("#true_loadmore").click(function () {
    $(this).text("Loading...");
    var data = {
      action: "loadmore",
      query: true_posts_nj,
      page: current_page_nj,
    };
    $.ajax({
      url: ajaxurl_nj,
      data: data,
      type: "POST",
      success: function (data) {
        if (data) {
          $("#true_loadmore")
            .html("<div class='see-more-btn'>See more</div>")
            .before(data);
          current_page_nj++;
          if (current_page_nj == max_pages_nj) $("#true_loadmore").remove();
        } else {
          $("#true_loadmore").remove();
        }
      },
    });
  });

  $("#true_loadmore-2").click(function () {
    $(this).text("Loading...");
    var data = {
      action: "loadmore",
      query: true_posts,
      page: current_page,
    };
    $.ajax({
      url: ajaxurl,
      data: data,
      type: "POST",
      success: function (data) {
        if (data) {
          $("#true_loadmore-2")
            .html("<div class='see-more-btn'>See more</div>")
            .before(data);
          current_page++;
          if (current_page == max_pages) $("#true_loadmore-2").remove();
        } else {
          $("#true_loadmore-2").remove();
        }
      },
    });
  });
});
