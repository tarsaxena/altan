<?php


Create new application
To create a new application, run the LoopBack application generator.

If using loopback-cli:

$ lb
If using apic:

$ apic loopback
If using slc:

$ slc loopback 

Initializing the project folder structure.

Creating default JSON files.
Creating default JavaScript files.
Downloading and installing dependent Node modules (as if you had manually done npm install).
Create models
Now that you’ve scaffolded the initial project, you’re going to create a CoffeeShop model that will automatically have REST API endpoints.

Go into your new application directory, then run the LoopBack model generator:

$ cd loopback-getting-started
Then, using IBM API Connect v5 developer toolkit:

$ apic create --type model
Using StrongLoop tools:

$ lb model
The generator will prompt for a model name.  Enter CoffeeShop:

[?] Enter the model name: CoffeeShop
It will ask if you want to attach the model to any data sources that have already been defined.  

At this point, only the default in-memory data source is available.  Press Enter to select it:

...
[?] Select the data-source to attach CoffeeShop to: (Use arrow keys)
❯ db (memory)


$ node .
...
Browse your REST API at http://0.0.0.0:3000/explorer
Web server listening at: http://0.0.0.0:3000/