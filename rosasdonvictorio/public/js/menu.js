$(function() {
    var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el;
            $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        };
    }   

    var accordion = new Accordion($('#accordion'), false);
});
/* ----------------------------------------------------------------------*/
$(function() {
    var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el;
            $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu2').not($next).slideUp().parent().removeClass('open');
        };
    }   

    var accordion = new Accordion($('#accordion2'), false);
    var accordion = new Accordion($('#accordion3'), false);
    var accordion = new Accordion($('#accordion4'), false);
    var accordion = new Accordion($('#accordion5'), false);
    var accordion = new Accordion($('#accordion6'), false);
    var accordion = new Accordion($('#accordion7'), false);
    var accordion = new Accordion($('#accordion8'), false);
    var accordion = new Accordion($('#accordion9'), false);
    var accordion = new Accordion($('#accordion10'), false);
});

/* ======================================================= */
$('.jf-date input').datepicker({
    format: "dd/mm/yyyy",
    startDate: "today",
    todayBtn: "linked",
    language: "espanish"
});
