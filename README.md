<span>&#x1f1ee;&#x1f1e9;</span>
# Laravel Online Pajak Integration

This project aims to integrate Laravel with the Online Pajak API for seamless tax calculation and reporting.

## Requirement
- PHP 8.1 or higher
- Laravel 10.x or higher
- API key from Online Pajak

## Guide
Note: This is work in progress, no composer package is available yet.

1. [App/Services/OnlinePajakService.php](App/Services/OnlinePajakService.php) is the core
2. See example usage to create invoice with tax invoice (e-faktur) in [App/Console/Commands/OnlinePajak/CreateTaxInvoice.php](App/Console/Commands/OnlinePajak/CreateTaxInvoice.php)
3. Input your API key in `.env` file:
```
ONLINEPAJAK_API_KEY=YOURAPIKEY
```
4. For testing purpose, ensure your environment **IS NOT SET to "production"**

# Resources
- [Online Pajak Developer Portal](https://developer.online-pajak.com/)
- [Online Pajak API Documentation](https://developer.online-pajak.com/docs/api-documentation/c53add3c8b16f-getting-started)

# Copyright notice
This repository is not affiliated with or endorsed by Online Pajak.
