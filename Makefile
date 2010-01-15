PREFIX=

all: update

update:
	(cd common.php; git pull)

install:
	git clone ${PREFIX}/scm/git/common.php
