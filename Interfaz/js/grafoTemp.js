//toma de valores
var tempValues1 = document.getElementById("sensor1A").value;
var tempValues2 = document.getElementById("sensor2A").value;
var tempValues3 = document.getElementById("sensor3A").value;
var tempValues4 = document.getElementById("sensor4A").value;
var tempValues5 = document.getElementById("sensor5A").value;
var tempValues6 = document.getElementById("sensor6A").value;
//array con valores individuales
//grafico
new Chart(document.getElementById("line-chart"), {
  type: 'line', 
  data: {
    labels: ["00","01:00","02:00","03:00","04:00","05:00","06:00","07:00",
    "08:00","09:00","10:00","11:00","12:00","13:00","14:00","15:00","16:00",
    "17:00","18:00","19:00","20:00","21:00","22:00","23:00"],
    datasets: [{ 
        data: [6, 8, 9,11,11, 12,14, 15, 16,17, 18, 17
        ,20, 17, 18,19, 20, 20,21, 18, 17,16, 14, 11],
        label: "S1",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [6, 9, 10,12,12, 13,14, 15, 16,17, 16, 16
        ,15, 15, 14,13, 13, 21,22, 13, 12,16, 14, 12],
        label: "S2",
        borderColor: "#8e5ea2",
        fill: false
      }, { 
          data: [6, 9, 10,13,15, 12,14, 13, 14,17, 16, 16
        ,15, 15, 14,13, 13, 12,19, 20, 21,14, 13, 12],
        label: "S3",
        borderColor: "#3cba9f",
        fill: false
      }, { 
        data: [6, 9, 10,12,12, 13,14, 15, 16,17, 16, 16
        ,15, 15, 14,13, 13, 12,14, 16, 15,14, 13, 11],
        label: "S4",
        borderColor: "#e8c3b9",
        fill: false
      }, { 
        data: [3, 3, 10,12,12, 13,19, 15, 16,17, 16, 16
        ,15, 15, 12,13, 13, 12,14, 16, 20,16, 14, 12],
        label: "S5",
        borderColor: "#c45850",
        fill: false
      }, { 
        data: [2, 4, 5,6,10, 13,12, 14, 16,18, 16, 16
        ,15, 15, 14,13, 14, 16,17, 16, 15,14, 14, 12],
        label: "S6",
        borderColor: "#f4S850",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Valores de las temperaturas (por hora)'
    }
  }
});

