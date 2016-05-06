# SMaterial

## TODO

- Global
    - Add black theme support
    - Add variables to settings
    - Add badges
    - Fix mobile styling (in Chrome for Android when scrolling a page the title bar remains visible)
    - Check all list styles to prevent duplicate styling and therefor load speed
    - When an item can be triggered by clicking work with JavaScript to set an active class.
    - Use 1 class for all triggers. With the active class make slideup and slidedown action
    - Future add less version
    - Future add SMaterial CDN package
    - Future add meteor js package
    - Check for "- remCalc(..px)" and "remCalc(-..px)". All should be like the last one
    - Move global usable classes to _normailize.scss (.sc-no-hover, .sc-active) to name a few
- Appbar
    - Add "more menu" styling
    - Add "more menu" functions
    - Add search slide out
- Bottom sheet
    - Add music styling
    - Fix position (it's now under sidenav)
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
- Selection
    - Add hovers
    - Add radials for mobile
- Settings
    - Make variables consistent
    - Give variables a clearer name of what they do
    - Check all colors for (lighten() or rgba())
    - Divide variables for components
    - Add comments for divided variables
    - Add settings in documentation
    - Move color import from "_settings.scss" to "smaterial.scss"
- Sidenav
    - Make profile dropdown button
    - Fix margin right on left menu for mobile. 56px between screen and menu
    - Fix shadow
- Slider
    - Fix styling
- Tables
    - Fix styling
    - Add table title
    - Add pagination
- Text fields
    - Fix label click on single-line input (When clicked on label input not active)
    - Fix icon color on single-line input when active color icon
    - Add select
    - Add autocomplete select
    - Add autocomplete input
    - Add slide out search
    - Add dropdown search
    - Maybe set *-dense as mobile default
    - Fix label for textarea
- Normalize
    - Add default list style
- Gulp
    - Split JavaScript vendor and app
    - Add SCSS support