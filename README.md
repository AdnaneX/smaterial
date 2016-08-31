# SMaterial
SMaterial is made to follow the Material Design guidelines as close as possible. 
SMaterial should be easy to use for both developers as the customers they serve.

Being easy for developers means that SMaterial comes bundled with everyday technologies that speed up a developers workflow.
SMaterial doesn't only come with everyday technologies but it also provides way to make integration easier.
This for example means use a language like json that can be used with various other languages like PHP.

## Contributing
### Requirements
In order to contribute you need to have a installed a couple of programs. The programs used to create SMaterial are the following:
Git, SASS, Gulp. Want to know how to install those programs I would advise you to visit the corresponding website.

### Getting started
To get up and running you need to fork this repository to your own git.
After downloading the your newly created repository run `npm install` in your console / terminal.
This will install files listed in package.json.
After all files have installed you can just run `grunt` in your console / terminal.
This command will compress js and scss files.

### PHP files
The website uses PHP files to make working with the menu, headers and footers a lot easier.

To use PHP file you'll need to have a localhost or other server.
I would advice to use a localhost (PHP build in server, wamp, xamp or usbwebserver) since this isn't online and therefor private to you only.

After that all you need to do is change `define( 'TEST', false );` to `define( 'TEST', true );`. You can find this in
`includes/header.php`. This makes sure that some files aren't loaded for example Google Analytics.

#### Don't like to use PHP
If you don't like to use PHP there is a option to use HTML but it requires a bit of work.
You have to copy all HTML from `includes/header.html` and replace all PHP code of the file you want to change.
The PHP code you have to delete are the first 7 lines.
After replacing the header you need to replace the footer as well.
The footer is everything from `includes/footer.html` and you need to replace it with the last 2 lines of the file.
You also have to rename / copy the working file to a `*.html` file.

### Creating a pull request
After making your changes please describe what you have changed. This will speed up the process of merging your PR.

## DONE

- Chips
- Tooltips
- Snackbars & toasts

## TODO

- Global
    - Delete class "sc-" prefix to save more than 80kb?
    - Add black theme support
    - Add variables to settings
    - Add badges
    - Fix mobile styling (in Chrome for Android when scrolling a page the title bar remains visible)
    - Check duplicate styling and therefor load speed
    - When an item can be triggered by clicking work with JavaScript to set an active class.
    - Use 1 class for all triggers. With the active class make slideup and slidedown action
    - Future add SMaterial CDN package
    - Future add meteor js package
    - Check for "- rem-calc(..px)" and "rem-calc(-..px)". All should be like the last one
    - Move global usable classes to _normailize.scss (.sc-no-hover, .sc-active, .sc-disabled) to name a few
    - Add Material Design animations
    - Add templates
    - Complete table of contents
    - Add flexbox support
    - Add mobile, tablet, desktop different transitions (JavaScript)
    - Add screen width detect to js
    - Fix positions of <header>, <main>, <aside> to be more compatible with for example WordPress (<aside> goes over <header>, <main> slides up under <header>)
    - Add default styles for various elements (eg. buttons, slider)
    - Add support for IE and FireFox
    - Add Hammer.js for a better mobile experience(Optional)
    - Less options in settings file. Only important options. All other "options" only in the same file at the top after comment before styling
- Appbar
    - Add "more menu" styling
    - Add "more menu" functions
    - Add search slide out
- Bottom sheet
    - Add music styling
    - Fix position (it's now under navigation drawer)
    - Fix shadow
- Buttons
    - Add dropdown buttons
    - Add toggle button actions
- Cards
    - Add more styling to cards
    - Add more varieties of cards
- Chips
- Dialogs
    - Add more JavaScript functionality (open / close by JavaScript call)
- Progress
    - Fix buffer animation
- Selection
    - Add hovers
    - Add radials for mobile
- Settings
    - Make variables consistent
    - Give variables a clearer name of what they do
    - Check all colors for (lighten() / darken() or rgba()) where possible
    - Divide variables for components
    - Add comments for divided variables
    - Add settings in documentation
    - Move color import from "_settings.scss" to "smaterial.scss"
- Navigation drawer
    - Make profile dropdown button
    - Profile should consist of less nested div 
    - Profile background image should be dynamically changed (img tag)
    - Fix margin right on left menu for mobile. 56px between screen edge and menu
- Slider
    - Add radials
    - Colors should be rgba but creates weird behaviour (like showing track trough thumb)
    - Fix click bug at end of .sc-slider slider
    - sc-slider-discrete bubble not working mobile
- Tables
    - Fix styling
    - Add table title
    - Add pagination
- Tabs
    - Add mobile scrollable tabs
    - Add icon tabs
- Text fields
    - Fix label click on single-line input (When clicked on label input not active)
    - Fix icon color on single-line input when active color icon
    - Add select
    - Add autocomplete select
    - Add autocomplete input
    - Add slide out search
    - Add dropdown search
    - Fix label for textarea
    - Add text field fallback
- List
    - Create separate file for list styling
- Notifications
    - Add notifications styling: https://material.google.com/patterns/notifications.html
    - Fix max-height to something which works automatically
- Normalize
- Gulp
- Bower
- Prism.js (not part of SMaterial only used to display code in documentation)