FROM centos:centos7

RUN  groupadd -r nginx && useradd -r -g nginx nginx
#添加centos源(先下载wget)
COPY ./epel-7.repo  /etc/yum.repos.d/epel.repo

RUN mkdir /data \
    && mkdir /conf \
    && yum update -y \
    && yum clean all  \
    && yum makecache  \
    && yum -y install  gcc gcc-c++ autoconf automake make zlib zlib-devel net-tools openssl* pcre* wget \
    && yum clean all  && rm -rf /var/cache/yum/*

#声明匿名卷
VOLUME /data

COPY ./nginx-1.14.1.tar.gz  /data/nginx-1.14.1.tar.gz

RUN cd /data \
   && tar -zxvf nginx-1.14.1.tar.gz \
   && cd nginx-1.14.1 \
   && ./configure --prefix=/usr/local/nginx --user=nginx --group=nginx \
   && make && make install && rm -rf /data/nginx-1.14.1.tar.gz  && rm -rf /data/nginx-1.14. \
   && ln -s /usr/local/nginx/sbin/* /usr/local/sbin

COPY ./conf/nginx.conf /conf

#进入容器时默认打开的目录
WORKDIR /conf

#声明端口
EXPOSE 80

#容器启动的时候执行,在docker run过程当中是会被其他指令替代
#CMD ["/usr/local/nginx/sbin/nginx","-c","/conf/nginx.conf","-g","daemon off;"]

#执行一条指
ENTRYPOINT ["/usr/local/nginx/sbin/nginx","-c","/conf/nginx.conf","-g","daemon off;"]
