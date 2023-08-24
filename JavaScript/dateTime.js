function updatePostTime() {
    const updateTimeElements = document.getElementsByClassName("update-time");
  
    for (const updateTimeElement of updateTimeElements) {
      const datetimeValue = updateTimeElement.getAttribute("datetime");
      const currentTime = new Date();
      const updateTimestamp = new Date(datetimeValue);
  
      const timeDiffMinutes = Math.floor((currentTime - updateTimestamp) / (60 * 1000));
  
      if (timeDiffMinutes === 1) {
        updateTimeElement.textContent = `há ${timeDiffMinutes} minuto`;
      }
       else if (timeDiffMinutes < 60) {
        updateTimeElement.textContent = `há ${timeDiffMinutes} minutos`;
      } else if (timeDiffMinutes < 120) {
        updateTimeElement.textContent = `há 1 hora`;
      } else if (timeDiffMinutes < 1440) {
        const timeDiffHours = Math.floor(timeDiffMinutes / 60);
        updateTimeElement.textContent = `há ${timeDiffHours} horas`;
      } else if (timeDiffMinutes < 2880) {
        updateTimeElement.textContent = `há 1 dia`;
      } else {
        const timeDiffDays = Math.floor(timeDiffMinutes / 1440);
        updateTimeElement.textContent = `há ${timeDiffDays} dias`;
      }
    }
  }
  
  // Atualiza a cada minuto
  setInterval(updatePostTime, 60000);
  updatePostTime(); // Chama a função inicialmente para exibir o tempo atual