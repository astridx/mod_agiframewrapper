# mod_agiframewrapper
This module shows an iFrame window to specified location. 
It is an extension of [mod_wrapper](https://docs.joomla.org/Help39:Extensions_Module_Manager_Wrapper).
Before the actual content is loaded and displayed in the iframe window, this first 
have to be confirmed with a button.

# How to use in backend
To add a new Agiframewrapper module or edit an existing Agiframewrapper module, 
navigate to the Module Manager and select 'Extensions -> Modules'. 
Click the New button and click on Agiframewrapper in the modal popup window.

![module site test administration](https://user-images.githubusercontent.com/9974686/49697139-074d6d80-fbb4-11e8-924e-246f07778229.png)

More information about the parameters you can find in the documentation for
[mod_wrapper](https://docs.joomla.org/Help39:Extensions_Module_Manager_Wrapper)
![module agiframewrapper test administration](https://user-images.githubusercontent.com/9974686/49697138-06b4d700-fbb4-11e8-88a5-7598f61fcac6.png)

# How it looks in frontend

When opened for the first time, a gray area is displayed. 
To be exact, the 'JOOMLA/modules/mod_agiframewrapper/src/modules/mod_agiframewrapper/index.html' file is displayed. 
If you have knowledge of HTML, you can edit this area by editing 
the file 'JOOMLA/modules/mod_agiframewrapper/src/modules/mod_agiframewrapper/index.html'. 
Above the gray area is a button.

![home 4](https://user-images.githubusercontent.com/9974686/49697297-b8a0d300-fbb5-11e8-9cab-a70d31ffc958.png)

Clicking on this button loads the actual iframe content. 
![home 5](https://user-images.githubusercontent.com/9974686/49697296-b8a0d300-fbb5-11e8-88c3-4a45feaae490.png)

After that, you can deactiate the iframe content with the button - if you like.

# FAQ
## How can I change the text of the buttons?
You can make an [language override](https://docs.joomla.org/J3.x:Language_Overrides_in_Joomla) of the language strings 
'MOD_WRAPPER_INHALT_AKTIVIEREN' and 'MOD_WRAPPER_INHALT_DEAKTIVIEREN'
