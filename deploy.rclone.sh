#!/bin/bash

# This script needs appropriate permissions to be executable. 
# Set them with: chmod +x ./deploy.sh

# The `mysite` FTP host should be defined with the `rclone config` command.

echo "Synchronizing files that have changed"
rclone copy \
	--progress \
	--filter-from=".rclone-filter" \
	--ftp-no-check-certificate \
	--check-first \
	. \
	mysite:public_html/


