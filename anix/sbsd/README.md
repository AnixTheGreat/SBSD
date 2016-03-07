# Simple Board Starting Date extension

[![Build Status](https://travis-ci.org/anix/sbsd.svg?branch=master)](https://travis-ci.org/anix/sbsd)

## Install

1. Download the latest release.
2. Unzip the downloaded release, and change the name of the folder to `sbsd`.
3. In the `ext` directory of your phpBB board, create a new directory named `anix` (if it does not already exist).
4. Copy the `sbsd` folder to `/ext/anix/` (if done correctly, you'll have the main extension class at (your forum root)/ext/anix/sbsd/composer.json).
5. Navigate in the ACP to `Customise -> Manage extensions`.
6. Look for `Your post count` under the Disabled Extensions list, and click its `Enable` link.

## Uninstall

1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Your post count` under the Enabled Extensions list, and click its `Disable` link.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/anix/sbsd` folder.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)
