var server= require('./server2.js');
var router= require('./router.js');
var requestHandlers= require('./requestHandlers.js');

var handle={};
handle['/']=requestHandlers.lalala;
handle['/lalala']=requestHandlers.lalala;
handle['/dudulu']=requestHandlers.dudulu;
server.start(router.route,handle);