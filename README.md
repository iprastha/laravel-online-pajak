# Laravel Online Pajak Integration

This project aims to integrate Laravel with the Online Pajak API for seamless tax calculation and reporting.

## Requirement
- PHP 8.1 or higher
- Laravel 10.x or higher
- API key from Online Pajak

## Guide
Note: This is work in progress, no composer package is available yet.

1. App\Service\OnlinePajakService.php is the core
2. See example usage to create invoice with tax invoice (e-faktur) in App\Console\Commands\OnlinePajak\CreateTaxInvoice.**php**
3. Input your API key in .env file
4. For testing purpose, ensure your environment IS NOT SET to "production"



# MIT License
Copyright (c) 2024 Indra Prastha

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
