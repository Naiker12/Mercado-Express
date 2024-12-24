(function () {
    // profit chart
// project statistics 

var options = {
    series: [{
    name: 'Web App Design',
    data: [85, 85, 152, 95, 50, 95 , 130 ]
  }, {
    name: 'Website Design',
    data: [190, 135, 220, 160, 65, 160, 185]
  }, { 
    name: 'App Design',
    data: [245, 165, 260, 230, 110, 170 ,245]
  }],
    colors:['var(--theme-deafult)' ,'#80B3B3' ,'#CCE0E0'],
    chart: { 
    type: 'bar',
    height: 412, 
    stacked: true, 
  
    toolbar: {
      show: false,
      tools: {
        download: false,
      }
    },
    zoom: {
      enabled: true 
    }
  },
    responsive: [{
      breakpoint: 480,
      options: {
        legend: {
          position: 'bottom',
          offsetY: 2,
        }
      } 
    }], 
    plotOptions: {
      bar: {
        horizontal: false,
        borderRadius: 6,
        columnWidth: '20%',
      },
    },
    dataLabels: {
      enabled: false,
    },
    xaxis: {
      categories: ['Mon', 'Tue', 'Wed', 'Thu','Fri', 'Sat' ,'Sun'
      ],
      axisTicks: {
        show: false
      },
      axisBorder: {
          show: false
      },
    },
    legend: {
      position: 'bottom',
      offsetY: 5
    },
    fill: {
      opacity: 1
    }
  };
  
  var statisticschart = new ApexCharts(document.querySelector("#statisticschart"), options);
  statisticschart.render();

  function radialCommonOption(data) {
    return {
        series: data.radialYseries,
        chart: {
          height: 90,
          type: 'radialBar',
          offsetX: -5,
          offsetY: -15,
        },
      plotOptions: {
          radialBar: {
              hollow: {
                  size: '35%',
              },
              track: {
                  background: 'var(--theme-deafult)',
                  opacity: 0.2,
              },
              dataLabels: {
                  value: {
                      color: "var(--tag-text-color--edit)",
                      fontSize: "10px",
                      show: true,
                      offsetY: -12,
                  }
              }
          },
      },
      colors: ["var(--theme-deafult)"],
      stroke: {
          lineCap: "round",
      },
    }
  }
  
  const radial1 = {
    // color: ["var(--theme-deafult)"],
    radialYseries: [75],
  };
  
  const radialchart1 = document.querySelector('#widgetsChart1');
  if (radialchart1) {
    var radialprogessChart1 = new ApexCharts(radialchart1, radialCommonOption(radial1));
    radialprogessChart1.render();
  }
  // radial 2
  const radial2 = {
    radialYseries: [50],
  };
  const radialchart2 = document.querySelector('#widgetsChart2');
  if (radialchart2) {
    var radialprogessChart2 = new ApexCharts(radialchart2, radialCommonOption(radial2));
    radialprogessChart2.render();
  }
  // radial 3
  const radial3 = {
    radialYseries: [25],
  };
  const radialchart3 = document.querySelector('#widgetsChart3');
  if (radialchart3) {
    var radialprogessChart3 = new ApexCharts(radialchart3, radialCommonOption(radial3));
    radialprogessChart3.render();
  }
  // radial 4
  const radial4 = {
  
    radialYseries: [86],
  };
  const radialchart4 = document.querySelector('#widgetsChart4');
  if (radialchart4) {
    var radialprogessChart4 = new ApexCharts(radialchart4, radialCommonOption(radial4));
    radialprogessChart4.render();
  }
  // radial 5
  const radial5 = {
    chart: {
      offsetY: -50,
    },
    radialYseries: [74],
  };  
  const radialchart5 = document.querySelector('#widgetsChart5');
  if (radialchart5) { 
    var radialprogessChart5 = new ApexCharts(radialchart5, radialCommonOption(radial5));
    radialprogessChart5.render();
  }

})();