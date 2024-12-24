// // revenuegrowth
var options = {
    series: [{
    name : 'Online Sale',  
    data: [100,155, 175, 160, 200, 200, 250, 130, 145, 250, 150,250 ]
  },{
    name : 'Marketing Sale',  
    data: [45, 75 , 85, 45, 145, 90, 45, 110, 65, 35, 105, 105]
  }], 
    colors:['var(--theme-deafult)' ,'#FFAE1A'],
    chart: {
      type: 'area',
      height: 315, 
      toolbar: {
        tools: {
          zoom: false,
          zoomin: false,
          zoomout: false, 
          reset: false,
          pan: false,
          download: false,
        },
      }, 
    },
    fill: {
      gradient:{
          opacityFrom: 0.2,
          opacityTo: 0,
          shadeIntensity: 0.2,
      },
    },
    markers: {
      discrete: [{
        seriesIndex: 0,
        dataPointIndex: 1,
        fillColor: '#fff',
        strokeColor: 'var(--theme-deafult)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 2,
        fillColor: '#fff',
        strokeColor: 'var(--theme-deafult)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0, 
        dataPointIndex: 3,
        fillColor: '#fff',
        strokeColor: 'var(--theme-deafult)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 4,
        fillColor: '#fff',
        strokeColor: 'var(--theme-deafult)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 5,
        fillColor: '#fff',
        strokeColor: 'var(--theme-deafult)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 6,
        fillColor: '#fff',
        strokeColor: 'var(--theme-deafult)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 7,
        fillColor: '#fff',
        strokeColor: 'var(--theme-deafult)',
        size: 3,
        shape: "circle" 
      },
      {
        seriesIndex: 0,
        dataPointIndex: 8,
        fillColor: '#fff',
        strokeColor: 'var(--theme-deafult)',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 9, 
        fillColor: '#fff',
        strokeColor: 'var(--theme-deafult)',
        size: 3, 
        shape: "circle"
      },
      {
        seriesIndex: 0,
        dataPointIndex: 10,
        fillColor: '#fff',
        strokeColor: 'var(--theme-deafult)',
        size: 3, 
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 1,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3, 
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 2,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 3,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 4,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 5,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 6,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 7,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 8,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3,
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 9,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3, 
        shape: "circle"
      },
      {
        seriesIndex: 1,
        dataPointIndex: 10,
        fillColor: '#fff',
        strokeColor: '#FFAE1A',
        size: 3, 
        shape: "circle"
      },
      ],
    },
    legend:{
      show :false,
    },
    stroke: {
      curve: 'stepline',
      width: 2,
    }, 
    dataLabels: {
      enabled: false,
    },
    grid :{
      show: true,
      strokeDashArray: 3,
      borderColor: ['var(--chart-border)'],
      xaxis: { 
        lines: { 
          show: true,
        }
      },
      yaxis: {
        lines: {
          show: true,
        }
      },
    },
    xaxis: {
      categories: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov" ,"Dec"],
          labels: {
              style: { 
                  colors: ['var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)','var(--body-font-color)' ],
              } 
          }, 
          axisTicks: {
            show: false
          },
          axisBorder: {  
              show: false
          }, 
      },
      yaxis: {
        labels: {
            style: {
                colors: ['var(--body-font-color)'],
            },
            formatter: (value) => {
              return `${value}$`;
            },
        },

      },
      tooltip: {
        custom: function ({ series, seriesIndex, dataPointIndex,}) {
          return '<div class="apex-tooltip p-2">' + '<span>' + '<span class="bg-primary">' + '</span>' + 'Marketing Sale' + '<h3>' + '$'+ series[seriesIndex][dataPointIndex] + '<h3/>'  + '</span>' + '</div>';
        },
      },
      responsive: [{
        breakpoint: 425,
        options: { 
          series: [{
            name : 'Online Sale', 
            data: [100,155, 175, 160, 200, 200, 250 ]
          },{ 
            name : 'Marketing Sale',
            data: [45, 75 , 85, 45, 145, 90, 45]
          }],
        }
      }
    ],
  };
  var revenuegrowth = new ApexCharts(document.querySelector("#revenuegrowth"), options);
  revenuegrowth.render();
  
  //  visitsCharts
  
  var options = {
    series: [{
    name: 'Chrome',
    data: [44, 55, 41, 37, 22, 43, 21]
  }, {
    name: 'Firefox',
    data: [53, 32, 33, 52, 13, 43, 32]
  }, { 
    name: 'Firefox',
    data: [12, 17, 11, 9, 15, 11, 20]
  }],
    colors:['var(--theme-deafult)' ,'#80B3B3' ,'#CCE0E0'],
    chart: { 
    type: 'bar',
    height: 325,
    stacked: true, 
    toolbar: {
      show: false,
      tools: {
        download: false,
      }
    }, 
    zoom: {
      enabled: true,
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
        horizontal: true,
        barHeight: '28%',
      },
    },
    dataLabels: {
      enabled: false,
    },
    xaxis: {
      categories: ['Mon', 'Tue', 'Wed', 'Thu','Fri', 'Sat' ,'Sun'
      ],
      labels:{
        show: false,
      },
      axisTicks:{
        show: false,
      },
    },
    legend: {
      show: false,
    },
    fill: { 
      opacity: 1 
    },
    grid: {
      show: false,
    }
  };
  var  visitsCharts = new ApexCharts(document.querySelector("#visitsCharts"), options);
   visitsCharts.render();
  
  // echart-polar
  
  require([
    'echarts'
  ], function (echarts) {
  
    var chart = echarts.init(document.getElementById('echart-polar'));
    chart.setOption({
      polar: {
        radius: [30, '80%']
      },
      angleAxis: {
        max: 4,
        startAngle: 90
      },
      radiusAxis: {
        type: 'category',
      },
      tooltip: {},
      series: {
        type: 'bar',
        data: [
          {value : 2, itemStyle: { color:'#86909C'},},
          {value : 2.2, itemStyle: { color:'#FF8367'},},
          {value : 2.4, itemStyle: { color:'#FFAE1A'},},
          {value : 3.4, itemStyle: { color:'#006666'},},
        ],
        coordinateSystem: 'polar',
        label: {
          show: true,
          position: 'middle',
          formatter: '{b}: {c}' 
        }
      }
    });
    chart.on('click', function (params) { 
        console.log(params);
    });
    window.onresize = chart.resize;
  });