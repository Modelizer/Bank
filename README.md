# Chapter 1 - Lets get started

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/8fff287c-ba42-490f-bc31-3c7c804d9006/mini.png)](https://insight.sensiolabs.com/projects/8fff287c-ba42-490f-bc31-3c7c804d9006) 
[![Build Status](https://travis-ci.org/Modelizer/Bank.svg?branch=STEP-1)](https://travis-ci.org/Modelizer/Bank)

First starting with basic.

#### Lets imagine logic which we are going to build.
Customer came to a banker to update his account details.
Banker will ask for his account number to get user details.
Once details are fetch from system its easy for banker to update.

#### Our task is to give those information to banker by keeping security in mind.
In this case fresher will create a file called `get_user_information.php` and will
right database query which will give us expected result.

This is totally open for issue and has many limitation such as code is not re-usable,
code will have many repetition such as `mysqi_query`, `mysqli_fetch_assoc` and much more.
This things will be repeated for every task we perform; which is weird.

My first advice to fresher is DO NOT REPEAT YOURSELF! and we call it as a DRY Principle.

I can list tons of issues but we will proceed further keeping `README.md` length in mind.

#### Solution
* First of all what we will do is we will think, how many classes are required.
* What will be the directory structure.
* How we can restrict our classes or methods to get expected result. (This help us in future to get only those result which are required.)
* First will initialize [composer](https://getcomposer.org/) with every details it needs.
* Composer will save our time by not `require_once` or `require` kind of stuffs above our class declaration.

#### Folder Structure.
* will push our source code into `src` directory. And will add psr-4 in our `composer.json` file
* PSR-4 is an autoloading standard which help us to load classes on bases of our directory structure.
Its simple to implement, add this line of code to composer.json file.
```js
{
    "autoload": {
        "psr-4": {
            "Coffer\\": "src/Coffer/"
        }
    }
}
```

Notes:
* Inside psr-4 in `Coffer\\` is a namespace and `src/Coffer/` is our directory.
* To escape first backward slash in namespace another backward slash is added like this `\\`.
* run `composer install` from cli.

#### Its code time!!!
* Refer `BankAccount` class where we have inject Account Number as a dependency by a contract(Interface)
* When i say `Contract` it simple means `Interface`. You will get more clarity in next chapter.
* Contract restrict classes to follow those rules which are laid down in contract.
* That means only those classes will be accepted who follow `BankAccountNumberContract`.
* This is a kind of security layer over `BankAccount` because its not bank account class responsibility to check
whether account number is valid or not! It must get valid account number to process.

#### Congrats if you understood above 5 points then you are able to understand Single Responsibility, Liskov Substitution and Dependency Injection Principle!
SOLID principle, we will not go deep right now but will talk about
'S' which stand for [Single Responsibility](https://en.wikipedia.org/wiki/Single_responsibility_principle) and
'L' which stand for [liskov substitution](https://en.wikipedia.org/wiki/Liskov_substitution_principle).

* We made a contract `BankAccountNumberContract` which ever class implement this contact can be injected into
`BankAccount` class. This is what we call liskov substitution principle. Because we have not hard coded
`BankAccountNumber` as dependency for `BankAccount` keeping future scenario in mind.
* Future scenario is suppose in other country do not have same digits of account number and few more validations are
different as compare to us.
In this case we just need to create a class by giving country as a namespace and implement `BankAccountNumberContract`.

#### Exception
* Yes we should use exception, and i think exception is not so difficult to understand.
* We created a class for `InvalidBankAccountNumber` when ever invalid account number is provided while
instantiating `BankAccount` class `InvalidBankAccountNumber` exception will be thrown.

Note: 

* Repository is in development mode, more things can be added for more clarity.
* Contribute to make more clear understanding of programming concept and topic listed above.
* You can add your own topics if you need such as design patterns, but make sure example should be related to banking.

