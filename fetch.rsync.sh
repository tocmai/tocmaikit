#!/bin/bash

# This script needs appropriate permissions to be executable. 
# Set them with: chmod +x ./deploy.sh

# The `mysite` SSH host should be defined in the `~/.ssh/config` file.

rsync \
	--archive \
	--recursive \
	--verbose \
	--progress \
	mysite:~/public_html/storage/content \
	./storage

