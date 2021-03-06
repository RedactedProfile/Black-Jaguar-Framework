JagFRAME
=========

JagFRAME is a PHP MVC Framework that assumes a very small footprint in both runtime and memory usage. 

Installation
------------

Either download the the latest zip or clone the git repo with 
`git clone git://github.com/DJDarkViper/JagFRAME.git`
     
From here, either upload to your server or unzip/copy+paste to your local server / site and attempt to visit. 
You should see the welcome page instantly 


Notes
------------

Taking some inspiration from CodeIgniter, the CI framework still requires a bit of configuration to get perfect, but probably the biggest drawback (yes there are a couple) is in the autocompletion. If you use Eclipse based IDE's or similiar with CI, you'd have noticed that the platforms cannot help you in remembering syntax, attributes, etc requiring you to constantly hit up their documentation which hinders flow and groove. 

With JagFRAME, everything is built from the ground up to be as tiny, unassuming, and IDE friendly as possible.

Goals:
* Works straight out of the box, no setup required. Drag and Drop functionality is key
* Config options are small in number, try to keep mostly as database settings and default controller
* Only usage of controllers is manditory, everything else is purely optional
* Code built into the system will be well documented with PHPDoc and JSDoc
* If using an IDE like Eclispe with deep autocompletion features, should be able to find and understand included methods and functions
* If NOT using an IDE with autocompletion, should feature methods and functions that are easy to remember, and make sense when spoken a-loud


At Time of Writing Notes from Author:

A lot of test data and files are making their way into the system. This is only intentional during the fledgling bits of the package. Once I feel confident in the system being production capable and documented well enough, I will remove the test data then and call that RC1 1.0. 
Some of the features of the database driver are under heavy testing and only supports MySQL for the time being, some features are defintiely still missing, and others incomplete. For the most part, standard to pretty intermediate queries are defintiely doable with no problems. But if you feel something is missing, or something is incomplete, by all means fork and send in a patch.

The plan for the database driver is to include other engines such as Postgre, MSSql, and SQLite, but the MySQL driver needs to be completed first. Futher enhancement past that point will include standardized easy flatfile storage.
