$(document).ready(function() {
  let ctx = document.querySelector('#top-5-student-chart').getContext('2d');
  let myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Tira Gawati','Jamil Winarno','Irfan Rafid','Marsudi Hidayat','Pranawa Sihombing'],
      datasets: [{
        label: 'Top 5 Siswa/i',
        data: [80, 75, 90, 85, 95, 70/*start*/],
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        fill: false,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      }
    }
  });
});