## Requirements
- [OpenMage](https://github.com/OpenMage/magento-lts) / Magento 1.9.x
- PHP 7.4 / 8.x

## Description

[Monaco Editor](https://github.com/microsoft/monaco-editor) is a highly advanced and versatile code editor from Microsoft used in the popular code editor [VSCode](https://github.com/microsoft/vscode).



This extension allows you to use [Monaco](https://github.com/microsoft/monaco-editor)  for editing CMS content and Design Update XML instead of textareas while maintaining indentation, as well as benefiting from all the useful features.

> This is a side project of [CMSContentFileMode](https://github.com/magemega/openmage-mm_cmscontentfilemode) that integrates the Tailwind CSS compiler for CMS Content in OpenMage. Check it out!

## Monaco Features

- Smart IntelliSense
- Syntax Highlighting
- Code Formatting / Folding
- Multiple Cursors and Selections
- and much more

## Additional Features
- Emmet a fast and efficient toolkit for HTML and CSS coding, providing shorthand abbreviations for quick code expansion. 
- Tailwindcss Intellisense providing intelligent auto-completion, suggestions, and tooltips for Tailwind CSS classes 

## Configuration
Monaco Editor is enabled by default in all supported content.

**System -> Content Management -> Monaco Editor Options**

- Enable/disabled Monaco Editor [enabled]
- Enable/disabled Tailwindcss Intellisense [enabled]
- Configure Tailwindcss Prefix [disabled]
    - Set Custom Tailwindcss Prefix ['tw-']
- Disable WYSYWYG Editor for specific Static Blocks and Pages


## Known issues:

- The TinyMCE content is not synchronized back on Monaco.

- There is a problem with prototypejs that inserts the Array.prototype.include method and conflicts with Monaco. It should have been resolved, although it may not be the best solution, but it works!

## DEMO

![demo-monacoeditor](https://github.com/empiricompany/openmage-mm_monacoeditor/assets/5071467/05398366-fe69-498c-99f3-6140571bc395)
![configs](https://github.com/empiricompany/openmage-mm_monacoeditor/assets/5071467/6abe1372-0afb-4ee2-9645-7584a5e60664)

### Support
-------
If you have any issues with this extension, please open an issue on GitHub.

### Contribution
------------
Any contributions are highly appreciated. The best way to contribute code is to open a
[pull request on GitHub](https://help.github.com/articles/using-pull-requests).

### Licence
-------
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)
