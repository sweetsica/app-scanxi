var ctx = document.getElementById("barChart").getContext('2d');
var barChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["", "", "", ""],
        datasets: [{
            label: 'Kết quả đo của người trưởng thành',
            data: [0, 0.5, 1, 1.5, 2],
            backgroundColor: "#c42517"
        }]
    }
});
