 var myConfig = {
      "type": "radar",
      "series": [{
        "values": [59, 30, 65, 34, 40]
      }, {
        "values": [76, 60, 11, 21, 99]
      }, {
        "values": [34, 0, 0, 30, 10]
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: '100%',
      width: '100%'
    });