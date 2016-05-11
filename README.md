# Chapter 2 - Directory Structure in layman's term.

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/8fff287c-ba42-490f-bc31-3c7c804d9006/mini.png)](https://insight.sensiolabs.com/projects/8fff287c-ba42-490f-bc31-3c7c804d9006)
[![Build Status](https://travis-ci.org/Modelizer/Bank.svg?branch=CHAPTER-2)](https://travis-ci.org/Modelizer/Bank)

Before starting code you should keep in mind FOLDER STRUCTURE MATTER!
Because better your folder structure, better you organize your code in more efficiently way, otherwise a time will come you will find unwanted codes are kept in wrong places.

##### Have a look at [current directory structure](https://github.com/Modelizer/Bank/tree/CHAPTER-2/src/Coffer).
* Folder structure is define as per bank work definition.
* Classes, Exceptions, Contracts(Interfaces) are kept in proper place.
* Please ask yourself question, because more you ask more you will able to understand.
Example "Is folder structure is explicit?".
If yes then move on or else raise an issue for improvement :)
* Note: Changes are made as compare to prior chapter like
renamed whole new `Modelizer` folder to `Coffer` because Modelizer is specific
to @author and Coffer is specific to package.


##### Interface and Exception
* As we discuss in early chapter we made `Contracts` folder to keep [Interfaces](http://php.net/manual/en/language.oop5.interfaces.php).
* `Exceptions` folder to keep all [Exceptions](http://php.net/manual/en/class.exception.php).


##### Repository
* We made `DataCenter` which is a [Repository](https://github.com/domnikl/DesignPatternsPHP/tree/master/More/Repository) layer over information(data).
* DataCenter will help us to hide DB queries and give it a name in terms of business requirement.
Example: `UserInformation::findByAccountNumber()` which will hide `$user->where('account_number', xxx)->get()`
* You will be able to understand more clearly when we see it in action.


##### Model
* We made `Entities` folder which will work as Model, If you don't know what model is then checkout [MVC](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller).
* All Generic model will be kept in entities folder and no generic once will be kept in their respective folders.


### Next CHAPTER-3
* In next chapter we will discuss when to use ORM and when to use Raw Query.
* It will be more like ORM vs Raw Query.
* After a long research we will inject best ORM available in PHP Community.

#####Notes:
* ORM which we will use, will be bases on Security, Flexibility and LTS.
* We will use more laymen's term as compare to jargon because laymen's term make code more readable.

Example:

* Instead using `create` you can use `make`.
* Similarly i use `Contracts` in replacement of `Interfaces`.
* And `Repository` turns into `DataCenter`.
