<?php
/**
 * Server-side device detection and redirect for VaekstNet App
 */

$userAgent = $_SERVER['HTTP_USER_AGENT'];

$iosUrl = 'https://apps.apple.com/dk/app/vaekst/id6754325482?l=da';
$androidUrl = 'https://play.google.com/store/apps/details?id=com.vaekst.app';
$fallbackUrl = 'https://vaekstnet.com/download/';

// Check for iOS (iPhone, iPad, iPod)
if (preg_match('/iPhone|iPod|iPad/i', $userAgent)) {
    header("Location: " . $iosUrl, true, 302);
    exit();
} 
// Check for Android
elseif (preg_match('/Android/i', $userAgent)) {
    header("Location: " . $androidUrl, true, 302);
    exit();
} 
// Fallback for all other devices (Windows, Mac, etc.)
else {
    header("Location: " . $fallbackUrl, true, 302);
    exit();
}
