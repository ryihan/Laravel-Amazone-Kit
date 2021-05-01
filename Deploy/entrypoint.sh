#!/bin/bash
SSH_USER=$1
SSH_HOST=$2
SSH_PORT=$3
PATH_SOURCE=$4
OWNER=$5
mkdir -p /root/.ssh
ssh-keyscan -H "$SSH_HOST" >> /root/.ssh/known_hosts
	exit 1
fi
