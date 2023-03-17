const calendar = document.querySelector(".calendar"),
    date = document.querySelector(".date"),
    daysContainer = document.querySelector(".days"),
    prev = document.querySelector(".prev");
    next = document.querySelector(".next");
    todayBtn = document.querySelector(".today-btn"),
    gotoBtn = document.querySelector(".goto-btn"),
    dateInput = document.querySelector(".date-input"),
    eventDay = document.querySelector(".event-day"),
    eventDate = document.querySelector(".event-date"),
    eventsContainer = document.querySelector(".events");
    addEventSubmit = document.querySelector(".add-event-btn");


let today = new Date();
let activeDay;
let month = today.getMonth();
let year = today.getFullYear();

const months = [
    "enero",
    "febrero",
    "marzo",
    "abril",
    "mayo",
    "junio",
    "julio",
    "agosto",
    "septiembre",
    "octubre",
    "noviembre",
    "diciembre",
];

 /*const eventsArr=[
    {
         day: 16,
         month: 03,
         year: 2023,
         events: [
           {
             title: "Event 1 lorem ipsun dolar sit genfa tersd dsad ",
             time: "10:00 AM",
           },
           {
             title: "Event 2",
             time: "11:00 AM",
           },
         ],
       },
 ];*/
// Añadiendo Días 
let eventsArr = [];

getEvents();

function initCalendar(){
     
    

    const firstDay = new Date (year, month, 1);
    const lastDay = new Date (year, month + 1, 0);
    const prevLastDay = new Date (year, month, 0);
    const prevDays = prevLastDay.getDate();
    const lastDate = lastDay.getDate();
    const day = firstDay.getDay();
    const nextDays = 7 - lastDay.getDay();

    //
    date.innerHTML = months[month] + "  " + year;

   

    let days = " ";

    for (let x = day; x > 1; x--) {
       days +=  `<div class="day prev-date" >${prevDays - x + 1}</div>`
    }

    for (let  i = 1; i <= lastDate; i++) {

        let event  = false;
        eventsArr.forEach((eventObj) => {
            if(
                eventObj.day === i &&
                eventObj.month === month + 1 &&
                eventObj.year === year
            )
            {
                event = true;
            }
        });

        if(
        i === new Date().getDate() && 
        year === new Date().getFullYear() && 
        month === new Date().getMonth()
        ){ 

          activeDay = i;
          getActiveDay(i);
          updateEvents(i);

            if(event){
                days +=  `<div class="day today active event" >${i}</div>`;
            }
            else{
                days +=  `<div class="day today active" >${i}</div>`;
            }
        }else{
            if(event){
                days +=  `<div class="day event" >${i}</div>`;
            }
            else{
                days +=  `<div class="day" >${i}</div>`;
            }
        }
        
    }

    for(let j = 1; j <= nextDays; j++){
        days +=  `<div class="day next-date " >${j}</div>`;
    }

    daysContainer.innerHTML = days;
    addListener();
}

initCalendar();


function prevMonth(){
    month --;
    if (month < 0){
        month = 11;
        year --;
    }
    initCalendar();
}

function nextMonth(){
    month ++;
    if (month > 11){
        month = 0;
        year ++;
    }
    initCalendar();
}

next.addEventListener("click", nextMonth);
prev.addEventListener("click", prevMonth);


todayBtn.addEventListener("click", () =>{
    today = new Date();
    month = today.getMonth();
    year = today.getFullYear();
    initCalendar();
});

