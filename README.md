# Bookdown.io With Bootswatch Styles And Prism Syntax Highlighting

If you generate your documentation with [bookdown](http://bookdown.io/) and want some nice styles and syntax highlighting 
for your code blocks, then this package come to the rescue :).

## Credits

This template is based on [https://github.com/tobiju/bookdown-bootswatch-templates](https://github.com/tobiju/bookdown-bootswatch-templates).

## Installation
Installation of this library uses Composer. For Composer documentation, please refer to
[getcomposer.org](http://getcomposer.org/).

Put the following into your `composer.json` or run `composer require prooph/bookdown-template`.

    {
        "require-dev": {
            "prooph/bookdown-template": "^0.2.0"
        }
    }

Put the following into your `bookdown.json`

```
{
    ...
    "template": "../vendor/prooph/bookdown-template/templates/main.php"
}
```

## Styles
Choose your preferred style by setting the `CSS_BOOTSWATCH` and `CSS_PRISM` environment variable before generating the book. 
The default Bootswatch style is `cerulean` and for Prism `ghcolors`. See the example below how to use another style.

Visit [bootswatch.com](https://bootswatch.com/) to see how the style looks like.

* cerulean
* cosmo
* cyborg
* darkly
* flatly
* journal
* lumen
* paper
* readable
* sandstone
* simplex
* slate
* spacelab
* superhero
* united
* yeti

Visit [prismjs.com](http://prismjs.com/) / [prism-styles](https://github.com/PrismJS/prism-themes) to see how the Prism style looks like.

* prism
* dark
* funky
* okaidia
* twilight
* coy
* atom-dark
* base16-ateliersulphurpool.light
* cb
* ghcolors
* hopscotch
* pojoaque
* xonokai

## Top menu logo
To add an individual logo instead of displaying *Home* you can set the environment variable `MENU_LOGO` which must be
an absolute URI to an image.

## Further Information

* [Bookdown](https://github.com/bookdown/Bookdown.Bookdown)
* [Bootswatch](https://bootswatch.com/)
* [PrismJS](http://prismjs.com/)
* [Docker Bookdown image with these templates](https://hub.docker.com/r/sandrokeil/bookdown/)
