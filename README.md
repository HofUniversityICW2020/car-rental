# Car Rental Demo

## Install locally using [DDEV](https://ddev.readthedocs.io/en/stable/) 

```
git clone https://github.com/ohader/car-rental.git
cd car-rental
ddev start
ddev import-db -f db/db.sql.gz
```

## Navigate between steps

Each step in the architecture and re-design process is organized in a
dedicated branch, like `step/01-ugly-web-app`. Switching branches allows
one to navigate through the whole re-design process.
