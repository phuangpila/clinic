  $(function(){
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',  //  prevYear nextYea
            center: 'title',
            right: 'month,agendaWeek,agendaDay',
        },  
        buttonIcons:{
            prev: 'left-single-arrow',
            next: 'right-single-arrow',
            prevYear: 'left-double-arrow',
            nextYear: 'right-double-arrow'         
        },       
        events: {
            url: 'data_events.php',
            error: function() {

            }
        },    
        eventLimit:true,
//        hiddenDays: [ 2, 4 ],
        lang: 'th',
        dayClick: function() {
        }        
    });
});

