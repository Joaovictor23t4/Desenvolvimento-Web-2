function updatePostTime() {
    const updateTimeElement = document.getElementById("update-time");
    const currentTime = new Date();
    const updateTimestamp = new Date("2023-08-12T08:33-03:00"); // Substitua pela hora de atualização inicial
  
    const timeDiffMinutes = Math.floor((currentTime - updateTimestamp) / (60 * 1000)); // Diferença em minutos
  
    if (timeDiffMinutes < 60) {
      updateTimeElement.textContent = `há ${timeDiffMinutes} minutos`;
    } else {
      const timeDiffHours = Math.floor(timeDiffMinutes / 60); // Diferença em horas
      updateTimeElement.textContent = `há ${timeDiffHours} horas`;
    }
  }
  
  // Atualiza a cada minuto
  setInterval(updatePostTime, 60000);
  updatePostTime(); // Chama a função inicialmente para exibir o tempo atual