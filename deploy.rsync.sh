#!/bin/bash

# This script needs appropriate permissions to be executable. 
# Set them with: chmod +x ./deploy.sh

# The `mysite` SSH host should be defined in the `~/.ssh/config` file.

rsync \
	--archive \
	--compress \
	--verbose \
	--progress \
	--filter="merge .rsync-filter" \
	./ mysite:~/public_html/