dateInput.addEventListener("input", (e) => {
    dateInput.value = dateInput.value.replace(/[^0-9/]/g, "");
    if (dateInput.value.length === 2) {
      dateInput.value += "/";
    }
    if (dateInput.value.length > 7) {
      dateInput.value = dateInput.value.slice(0, 7);
    }
    if (e.inputType === "deleteContentBackward") {
      if (dateInput.value.length === 3) {
        dateInput.value = dateInput.value.slice(0, 2);
      }
    }
  });
  
  gotoBtn.addEventListener("click", gotoDate);
  
  function gotoDate() {
    console.log("here");
    const dateArr = dateInput.value.split("/");
    if (dateArr.length === 2) {
      if (dateArr[0] > 0 && dateArr[0] < 13 && dateArr[1].length === 4) {
        month = dateArr[0] - 1;
        year = dateArr[1];
        initCalendar();
        return;
      }
    }
    alert("Fecha Inavalida, recuerda que el primer dato es el mes y el segundo es el año. Ej:(12/2022)");
  }

  const addEventBtn = document.querySelector(".add-event"),
    addEventContainer = document.querySelector(".add-event-wrapper"),
    addEventCloseBtn = document.querySelector(".close"); 
    addEventTitle = document.querySelector(".event-name"),
    addEventFrom = document.querySelector(".event-time-from"),
    addEventTo = document.querySelector(".event-time-to");


  addEventBtn.addEventListener("click", () => {
    addEventContainer.classList.toggle("active");
  });
  addEventCloseBtn.addEventListener("click", () => {
    addEventContainer.classList.remove("active");
  });

  document.addEventListener("click", (e) => {
    if (e.target !== addEventBtn && !addEventContainer.contains(e.target)) {
        addEventContainer.classList.remove("active");
    }
  });


  addEventTitle.addEventListener("input",(e) =>{
    addEventTitle.value = addEventTitle.value.slice(0, 50);
  });

  
  addEventFrom.addEventListener("input",(e) =>{
    addEventFrom.value = addEventFrom.value.replace(/[^0-9:]/g, "");
    if (addEventFrom.value.length === 2){
        addEventFrom.value += ":";
    }
    if (addEventFrom.value.length > 5){
        addEventFrom.value = addEventFrom.value.slice(0,5);
    }
  });

  addEventTo.addEventListener("input",(e) =>{
    addEventTo.value = addEventTo.value.replace(/[^0-9:]/g, "");
    if (addEventTo.value.length === 2){
        addEventTo.value += ":";
    }
    if (addEventTo.value.length > 5){
        addEventTo.value = addEventTo.value.slice(0,5);
    }
  });

  function addListener(){
    const days = document.querySelectorAll(".day");
    days.forEach((day) =>{
        day.addEventListener("click", (e) =>{
            activeDay = Number(e.target.innerHTML);

            getActiveDay(e.target.innerHTML);
            updateEvents(Number(e.target.innerHTML));

            days.forEach((day)=>{
                day.classList.remove("active");
            });

            if(e.target.classList.contains("prev-date")){
                prevMonth();

                setTimeout(()=>{
                    const days = document.querySelectorAll(".day");
                    days.forEach((day)=>{
                        if(!day.classList.contains("prev-date") && day.innerHTML ===
                        e.target.innerHTML){
                           day.classList.add("active");
                        }
                    });
                }, 100);
            }else if(e.target.classList.contains("next-date")){
              nextMonth();

              setTimeout(()=>{
                  const days = document.querySelectorAll(".day");
                  days.forEach((day)=>{
                      if(!day.classList.contains("next-date") && day.innerHTML ===
                      e.target.innerHTML){
                         day.classList.add("active");
                      }
                  });
              }, 100);
          }

          else{
            e.target.classList.add("active")
          }

        });
    });
  }


  function getActiveDay (date){

  const day = new Date (year,month,date);
  const dayName = day.toString().split(" ")[0];
  eventDay.innerHTML = dayName;
  eventDate.innerHTML = date + " de " + months[month] + " de " + year;

}

function updateEvents(date) {
  let events = "";
  eventsArr.forEach((event) => {
    if (
      date === event.day &&
      month + 1 === event.month &&
      year === event.year
    ) {
      event.events.forEach((event) => {
        events += `<div class="event">
            <div class="title">
            <i class='bx bxs-circle' style='color:#ffffff'  ></i>
              <h3 class="event-title">${event.title}</h3>
            </div>
            <div class="event-time">
              <span class="event-time">${event.time}</span>
            </div>
        </div>`;
      });
    }
  });
  if (events === "") {
    events = `<div class="no-event">
            <h3>No hay Horarios Asignados</h3>
        </div>`;
  }
  eventsContainer.innerHTML = events;
  saveEvents();
}

