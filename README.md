# Lantern

## Lantern keeps the light on for yeh

Lantern is an MVC Framework for WordPress built with Lumen.

It is intended to be used as an MU-Plugin with roots/bedrock.

## Features

- Eloquent with WP table modeling
- Custom posttypes (silk)
- Custom fields (carbon fields, but you could easily use ACF. I just wanted to include a 100% free solution.)
- Laravel Mix (I kept Laravel standard )
- S3 Filesystem Support (I use Digital Ocean and have included a config)
- Routing
- Dashboard cleanup (Intervention)
- Example Models, Controllers, Routers, Repositories, Interfaces, Views, Artisan Commands, WordPress helpers

## Why

Because I needed an API stemming from a custom posttype and this isn't the first time. A lot of the solutions seemed overwhelming or hadn't been updated in quite some time. This Lumen is a fresh lumen.

## Why crappy Laravel. Why not regular Laravel

1. It's easier.
2. You don't need all of laravel.
3. I added a lot of laravel back in.

## How do I

Hack at it. I'll write docs in time.

One note: the router is only enabled on the frontend. This is controlled by a check for `/wp/` in the server request. This is done real hackishly at the end of `bootstrap/lantern.php`, if you want to play with it. Personally, I think if you're turning on the router for all of WP including the dashboard then, at that point, why not just use Laravel..
