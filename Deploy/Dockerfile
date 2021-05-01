FROM alpine:3.11.3
MAINTAINER Hoang Ngoc Quy <ngocquyhoang3112@gmail.com>
RUN apk update \
	&& apk upgrade \
	&& apk add --no-cache rsync openssh-client \
	&& rm -rf /var/cache/apk/*
