<!doctype html>
<html>
<head>
<script src="http://momentjs.com/downloads/moment.min.js"></script>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="https://rawgithub.com/quarterto/Estira/master/index.js"></script>
<script src="{{asset('js/elessar.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/elessar.css')}}">
</head>
<body>
    <p>Employee #1</p>
    <div class="slider" id="1"></div>
    <p>Employee #2</p>
    <div class="slider" id="2"></div>
    <p>Employee #3</p>
    <div class="slider" id="3"></div>
    <p>Employee #4</p>
    <div class="slider" id="4"></div>
    <p>Employee #5</p>
    <div class="slider" id="5"></div>
    
    
    <!-- <pre class="changing"></pre> -->

<script>
$('[id=1]').prepend(RangeBar({
  min: moment().startOf('week'),
  max: moment().startOf('week').add(7, 'day'),
  valueFormat: function(ts) {
    return moment(ts).format('LLLL');
  },
  valueParse: function(date) {
    return moment(date).valueOf();
  },
  values: [
    [
      moment().startOf('day').format('LLLL'),
      moment().startOf('day').add(1, 'hours').format('LLLL')
    ],
    [
      moment().startOf('day').add(1.5, 'hours').format('LLLL'),
      moment().startOf('day').add(3.5, 'hours').format('LLLL')
    ],
    [
      moment().endOf('day').subtract(1.5, 'hours').format('LLLL'),
      moment().endOf('day').subtract(1, 'minute').format('LLLL')
    ],
  ],
  label: function(a){return moment(a[1]).diff(moment(a[0]),'hours',true);
  },
  snap: 1000 * 60 * 15,
  minSize: 1000 * 60 * 60,
  bgLabels: 7,
  allowDelete: true,
}).on('changing', function(ev, ranges, changed) {
  console.log(changed);
  $('pre.changing').html(JSON.stringify(ranges,null,2));
}).on('change', function(ev, ranges, changed) {
  console.log(changed);
  $('pre.changing').after($('<pre>').html('changed'+JSON.stringify(ranges,null,2)));
}).$el);
</script>
<script>
$('[id=2]').prepend(RangeBar({
  min: moment().startOf('week'),
  max: moment().startOf('week').add(7, 'day'),
  valueFormat: function(ts) {
    return moment(ts).format('ddd');
  },
  valueParse: function(date) {
    return moment(date).valueOf();
  },
  values: [
    [
      moment().startOf('day').format('LLLL'),
      moment().startOf('day').add(1, 'hours').format('LLLL')
    ],
    [
      moment().startOf('day').add(1.5, 'hours').format('LLLL'),
      moment().startOf('day').add(3.5, 'hours').format('LLLL')
    ],
    [
      moment().endOf('day').subtract(1.5, 'hours').format('LLLL'),
      moment().endOf('day').subtract(1, 'minute').format('LLLL')
    ],
  ],
  label: function(a){return JSON.stringify(a)},
  snap: 1000 * 60 * 15,
  minSize: 1000 * 60 * 60,
  bgLabels: 7,
  allowDelete: true,
}).on('changing', function(ev, ranges, changed) {
  console.log(changed);
  $('pre.changing').html(JSON.stringify(ranges,null,2));
}).on('change', function(ev, ranges, changed) {
  console.log(changed);
  $('pre.changing').after($('<pre>').html('changed'+JSON.stringify(ranges,null,2)));
}).$el);
</script>
<script>
$('[id=3]').prepend(RangeBar({
  min: moment().startOf('week'),
  max: moment().startOf('week').add(7, 'day'),
  valueFormat: function(ts) {
    return moment(ts).format('ddd');
  },
  valueParse: function(date) {
    return moment(date).valueOf();
  },
  values: [
    [
      moment().startOf('day').format('LLLL'),
      moment().startOf('day').add(1, 'hours').format('LLLL')
    ],
    [
      moment().startOf('day').add(1.5, 'hours').format('LLLL'),
      moment().startOf('day').add(3.5, 'hours').format('LLLL')
    ],
    [
      moment().endOf('day').subtract(1.5, 'hours').format('LLLL'),
      moment().endOf('day').subtract(1, 'minute').format('LLLL')
    ],
  ],
  label: function(a){return JSON.stringify(a)},
  snap: 1000 * 60 * 15,
  minSize: 1000 * 60 * 60,
  bgLabels: 7,
  allowDelete: true,
}).on('changing', function(ev, ranges, changed) {
  console.log(changed);
  $('pre.changing').html(JSON.stringify(ranges,null,2));
}).on('change', function(ev, ranges, changed) {
  console.log(changed);
  $('pre.changing').after($('<pre>').html('changed'+JSON.stringify(ranges,null,2)));
}).$el);
</script>
<script>
$('[id=4]').prepend(RangeBar({
  min: moment().startOf('week'),
  max: moment().startOf('week').add(7, 'day'),
  valueFormat: function(ts) {
    return moment(ts).format('ddd');
  },
  valueParse: function(date) {
    return moment(date).valueOf();
  },
  values: [
    [
      moment().startOf('day').format('LLLL'),
      moment().startOf('day').add(1, 'hours').format('LLLL')
    ],
    [
      moment().startOf('day').add(1.5, 'hours').format('LLLL'),
      moment().startOf('day').add(3.5, 'hours').format('LLLL')
    ],
    [
      moment().endOf('day').subtract(1.5, 'hours').format('LLLL'),
      moment().endOf('day').subtract(1, 'minute').format('LLLL')
    ],
  ],
  label: function(a){return JSON.stringify(a)},
  snap: 1000 * 60 * 15,
  minSize: 1000 * 60 * 60,
  bgLabels: 7,
  allowDelete: true,
}).on('changing', function(ev, ranges, changed) {
  console.log(changed);
  $('pre.changing').html(JSON.stringify(ranges,null,2));
}).on('change', function(ev, ranges, changed) {
  console.log(changed);
  $('pre.changing').after($('<pre>').html('changed'+JSON.stringify(ranges,null,2)));
}).$el);
</script>
<script>
$('[id=5]').prepend(RangeBar({
  min: moment().startOf('week'),
  max: moment().startOf('week').add(7, 'day'),
  valueFormat: function(ts) {
    return moment(ts).format('ddd');
  },
  valueParse: function(date) {
    return moment(date).valueOf();
  },
  values: [
    [
      moment().startOf('day').format('LLLL'),
      moment().startOf('day').add(1, 'hours').format('LLLL')
    ],
    [
      moment().startOf('day').add(1.5, 'hours').format('LLLL'),
      moment().startOf('day').add(3.5, 'hours').format('LLLL')
    ],
    [
      moment().endOf('day').subtract(1.5, 'hours').format('LLLL'),
      moment().endOf('day').subtract(1, 'minute').format('LLLL')
    ],
  ],
  label: function(a){return JSON.stringify(a)},
  snap: 1000 * 60 * 15,
  minSize: 1000 * 60 * 60,
  bgLabels: 7,
  allowDelete: true,
}).on('changing', function(ev, ranges, changed) {
  console.log(changed);
  $('pre.changing').html(JSON.stringify(ranges,null,2));
}).on('change', function(ev, ranges, changed) {
  console.log(changed);
  $('pre.changing').after($('<pre>').html('changed'+JSON.stringify(ranges,null,2)));
}).$el);
</script>
</body>
</html>