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

var express = require("express");
var app = express();
var mysql = require("mysql"); // mysql

http = require('http');
path = require('path');
bodyParser= require('body-parser');

app.use(function(req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept, Authorization, Content-Length");
    res.header("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE, OPTIONS");
    res.header("Access-Control-Allow-Credentials", "true");
    next();
});

app.get('/test', function(req, res){
    //return res.send("Hello world from server.js");

    // mysql connection
    /*var connection = mysql.createConnection({
        /!*host: 'localhost',
        user: 'root',
        password: '',
        database: 'medgenome'*!/
        host: 'localhost',
        user: 'stgmedgenome',
        password: 'U7HKQ9#$%#M',
        database: 'medgenomestg'
    });

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
    //res.send("Query Reply");*/
});


app.use(express.static(__dirname + "/public"));
app.listen(8080);
console.log("Server running in port 3000");
