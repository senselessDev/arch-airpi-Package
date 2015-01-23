# arch-airpi-Package

This repository contains everything to make an Arch-package that contains the configuration for turning your Raspberry Pi into a LowCost-FullHD-Digital-FPV-Transmitter. German discussion on the topic is available [here](http://fpv-community.de/showthread.php?46646-Low-Cost-HD-Video-%DCbertragung-Telemetrie).

## how to use
#### using a prebuild package (preferred)

You can use my [arch-airpi-Repo](https://github.com/senselessDev/arch-airpi-Repo) to get a prebuild package. The README there contains a short howto. 

It is the preferred way of getting the package, because it is easy to get updates, even if you are not familiar with `git` and `makepkg`. 

#### making your own package (for experienced users)
You can simply create the package yourself if you have cloned this repo on to your Raspberry Pi. By typing `makepkg` while being in the folder where the PKGBUILD-file is placed, all required steps for building the package are done. 

If you want to install the required dependencies, add the option `-s`.

If you want to install the package directly, add the option `-i`, or otherwise you have to invoke `pacman` to install it, for example with `pacman -U airpi-0.1-1-armv6h.pkg.tar.xz`.


#### using a prebuild package without internet connection (not preferred)

If your Raspberry Pi is not connected to the internet in special cases, you can use the raw package out of my [arch-airpi-Repo](https://github.com/senselessDev/arch-airpi-Repo). You have to get the `*.pkg.tar.xz` manually on to your Pi (e.g. USB storage)  and then install it directly, for example with `pacman -U airpi-0.1-1-armv6h.pkg.tar.xz`.

## content

The package installs and configures the following packages properly: 
* avahi
* dhcpcd
* gstreamer
* gst-plugins-good
* gst-plugins-bad
* nginx
* nss-mdns
* php 
* php-fpm

Besides, the webinterface to configure the GStreamer-Pipelines is included. It was not programmed by myself but is freely available on github: [sledge-fpv/airpi-control](https://github.com/sledge-fpv/airpi-control)


