# SMaterial
SMaterial is made to follow the Material Design guidelines as close as possible. 
SMaterial should be easy to use for both developers as the customers they serve.

Being easy for developers means that SMaterial comes bundled with everyday technologies that speed up a developers workflow.
SMaterial doesn't only come with everyday technologies but it also provides way to make integration easier.
This for example means use a language like json that can be used with various other languages like PHP.

## Contributing
### Requirements
In order to contribute you need to have installed a couple programs. The programs used to create SMaterial are the following:
[Git](https://git-scm.com/), [SASS](http://sass-lang.com/), [Webpack](https://webpack.js.org/). Want to know how to install those programs I would advise you to visit the corresponding website.

### Getting started
To get up and running you need to fork this repository to your own git.
After downloading your newly created repository run `npm install` in your console / terminal.
This will install files listed in `package.json`.
After all files have installed you can run a few commands in your console / terminal. These commands are `npm run dev` for development or `npm run prod` for production.
This command will compress JS and SCSS files.

### PHP files
The website uses PHP files to make working with the menu, headers and footers a lot easier.

To use PHP files you'll need to have a localhost or other server.
I would advice to use a localhost (PHP build in server, wamp, xamp or usbwebserver) since this isn't online and therefor private to you only.

After that all you need to do is change `define( 'TEST', false );` to `define( 'TEST', true );`. You can find this in
`includes/header.php`. This makes sure that some files aren't loaded for example Google Analytics.

### Creating a pull request
After making your changes please describe what you have changed. This will speed up the process of merging your PR.

## DONE

- Bottom navigation
- Bottom sheet
- Chips
- Tooltips
- Snackbars & toasts

## TODO

- Global 
    - Fix mobile styling (in Chrome for Android when scrolling a page the title bar remains visible)
    - Fix max-height max-width to something which works automatically. This applies to several components where these properties are animated 
    - Add Material Design animations
    - Fix positions of `<header>`, `<main>`, `<aside>` to be more compatible with for example WordPress (`<aside>` goes over `<header>`, `<main>` slides up under `<header>`)
    - Add broader support for IE and FireFox
    - Future
		- Add SMaterial CDN package
    	- Add templates
    	- Add react and or vue
    - Components
        - Pickers
		- Add badges
- Appbar
    - Add search slide out
- Bottom navigation
- Bottom sheet
- Buttons
    - Add toggle button actions
- Cards
    - Add card templates
- Chips
- Data tables
    - Fix styling
    - Add table title
- Dialogs
    - Add more JavaScript functionality (open / close by JavaScript call)
- Expansion panels
- Grid lists
    - Redo styling
- Menus  
  - Fix bug where menu is behind tabs in appbar
- Progress
    - Fix buffer animation
- Selection
    - Add radials for mobile
- Settings                   
    - Less options in settings file. Only important options. All other "options" only in the same file
    - Make variables consistent. Give variables a clearer name of what they do
    - Add css variables where possible. Also add fallback.
- Navigation drawer
    - Add persistent mini
- Slider
    - Add radials
    - Colors should be rgba but creates weird behaviour (like showing track trough thumb)
    - Fix click bug at end of `.slider` slider
    - slider-discrete bubble not working mobile
- Tabs
	- Add support for scroll on desktop
- Text fields
    - Add autocomplete select
    - Add autocomplete input
    - Add slide out search
    - Add dropdown search
- List
    - Create separate file for list styling
- Notifications
    - Fix wobble on header expand rotation
- Normalize
- Gulp
- Bower
- Prism.js (not part of SMaterial only used to display code in documentation)