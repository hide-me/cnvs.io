## cnvs.io

This repository contains the source code for the official Canvas website at [cnvs.io](https://cnvs.io).

## Setup

If you want to get the site up and running locally, use the following steps:

Clone the repository:

```bash
git clone https://github.com/cnvs/cnvs.io
```

Install the dependencies:

```bash
composer install
```

Finish the configuration:

```bash
cp .env.example .env
php artisan key:generate
```

## License

Canvas is open-sourced software licensed under the [MIT license](license).
