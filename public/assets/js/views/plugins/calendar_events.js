scutum.plugins.calendar_events = {};
scutum.plugins.calendar_events.init = function () {
    scutum.plugins.calendar_events.full()
    scutum.plugins.calendar_events.small()
}
scutum.plugins.calendar_events.full = function () {
    scutum.require(['handlebars', 'clndr'], function () {
            var $clndr_events = $('#clndr-events-full');
            if ($clndr_events.length) {
                var calendar_template = $('#clndr-events-full-template'),
                    template = calendar_template.html(),
                    template_compiled = Handlebars.compile(template);

                var daysOfTheWeek = [];
                for (var i = 0; i < 7; i++) {
                    daysOfTheWeek.push(moment().weekday(i).format('dd'));
                }
                fullClndr = $clndr_events.clndr({
                    weekOffset: 1, // Monday
                    daysOfTheWeek: daysOfTheWeek,
                    events: scutum.plugins.calendar_events.events,
                    render: function (data) {
                        return template_compiled(data);
                    },
                    clickEvents: {
                        click: function (target) {
                            if (target.events.length) {

                                if($clndr_events.find('.calendar-day-' + target.events[0].date).hasClass('day-active')) {
                                    return
                                }

                                var $clndr_events_panel = $clndr_events.find('.clndr-events');
                                var thisDate = target.date._i;

                                $(target.element)
                                    .siblings('.day').removeClass('day-active')
                                    .end()
                                    .addClass('day-active');

                                $clndr_events_panel.children().hide()
                                $clndr_events_panel
                                    .children('[data-clndr-event=' + thisDate + ']').velocity("transition.slideUpIn", {
                                    duration: 120,
                                    stagger: 80,
                                    drag: true
                                });

                            }
                        }
                    }
                });

                var animate_change = function () {
                    $clndr_events
                        .addClass('animated-change')
                        .removeClass('events-visible');
                    setTimeout(function () {
                        $clndr_events.removeClass('animated-change');
                    }, 380);
                };

                // next month
                $clndr_events.on('click', '.clndr-next', function (e) {
                    e.preventDefault();
                    animate_change();
                    setTimeout(function () {
                        fullClndr.forward();
                        scutum.plugins.calendar_events.swiper()
                    }, 180);
                });
                // previous month
                $clndr_events.on('click', '.clndr-prev', function (e) {
                    e.preventDefault();
                    animate_change();
                    setTimeout(function () {
                        fullClndr.back();
                    }, 180);
                });
                // today
                $clndr_events.on('click', '.clndr-today', function (e) {
                    e.preventDefault();
                    animate_change();
                    setTimeout(function () {
                        fullClndr
                            .setYear(moment().format('YYYY'))
                            .setMonth(moment().format('M') - 1);
                    }, 180);

                });

            }
        },
        false
    )
}
scutum.plugins.calendar_events.small = function () {
    scutum.require(['handlebars', 'clndr', 'swiper'], function () {
        var $clndr_events = $('#clndr-events-small');
        if ($clndr_events.length) {
            var calendar_template = $('#clndr-events-small-template'),
                template = calendar_template.html(),
                template_compiled = Handlebars.compile(template);

            var daysOfTheWeek = [];
            for (var i = 0; i < 7; i++) {
                daysOfTheWeek.push(moment().weekday(i).format('dd'));
            }
            smallClndr = $clndr_events.clndr({
                weekOffset: 1, // Monday
                daysOfTheWeek: daysOfTheWeek,
                events: scutum.plugins.calendar_events.events,
                render: function (data) {
                    return template_compiled(data);
                },
                clickEvents: {
                    click: function (target) {
                        if (target.events.length) {

                            if($clndr_events.find('.calendar-day-' + target.events[0].date).hasClass('day-active')) {
                                return
                            }

                            var $clndr_events_panel = $clndr_events.find('.clndr-events');
                            var thisDate = target.date._i;

                            $(target.element)
                                .siblings('.day').removeClass('day-active')
                                .end()
                                .addClass('day-active');

                            $clndr_events_panel.children().hide()
                            $clndr_events_panel
                                .children('[data-clndr-event=' + thisDate + ']').velocity("transition.slideUpIn", {
                                duration: 120,
                                stagger: 80,
                                drag: true
                            });
                        }
                    }
                }
            });

            scutum.plugins.calendar_events.swiperInit()

            var animate_change = function () {
                $clndr_events
                    .addClass('animated-change')
                    .removeClass('events-visible');
                setTimeout(function () {
                    $clndr_events.removeClass('animated-change');
                }, 380);
            };

            // next month
            $clndr_events.on('click', '.clndr-next', function (e) {
                e.preventDefault();
                animate_change();
                setTimeout(function () {
                    smallClndr.forward();
                    scutum.plugins.calendar_events.swiperInit()
                }, 180);
            });
            // previous month
            $clndr_events.on('click', '.clndr-prev', function (e) {
                e.preventDefault();
                animate_change();
                setTimeout(function () {
                    smallClndr.back();
                    scutum.plugins.calendar_events.swiperInit()
                }, 180);
            });
            // today
            $clndr_events.on('click', '.clndr-today', function (e) {
                e.preventDefault();
                animate_change();
                setTimeout(function () {
                    smallClndr
                        .setYear(moment().format('YYYY'))
                        .setMonth(moment().format('M') - 1);
                    scutum.plugins.calendar_events.swiperInit()
                }, 180);

            });

        }
    },
        false
    )
}
scutum.plugins.calendar_events.swiperInit = function () {
    setTimeout(function () {
        new Swiper('#clndr-events-small .swiper-container', {
            slidesPerView: 7,
            slidesPerGroup: 7,
            slideToClickedSlide: true
        });
    }, 100)
}
scutum.plugins.calendar_events.events = [
    {
        date: moment().startOf('month').add(7, 'day').format('YYYY-MM-DD'),
        title: 'Doctor appointment',
        url: 'javascript:void(0)',
        timeStart: '10:00',
        timeEnd: '11:00',
        eventColor: '#E1F5FE'
    },
    {
        date: moment().startOf('month').add(8, 'day').format('YYYY-MM-DD'),
        title: 'John\'s Birthday',
        url: null,
        eventColor: '#EFEBE9'
    },
    {
        date: moment().startOf('month').add(8, 'day').format('YYYY-MM-DD'),
        title: 'Party',
        url: 'javascript:void(0)',
        timeStart: '08:00',
        timeEnd: '08:30',
        eventColor: '#E1F5FE'
    },
    {
        date: moment().startOf('month').add(12, 'day').format('YYYY-MM-DD'),
        title: 'Meeting',
        url: null,
        timeStart: '18:00',
        timeEnd: '18:20',
        eventColor: '#E1F5FE'
    },
    {
        date: moment().startOf('month').add(13, 'day').format('YYYY-MM-DD'),
        title: 'Work Out',
        url: 'javascript:void(0)',
        timeStart: '07:00',
        timeEnd: '08:00',
        eventColor: '#EFEBE9'
    },
    {
        date: moment().startOf('month').add(17, 'day').format('YYYY-MM-DD'),
        title: 'Business Meeting',
        url: 'javascript:void(0)',
        timeStart: '11:10',
        timeEnd: '11:45',
        eventColor: '#EFEBE9'
    },
    {
        date: moment().startOf('month').add(22, 'day').format('YYYY-MM-DD'),
        title: 'Meeting',
        url: 'javascript:void(0)',
        timeStart: '20:25',
        timeEnd: '20:50',
        eventColor: '#E1F5FE'
    },
    {
        date: moment().startOf('month').add(25, 'day').format('YYYY-MM-DD'),
        title: 'Haircut',
        url: 'javascript:void(0)',
        eventColor: '#EFEBE9'
    },
    {
        date: moment().startOf('month').add(25, 'day').format('YYYY-MM-DD'),
        title: 'Lunch with Katy',
        url: 'javascript:void(0)',
        timeStart: '08:45',
        timeEnd: '09:45',
        eventColor: '#EFEBE9'
    },
    {
        date: moment().startOf('month').add(25, 'day').format('YYYY-MM-DD'),
        title: 'Concept review',
        url: 'javascript:void(0)',
        timeStart: '15:00',
        timeEnd: '16:00',
        eventColor: '#E1F5FE'
    },
    {
        date: moment().startOf('month').add(26, 'day').format('YYYY-MM-DD'),
        title: 'Swimming Poll',
        url: 'javascript:void(0)',
        timeStart: '13:50',
        timeEnd: '14:20',
        eventColor: '#EFEBE9'
    },
    {
        date: moment().startOf('month').add(28, 'day').format('YYYY-MM-DD'),
        title: 'Team Meeting',
        url: 'javascript:void(0)',
        timeStart: '17:25',
        timeEnd: '18:15',
        eventColor: '#EFEBE9'
    }
]
