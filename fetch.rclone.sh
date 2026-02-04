#!/bin/bash

# This script needs appropriate permissions to be executable. 
# Set them with: chmod +x ./deploy.sh

# The `mysite` FTP host should be defined with the `rclone config` command.

echo "Fetch Kirby content from remote"
rclone copy \
	--progress \
	--ftp-concurrency 4 \
	--checkers 3 \
	--transfers 3 \
	--check-first \
	--ftp-no-check-certificate \
	mysite:public_html/storage/content \
	./storage/content

