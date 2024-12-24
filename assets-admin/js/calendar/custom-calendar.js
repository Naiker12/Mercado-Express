document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
  
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialDate: '2020-09-12',
      initialView: 'timeGridWeek',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
      }, 
      height: 'auto',
      navLinks: false, // can click day/week names to navigate views
      editable: true,
      selectable: true,
      selectMirror: true,
      nowIndicator: true,
      events: [
        {
          id: 1,
          task: 'NFT App Design',
          hours: '11:20am | Mon - 7 Nov, 2024',
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-05T24:00:00',
        }, 
        {
          id: 2,
          task: 'Pet Care Website',
          hours: '3:00pm | Thu - 10 Nov, 2024', 
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-07T01:00:00',
        },
        {
          id: 3,
          task: 'Digital Marketing',
          hours: '7:30pm | Tue - 8 Nov, 2024', 
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-08T02:00:00',
        },
        {
          id: 4,
          task: 'NFT App Design',
          hours: '2:20am | Mon - 9 Nov, 2024',
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-08T04:00:00',
        }, 
        {
          id: 5,
          task: 'Computer Science',
          hours: '3:00pm | Thu - 13 Nov, 2024',
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-07T06:00:00',
        },
        { 
          id: 6,
          task: 'Cybersecurity',
          hours: '4:00am | Tue - 13 Nov, 2024', 
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-08T08:00:00',
        },
        {
          id: 7,
          task: 'NFT App Design',
          hours: '2:21am | Mon - 9 Nov, 2024',
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-08T10:00:00',
        }, 
        {
          id: 8,
          task: 'Computer Science',
          hours: '3:50pm | Thu - 13 Nov, 2024',
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-07T12:00:00',
        },
        { 
          id: 9,
          task: 'Cybersecurity',
          hours: '9:00am | Tue - 13 Nov, 2024', 
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-08T14:00:00',
        },
        {
          id: 10,
          task: 'Software Engineering:', 
          hours: '2:21am | Mon - 14 Nov, 2024',
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-07T16:00:00',
        }, 
        {
          id: 11,
          task: 'Cloud Computing',
          hours: '3:50pm | Thu - 15 Nov, 2024',
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-10T18:00:00',
        },
        { 
          id: 12,
          task: 'Project Management',
          hours: '9:00am | Tue - 16 Nov, 2024', 
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-07T20:00:00',  
        },
        {
          id: 13,
          task: 'Mobile App Development',
          hours: '12:20am | Mon - 15 Nov, 2024',
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-08T21:00:00',
        }, 
        {
          id: 14,
          task: 'Data Science and Big Data',
          hours: '1:00am | Thu - 16 Nov, 2024', 
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-07T22:00:00',
        },
        {
          id: 15,
          task: '(AI) and Machine Learning',
          hours: '7:55am | Tue - 19 Nov, 2024', 
          classNames: ['common-style', 'bg-white'],
          start: '2020-09-07T23:00:00',  
        }
      ],
    });
  
    calendar.render();
  });
  