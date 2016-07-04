# SMaterial

## Contributing
### Requirements
In order to contribute you need to have a installed a couple of programs. The programs used to create SMaterial are the following:
Git, SASS, Gulp. Want to know how to install those programs I would advise you to visit the corresponding website.

### Getting started
To get up and running you need to fork this repository to your own git.
After downloading the your newly created repository run "npm install" in your console / terminal.
This will install files listed in package.json.
After all files have installed you can just run "grunt" in your console / terminal.
This command will compress js and scss files.

### Creating a pull request
After making your changes please describe what you have changed. This will speed up the process of merging your PR.

## DONE

- Tooltips
- Snackbars & toasts

## TODO

- Global
    - Add black theme support
    - Add variables to settings
    - Add badges
    - Fix mobile styling (in Chrome for Android when scrolling a page the title bar remains visible)
    - Check duplicate styling and therefor load speed
    - When an item can be triggered by clicking work with JavaScript to set an active class.
    - Use 1 class for all triggers. With the active class make slideup and slidedown action
    - Future add SMaterial CDN package
    - Future add meteor js package
    - Check for "- remCalc(..px)" and "remCalc(-..px)". All should be like the last one
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
    - Change size of delete icon
- Dialogs
    - Add more JavaScript functionality (open / close by JavaScript call)
- Progress
    - Fix buffer animation
    - Circle progress
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
    - Add default text field
- List
    - Create separate file for list styling
- Normalize
- Gulp
- Bower
- Prism.js (not part of SMaterial only used to display code in documentation)