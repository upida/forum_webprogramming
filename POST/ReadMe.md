# POST

Dari index.php di folder ini, kita dapat melakukan POST request ke server.

## Run Server

```bash
php -S localhost:8082
```

## [200] Send POST Request

```bash
curl -X POST http://localhost:8082 -d "message=Hello World!"
```

## [405] Send GET Request

```bash
curl http://localhost:8082
```

## [400] Send POST Request Without Message

```bash
curl -X POST http://localhost:8082
```