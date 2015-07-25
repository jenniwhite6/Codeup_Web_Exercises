Internet
====================
+ client = browser
+ can get information for us
+ DNS converts domain name to IP address
+ (like call: Tim --> actually calls his #)
+ server responds with data and a status code (e.g. 404)

IP addresses
====================
+ Private vs. public (either way, provided by internet service provider)

+ Static vs. dynamic (stays the same every day vs. changes every couple of days)

+ Internet service providers only has so many IPs to go around

+ For any hosting, you'll need a static IP so that it can be targeted

+ One server can host multiple sites off the same IP (like our etc/hosts file)

Hosting
====================
+ Dedicated vs. shared (your own server/IP address vs. multiple sites along with yours at the same IP address)

Local host
====================
+ 127.0.0.1 for EVERY computer

Mac vs. Vagrant Box
====================
+ Mac
git AND vagrant commands
edit files
browser
etc/hosts
~/vagrant-lamp/ (maintains a copy of vagrant files)

+ Vagrant (VM)
web server, running Ubuntu
called a virtual machine because it's virtuzalizing HARDWARE, not just software (e.g. run a Windows VM within a Mac laptop --> within that Windows VM, appears as if there's another PHYSICAL computer running the OS, even though there's NOT. even pretends that there's a different chip architecture!)

WITHIN Vagrant Box: vagrant@codeup-trusty:/vagrant$
Within vagrant folder on Mac: Jennis-MacBook-Air:vagrant-lamp jenniwhite$

PHP
====================
+ Run PHP commands WITHIN vargrant box.

php -a --> interactive mode enabled

REPL:

Read
Eval
Print
Loop

+ \n = escape character

+ . PHP_EOL <--- creates a new line in PHP REPL
+ . PHP_EOL is a constant that adjusts for server OS (Windows doesn't deal well with "\n", for example)

+ in PHP, echo is like console log

+ var_dump = like echo + data type held by the echo
MUST use var_dump to echo arrays,objects
can use plain ol' echo ONLY for strings, ints

+ variable is defined by a $, while constants are defined WITHOUT $ (so, when echoing a variable, must say $+variable name)

+ echo false --> nothing shows up on the screen (don't want to spit out 'false' on the screen if we're GETting data)

PHP Arrays are DIFFERENT
====================
indexes don't have to be integers
--> they can be strings! (can be defined using hash rockets => ) = 'associative array'

PHP Functions
====================

Have their own scope - can't see anything outside of themselves! Very myopic

SO, must pass parameters ALWAYS





