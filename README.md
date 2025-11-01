### 🛡️htmlspecialchars() – Prevent XSS Attacks in PHP

This project demonstrates how to use the htmlspecialchars() function in PHP to prevent Cross-Site Scripting (XSS) attacks. It’s a simple yet powerful example showing how proper input/output handling can protect your web applications from malicious script injections.
Cross-Site Scripting (XSS) is a common web vulnerability that allows attackers to inject malicious JavaScript code into web pages viewed by other users.
This can lead to: 

  - Cookie theft
  - Session hijacking
  - Data leaks
  - Defacement of websites

## What is htmlspecialchars() Function ?

htmlspecialchars() is a built-in PHP function that converts special HTML characters into their safe encoded equivalents — preventing browsers from interpreting them as actual HTML or JavaScript.

For Example

```php
<?php
$user_input = '<script>alert("XSS Attack!")</script>';
echo htmlspecialchars($user_input);
?>

```

#### Output :

```
&lt;script&gt;alert("XSS Attack!")&lt;/script&gt;

```

  Best Practices for Preventing XSS
  
  Always sanitize user input with htmlspecialchars() or htmlentities().
  
  Use prepared statements for database queries.
  
  Implement Content Security Policy (CSP) headers.
  
  Validate and escape all user-supplied data before rendering in HTML.

  Don't forget to follow me :
  [Youtube](https://youtube.com/@yossefibrahim2001)
