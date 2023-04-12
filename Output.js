const tempElement = document.querySelector(".temp");
const humElement = document.querySelector(".hum");

function setTempValue(temp, value) {
  if (value < 0 || value > 100) {
    return;
  }
  temp.querySelector(".temp__fill").style.transform = `rotate(${
    value * 0.005
  }turn)`;
  temp.querySelector(".temp__cover").textContent = `${Math.round(
    value
  )}%`;
}

function setHumValue(hum, value) {
  if (value < 0 || value > 100) {
    return;
  }
  hum.querySelector(".hum__fill").style.transform = `rotate(${
    value * 0.005
  }turn)`;
  hum.querySelector(".hum__cover").textContent = `${Math.round(
    value
  )}%`;
}

function setWaterLevelValue(level) {
  if (level == 10) {
    document.getElementById("level").innerHTML = "EMPTY";
  }
  
}

      function getJsonData() {
        fetch('Output.json')
         .then(response => response.json())
         .then(data => {
            setTempValue(tempElement, data.Temperature);
            setHumValue(humElement, data.Humidity);
            setWaterLevelValue(data.WaterLevel);
       })
        .catch(error => console.error(error)); 
  }

  getJsonData();
  
  setInterval(getJsonData);