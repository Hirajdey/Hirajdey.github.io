/*
var express = require('express');
var bodyParser = require('body-parser');
var app = express();

var arr  = ['serverjs'];

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

app.get('/', function(req, res) {
    res.json({arr: arr});
});

app.post('/', function(req, res) {
    console.log(req.body);
    arr.push(req.body);
    res.end('Data received');
})

app.listen(3000, console.log.call(console, 'Server started.'));*/


//res.send("Hello world from server.js");

var express = require("express");
var app = express();
/*var mysql = require("mysql");*/ // mysql

http = require('http');
var PORT = process.env.PORT || 8080;
var router = require('router');
path = require('path');

app.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    //res.set('Access-Control-Allow-Origin', '*');
    res.set("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept, Authorization, Content-Length");
    res.set("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE, OPTIONS");
    res.set("Access-Control-Allow-Credentials", "true");
    next();
});

app.get('/testroute', function(req, res){
    res.send("Hello world from server.js Test");
});
//.listen(8080, 'APP_PRIVATE_IP_ADDRESS');
app.listen(PORT);
console.log("Server running in port 3000");

//app.use(app.router);

/*http.createServer(function (request, response) {
    response.writeHead(200, {'Content-Type': 'text/plain'});
    response.end('Hello World\n');
}).listen(8080);*/

/*app.get('/testroute', function(req, res) {
    res.send("Hello-world from server.js in Sandbox");
    //res.writeHead(200);
    //res.end('hello index page');
});*/
//http.createServer(route).listen(8080); // start the server on port 8080



app.use(express.static(__dirname + "/public"));

/*app.route('/testroute').get(function (req, res) {
    res.send("Get a random book");
});*/

/*app.get('/testroute', function(req, res){
    //res.send("Hello world from server.js");

    var host = req.get('host');

    //res.send("Host:"+ host);
    //process.exit();

    // mysql connection
    if(host == "localhost:8080") {
        var connection = mysql.createConnection({
            host: 'localhost',
            user: 'root',
            password: '',
            database: 'medgenome'
        });
    } else {
        var connection = mysql.createConnection({
            host: 'localhost',
            user: 'stgmedgenome',
            password: 'U7HKQ9#$%#M',
            database: 'medgenomestg'
        });
    }

    connection.connect();

//connection.query('SELECT 1 + 1 AS solution', function (err, rows, fields) {
    connection.query('SELECT * from events LIMIT 3', function (err, rows, fields) {
        if (err) throw err
        //console.log(rows.length);
        //console.log('The solution is: ', rows[54].title);
        console.log(rows);
        //return res.json( rows );
        return res.send( rows );
    });
    //res.send("Query Reply");
    console.log( "HEADER: ", req.headers );
});*/

