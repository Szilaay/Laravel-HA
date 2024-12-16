const ctx = document.getElementById('popularityChart').getContext('2d');
const popularityChart = new Chart(ctx, {
    type: 'line', 
    data: {
        labels: ['2019', '2020', '2021', '2022', '2023'],
        datasets: [{
            label: 'Jelentkezők száma az évek során',
            data: [123, 155, 143, 232, 285],
            backgroundColor: 'rgba(54, 162, 235, 0.3)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 2,
            fill: true 
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});