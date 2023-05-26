function calcularPuntos() {
      var preguntas = document.getElementsByClassName("pregunta");
      var totalPuntos = 0;
      
      for (var i = 0; i < preguntas.length; i++) {
        var pregunta = preguntas[i];
        var respuestaSeleccionada = pregunta.querySelector('input[type="radio"]:checked');
        
        if (respuestaSeleccionada != null) {
          var puntos = parseInt(respuestaSeleccionada.value);
          totalPuntos += puntos;
        }
      }
      
      alert("Total de puntos obtenidos: " + totalPuntos + " de 20.");
    }
