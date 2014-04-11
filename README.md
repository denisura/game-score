Game Score
======
CLI tool to keep track of scores for any game

ORM Schema Designer
------------

http://www.orm-designer.com/download-orm-designer

Configuration
------------

Set database connection parameters in /config/bootstrap.php

Schema deployment
------------

Doctrine Entity Generation from yml files

```bash
rm -rf src/GameScore/Entity;
./vendor/bin/doctrine orm:generate-entities src
```

Doctrine Schema creation

```bash
 ./vendor/bin/doctrine orm:schema-tool:create
```

Doctrine Schema validation

```bash
./vendor/bin/doctrine orm:validate-schema
```


CLI tools
------------

Import game scores from file

```bash
while read line; do php cli/import_score.php "$line"; done < data/data.txt
```

Import game score

```bash
php cli/import_score.php 'Location A:Bob,1,Martin,2'
php cli/import_score.php 'Location B:Bob,-10,Martin,2,Tod,6'
```

Add opponent

```bash
php cli/create_opponent.php Martin
```

List opponent ranking

```bash
php cli/list_ranking.php
```