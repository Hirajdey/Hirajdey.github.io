var express = require('express');

var app = express();

var routes = require('./routes/index');

//app.use('/reactnode', require('./reactnode'));

app.use('/', routes);

app.set('port', process.env.PORT || 8070);

// view engine setup
app.set('views', __dirname + '/views');
app.set('view engine', 'js');
app.engine('js', require('express-react-views').createEngine());

var server = app.listen(app.get('port'), function() {
    console.log("app started");
});