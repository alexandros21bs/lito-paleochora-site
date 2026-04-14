# Lito Apartments Paleochora Landing Page

Static, mobile-first bilingual (Greek/English) landing page with a simple PHP contact form.

## Stack

- HTML5 (semantic)
- CSS3 (custom, no framework)
- Vanilla JavaScript
- PHP (contact form handler)

## Features

- Premium, lightweight hotel-style layout
- Fast-loading static frontend
- Greek/English language toggle using JavaScript
- Mobile hamburger menu
- Sticky mobile CTA bar (Call / WhatsApp / Request)
- Full-width hero image with overlay content and CTA buttons
- Contact-focused funnel (no booking engine)
- Room request buttons that preselect room category in the contact form

## Contact Placeholders

- Phone: +30 697 302 8371
- Second phone: +30 28230 41334
- Email: litopal@yahoo.gr
- WhatsApp: https://wa.me/306973028371
- Map: https://maps.google.com/?q=Paleochora%20Crete

## File Structure

- index.html
- thanks.html
- contact.php
- assets/css/style.css
- assets/js/main.js

## Deploy (DirectAdmin / Hostinger)

1. Upload all files/folders to `public_html`.
2. Ensure PHP is enabled (default in most shared hosting plans).
3. Test `index.html`, submit form, and verify redirect to `thanks.html`.
4. If emails are not delivered, configure server mail settings or update `contact.php` to use SMTP.

## Notes

- Update image placeholders in `assets/images` with optimized JPEG files.
- Keep image sizes compressed for best performance.
- If your host blocks `mail()`, use PHPMailer with SMTP credentials.
# Lito Apartments Paleochora

Static bilingual landing page for direct stay requests.

## Stack
- HTML
- CSS
- Vanilla JS
- PHP contact form

## Local preview
Use VS Code Live Server for `index.html`.

## Production
Upload all files to DirectAdmin or Hostinger inside `public_html`.

## Notes
- Replace images in `assets/images/`
- Update `contact.php` email settings
- Update phone numbers / map links if needed