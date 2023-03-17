document.addEventListener('DOMContentLoaded', function() {

    var formulario = document.querySelector("form");  

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',

      locale:"es",

      headerToolbar: {
        left:'prev,next today',

        center: 'title',

        right: 'dayGridMonth,timeGridWeek,listWeek'
      },

      dateClick:function(info){
        $("#exampleModal").modal("show");
      }

    });

    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click", function() {
      /*const datos = new FormData(formulario);

      console.log(datos);
      console.log(formulario.title.value);

      axios.post("http://localhost/Proyecto_Horario_validations/public/calendario/agregar", datos).
      then(
          (respuesta) => {
              $('#exampleModal').modal("hide");
          }
      ).catch(
          error => {
              if (error.repsonse) {
                  console.log(error.response.data);
              }
          }
      )*/
  });
  });