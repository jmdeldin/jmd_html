MAKE = php /Users/jmdeldin/Sites/plugins/make_txp/make.php
SRC = html.php
CACHE = ../../cache/jmd_html.php
TXT = ../../releases/jmd_html.txt

all:
	$(MAKE) $(SRC) $(CACHE) $(TXT)

clean:
	rm $(CACHE) $(TXT)

