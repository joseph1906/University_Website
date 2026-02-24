let sidebarOpen = false;
const sidebar = document.querySelector(".sidebar");

function openSidebar() {
    if(!sidebarOpen) {
        sidebar.classList.add("sidebar-responsive");
        sidebarOpen = true;
    }
}

function closeSidebar() {
    if(sidebarOpen) {
        sidebar.classList.remove("sidebar-responsive");
        sidebarOpen = false;
    }
}

// ApexCharts for Student Enrollment
var barChartOptions = {
        series: [{
        data: [120, 150, 180, 200, 250, 300, 350, 400, 450, 500, 550, 600]
        }],
        chart: {
        type: 'bar',
        height: 350
        },
        colors: ['#FF4560', '#00E396', '#FEB019', '#FF66C3', '#775DD0', '#546E7A', '#26A69A', '#D10CE8', '#F9CE1D', '#EA4228', '#00D9E9', '#FF6B6B'],
        plotOptions: {
        bar: {
            borderRadius: 4,
            borderRadiusApplication: 'end',
            horizontal: false,
        }
        },
        dataLabels: {
            enabled: false
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yaxis: {
            title: {
                text: 'Number of Students'
            }
        }
        };

        var chart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
        chart.render();

// ApexCharts for Staff Members (Line Chart)
var barChartOptions2 = {
        series: [{
        name: 'Students Count',
        data: [20, 55, 60, 65, 70, 55, 70]
        }],
        chart: {
        type: 'line',
        height: 350
        },
        colors: ['#775DD0'],
        xaxis: {
            categories: ['computer science', 'Business', 'Engineering', 'Medicine', 'Law', 'Arts', 'Education']
        },
        yaxis: {
            title: {
                text: 'Number of Students'
            }
        },
        stroke: {
            curve: 'smooth'
        },
        markers: {
            size: 5
        }
        };

        var chart2 = new ApexCharts(document.querySelector("#bar-chart-2"), barChartOptions2);
        chart2.render();