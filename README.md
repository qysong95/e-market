# e-market

## Set up

```
cd e-market
cd sql
mysql -u root -p
```

Input your mysql password

```
CREATE DATABASE eMarket;
USE eMarket;
source crate.sql;
source load.sql;
exit
```

Start php server

```
cd ..
php -S localhost:8000
```

Go to http://localhost:8000/
