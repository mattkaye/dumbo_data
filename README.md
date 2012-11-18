DumboData
==========

DumboData is a simple PHP class that allows you to add flexible tables, paragraphs, images, and list items to your HTML markup as you're building it. 

The concept here, is that it allows you to see how your markup will react to content of various sizes. Each time you refresh your browser, the content will be shuffled based on the size parameters you define.

### Installation
Unzip the entire contents of the DumboData directory into any of your project folders. It's easiest if the contents of DumboData are placed one level below your working project directory.

Depending on where you place the contents of DumboData, you will have to adjust the path for the test images in the constructor method:

> $dummyData = new DumboData((int)$minChar, (int)$maxChar, '../images/');

This tells the class that your HTML is one level higher than the DumboData images directory. This is the default path, and you don't have to change it if your directory path matches this one. 

### How To Use
The contents of the 'example' directory will show you all the methods that you can use in working examples. It's only there for reference, so feel free to delete it.
