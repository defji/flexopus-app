## Trial application for flexopus

The task was to create an inertia.js application that can be used to send e-mails and, depending on authorization, also
attachments.

## Used frameworks

- [Laravel 10](https://laravel.com)
- [Inertia.js](https://inertiajs.com)
- [Vue.js v3](https://vuejs.org)
- [ESLint](https://eslint.org)

## Install

```bash
clone git@github.com:defji/flexopus-app.git
cd flexopis-app
# set mysql credentials in .env 
# set mail credentials in .env
composer install
npm install
php artisan serve
```

## ESLint

```bash
npm run lint
```

## Usage

- Use register form
- Login with registered user
- You can send email without attachment
- Login with admin@flexopus.com with password: fl3x1230pus!
- You must see file upload field for mail attachment
- Enjoy! 😎

&copy; Balázs Györkös 2023 

