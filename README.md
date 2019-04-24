###Auto DE
 
### Docker

Install docker - https://docs.docker.com/install/  
Install docker-compose - https://docs.docker.com/compose/install/  
Create `.env` based on `.env.dist`  
 
After installation:
* `docker-compose build`
* `docker-compose up -d`

##### Must be run first because images are attached to containers
docker rm -f $(docker ps -a -q)

##### Delete every Docker image
docker rmi -f $(docker images -q)
