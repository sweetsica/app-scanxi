var ctx = document.getElementById("lineChart").getContext("2d");

const colors = {
    red: {
        fill: '#c42517',
        stroke: '#c42517',
    },
    lightBlue: {
        stroke: '#6fccdd',
    }
};

// Data
const S = [26, 36, 42, 38, 40, 30, 12];
const T = [34, 44, 33, 24, 25, 28, 25];
// Value Tuổi
const yearOld = [13, 14, 15, 16, 17, 18, 19];

const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: yearOld,
        datasets: [{
            label: "S",
            fill: true,
            // backgroundColor: colors.green.fill,
            // pointBackgroundColor: colors.lightBlue.stroke,
            borderColor: colors.lightBlue.stroke,
            // pointHighlightStroke: colors.lightBlue.stroke,
            // borderCapStyle: 'butt',
            data: S,
        }, {
            label: "T",
            fill: true,
            // backgroundColor: colors.green.fill,
            // pointBackgroundColor: colors.green.stroke,
            borderColor: colors.red.stroke,
            // pointHighlightStroke: colors.green.stroke,
            data: T,
        }]
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                stacked: true,
            }]
        },
        animation: {
            duration: 750,
        },
    }
});