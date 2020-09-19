#!/bin/bash
rsync -aPvz --exclude-from="rsync-ignore.txt" ~/MEOCloud/Development/#Sites/adrianopedro/* adrianopedro@home.dbugit.com:/var/www/adrianopedro/ --delete