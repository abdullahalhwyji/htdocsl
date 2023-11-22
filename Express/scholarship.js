const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');

const app = express();
app.use(bodyParser.urlencoded({ extended: true }));

const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'XdEgOLLS[b_Jx[xA',
    database: 'FuturePresident'

});
connection.connect((err) => {
    if  (err) {
        console.log('error connecting to mysql server' + err.stack);
        return;
    }
    else{
        console.log('connected to mysql server as ID' + connection.threadId);
    }
});

app.get('/', (req, res) => {
    res.sendFile('HTML/Data/scholarship.html');
});


