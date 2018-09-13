#!/usr/bin/env nodejs
var http = require('http');
var express = require("express");
var app = express();

app.get('/', function(req, res){
  res.send("Hello world from server.js Test");
});

http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/plain'});
  res.end('Hello World\n');
}).listen(8080, 'http://diagnostics.medgenome.com:8080/');
console.log('Server running at http://diagnostics.medgenome.com:8080/');
