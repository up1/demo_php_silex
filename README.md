DEMO for Silex
==============

Demo for develop application with Silex framework
	* REST APIs with JSON
	* Unit testing
	* Integration testing


1. REST APIs with JSON

```
//Start server
$php -S localhost:8000   

//Test call REST APIs via curl ( Automatic response format )
$curl  -v -H 'Accept: application/json' http://localhost:8000/hello-auto
$curl  -v -H 'Accept: application/xml' http://localhost:8000/hello-auto
```

2. Unit testing
