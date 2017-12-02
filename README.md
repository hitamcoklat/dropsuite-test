# My Dropsuite Test

## About
This application can inform you about your directories and subdirectories and return the content with the number of the files.
For example if there are 4 files with content “abcdef” and 5 files with content “abcd” then the return value is: **abcd 5**

By default, the directories structure shown like below:
```sh
.
├── A
│   └── content2
├── B
│   ├── content1
│   └── D
│       ├── content3
│       └── diff
├── content1
└── index.php

```
every file has their own value.

## Installation

This application tested on PHP Version 7. If you want to run this just clone this repo
```sh
git clone https://github.com/hitamcoklat/dropsuite-test.git
```
and run on your local machine on **http://127.0.0.1/dropsuite-test** or **http://localhost/dropsuite-test**