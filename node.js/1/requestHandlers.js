var exec= require("child_process").exec;
function lalala(res){
	console.log("Request handler 'lalala' was called.");
	exec("ls -lah",function (error,stdout,stderr){
		res.writeHead(200,{'Content-Type': 'text/plain'});
		res.write(stdout);
		res.end();
	});
}

function dudulu(res){
	console.log("Request handler 'dudulu' was called.");
	res.writeHead(200,{'Content-Type': 'text/plain'});
	res.write('Dudulu!');
	res.end();
}

exports.lalala=lalala;
exports.dudulu=dudulu;