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

<pre class="changing"></pre>

<script>
$('body').prepend(RangeBar({
  min: moment().startOf('day').format('LLLL'),
  max: moment().startOf('day').add(1, 'day').format('LLLL'),
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
  label: function(a){return JSON.stringify(a)},
  snap: 1000 * 60 * 15,
  minSize: 1000 * 60 * 60,
  bgLabels: 4,
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