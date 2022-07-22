# How to install

```
- composer update


-  into file docker-compose.yaml  from the terminal " docker compose up " run 

- into the .env file
  "MESSENGER_TRANSPORT_DSN=amqp://guest:guest@localhost:5672/%2f/messages" paste code

- symfony console serve -d

```

# How to use

```
  open terminal
  php bin/console messenger:consume async -vv
-  then  (http://localhost:8000/orderplace) request

You will see it running from terminal.


```
