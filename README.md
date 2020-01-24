# Kirby 3 Schema

This plugin is for easily generating JSON Schema structured data.

## Install

### Download

Download and copy this repository to `/site/plugins/kirby3-schema`.

### Composer

```
composer require hashandsalt/kirby3-schema
```

****

## Commercial Usage

This plugin is free but if you use it in a commercial project please consider to
- [make a donation 🍻](https://paypal.me/hashandsalt?locale.x=en_GB) or
- [buy a Kirby license using this affiliate link](https://a.paddle.com/v2/click/1129/36141?link=1170)

****


## Usage

It's a wrapper around [spatie/schema-org](https://github.com/spatie/schema-org) that turns it into a site method, used like this:

```
<?= $site->schema('LocalBusiness')
  ->name('Hash&Salt')
  ->email('email@example.com')
  ->contactPoint($page->schema('contactPoint')
  ->areaServed('Worldwide')
  ) ?>

It supports anything thats in the [RDFa spec](https://github.com/schemaorg/schemaorg/blob/master/data/schema.rdfa) for structured data which is about 600 data points. Refer to [schema.org site](http://schema.org/docs/schemas.html) for details on each bit. Go nuts :)
