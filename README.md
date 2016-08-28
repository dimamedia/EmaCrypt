# EmaCrypt
Hide your emails from spammer's scanners and show them to your visitors naturally.

## How it works?

We want to put *demo@email.com* on the page. Normally we write this code: 

```<a href="mailto:demo@email.com">demo@email.com</a>```

And this is like serving a honey on the tray to the bear. So we try to confuse scanners by presenting email in forms that only human can understand. Like:

+ fisrtname.lastname@mail.com
+ demo (a) mail.com
+ demo at mail dot com
+ etc.

Let's make this in an other way. Put crypted email address in the source code and let JS decrypt it.

The code looks like this:

```<email val="ZCczbSc5QCczbWEnOGwuYyc5bQ==">some alternative text like demo at email dot com</email>```

and JS will change it to this:

```<email val="ZCczbSc5QCczbWEnOGwuYyc5bQ=="><a href="mailto:demo@email.com">demo@email.com</a></email>```

## What do you need?

Two files ```ajaxEmaCrypt.php```and ```jquery.emacrypt.js```. 

First, encrypt an email address:

```ajaxEmaCrypt.php?email=demo@email.com``` or using *demo.html*

You will get an address encrypted to this *ZCczbSc5QCczbWEnOGwuYyc5bQ==*.

Put it in *<email>* tag:

```<email val="ZCczbSc5QCczbWEnOGwuYyc5bQ=="></email>````

Or with an alternative text:

```<email val="ZCczbSc5QCczbWEnOGwuYyc5bQ==">demo at mail dot com</email>```

Put ```jquery.emacrypt.js``` after *jquery* library. It will in one second after page load scan all *<email>* tags and convert them to clickable and readable email address.

Check out the demo.html file.


