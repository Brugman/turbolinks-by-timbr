# Turbolinks by timbr

> A WordPress plugin that speeds up your site with [Turbolinks](https://github.com/turbolinks/turbolinks).

Before you install this plugin please read up on what Turbolinks is, and what it requires from you. Slapping Turbolinks on a production site is a bad idea!

## Installation

1. Download the ZIP.
1. Extract the folder to `/wp-content/plugins/`.

or

```sh
cd /wp-content/plugins/
git clone https://github.com/Brugman/turbolinks-by-timbr.git
```

## Update

1. Download the new ZIP.
1. Replace the old folder in `/wp-content/plugins/`.

or

```sh
cd /wp-content/plugins/turbolinks-by-timbr/
git pull
```

## Configuration

Configuration is optional. The plugin will work out of the box.

### Partially disable Turbolinks

You can customize the Turbolinks behavior in `turbolinks-settings.js`. By default, every link is a Turbolink, except for the toolbar (`#wpadminbar`) and anchor links (`#foo`).

To disable Turbolinks for a link or a wrapper, you can use `set_turbolinks_status( '.no-turbo', false );`.

The first parameter is the selector. It can be a class (`.no-turbo`), an id (`#menu-all-pages`), or a selector (`nav`).

The second parameter turns Turbolinks off with `false`.

### Partially re-enable Turbolinks

If you get yourself in a situation where you want to re-enable Turbolinks for a link inside a disabled zone, you can use the same function with `true` for the second parameter.

I.e. `set_turbolinks_status( '.yes-turbo', true );`

The order in which you disable & enable Turbolinks in the settings file matters.

### Customize the progress bar

The progress bar only shows when your website is loading slowly. The default styles are:

```
.turbolinks-progress-bar {
    position: fixed;
    display: block;
    top: 0;
    left: 0;
    height: 3px;
    background: #0076ff;
    z-index: 9999;
    transition: width 300ms ease-out, opacity 150ms 150ms ease-in;
    transform: translate3d(0, 0, 0);
}
```

You can override these with your own CSS in your theme or a custom plugin.

## Contributing

Found a bug? Anything you'd like to ask, add, change, or have added or changed? Please open an issue so we can talk about it.

## Author

[Tim Brugman](https://github.com/Brugman)
