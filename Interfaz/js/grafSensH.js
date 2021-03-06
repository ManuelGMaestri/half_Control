Highcharts.setOptions({
    global: {
        useUTC: false
    }
});
// --------------------------------------------------------------------------------------------------------------------------------------

Highcharts.stockChart('S1HChart', {
    chart: {
        events: {
            load: function () {
                // set up the updating of the chart each second
                var series = this.series[0];
                setInterval(function () {
                    var x = (new Date()).getTime(), // current time
                        y = Math.round(Math.random() * 100);
                    series.addPoint([x, y], true, true);
                }, 1000);
            }
        }
    },
    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'minute',
            text: '1M'
        }, {
            count: 5,
            type: 'minute',
            text: '5M'
        }, {
            type: 'all',
            text: 'All'
        }],
        inputEnabled: false,
        selected: 0
    },
    title: {
        text: 'Sensores en vivo'
    },
    exporting: {
        enabled: false
    },
    series: [{
        name: 'Sensor1',
        data: (function () {
            // generate an array of random data
            var data = [],
                time = (new Date()).getTime(),
                i;
            for (i = -999; i <= 0; i += 1) {
                data.push([
                    time + i * 1000,
                    Math.round(Math.random() * 100)
              ]);
          }
        return data;
    }())
  }]
});
Highcharts.setOptions({
    global: {
        useUTC: false
    }
});
// Create the chart (s2)
// --------------------------------------------------------------------------------------------------------------------------------------
Highcharts.stockChart('S2HChart', {
    chart: {
        events: {
            load: function () {
                // set up the updating of the chart each second
                var series = this.series[0];
                setInterval(function () {
                    var x = (new Date()).getTime(), // current time
                        y = Math.round(Math.random() * 100);
                    series.addPoint([x, y], true, true);
                }, 1000);
            }
        }
    },
    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'minute',
            text: '1M'
        }, {
            count: 5,
            type: 'minute',
            text: '5M'
        }, {
            type: 'all',
            text: 'All'
        }],
        inputEnabled: false,
        selected: 0
    },
    title: {
        text: 'Sensores en vivo'
    },
    exporting: {
        enabled: false
    },
    series: [{
        name: 'Sensor1',
        data: (function () {
            // generate an array of random data
            var data = [],
                time = (new Date()).getTime(),
                i;
            for (i = -999; i <= 0; i += 1) {
                data.push([
                    time + i * 1000,
                    Math.round(Math.random() * 100)
              ]);
          }
        return data;
    }())
  }]
});
Highcharts.setOptions({
    global: {
        useUTC: false
    }
});
// Create the chart (s3)
// --------------------------------------------------------------------------------------------------------------------------------------
Highcharts.stockChart('S3HChart', {
    chart: {
        events: {
            load: function () {
                // set up the updating of the chart each second
                var series = this.series[0];
                setInterval(function () {
                    var x = (new Date()).getTime(), // current time
                        y = Math.round(Math.random() * 100);
                    series.addPoint([x, y], true, true);
                }, 1000);
            }
        }
    },
    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'minute',
            text: '1M'
        }, {
            count: 5,
            type: 'minute',
            text: '5M'
        }, {
            type: 'all',
            text: 'All'
        }],
        inputEnabled: false,
        selected: 0
    },
    title: {
        text: 'Sensores en vivo'
    },
    exporting: {
        enabled: false
    },
    series: [{
        name: 'Sensor2',
        data: (function () {
            // generate an array of random data
            var data = [],
                time = (new Date()).getTime(),
                i;
            for (i = -999; i <= 0; i += 1) {
                data.push([
                    time + i * 1000,
                    Math.round(Math.random() * 100)
              ]);
          }
        return data;
    }())
  }]
});
Highcharts.setOptions({
    global: {
        useUTC: false
    }
});
// Create the chart (s4)
// --------------------------------------------------------------------------------------------------------------------------------------
Highcharts.stockChart('S4HChart', {
    chart: {
        events: {
            load: function () {
                // set up the updating of the chart each second
                var series = this.series[0];
                setInterval(function () {
                    var x = (new Date()).getTime(), // current time
                        y = Math.round(Math.random() * 100);
                    series.addPoint([x, y], true, true);
                }, 1000);
            }
        }
    },
    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'minute',
            text: '1M'
        }, {
            count: 5,
            type: 'minute',
            text: '5M'
        }, {
            type: 'all',
            text: 'All'
        }],
        inputEnabled: false,
        selected: 0
    },
    title: {
        text: 'Sensores en vivo'
    },
    exporting: {
        enabled: false
    },
    series: [{
        name: 'Sensor3',
        data: (function () {
            // generate an array of random data
            var data = [],
                time = (new Date()).getTime(),
                i;
            for (i = -999; i <= 0; i += 1) {
                data.push([
                    time + i * 1000,
                    Math.round(Math.random() * 100)
              ]);
          }
        return data;
    }())
  }]
});
Highcharts.setOptions({
    global: {
        useUTC: false
    }
});
// Create the chart (s5)
// --------------------------------------------------------------------------------------------------------------------------------------

Highcharts.stockChart('S5HChart', {
    chart: {
        events: {
            load: function () {
                // set up the updating of the chart each second
                var series = this.series[0];
                setInterval(function () {
                    var x = (new Date()).getTime(), // current time
                        y = Math.round(Math.random() * 100);
                    series.addPoint([x, y], true, true);
                }, 1000);
            }
        }
    },
    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'minute',
            text: '1M'
        }, {
            count: 5,
            type: 'minute',
            text: '5M'
        }, {
            type: 'all',
            text: 'All'
        }],
        inputEnabled: false,
        selected: 0
    },
    title: {
        text: 'Sensores en vivo'
    },
    exporting: {
        enabled: false
    },
    series: [{
        name: 'Sensor4',
        data: (function () {
            // generate an array of random data
            var data = [],
                time = (new Date()).getTime(),
                i;
            for (i = -999; i <= 0; i += 1) {
                data.push([
                    time + i * 1000,
                    Math.round(Math.random() * 100)
              ]);
          }
        return data;
    }())
  }]
});
Highcharts.setOptions({
    global: {
        useUTC: false
    }
});
// Create the chart (s6)
// --------------------------------------------------------------------------------------------------------------------------------------

Highcharts.stockChart('S6HChart', {
    chart: {
        events: {
            load: function () {
                // set up the updating of the chart each second
                var series = this.series[0];
                setInterval(function () {
                    var x = (new Date()).getTime(), // current time
                        y = Math.round(Math.random() * 100);
                    series.addPoint([x, y], true, true);
                }, 1000);
            }
        }
    },
    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'minute',
            text: '1M'
        }, {
            count: 5,
            type: 'minute',
            text: '5M'
        }, {
            type: 'all',
            text: 'All'
        }],
        inputEnabled: false,
        selected: 0
    },
    title: {
        text: 'Sensores en vivo'
    },
    exporting: {
        enabled: false
    },
    series: [{
        name: 'Sensor5',
        data: (function () {
            // generate an array of random data
            var data = [],
                time = (new Date()).getTime(),
                i;
            for (i = -999; i <= 0; i += 1) {
                data.push([
                    time + i * 1000,
                    Math.round(Math.random() * 100)
              ]);
          }
        return data;
    }())
  }]
});