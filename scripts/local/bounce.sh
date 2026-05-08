#!/bin/sh

# Mail delivery script by FileSender 1.6
# https://github.com/filesender/assembla-export/blob/master/wiki/documentation-v16/Mail%20Bounce%20Handling%20%7C%20FileSender%20Project%20%7C%20Assembla.md

timestamp=$(date "+%Y-%m-%d_%H:%M:%S")
cat > $(mktemp -p /opt/filesender/filesender/maildrop/new bounce.${timestamp}.XXXXXX)
