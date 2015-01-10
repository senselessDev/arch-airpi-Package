# arch-airPi-Package

This repository contains everything to make an Arch-package that contains the configuration for turning your Raspberry Pi into a LowCost-FullHD-Digital-FPV-Transmitter (http://fpv-community.de/showthread.php?46646-Low-Cost-HD-Video-%DCbertragung-Telemetrie)

## how to use
#### making your own package 
You can simply create the package by typing `makepkg` while being in the folder where the PKGBUILD-file is placed.

If you want to install the required dependencies, add the option `-s`.

If you want to install the package directly, add the option `-i`, or otherwise you have to invoke pacman to install it, for example with `pacman -U airPi-0.1-1-armv6h.pkg.tar.xz`.

#### using a prebuild package

You can also use this prebuild one: https://gist.github.com/senselessDev/879f895014fab8af5b11/raw/89d17188a64bea3412ea8d206f54ffc829d56788/aiPi-0.1-1-armv6h.pkg.tar.xz

Installation can be done by invoking `pacman` with the `-U` option, for example with `pacman -U airPi-0.1-1-armv6h.pkg.tar.xz`.

## content

The package installs and configures the following packages properly: 
* avahi
* nginx
* php
* php-fpm
* gstreamer
* gst-plugins-good
* gst-plugins-bad
* nss-mdns

Besides, the webinterface to configure the GStreamer-Pipelines is included. It was not programmed by myself but is freely available on github: https://github.com/sledge-fpv/airpi-control


