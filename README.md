# Chapter 2

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/8fff287c-ba42-490f-bc31-3c7c804d9006/mini.png)](https://insight.sensiolabs.com/projects/8fff287c-ba42-490f-bc31-3c7c804d9006)
[![Build Status](https://travis-ci.org/Modelizer/Bank.svg?branch=CHAPTER-2)](https://travis-ci.org/Modelizer/Bank)

Before starting code everyone should keep in mind FOLDER STRUCTURE MATTER!
Because better your folder structure, better you organize your code in more efficiently way, otherwise a time will come you will find unwanted codes are kept in unwanted classes or files.

In this things which we cover up:

* Setup directory.
* Classes, Exceptions, Contracts(Interfaces) should be kept on proper place.
* Renamed whole new `Modelizer` folder to `Coffer` because Modelizer is specific to @author and Coffer is specific to package.
------
* We made Contracts folder to keep interfaces.
* Exceptions folder to keep all exceptions.
------
* We made DataCenter which is a [Repository](https://github.com/domnikl/DesignPatternsPHP/tree/master/More/Repository) layer over information(data) which we will get from database.
* DataCenter will help us to hide DB queries and give it a name in terms of business requirement.
Example: `UserInformation::findByAccountNumber()` which will hide `$user->where('account_number', xxx)->get()`
* You will be able to understand more clearly when we see it in action.
------
* We made entities folder which will work as Model, If you don't know what model is then checkout [MVC](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller).
* All Generic model will be kept in entities folder and no generic once will be kept in their respective folders.
------

##### Next CHAPTER-3
* In next chapter we will inject ORM in our current System.
* Will do seeding Stuffs and much more.

Notes:
* ORM which i will inject will be bases on Security, Flexibility and LTS.
* While coding use more laymen terms as compare to jargon because laymen terms make code more readable.


Example:

Instead using `create` you can use `make`,

Similarly i use `Contracts` in replacement of `Interfaces`,

`Repository` turns into `DataCenter`.
