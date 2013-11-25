var querystring=require('querystring');

function start(res,postData){
	console.log("Request handler 'start' was called.");
	var body='<html>'+'<head>'+
	'<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />'+
	'</head>'+'<body>'+
	'<form action="/upload" method="post">'+
	'<textarea name="text" rows="20" cols="60"></textarea>'+
	'<input type="submit" value="Submit text" />'+
	'</form>'+'</body>'+'</html>';

	res.writeHead(200,{"Content-Type":"text/html"});
	res.write(body);
	res.end();
}

function upload(res,postData){
	console.log("Request handler 'upload' was called.");
	res.writeHead(200,{"Content-Type":"text/html"});
	res.write("You've send: "+querystring.parse(postData).text);
	res.end();
}

exports.start=start;
exports.upload=upload;