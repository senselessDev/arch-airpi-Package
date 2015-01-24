# Maintainer: senselessDev <mikrocontroller@arcor.de>
pkgname=airpi
pkgver=0.2
pkgrel=1
pkgdesc="collection of tools to run your Raspberry Pi as a Low-Cost-FullHD-FPV-Camera"
arch=(armv6h)
url="http://fpv-community.de/showthread.php?46646-Low-Cost-HD-Video-%DCbertragung-Telemetrie"
license=('GPLv3')
depends=('dhcpcd' 'nginx' 'php-fpm' 'gstreamer' 'gst-plugins-good' 'gst-plugins-bad' 'avahi' 'nss-mdns')
install=airpi.install

package() {
	#avahi configuration
	install -D -m644 "$srcdir/airpi.service" "$pkgdir/etc/avahi/services/airpi.service";

	#systemctl configuration
	install -D -m644 "$srcdir/50-airpi.preset" "$pkgdir/usr/lib/systemd/system-preset/50-airpi.preset";	

	#webinterface php files
	mkdir -p "$pkgdir/usr/share/nginx/html/";
	cp -rp "$srcdir/www-data/" "$pkgdir/usr/share/nginx/html/";  
	
	#nginx configuration
	install -D -m644 "$srcdir/nginx.conf" "$pkgdir/etc/nginx/nginx.conf.hidden";
}	
