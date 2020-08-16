

##

1. redis=>110.110.110.100
2. nginx=>110.110.110.110
3. php=>110.110.110.120

```
// redis
sudo docker run -itd --network=lrnp --ip=110.110.110.100 -v /media/hengbo/_dde_data/hengbo/docker/lrnp/redis/conf:/conf  --name redis_srm_2007 redis_srm_2007
// nginx docker
sudo docker run -itd --network=lrnp --ip=110.110.110.110 -v /media/hengbo/_dde_data/hengbo/docker/lrnp/nginx/conf:/conf  --name nginx_srm_2007 nginx_srm_2007
// php 
sudo docker run -itd --network=lrnp --ip=110.110.110.120 -v /media/hengbo/_dde_data/hengbo/docker/lrnp/www:/www  --name php_srm_2007 php_srm_2007


```