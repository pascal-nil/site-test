## pour lancer le serveur
```
docker create --name server debian
docker commit server server:server
docker rm $(docker ps -a -q)
docker run --interactive --tty --name server server:server
```

## importer une image
```
docker load -i server.tar
```

## exporter une image
```
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
