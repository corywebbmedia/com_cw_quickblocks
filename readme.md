# CW Quick Blocks Component for Joomla

CW Quick Blocks is the easiest way to create a page of module positions, or simply to load a module position within another module. With the component, you no longer have to hide the component output in your template on pages where you just want to display modules. With the module, you can easily nest module positions within a module, creating tabs, sliders, accordions, or any other layout you can come up with.

Use CW Quick Blocks to:

* Create a modular home page without having to hide the component output
* Create a dashboard page
* Add tabs within a module
* Create a Bootstrap slider where each slide is a separate module
* Add an accordion in a module
* And more

## [CW Quick Blocks Component](https://github.com/corywebbmedia/com_cw_quickblocks)

* Standard Joomla MVC structure
* Easily create a page of module positions
* Eliminate the need to hide the component output in your template for pages that just need to display modules
* Default layout uses standard Bootstrap 2 rows and spans
* GPL License

## [CW Quick Blocks Module](https://github.com/corywebbmedia/mod_cw_quickblocks)

* Standard Joomla MVC structure
* Easily embed a module position within a module
* Nest modules within modules
* 4 standards layouts: Default, Accordion, Tabs, and Carousel
* Accordion, Tabs, and Carousel use Bootstrap 2 markup standards
* GPL License

## Documentation

### CW Quick Blocks Component

**Create a CW Quick Blocks menu item**

1. Open a menu in the menu manager.
2. Click the New button to add a menu item.
3. Set the menu item type to CW Quick Blocks > Blocks
4. In the menu item's CW Quick Blocks tab, enter the position prefix, number of rows, and number of columns to use. The template override and module chrome are optional.
5. Save the menu item.

**Parameters Explained**

* **Template Override:** A template override is an override of the default CW Quick Blocks layout file that you create within your template. This parameter will list the available template overrides. Note that if you add an override to your template called `default.php`, you don't have to select an override here because the system uses your template override automatically.
* **Position Prefix:** Each module position loaded via com_cw_quickblocks will be named with the pattern `{Position Prefix}_{Row}_{Column}`. So, for example, if your position prefix is "blocks", then the module position in row 1, column 1 will be named blocks_1_1.
* **Number of Rows:** Think of the module positions loaded in a com_cw_quickblocks page as the cells an Excel spreadsheet. The component will loop through the number of rows and columns set in the parameters to load the positions. This sets the number of rows to use.
* **Number of Columns:** This sets the number of columns to use.
* **Module Chrome:** This sets the module chrome style to use when rendering the mdoules in the com_cw_quickblocks layout.

**Creating a Template Override**

If you want to override the default layout, you have to create a template override as follows:

1. Copy `/components/com_cw_quickblocks/views/blocks/tmpl/default.php` to `/templates/{YOUR_TEMPLATE}/html/com_cw_quickblocks/blocks/default.php`
2. Modify as needed

_Note: If you want to have multiple template overrides, you can create multiple copies of `default.php`, but give it different names. Each new override will be available in as an option in the Template Override parameter in the menu item._

### CW Quick Blocks Module

**Add a CW Quick Blocks module to any page(s) on your site**

1. In the Joomla administrator, go to Extensions > Modules and click "New" to add a new module.
2. Select the CW Quick Blocks module type.

**Parameters Explained**

* **Module Position:** Enter the name of the module position to render in this module. Please note that you must also set a position in which to display this module.
* **Alternative Layout:** There are 4 layouts that come with CW Quick Blocks: Default, Accordion, Carousel, and Tabs. You can also create template overrides within your template. This parameter will list the available template overrides.
* **Module Style:** Enter the module chrome style to use for the modules loaded in this module. Please note that you must select a style from the active template.
* **Backgroun Image:** Select or upload an image that will automatically be inserted as an inline style for the wrapping div element.

**Creating a Template Override**

If you want to override any of the 4 standard layouts, you have to create a template override as follows:

1. Copy `/modules/mod_cw_quickblocks/{FILENAME}.php` to `/templates/{YOUR_TEMPLATE}/html/mod_cw_quickblocks/{FILENAME}.php`
2. Modify as needed

_Note: If you want to have multiple template overrides, you can create multiple copies of `{FILENAME}.php`, but give it different names. Each new override will be available in as an option in the Alternate Layout parameter in the module._
