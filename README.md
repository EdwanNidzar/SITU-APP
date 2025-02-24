# Installation Guide

## Install Dependencies

```bash
composer install
```

```bash
npm install
```

## Environment Configuration

Buat salinan dari file `.env.example` dan ubah namanya menjadi `.env`:

```bash
cp .env.example .env
```

Kemudian, buka file `.env` dan atur konfigurasi database:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_situ_app
DB_USERNAME=root
DB_PASSWORD=
```

## Generate the Application Key

```bash
php artisan key:generate
```

## Set Up the Database

```bash
php artisan migrate
```

## Seed the Database

```bash
php artisan db:seed
```

## Create Storage Symlink

```bash
php artisan storage:link
```

## Build Frontend Assets

```bash
npm run dev
```

## Start the Laravel Server

```bash
php artisan serve
```
