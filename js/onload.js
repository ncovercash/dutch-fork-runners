window.log = function (category, message, bold) {
  if (bold) {
    console.log(
      "%c" + new Date().toLocaleString() + " [" + category + "] " + message,
      "font-weight: 900; font-style: oblique;"
    );
  } else {
    console.log("%c" + new Date().toLocaleString() + " [" + category + "] " + message, "");
  }
};

(function ($) {
  $(function () {
    // toish: "Put it in a closure":tm:
    function materializeOnload() {
      if ($ === undefined || M === undefined) {
        setTimeout(materializeOnload, 100);
        return;
      }
      window.Materialize = window.M; // legacy
      $("select").attr("required", false);
      $(".sidenav").sidenav();
      $(".modal").modal();
      $(".pushpin").pushpin({
        top: 200,
        offset: 72,
      });
      $(".tooltipped").tooltip();
      $(".collapsible").collapsible();
      $(".dropdown-trigger").dropdown();
      $(".fixed-action-btn:not(.horizontal)").floatingActionButton();
      $(".fixed-action-btn.horizontal").floatingActionButton({
        direction: "left",
      });
      $("textarea").trigger("autoresize");
    }

    materializeOnload();

    function escapeText(text) {
      return $("<div></div>").text(text).html();
    }

    /* CALENDAR */
    if ($("#calendar").length) {
      const defaultView =
        localStorage.getItem("fcDefaultView") !== null
          ? localStorage.getItem("fcDefaultView")
          : "agendaWeek";
      $("#calendar").fullCalendar({
        googleCalendarApiKey: "AIzaSyCG_I_1IwXf4xv-4CgCDp3mXZzWmrDHhpk",

        events: {
          googleCalendarId: "lex5.k12.sc.us_87ev80jebat3bij59q4mi22t24@group.calendar.google.com",
          color: "#1a5434",
        },

        editable: false,
        handleWindowResize: true,

        header: {
          left: "prev",
          center: "title",
          right: "next",
        },

        footer: {
          center: "month,agendaWeek,agendaDay listWeek,listMonth",
        },

        defaultView: "month",

        contentHeight: "auto",

        buttonText: {
          listMonth: "list month",
          listWeek: "list week",
        },

        eventClick: function (calEvent, jsEvent, view) {
          if (calEvent.title == undefined) {
            calEvent.title = "-";
          }

          $("#eventModal .modal-content").html(
            "<h4>" +
              escapeText(calEvent.title) +
              "</h4>" +
              (calEvent.description
                ? '<p class="no-margin">' + calEvent.description + "</p>"
                : "") +
              (calEvent.location
                ? '<p class="flow-text no-margin">' + escapeText(calEvent.location) + "</p>"
                : "") +
              '<a class="flow-text no-margin" href="' +
              escapeText(calEvent.url) +
              '">Google Calendar Link</a>'
          );

          $("#eventModal").modal("open");

          return false;
        },
        viewRender: function (view, element) {
          localStorage.setItem("fcDefaultView", view.name);
        },

        defaultView: defaultView,
      });
    }
  });
})(jQuery);