addEventSubmit.addEventListener("click", ()=> {
  const eventTitle = addEventTitle.value;
  const eventTimeFrom = addEventFrom.value;
  const eventTimeTo= addEventTo.value;

  if (eventTitle === "" || eventTimeFrom === "" || eventTimeTo === "") {
    alert("Please fill all the fields");
    return;
  }

  //check correct time format 24 hour
  const timeFromArr = eventTimeFrom.split(":");
  const timeToArr = eventTimeTo.split(":");
  if (
    timeFromArr.length !== 2 ||
    timeToArr.length !== 2 ||
    timeFromArr[0] > 23 ||
    timeFromArr[1] > 59 ||
    timeToArr[0] > 23 ||
    timeToArr[1] > 59
  ) {
    alert("Formato de tiempo Incorrecto");
    return;
  } 

  const timeFrom = convertTime(eventTimeFrom);
  const timeTo = convertTime(eventTimeTo);

  //check if event is already added
  let eventExist = false;
  eventsArr.forEach((event) => {
    if (
      event.day === activeDay &&
      event.month === month + 1 &&
      event.year === year
    ) {
      event.events.forEach((event) => {
        if (event.title === eventTitle) {
          eventExist = true;
        }
      });
    }
  });
  if (eventExist) {
    alert("El evento ya se encuentra registrado");
    return;
  }
  const newEvent = {
    title: eventTitle,
    time: timeFrom + " - " + timeTo,
  };
  console.log(newEvent);
  console.log(activeDay);
  let eventAdded = false;
  if (eventsArr.length > 0) {
    eventsArr.forEach((item) => {
      if (
        item.day === activeDay &&
        item.month === month + 1 &&
        item.year === year
      ) {
        item.events.push(newEvent);
        eventAdded = true;
      }
    });
  }

  if (!eventAdded) {
    eventsArr.push({
      day: activeDay,
      month: month + 1,
      year: year,
      events: [newEvent],
    });
  }

  console.log(eventsArr);
  addEventContainer.classList.remove("active");
  addEventTitle.value = "";
  addEventFrom.value = "";
  addEventTo.value = "";
  updateEvents(activeDay);
  //select active day and add event class if not added
  const activeDayEl = document.querySelector(".day.active");
  if (!activeDayEl.classList.contains("event")) {
    activeDayEl.classList.add("event");
  }

});

eventsContainer.addEventListener("click", (e) => {
  if (e.target.classList.contains("event")) {
    if (confirm("¿Estas seguro de Eliminar este Horario Asignado?")) {
      const eventTitle = e.target.children[0].children[1].innerHTML;
      eventsArr.forEach((event) => {
        if (
          event.day === activeDay &&
          event.month === month + 1 &&
          event.year === year
        ) {
          event.events.forEach((item, index) => {
            if (item.title === eventTitle) {
              event.events.splice(index, 1);
            }
          });
          //if no events left in a day then remove that day from eventsArr
          if (event.events.length === 0) {
            eventsArr.splice(eventsArr.indexOf(event), 1);
            //remove event class from day
            const activeDayEl = document.querySelector(".day.active");
            if (activeDayEl.classList.contains("event")) {
              activeDayEl.classList.remove("event");
            }
          }
        }
      });
      updateEvents(activeDay);
    }
  }
});

//function to save events in local storage
function saveEvents() {
  localStorage.setItem("events", JSON.stringify(eventsArr));
}

//function to get events from local storage
function getEvents() {
  //check if events are already saved in local storage then return event else nothing
  if (localStorage.getItem("events") === null) {
    return;
  }
  eventsArr.push(...JSON.parse(localStorage.getItem("events")));
}

function convertTime(time) {
  //convert time to 24 hour format
  let timeArr = time.split(":");
  let timeHour = timeArr[0];
  let timeMin = timeArr[1];
  let timeFormat = timeHour >= 12 ? "PM" : "AM";
  timeHour = timeHour % 12 || 12;
  time = timeHour + ":" + timeMin + " " + timeFormat;
  return time;
}