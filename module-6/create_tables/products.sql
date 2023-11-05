CREATE TABLE `products` (
  `product_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(50) NOT NULL,
  `description` VARCHAR(500) NOT NULL,
  `price` VARCHAR(50) NOT NULL,

  `customer_id` BIGINT(20) UNSIGNED NOT NULL,
   FOREIGN KEY (`customer_id`) REFERENCES `customers`(`customer_id`) ON DELETE RESTRICT ON UPDATE CASCADE,

   `category_id` BIGINT(20) UNSIGNED NOT NULL,
    FOREIGN KEY (`category_id`) REFERENCES `categories`(`category_id`) ON DELETE RESTRICT ON UPDATE CASCADE
)