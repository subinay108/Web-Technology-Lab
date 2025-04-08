# Code Examples

## Email validation filter in PHP
```php
<?php
    $email = "test@example.com";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid email";
    } else {
        echo "Invalid email";
    }
?>
```

## URL sanitization filter in PHP

```php
<?php
    $url = "https://example.com";
    echo filter_var($url, FILTER_SANITIZE_URL);
?>
```

## Custom filter in PHP

```php
<?php
    $options = array(
    "options" => array(
        "min_range" => 1,
        "max_range" => 100
    )
    );
    $age = filter_var(25, FILTER_VALIDATE_INT, $options);
?>
```