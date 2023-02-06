// Perfect Scrollbar

$(document).ready(() => {
    if ($(".scrollbar-container")[0]) {
      $(".scrollbar-container").each(function () {
        const ps = new PerfectScrollbar($(this)[0], {
          wheelSpeed: 2,
          wheelPropagation: true,
          minScrollbarLength: 1,
        });
      });

      const ps = new PerfectScrollbar(".scrollbar-sidebar", {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 1,
      });
    }
});
