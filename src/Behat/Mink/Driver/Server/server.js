var server, port;
var system = require('system');

var path = system.args[0].split('/');
var libPath = '';
path.forEach(function(arg, i) {
    if (i !== path.length - 1) {
        libPath += arg + '/';
    }
});

phantom.libraryPath = libPath + 'include/';
phantom.injectJs( 'PhantomWebServer.js' );
phantom.injectJs( 'PhantomState.js' );

server = require('webserver').create();
port   = 8899;

var web_server = new PhantomWebServer( server, port, console );
web_server.start();

