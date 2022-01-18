![Build Status](https://github.com/simplesamlphp/simplesamlphp-module-modinfo/workflows/CI/badge.svg?branch=master)
[![Coverage Status](https://codecov.io/gh/simplesamlphp/simplesamlphp-module-modinfo/branch/master/graph/badge.svg)](https://codecov.io/gh/simplesamlphp/simplesamlphp-module-modinfo)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/simplesamlphp/simplesamlphp-module-modinfo/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/simplesamlphp/simplesamlphp-module-modinfo/?branch=master)


*** Note ***
This module has been archived. All functionality is now part of the builtin admin-module.


modinfo module
==============

This module displays information on the currently installed modules and their status in the SimpleSAMLphp web interface.

Installation
------------

Once you have installed SimpleSAMLphp, installing this module is very simple. Just execute the following
command in the root of your SimpleSAMLphp installation:

```
composer.phar require simplesamlphp/simplesamlphp-module-modinfo:dev-master
```

where `dev-master` instructs Composer to install the `master` branch from the Git repository. See the
[releases](https://github.com/simplesamlphp/simplesamlphp-module-modinfo/releases) available if you
want to use a stable version of the module.

The module is enabled by default. If you want to disable the module once installed, you just need to create a file named
`disable` in the `modules/modinfo/` directory inside your SimpleSAMLphp installation.
