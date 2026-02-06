What you need to do:
1.	In your SiteGround File Manager (public_html folder), create a new file named app.php.
2.	Paste the following code into that file:

Next Step for Elementor: Set your QR code link to https://vaekstnet.com/app.php.


Critical Technical Notes
•	Caching: SiteGround uses "NGINX Direct Delivery" and "Dynamic Caching." If you use Method 2 (PHP), you may need to exclude app.php from the SiteGround Optimizer settings so it doesn't "remember" the first person's device and serve that same redirect to everyone else. Method 1 (.htaccess) is usually immune to this because it happens before the cache layer.
•	Permissions: Ensure the app.php file permissions are set to 644 (this is the default on SiteGround).
•	QR Code Update: Since your QR code is in the Elementor Nav Bar (Header Template), once you update the link in the template and hit Update, it will automatically apply to every page on your site.
