## pour creer le serveur
```
docker create --name server debian
docker commit server server:server
docker rm $(docker ps -a -q)
docker run --interactive --tty --name server server:server
```

## pour lancer le serveur
```
docker start server
docker attach server
```

## importer une image
```
docker load -i server.tar
docker run --interactive --tty --name server server:server
```

## exporter une image
```
docker commit server server:server
docker save -o server.tar server:server
```

## liste des images
```
docker images --all
```

## liste les containers
```
docker container ls -a
```

## supprimes tous les containers
```
docker rm $(docker ps -a -q)
```

## supprimes toutes les images
```
docker rmi $(docker images -q)
```
