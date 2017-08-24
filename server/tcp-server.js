/**
 * Created by Dave Tolentin on 7/23/2017.
 */

var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
app.get('/', function(req, res) {
    // res.sendFile(__dirname+'/index.html');
})
io.on('connection', function(socket) {
    console.log('One user connected: '+socket.id);
    socket.on('message', function (data) {
        // var sockets = io.sockets.sockets;
        // socket.broadcast.emit('message', data);
    })
    socket.on('disconnect',function() {
        console.log('One user disconnected: '+socket.id);
    })
})


http.listen(2000, function() {
    console.log('Server listening on port 2000');
})