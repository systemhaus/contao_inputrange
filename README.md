Inputrange for Contao
=====================

This extension provides a widget for usage in the form generator of [Contao][1]. The frontend output is a range slider with a knob to select a value from between a lower and an upper limit.

Installation
------------

 * Okay: Clone the repository or download as zip file to _system/modules_
 * Better: Use the Contao Extension Repository to install the extension.
 * Ideal: Use the new Composer client to install.

Important notice
----------------

As the range slider input is a HTML5 element, this extension will only work correctly in __HTML5__ websites. If your page layout is set to __XHTML__ the frontend will issue a red warning. Nothing bad will happen, but range sliders are simply not supported in XHTML. Sorry.

Usage
-----

 1. Create a new form element in the form of your choice
 2. Select "Range" as the widget type
 3. At least set a lower and an upper limit
 4. If necessary, specify a gradation value to only allow for certain values
 5. You can also set indicator values that will be shown along the range slider to make picking values easier
 6. Optionally set a default value to specify the intial knob position

Enhancing
---------

The frontend output is styled by the user agent stylesheet which mostly relies on the Operating System User Interface. If you'd prefer to enhance that style, there are a number of tutorials out there on the web. Some helpful ones are [this][2] and [that][3].

There also is a complete overview of what can be done on [another great site][4].

Feedback and Issues
-------------------

Please use the [GitHub page][5] of this extension to submit feedback and create issues.

A notice on compatibility: This extension will mostly be used in Contao LTS versions. It might or might not work with the intermediate releases of Contao.

[1]: https://contao.org
[2]: http://demosthenes.info/blog/757/Playing-With-The-HTML5-range-Slider-Input
[3]: http://www.htmllion.com/html5-range-input-with-css.html
[4]: http://tjvantoll.com/2013/04/15/list-of-pseudo-elements-to-style-form-controls/#input_range
[5]: https://github.com/systemhaus/contao_inputrange
