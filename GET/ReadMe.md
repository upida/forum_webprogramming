# POST

Dari index.php di folder ini, kita dapat melakukan GET request ke server.

## Run Server

```bash
php -S localhost:8082
```

## [200] Send GET Request

```bash
curl http://localhost:8082?message=Hello World!
```

Response:

Code: `200`

Body:
```json
{"message":"Hello World!"}
```

## [405] Send POST Request

```bash
curl -X POST http://localhost:8082
```

Response:

Code: `405`

Body:
```json
{"error":"Method not allowed"}
```

## [400] Send GET Request Without Message

```bash
curl http://localhost:8082
```

Response:

Code: `400`

Body:
```json
{"error":"Message cannot be empty"}
```